<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function getUserForm(Request $request){
        try{
            if($request->cookie('Mbnay-logged') != null){
                return view('admin.users');
            }
            else{
                return view('vendor.adminlte.auth.login');
            }
        }catch (Exception $e){
            return view('vendor.adminlte.500');
        }
    }
}
