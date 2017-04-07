<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Tests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function index(){
    	$responsize = new Tests();
		
    	$tests = $responsize->get_tests();
		
    	$data = array(
    		'tests' => $tests
    	);
		
    	return view ('dangtrongpho.index', $data);
    }
}
