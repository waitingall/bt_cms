<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App;
use DB;
class Tests extends Model {
	 protected $table = 'dk';
	 protected $primaryKey = 'id_dk';
	 public $timestamps = false;
	 protected $fillable = [
	 "nd_dk",
	 ];
	 protected $guarded = ["id_dk"];

	 public function getList(){
	 	 $responsize = DB::select('select * from dk');
        	return $responsize;
	 }

	 public function get_tests(){
	 $tests = self::orderby('id_dk')->get();
	 return $tests;
	 }

	 public function add_test($input) {
	 $dk = self::create([
	 'nd_dk' => $input['nd_dk']

	 ]);
	 return $tintuc;
	 }

	 public function search($id_dk) {
	 $dk = self::find($id_dk);
	 return $dk;
	 }

	 // public function delete($test_id) {
	 // $test = $this->search($test_id);
	 // $test->delete();

	 // }

}