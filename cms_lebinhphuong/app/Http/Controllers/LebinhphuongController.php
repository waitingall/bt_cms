<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Tests;

class LebinhphuongController extends Controller {

	public function index() {

    	$obj = new Tests();

    	$tests = $obj->get_tests();

    	$data = array(
    		'tests' => $tests
    	);

    	return view('lebinhphuong.index', $data);
    }
}
