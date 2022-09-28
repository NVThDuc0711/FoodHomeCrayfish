<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $infor =[
            'Name' =>'Destructor',
            'Family'=>'Albidus',
            

        ];
        return view('Products.index',compact('infor'));
    }

    public function about()
    {
        return view('Products.about');

    }
    public function details($id)
    {
        
        echo 'ID Product : '.$id;
        
    }
}
