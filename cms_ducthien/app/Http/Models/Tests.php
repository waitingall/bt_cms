<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App;
use DB;
class Tests extends Model {
	 protected $table = 'test';
	 protected $primaryKey = 'test_id';
	 public $timestamps = false;
	 protected $fillable = [
	 "test_name",
	 ];
	 protected $guarded = ["test_id"];

	 public function getList(){
	 	 $responsize = DB::select('select * from test');
        	return $responsize;
	 }

	 public function get_tests(){
	 $tests = self::orderby('test_id')->get();
	 return $tests;
	 }

	 public function add_test($input) {
	 $test = self::create([
	 'test_name' => $input['test_name']
	 ]);
	 return $test;
	 }

	 public function search($test_id) {
	 $test = self::find($test_id);
	 return $test;
	 }

	 public function delete($test_id) {
	 $test = $this->search($test_id);
	 $test->delete();
	 }

}