<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\business_blog_post;
use Illuminate\Support\Facades\DB;
class b_blogpostcontroller extends Controller
{
    public function createblog(){

        return view('business.blog');
    }


    public function insertblog(Request $req){
      
        $business_blog_post= new business_blog_post;

      
         $business_blog_post->blog_title  =   $req->input('blog_title');
         $business_blog_post->blog_description   =  $req->input('blog_description');

//image_save
         if($req->hasfile('blog_image')){
            $file=$req->file('blog_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extension;
            $file->move('uploads/business_blog_post/',$filename);
            $business_blog_post->blog_image=$filename;
        }


        else{
            return $req;
            $business_blog_post->image = '';
        }


        $business_blog_post->save();

        return redirect('/business/blogpost');
        
    
}
}
