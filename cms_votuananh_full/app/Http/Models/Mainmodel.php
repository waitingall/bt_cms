<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App;
use DB;
class Mainmodel extends Model {

	 public function getList(){
	 $responsize = self::orderby('schedule_id')->get();
	 return $responsize;
	 }

	 public function add_test($input) {
	 $test = self::create([
	 'title' => $input['title']
	 ]);
	 return $test;
	 }

	 public function search($schedule_id) {
	 $test = self::find($schedule_id);
	 return $test;
	 }

////////////////////////////PHO//////////////////
	 public function getListDatePho(){
	 	return DB::table('cms_pho_date')->get();
	 	// $responsize = DB::table('cms_pho_schedule')
   //                  ->whereIn('schedule_id', [$schedule_id])->get();
	 	$responsize = self::orderby('date_id')->get();
	 	return $responsize;
	 	
	 }
	  public function getListLocationPho($limit){
	 	// return DB::table('cms_pho_location')->get();
	 	$responsize = DB::table('cms_pho_location')->take($limit)->get();  //limit recore
	 	// $responsize = self::orderby('location_id')->get();
	 	return $responsize;
	 }
////////////////////////////PHO//////////////////


////////////////////////////THIEN//////////////////
	 public function getListBlogThien($limit){
	 	$responsize = DB::table('cms_thien_blogs')->take($limit)->get();
	 	return $responsize;
	 }
////////////////////////////THIEN//////////////////
	 



////////////////////////////QUANG//////////////////
	
	 public function getListBulidQuang(){
	 	return DB::table('cms_quang_main_bulid')->get();
	 	$responsize = self::orderby('date_id')->get();
	 	return $responsize;
	 }

////////////////////////////QUANG//////////////////



////////////////////////////MANH//////////////////
	
	 public function getListBlogManh(){
	 	return DB::table('cms_manh_blogs')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }

////////////////////////////MANH//////////////////


////////////////////////////HUNG//////////////////
	
	 public function getListBlogHung(){
	 	return DB::table('cms_hung_blogs')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }

////////////////////////////HUNG//////////////////



////////////////////////////TUANANH//////////////////
	
	 public function getListGalleryTuananh(){
	 	return DB::table('cms_tuananh_gallery')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }

////////////////////////////TUANANH//////////////////



////////////////////////////SANG//////////////////
	
	 public function getListBlogSang(){
	 	return DB::table('cms_sang_blogs')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }

////////////////////////////SANG//////////////////



	 ////////////////////////////HAI//////////////////
	
	 public function getListBlogHai(){
	 	return DB::table('cms_hai_blogs')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }

////////////////////////////HAI//////////////////



	 ////////////////////////////THONG//////////////////
	
	 public function getListBreakfastThong(){
	 	return DB::table('cms_thong_breakfast')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }
	 public function getListDinnerThong(){
	 	return DB::table('cms_thong_dinner')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }
	  public function getListDessertThong(){
	 	return DB::table('cms_thong_dessert')->get();
	 	$responsize = self::orderby('id')->get();
	 	return $responsize;
	 }

////////////////////////////THONG//////////////////


}