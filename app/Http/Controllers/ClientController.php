<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->role){
            return redirect('/trainer');
        }
        
        $trainerData = array(
            array(
                'name' => 'Mikle Jordan',
                'description' => 'I am a professional trainer who has over 3 years of experience.',
                'image' => 'main/images/person_1.jpg',
                'id' => 1
            ),
            array(
                'name' => 'John Franklin',
                'description' => 'I am a professional trainer who has over 5 years of experience.',
                'image' => 'main/images/person_2.jpg',
                'id' => 2
            ),
            array(
                'name' => 'Bill G',
                'description' => 'I am a professional trainer who has over 7 years of experience.',
                'image' => 'main/images/person_3.jpg',
                'id' => 3
            ),
            array(
                'name' => 'Benjemin A',
                'description' => 'I am a trainer who has over 5 years of experience.',
                'image' => 'main/images/person_4.jpg',
                'id' => 4
            ),
            array(
                'name' => 'Mickey A',
                'description' => 'Hello, please contact me for the best.',
                'image' => 'main/images/image_3.jpg',
                'id' => 5
            )
        );
        
        return view('clientLandingPage', compact('trainerData'));
    }

    public function changePassword()
    {

        return view('changePassword');
    }

    public function getSession()
    {

        return view('clientSession');
    }

    public function getHistory()
    {

        return view('clientHistory');
    }

    public function getProfile()
    {

        return view('clientProfilePage');
    }

    public function call()
    {

        return view('call');
    }
}
