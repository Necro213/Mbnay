<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    //

    public function page1(){
        #$layout = 'tasty-master';
        #$layout = 'coffe-master';
        #$layout = 'justice';
        $layout = 'business';
        #return view('welcome',["layout"=>$layout]);
        $logged = true;
        return view('welcome',["layout"=>$layout, "logged" => $logged]);
    }
    public function page2(){
        #$layout = 'tasty-master';
        #$layout = 'coffe-master';
        $layout = 'justice';
        #$layout = 'business';
        #return view('welcome',["layout"=>$layout]);
        return view('page2',["layout"=>$layout]);
    }

    public function page3(){
        #$layout = 'tasty-master';
        #$layout = 'coffe-master';
        #$layout = 'justice';
        $layout = 'business';
        #return view('welcome',["layout"=>$layout]);
        return view('page3',["layout"=>$layout]);
    }

    public function page4(){
        #$layout = 'tasty-master';
        #$layout = 'coffe-master';
        #$layout = 'justice';
        $layout = 'business';
        #return view('welcome',["layout"=>$layout]);
        return view('page4',["layout"=>$layout]);
    }

    public function page5(){
        #$layout = 'tasty-master';
        #$layout = 'coffe-master';
        #$layout = 'justice';
        $layout = 'business';
        #return view('welcome',["layout"=>$layout]);
        return view('page5',["layout"=>$layout]);
    }

    public function page6(){
        #$layout = 'tasty-master';
        #$layout = 'coffe-master';
        #$layout = 'justice';
        $layout = 'business';
        #return view('welcome',["layout"=>$layout]);
        return view('page6',["layout"=>$layout]);
    }


}
