<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'id', 'full_name', 'email_id', 'phone_1', 'gender', 'email_verified_at', 'password', 'status', 
        'remember_token', 'created_by', 'created_at', 'updated_by', 'updated_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    function checkLoginDetails($data){
        $result = DB::table($this->table)
            ->where('phone_1', $data['phone_1'])
            ->where('status', $data['status'])
            ->first();    

        if (!$result || !Hash::check($data['password'], $result->password)) {
            return ['status' => 'warning', 'message' => 'Phone number or password incorrect!'];
        }

        return array('status' => 'success', 'data' => $result);
    }

    static function details($param = []){
        $query = DB::table('users as u');
        $query->leftjoin('users as u1', 'u.created_by', '=', 'u1.id');
        $query->select(DB::raw("u.id, u.full_name, u.email_id, u.phone_1, u.status,
            date_format(u.created_at,'%d-%m-%Y') as created_at,
            ifnull(u1.full_name,'') as created_by
        "));

        if(isset($param['status']) && (in_array($param['status'], [0, 1]))){
            $query->where('u.status', $param['status']);
        }
        
        $total_count = $query->count();
        if(isset($param['limit']) && isset($param['offset'])){
             $query->limit($param['limit'])->offset($param['offset']);
        }
        $query->orderBy('u.id', 'desc');
        $result = $query->get();

        return array('total_count' => $total_count, 'data' => $result);
    }

    // REMOVED: saveUserBrowserDetails method to stop looking for non-existent table
}