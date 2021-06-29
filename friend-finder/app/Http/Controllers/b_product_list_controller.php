<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\add_product;

class b_product_list_controller extends Controller
{
    public function list(){
        
        $data=add_product::all();
        return view('business.productlist',['add_products'=>$data]);
    }
}
