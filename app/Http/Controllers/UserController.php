<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Properties and methods 
    // Access modifiers = public, private , protected
    // public $name = "Ayomide";
    // private $school = "SQI";
    // protected $student = "Adeshola Aydeshola";
    public function index()
    {
        $name = "Ayomide";
        $school = "Sqi";
        //  compact( method)
        // return view('index', compact('name', 'school'));
        //  direct( method) 
        return view('index', [
            'name' => $name,
            'school' => $school
        ]);
    }

    public function register(Request $request)
    {

        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->username = $request->username;
        // $user->phone_number = $request->phone_number;
        // $user->password = Hash::make($request->password);
        // $saveUser = $user->save();
        // if ($saveUser) {
        //     return view('index')->with('message', 'User saved successfully')->with('status', true);

        // } else {
        //     return view('index')->with('message', "Error occured. Please try again")->with('status', false);
        // }

    }
}

// $newUserController = new UserController;
// $newUserController->name;

// class InherirtedClass extends UserController
// {
//     public function echoStudent()
//     {
//         echo $this->name;
//     }
// }
