<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\PostFormLogin;

class LoginuserController extends Controller
{

    public function index(PostFormLogin $request)
    {
        $username = $request->username;
        $password = $request->password;

        if (empty($username) || empty($password)) {
            // Chuyển hướng trở lại trang đăng nhập với thông báo lỗi
            return redirect()->route("user.login", ["state" => "error"]);
        } else {
            // Thực hiện xác thực
            $user = Account::where([
                'username' => $username,
                'password' => $password,
                'role_id' => 2, // Thay đổi role_id tại đây
                'status' => 1
            ])->first();

            if ($user === null) {
                // Đăng nhập thất bại
                $request->session()->flash("loginFail", "Account invalid");
                return redirect()->route('login', ['state' => 'failure']);
            } else {
                // Đăng nhập thành công
                $request->session()->put("idUser", $user->id);
                $request->session()->put("roleIdUser", $user->role_id);
                $request->session()->put("emailUser", $user->email);
                $request->session()->put("username", $user->username);
                return redirect()->route("albums.index");
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget("idUser");
        $request->session()->forget("roleIdUser");
        $request->session()->forget("emailUser");
        $request->session()->forget("username");
        return redirect()->route('login');
    }
}
