<?php

namespace App\Http\Controllers;

use App\Models\data_pagination;
use Illuminate\Http\Request;

class data_paginationController extends Controller
{
    public function index(){
        $datas = data_pagination::orderBy('name','asc')->paginate(50);

        return view('data',compact('datas'));
    }
}
