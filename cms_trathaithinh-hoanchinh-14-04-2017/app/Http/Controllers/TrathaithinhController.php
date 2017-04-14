<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Tests;

class TrathaithinhController extends Controller {

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
		
		$getListNewId3 = $contents->getListNewId3();
    	foreach ($getListNewId3 as $result) {
    		$data['newsId3'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
				
		
		$getListNewId4 = $contents->getListNewId4();
    	foreach ($getListNewId4 as $result) {
    		$data['newsId4'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListNewId5 = $contents->getListNewId5();
    	foreach ($getListNewId5 as $result) {
    		$data['newsId5'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListNewId6 = $contents->getListNewId6();
    	foreach ($getListNewId6 as $result) {
    		$data['newsId6'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListNewId7 = $contents->getListNewId7();
    	foreach ($getListNewId7 as $result) {
    		$data['newsId7'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListNewId8 = $contents->getListNewId8();
    	foreach ($getListNewId8 as $result) {
    		$data['newsId8'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListNewId9 = $contents->getListNewId9();
    	foreach ($getListNewId9 as $result) {
    		$data['newsId9'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListNewId10 = $contents->getListNewId10();
    	foreach ($getListNewId10 as $result) {
    		$data['newsId10'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListNewId11 = $contents->getListNewId11();
    	foreach ($getListNewId11 as $result) {
    		$data['newsId11'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListNewId12 = $contents->getListNewId12();
    	foreach ($getListNewId12 as $result) {
    		$data['newsId12'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListNewId13 = $contents->getListNewId13();
    	foreach ($getListNewId13 as $result) {
    		$data['newsId13'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListNewId14 = $contents->getListNewId14();
    	foreach ($getListNewId14 as $result) {
    		$data['newsId14'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListNewId15 = $contents->getListNewId15();
    	foreach ($getListNewId15 as $result) {
    		$data['newsId15'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListNewId16 = $contents->getListNewId16();
    	foreach ($getListNewId16 as $result) {
    		$data['newsId16'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
    	// $data['allNews'] = $contents->getListNews(); //when request get all data news//
    	
        return view('trathaithinh.index', $data);
    }

}
