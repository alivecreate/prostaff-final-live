<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.pages.auth.login');
    }

    public function checkAuth(Request $request){
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)
                ->where('password', $password)
                ->get();

        // return $data[0];

        if($data->isNotEmpty()){
            $request->session()->put('userData', $data[0]);
            return redirect()->route('admin.index')->with('success', 'Login Successfully.');
        }
        else{
            
            return redirect()->back()->with('fail', 'Invalid Email and Password');
        }

        
    }
    
    public function logout(Request $request){
        $request->session()->forget('userData');
        return redirect()->route('login')->with('success', 'Successfully Loged Out'); 
    }
    

}
