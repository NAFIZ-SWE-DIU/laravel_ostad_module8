<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = "75";

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

        $response = new Response($data);
        $response->cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        return $response;
    }
}