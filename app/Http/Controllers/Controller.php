<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

abstract class Controller
{
    /** */
    
    
    public function index(){

    }
    
    
    public function store (Request $request){

    }

    public function show(string $id){
        
    }


    public function update(Request $request, string $id ){

    }

    public function destroy(string $id){

    }
}
