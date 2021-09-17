<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('trainerSession');
    }

    public function changePassword()
    {

        return view('changePassword');
    }

    public function getHistory()
    {

        return view('trainerHistory');
    }

    public function getProfile($id)
    {
        $profileData = array(

        );

        return view('trainerProfile', compact('profileData'));
    }

    public function getDetail($id)
    {
        $trainerData = array(
            'name' => 'Mikle Jordan',
            'job' => 'Professional trainer',
            'availability' => array(
                'day' => 'Monday - Friday',
                'time' => '9:00 AM - 8:00 PM'
            ),
            'specialities' => [
                'Body build',
                'Fitness',
                'bla bla'
            ],
            'description' => 'I am a professional trainer who has over 3 years of experience.',
            'image' => 'main/images/person_1.jpg'
        );
        return view('trainerDetailPage', compact('trainerData'));
    }
    
    public function call()
    {

        return view('call');
    }
}
