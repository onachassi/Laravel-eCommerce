<?php 

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class UserController extends Controller
{

	public function getLogout(){
		Auth::logout();
		return redirect()->route('root');
	}

	public function getSignup(){
		return view('signup');
	}

		public function getLogin(){
		return view('login');
	}
	
	public function postSignup(Request $request) 
	{
		$this->validate($request, [
			'name' => 'required|max:120',
			'email' => 'email|unique:users|required',
			'phone' => 'required|min:9',
			'address' => 'required',
			'password' => 'required|min:4|max:120'
		]);

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
		Auth::login($user);
		return redirect()->route('getLogin');
		// return redirect()->route('routename')
	}

	public function postLogin(Request $request) 
	{
			$this->validate($request, [
			'email' => 'email|required',
			'password' => 'required|min:4|max:120'
		]);
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
			return redirect()->route('root');
		} else {
			return redirect()->route('getLogin');
		}
	}



}

?>