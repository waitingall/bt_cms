<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Tests;

class NguyenminhthongController extends Controller {

    public function index() {
	
		$responsize = new Tests();
		
		$tests = $responsize->get_tests();
	
    	$data = array(
    		'tests' => $tests
    	); 
        return view('nguyenminhthong.index', $data);
    }

}
