<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Mail\WelcomeAgain;
//use App\User;
//use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(){
    	return view('registration.create');
    }

    public function store(RegistrationForm $request)
    {
    	//validate the form.
    	/*$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed|min:5'  /*in form, id,name,label = password_confirmation hote hobe.*/
    	//]);*/

            $request->persist();

            session()->flash('message', 'Thanks for signing up!');

    	// create and save the user.
    	/*$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))
    	]);*/
    	// or $user = User::create(request(['name','email','password']));

    	//sign them in.
    	//auth()->login($user); /*or \Auth::login($user); if you don't put \ before Auth, you have to import class(like use Auth) at the top of the class. and also with this auth() helper function you don't need to import anything at the top of the class.*/

        //\Mail::to($user)->send(new WelcomeAgain($user));

    	// redirect to the home page.
    	return redirect()->home(); /*for this,you have to add ->name('home'); at the end of the home route in route folder or use return redirect('/'); */ 
    }
}
