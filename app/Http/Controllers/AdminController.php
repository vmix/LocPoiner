<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // просмотр всех доступных действий для админа
        // добавил строку для теста php-ci
        return view('admin.index');
    }
}
