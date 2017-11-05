<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;
use App\Tag;

class DashboardsController extends Controller
{
	public function which()
	{
		return Dashboard::find(1)->status;
	}

    public function create()
    {
    	$dash = Dashboard::find(1);
    	$dash->status = 0;
    	$dash->save();


    	$tag = Tag::where(['cpf' => ''])->first();
    	
    	return view('create', compact('tag'));
    }

    public function read()
    {
    	$dash = Dashboard::find(1);
    	$dash->status = 1;
    	$dash->save();
    	return view('read');
    }

    public function home()
    {
    	return view ('home');
    }
}
