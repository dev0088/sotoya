<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function test(){
        $data['users']=User::paginate(8);
        return view ('latest_news.index', $data);
    }
}
