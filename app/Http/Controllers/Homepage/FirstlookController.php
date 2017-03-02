<?php 
namespace App\Http\Controllers\Homepage; // กำหนดที่อยู่ของ Controller
use App\Http\Controllers\Controller; //เรียกใช้ Controller หลักของ Laravel 5.0
 
class FirstlookController extends Controller {


	 public function Index(){

	 	return view('homepage.layouts.firstlook');

	 }
}
