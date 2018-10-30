<?php

namespace App\Http\Controllers;

use App\Principal_page;
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

    function actualizar(Request $request){
        try{
            $Pp = Principal_page::where('idUsuario','=',13)->first();

            $Pp->telefono = $request->head->telefono;
            $Pp->horario = $request->head->horario;
            $Pp->FSC1title = $request->firstsection->caption1->title;
            $Pp->FSC1content = $request->firstsection->caption1->content;
            $Pp->FSC1image = 'not';
            $Pp->FSC2title = $request->firstsection->caption2->title;
            $Pp->FSC2content = $request->firstsection->caption2->content;
            $Pp->FSC2image = 'not';
            $Pp->FSC3title = $request->firstsection->caption3->title;
            $Pp->FSC3content = $request->firstsection->caption3->content;
            $Pp->FSC3image = 'not';
            $Pp->FSC4title = $request->firstsection->caption4->title;
            $Pp->FSC4content = $request->firstsection->caption4->content;
            $Pp->FSC4image = 'not';
            $Pp->FSC5title = $request->firstsection->caption5->title;
            $Pp->FSC5content = $request->firstsection->caption5->content;
            $Pp->FSC5image = 'not';
            $Pp->SSempresa = $request->secondsection->empresa;
            $Pp->SSmensaje = $request->secondsection->mensaje;
            $Pp->TSservice1 = $request->thirdsection->servicio1;
            $Pp->TSservice2 = $request->thirdsection->servicio2;
            $Pp->TSservice3 = $request->thirdsection->servicio3;
            $Pp->TSservice4 = $request->thirdsection->servicio4;
            $Pp->TSimage = 'not';

            $Pp->save();

            return Response::json(['code' => 200, 'msg' => 'Actualizado Correctamente']);
        }catch (Exception $e){
            return Response::json(['code' => 200, 'msg' => $e->getMessage()]);
        }

    }
}
