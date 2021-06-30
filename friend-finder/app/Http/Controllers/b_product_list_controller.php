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

    public function delete($id , Request $req){
      
        $data=add_product::find($id);
        $data->delete();

        $req->session()->flash('message', 'deleted!');
        return redirect('/business/product/list');


    }

    public function showdata($id){

        $data=add_product::find($id);
        return view('business.productedit',['data'=>$data]);
    }

    public function update_data(Request $req){
        $data=add_product::find($req->id);
        $data->product_name= $req->product_name;
        $data->price= $req->price;
        $data->description= $req->description;
        $data->save();
        return redirect('/business/product/list');



}
}
