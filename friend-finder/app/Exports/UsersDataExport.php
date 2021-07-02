<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follow;
use App\Models\Following;
use App\Models\Post;
use App\Models\Req;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class UsersDataExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }
}
