<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrivacyRequest;
use App\Models\Privacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivacyController extends Controller
{
    public function index()
    {
        return view('admin.privacy');
    }
    public function update(PrivacyRequest $req)
    {
        $privacy = Privacy::find(1);

        $privacy->privacy = $req->privacy;
        $privacy->save();
        return view('admin.privacy');
    }
}
