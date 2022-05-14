<?php
namespace App\Controllers;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Core\App;

class UsersController{
	public function index(){
		//$users = App::resolve('database')->selectAll('users');
		$users = User::all();
		return view('users', compact('users'));
	}

	public function store(){
		// App::resolve('database')->insert('users', [
		// 	'name' => $_POST['name'],
		// 	]);
		//header('Location: /users');
		$user = new User();
		$user->name = 'Playstation 4';
		$user->save();
		return redirect('users');
	}

	public function delete(){
		if ( isset( $_POST ) ){
			unset($_POST['submit']);
			unset($_POST['_method']);
			
			foreach ($_POST as $key => $value) {
				$request_parameters[$key] = $value;
			}
		}
		//App::resolve('database')->delete('users', $request_parameters);
		$user = user::find($request_parameters);
		//header('Location: /users');
		return redirect('users');
	}
}
?>