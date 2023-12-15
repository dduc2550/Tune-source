<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    public function handle($request, Closure $next)
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (Authenticate::check()) {
            // Nếu đã đăng nhập, cho phép tiếp tục xử lý request
            return $next($request);
        }

        // Nếu chưa đăng nhập, bạn có thể chuyển hướng hoặc thực hiện các hành động khác
        // Ở đây, tôi sẽ chuyển hướng về trang đăng nhập
        return redirect()->route('login')->with('error', 'You need to login to download.');
    }
}
