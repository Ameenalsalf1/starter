<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondContrller extends Controller
{
    //
    public function showString(){
        return 'Static String';
    }
}
