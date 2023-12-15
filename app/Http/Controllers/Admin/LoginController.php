<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\PostFormLogin;

class LoginController extends Controller
{
    public function index()
    {
        //hien thi giao dien cho nguoi dung
        return view("Login.index");
    }


    public function logout(Request $request)
    {
        $request->session()->forget("idUser");
        $request->session()->forget("roleIdUserAdmin");
        $request->session()->forget("emailUser");
        $request->session()->forget("usernameAdmin");
        return redirect()->route('admin.login');
    }

    public function login(PostFormLogin $request)
    {
        $username = $request->username;
        $password = $request->password;
        if (empty($username) || empty($password)) {
            // dieu huong chuyen trang ve lai giao dien dang nhap
            return redirect()->route("admin.login", ["state" => "error"]);
        } else {
            $user = Account::where([
                'username' => $username,
                'password' => $password,
                'role_id' => 1,
                'status' => 1
            ])->first();
            if ($user === null) {
                //dang nhap linh tinh
                $request->session()->flash("LoginFail", "Account invalid");
                return redirect()->route('admin.login', ['state' => 'failure']);
            } else {
                // dang nhap thanh cong
                $request->session()->put("idUser", $user->id);
                $request->session()->put("roleIdUserAdmin", $user->role_id);
                $request->session()->put("emailUser", $user->email);
                $request->session()->put("usernameAdmin", $user->username);
                return redirect()->route("admin.dashboard");
            }
        }
    }
}
