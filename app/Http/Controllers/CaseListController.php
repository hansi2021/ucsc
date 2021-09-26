<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseListController extends Controller
{
    public function index()
    {
        return view('admin.CaseList.index');
    }

}
