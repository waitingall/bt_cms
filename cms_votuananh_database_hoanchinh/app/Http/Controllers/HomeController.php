<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Mainmodel;

class HomeController extends Controller {

    public function index() {


    	$responsize = new Mainmodel();

    	/////////////PHO///////////////////
    	$getListDate = $responsize->getListDatePho();  ////PHỔ
    	$listBlogThien = $responsize->getListBlogThien(6);////THIỆN
    	$listBulidQuang = $responsize->getListBulidQuang();////QUANG
    	$listBlogManh = $responsize->getListBlogManh();////MANH
    	$listBlogHung = $responsize->getListBlogHung();////ANH HÙNG
    	$listGalleryTuananh = $responsize->getListGalleryTuananh();////TUẤN ANH
    	$listBlogSang = $responsize->getListBlogSang();////SÁNG
        $listBlogHai = $responsize->getListBlogHai();////HAI
         $listMenuThong = $responsize->getListMenuThong();////THONG

    	

    	$getListLocation = $responsize->getListLocationPho(1);////PHỔ
    	foreach ($getListLocation as $getListLocations){
    		$data['location'] = array(
    		'location_id' => $getListLocations->location_id,
    		'title' => $getListLocations->location_title,
    		'times' => $getListLocations->location_times,
    		'contents' => $getListLocations->location_contents,
    		'descriptions' => $getListLocations->location_descriptions,
    		'images' => $getListLocations->location_images,
    		'url' => $getListLocations->location_url,
    	);
    	}
    	/////////////PHO///////////////////


    	////main///

    	$data['date'] = array(
    		'listDatePho' => $getListDate, //PHO
    		'blogthien' => $listBlogThien,//THIẸN
    		'bulidquang' => $listBulidQuang,//QUANG
    		'blogmanh'	=> $listBlogManh,//MANH
    		'bloghung'	=> $listBlogHung,//HUNG
    		'gallerytuananh'	=> $listGalleryTuananh,//TUANANH
    		'blogsang'	=> $listBlogSang,//SANG
            'bloghai'  => $listBlogHai,//HAI
            'menuthong'  => $listMenuThong//THON
    	);
    		
    

    	

        return view('common.home' ,$data['date'],$data['location']);

    }
   

    

}
