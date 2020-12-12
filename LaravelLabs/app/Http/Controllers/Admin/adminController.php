<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class adminController extends Controller
{
    public function  index(){
        return view('admin.AdminHomepage');
    }
}
