<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\add_product;

class b_post_controller extends Controller
{
    public function create_post(){
        return view('business.postcreation');
    }

    public function insert_post(Request $req){
     
        
         $add_product= new add_product;
         $add_product->product_name=$req->product_name;
         $add_product->price=$req->price;
         $add_product->description=$req->description;
         $add_product->save();
         

         if (DB::table('add_products')->insert([
            
        //  "product_name" => $add_product->product_name,
        //  "price" => $add_product->price,
        //  "description" => $add_product->description,

        ])) {
            $req->session()->flash('msg', 'successful added');
            return view('business.postcreation');
        } else {
            $req->session()->flash('msg', 'UNsuccessful!');
          
            return view('business.postcreation');
        }
       


      

    }
}
