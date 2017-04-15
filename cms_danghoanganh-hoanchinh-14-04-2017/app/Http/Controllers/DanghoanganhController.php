<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Tests;

class DanghoanganhController extends Controller {

    public function index() {

    	$contents = new Tests();
    	
    	$getListTestId1 = $contents->getListTestId1();
    	foreach ($getListTestId1 as $result) {
    		$data['testId1'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,
    		);
    	}

    	$getListTestId2 = $contents->getListTestId2();
    	foreach ($getListTestId2 as $result) {
    		$data['testId2'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		
		$getListTestId3 = $contents->getListTestId3();
    	foreach ($getListTestId3 as $result) {
    		$data['testId3'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListTestId4 = $contents->getListTestId4();
    	foreach ($getListTestId4 as $result) {
    		$data['testId4'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListTestId5 = $contents->getListTestId5();
    	foreach ($getListTestId5 as $result) {
    		$data['testId5'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListTestId6 = $contents->getListTestId6();
    	foreach ($getListTestId6 as $result) {
    		$data['testId6'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListTestId7 = $contents->getListTestId7();
    	foreach ($getListTestId7 as $result) {
    		$data['testId7'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListTestId8 = $contents->getListTestId8();
    	foreach ($getListTestId8 as $result) {
    		$data['testId8'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		$getListTestId9 = $contents->getListTestId9();
    	foreach ($getListTestId9 as $result) {
    		$data['testId9'] = array(
    			'id' => $result->id,
    			'name' => $result->name,
    			'description' => $result->description,
    			'images'	=> $result->images,

    		);
    	}
		

    	
        return view('danghoanganh.index', $data);
    }

}
