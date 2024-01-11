<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboardRedirect(Request $request) {

        $url = '';

        if($request->user()->role === 'admin'){
            $url = '/admin';
        }elseif($request->user()->role === 'supervisor')
        {
            $url = '/supervisor';
        }else{
            $url = '/app';
        }
        
        return redirect($url);
    }

}
