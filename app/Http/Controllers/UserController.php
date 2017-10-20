<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function adminView()
    {
       $users = [
           [    'id' => '1',
                'name' => 'Ivan',
                'email' => 'ivan@example.com',
                'city' => 'Odessa',
                'country' => 'Ukraine'
           ],
           [    'id' => '2',
               'name' => 'Alex',
               'email' => 'alex@example.com',
               'city' => 'Kiev',
               'country' => 'Ukraine'
           ],
           [    'id' => '3',
               'name' => 'Vadim',
               'email' => 'vadim@example.com',
               'city' => 'Vinnytsa',
               'country' => 'Ukraine'
           ]
       ];
        return view('admin.view', ['users' => $users]);
    }
}
