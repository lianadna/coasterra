<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beVolunteer()
    {
        return view('pages.beVolunteer');
    }

    public function camping()
    {
        return view('pages.camping');
    }

    public function campingDetails()
    {
        return view('pages.campingDetails');
    }

    public function campingDonation()
    {
        return view('pages.campingDonation');
    }

    public function donations()
    {
        return view('pages.donations');
    }    

    public function project()
    {
        return view('pages.project');
    }

    public function projectDetails()
    {
        return view('pages.projectDetails');
    }

    public function servicesDetails()
    {
        return view('pages.servicesDetails');
    }

    public function volunteer()
    {
        return view('pages.volunteer');
    }

    public function volunteerDetails()
    {
        return view('pages.volunteerDetails');
    }

}