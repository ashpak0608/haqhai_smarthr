<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class State extends Model
{
    use SoftDeletes;

    protected $table = 'states';
    protected $fillable = ['state_name', 'status', 'created_by', 'updated_by'];

    public static function getList($param = [])
    {
        $query = self::query();

        if (!empty($param['search'])) {
            $query->where('state_name', 'like', '%' . $param['search'] . '%');
        }

        return $query->orderBy('id', 'desc')->paginate($param['limit'] ?? 10);
    }

    public function saveData($data)
    {
        if (isset($data['id']) && !empty($data['id'])) {
            $state = self::find($data['id']);
            $data['updated_by'] = Session::get('id');
            $state->update($data);
            return ['status' => 'success', 'message' => 'State updated successfully!'];
        } else {
            $data['created_by'] = Session::get('id');
            self::create($data);
            return ['status' => 'success', 'message' => 'State added successfully!'];
        }
    }
}