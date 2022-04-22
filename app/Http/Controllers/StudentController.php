<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function user(){
        return redirect()->route('profile',['name'=>'Alamin','age'=>'30']);
    }

    public function create(){
        echo "Hello Create";
    }
    public function read(){
        echo "Hello read";
    }
    public function update(Request $r){
        echo route('update',$r->id);
    }
    public function delete($id){
        echo "Hello delete";
    }
}
