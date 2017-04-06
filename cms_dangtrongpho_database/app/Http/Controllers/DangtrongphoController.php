<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\Tests;

class DangtrongphoController extends Controller {

    public function index() {
		
		$responsize = new Tests();
		
    	$tests = $responsize->getList();
		
    	$data = array(
    		'listData' => $tests
    	);
		
        return view('dangtrongpho.index', $data);
    }

}
