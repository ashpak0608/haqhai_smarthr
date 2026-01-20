<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller {

  public function index() {
    // This variable 'login' is used by the layout to hide sidebars
    $data['page'] = "login"; 
    $data['title'] = "Login || HAQHAI";
    return view('login', $data);
}

    public function loginCheck(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'phone_1' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'message' => $validator->errors()]);
            }

            $credentials = [
                'phone_1' => $request->phone_1,
                'password' => $request->password,
                'status'  => 0
            ];

            $objUser = new User();
            $result = $objUser->checkLoginDetails($credentials);
            
            if ($result['status'] == 'success') {
                $userDetails = $result['data'];

                if (Auth::attempt(['phone_1' => $request->phone_1, 'password' => $request->password, 'status' => 0])) {
                    
                    Session::put('id', $userDetails->id);
                    Session::put('full_name', $userDetails->full_name);
                    Session::put('email_id', $userDetails->email_id);
                    
                    // REMOVED: saveUserBrowserDetails call that caused the database error
                    
                    return response()->json(['status' => 'success', 'message' => 'Login Successfully']);
                }
            }

            return response()->json(['status' => 'warning', 'message' => 'Invalid phone number/password entered.']);

        } catch (\Throwable $e) {
            return response()->json(['status' => 'warning', 'message' => $e->getMessage()]);
        }
    }

public function logout() {
    Auth::logout();
    Session::flush();
    return redirect('/'); // This will now trigger the 'bg-white' and 'no-sidebar' logic
}
}