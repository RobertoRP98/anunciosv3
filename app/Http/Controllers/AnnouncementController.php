<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AnnouncementController extends Controller
{
    public function profiles(){
      return  Inertia::render('Announcements/Profiles');
    }

    public function conditions(){
      return Inertia::render('Announcements/Conditions');
    }

    public function privacity(){
      return Inertia::render('Announcements/Privacity');
    }

    public function payments(){
      return Inertia::render('Announcements/Payments');
    }
}
