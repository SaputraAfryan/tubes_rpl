<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book()
    {
        if (Auth::user()->hasRole('owner')) {
            return view('booking.owner');
        } elseif (Auth::user()->hasRole('user')) {
            return view('booking.user');
        }
    }
}
