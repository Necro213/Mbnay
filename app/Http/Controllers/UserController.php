<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function getUsers(){


            $users = User::all();


        return Datatables::of(collect($users))->make(true);

    }

    public function Registrar(Request $request){
        try{
            $user = User::create([
                'nombre' => $request->nombre,
                'ape_paterno' => $request->ape_pat,
                'ape_materno' => $request->ape_mat,
                'email' => $request->email,
                'password' => bcrypt($request->pass),
                'apikey' => 1
            ]);

            $user->apikey = bcrypt($user->id);
            $user->save();

            $respuesta = ['code' => 200, 'msg' => 'Usuario creado correctamente'];
        }catch (Exception $e){
            $respuesta = ['code' => 500, 'msg' => $e->getMessage()];
        }

        return Response::json($respuesta);
    }

    public function doLogin(Request $request){
        try{
            $cookie = null;
            $us = User::where('email','=',$request->email)->first();

                if ($us != null) {
                    if (Hash::check($request->pass, $us->password)) {
                        $datos = ['apikey' => $us->apikey];
                        $cookie = Cookie::make('Mbnay-logged',$us->apikey,180);
                        $respuesta = ["code" => 200, "msg" => $us->nombre];
                        return Response::json($respuesta)->withCookie($cookie);
                    } else {
                        $respuesta = ["code" => 404, "msg" => "usuario o contraseña incorrectos"];
                    }
                } else {
                    $respuesta = ["code" => 404, "msg" => "usuario o contraseña incorrectos"];
                }
            } catch (Exception $e) {
                $respuesta = ["code" => 500, "msg" => $e->getMessage(), "message" => "error"];
            }
            return Response::json($respuesta);
    }
}
