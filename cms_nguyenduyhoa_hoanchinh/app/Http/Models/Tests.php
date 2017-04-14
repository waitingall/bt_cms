<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App;
use DB;
class Tests extends Model {
	 protected $table = 'news';
	 protected $primaryKey = 'id';
	 public $timestamps = false;
	 protected $fillable = [
	 "name", "description",
	 ];
	 
	 protected $guarded = ["id"];

	 public function getListNews($data= array()){
	 	 $responsize = DB::select('select * from news');
        	return $responsize;
	 }
	 public function getListNewId1(){
	 	$responsizeContents = DB::select('select * from news where id = 1');
		return $responsizeContents;
	 }
	  public function getListNewId2(){
	 	$responsizeContents = DB::select('select * from news where id = 2');
		return $responsizeContents;
	 }
	 public function getListContents(){
	 	 $responsizeContents = DB::select('select * from contents where id = 1');
        	return $responsizeContents;
	 }

	 public function get_tests(){
	 $tests = self::orderby('id')->get();
	 return $tests;
	 }

	 public function add_test($input) {
	 $tintuc = self::create([
	 'name' => $input['name']
	 ]);
	 $tintuc = self::create([
	 'name' => $input['name']
	 ]);
	 return $news;
	 }

	 public function search($id) {
	 $news = self::find($id);
	 return $news;
	 }
	 public function getListDatePho(){
	 	return DB::table('cms_pho_date')->get();
	 	$responsize = self::orderby('date_id')->get();
	 	return $responsize;
	 	
	 }
	 public function getListBlogThien($limit){
	 	$responsize = DB::table('cms_thien_blogs')->take($limit)->get();
	 	return $responsize;
	 }
	 public function getListBlogDong($limit){
	 	$responsize = DB::table('cms_dong_blogs')->take($limit)->get();
	 	return $responsize;
	 }
	 public function getListBlogTuana($limit){
	 	$responsize = DB::table('cms_tuananh_blog')->take($limit)->get();
	 	return $responsize;
	 }

}