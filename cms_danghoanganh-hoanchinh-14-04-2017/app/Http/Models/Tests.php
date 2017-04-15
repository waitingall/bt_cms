<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App;
use DB;
class Tests extends Model {
	 protected $table = 'tests';
	 protected $primaryKey = 'id';
	 public $timestamps = false;
	 protected $fillable = [
	 "name", "description",
	 ];
	 
	 protected $guarded = ["id"];

	 public function getListTest($data= array()){
	 	 $responsize = DB::select('select * from tests');
        	return $responsize;
	 }
	 public function getListTestId1(){
	 	$responsizeContents = DB::select('select * from tests where id = 1');
		return $responsizeContents;
	 }
	  public function getListTestId2(){
	 	$responsizeContents = DB::select('select * from tests where id = 2');
		return $responsizeContents;
	 }
	  public function getListTestId3(){
	 	$responsizeContents = DB::select('select * from tests where id = 3');
		return $responsizeContents;
	 }
	  public function getListTestId4(){
	 	$responsizeContents = DB::select('select * from tests where id = 4');
		return $responsizeContents;
	 }
	  public function getListTestId5(){
	 	$responsizeContents = DB::select('select * from tests where id = 5');
		return $responsizeContents;
	 }
	  public function getListTestId6(){
	 	$responsizeContents = DB::select('select * from tests where id = 6');
		return $responsizeContents;
	 }
	   public function getListTestId7(){
	 	$responsizeContents = DB::select('select * from tests where id = 7');
		return $responsizeContents;
	 }
	  public function getListTestId8(){
	 	$responsizeContents = DB::select('select * from tests where id = 8');
		return $responsizeContents;
	 }
	  public function getListTestId9(){
	 	$responsizeContents = DB::select('select * from tests where id = 9');
		return $responsizeContents;
	 }
	

	

	 

	 // public function delete($test_id) {
	 // $test = $this->search($test_id);
	 // $test->delete();

	 // }

}