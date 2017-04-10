<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Tests;

class LemyhoangvuController extends Controller {

    public function index() {

    	$contents = new Tests();
    	$getListContents = $contents->getListContents();
    	foreach ($getListContents as $result) {
    		$data['contents'] = array(
    			'id' => $result->id,
    			'title' => $result->title,
    			'description' => $result->description,
    			'images'	=> $result->images,
    			'number'	=> $result->number, 
    			'url'	=> $result->url, 
    		);
    	}


    	$getListNewId1 = $contents->getListNewId1();
    	foreach ($getListNewId1 as $result) {
    		$data['newsId1'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,
    		);
    	}

    	$getListNewId2 = $contents->getListNewId2();
    	foreach ($getListNewId2 as $result) {
    		$data['newsId2'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}


    	// $data['allNews'] = $contents->getListNews(); //when request get all data news//
    	
        return view('lemyhoangvu.index', $data);
    }

}
