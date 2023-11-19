<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "25";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        setcookie($cookieName, $cookieValue, time() + ($minutes * 60), $path, $domain, $secure, $httpOnly);

        return response($data)->cookie($cookieName, $cookieValue, $minutes)->setStatusCode(200);
    }
}
