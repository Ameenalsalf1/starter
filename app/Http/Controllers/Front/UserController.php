<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function showUserName()
        {
            return 'Ameen Alsalf';
        }
    

        public function getIndex()
        {
            return view('Welcome');
        }

}
