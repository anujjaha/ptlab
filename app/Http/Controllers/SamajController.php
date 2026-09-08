<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Profile\EloquentProfileRepository;

class SamajController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $repository = new EloquentProfileRepository();
        $profiles   = $repository->homeProfiles();
        $cityList   = $repository->cityWiseCount();
        $professionList   = $repository->professionWiseCount();
        // dd($profiles);

        return view('samaj.index')->with([
            'cityList' => $cityList,
            'professionList' => $professionList,
            'profiles' => $profiles
        ]);
    }
}
