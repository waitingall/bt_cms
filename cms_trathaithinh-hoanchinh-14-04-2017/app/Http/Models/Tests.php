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
	  public function getListNewId3(){
	 	$responsizeContents = DB::select('select * from news where id = 3');
		return $responsizeContents;
	 }
	   public function getListNewId4(){
	 	$responsizeContents = DB::select('select * from news where id = 4');
		return $responsizeContents;
	 }
	  public function getListNewId5(){
	 	$responsizeContents = DB::select('select * from news where id = 5');
		return $responsizeContents;
	 }
	  public function getListNewId6(){
	 	$responsizeContents = DB::select('select * from news where id = 6');
		return $responsizeContents;
	 }
	  public function getListNewId7(){
	 	$responsizeContents = DB::select('select * from news where id = 7');
		return $responsizeContents;
	 }
	  public function getListNewId8(){
	 	$responsizeContents = DB::select('select * from news where id = 8');
		return $responsizeContents;
	 }
	  public function getListNewId9(){
	 	$responsizeContents = DB::select('select * from news where id = 9');
		return $responsizeContents;
	 }
	  public function getListNewId10(){
	 	$responsizeContents = DB::select('select * from news where id = 10');
		return $responsizeContents;
	 }
	  public function getListNewId11(){
	 	$responsizeContents = DB::select('select * from news where id = 11');
		return $responsizeContents;
	 }
	 public function getListNewId12(){
	 	$responsizeContents = DB::select('select * from news where id = 12');
		return $responsizeContents;
	 }
	 public function getListNewId13(){
	 	$responsizeContents = DB::select('select * from news where id = 13');
		return $responsizeContents;
	 }
	 public function getListNewId14(){
	 	$responsizeContents = DB::select('select * from news where id = 14');
		return $responsizeContents;
	 }
	 public function getListNewId15(){
	 	$responsizeContents = DB::select('select * from news where id = 15');
		return $responsizeContents;
	 }
	 public function getListNewId16(){
	 	$responsizeContents = DB::select('select * from news where id = 16');
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

	 // public function delete($test_id) {
	 // $test = $this->search($test_id);
	 // $test->delete();

	 // }

}