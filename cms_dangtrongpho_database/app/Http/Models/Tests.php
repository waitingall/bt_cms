<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App;
use DB;
class Tests extends Model {
	 protected $table = 'contact';
	 protected $primaryKey = 'contact_id';
	 public $timestamps = false;
	 protected $fillable = [
	 "contact_name",
	 ];
	 protected $guarded = ["contactt_id"];

	 public function getList(){
	 	 $responsize = DB::select('select * from contact');
        	return $responsize;
	 }

	 public function get_tests(){
	 $tests = self::orderby('contact_id')->get();
	 return $tests;
	 }

	 public function add_test($input) {
	 $contact = self::create([
	 'contact_name' => $input['contact_name']
	 ]);
	 return $contact;
	 }

	 public function search($contactt_id) {
	 $contact = self::find($contact_id);
	 return $contact;
	 }

	 // public function delete($contact_id) {
	 // $contact = $this->search($contact_id);
	 // $contact->delete();

	 // }

}