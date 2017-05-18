<?php 

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class UserController extends Controller
{

	public function getSignup(){
		return view('signup');
	}
	
	public function postSignup(Request $request) 
	{
		$name = $request['name'];
		$email = $request['email'];
		$phone = $request['phone'];
		$address = $request['address'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->name = $name;
		$user->email = $email;
		$user->phone = $phone; 
		$user->address = $address; 
		$user->password = $password;

		$user->save();
		return redirect()->back();
		// or return redirect()->route('routename')
	}

	public function postLogin(Request $request) 
	{

	}



}

?>