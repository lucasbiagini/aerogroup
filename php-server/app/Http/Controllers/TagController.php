<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function create (Request $request)
    {
    	/*$this->validate($request, [
    		'rfid' => 'required'
    	]);*/
    	$tag = Tag::create([
    		'rfid' => $request->tag,
    		'status' => false,
    		'cpf' => ''
    	]);
    	return $tag;
    }

    public function editCpf(Request $request)
    {
    	$tag = Tag::where(['rfid' => $request->tag])->first();
    	$tag->cpf = $request->cpf;
    	$tag->save();
    	return redirect('read');
    }

    public function read (Request $request)
    {
  		//return json_encode($request->tag);
    	$tag = Tag::where(['rfid' => $request->tag])->first();
    	if (!isset($tag)) return 0;
    	return $tag->status;
    }

    public function checkout (Request $request)
    {
    	$tag = Tag::where(['rfid' => $request->tag])->first();
    	$tag->status = 1;
    	$tag->save();
    	return $tag;
    }

    public function cpf (Request $request)
    {
    	$tag = Tag::where(['cpf' => $request->cpf])->first();
    	return $tag->rfid;
    }

    public function rfid (Request $request)
    {
    	$tag = Tag::where(['rfid' => $request->rfid])->first();
    	return $tag->cpf;
    }
}
