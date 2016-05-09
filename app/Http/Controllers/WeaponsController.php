<?php

namespace App\Http\Controllers;

use App\Weapon;
use Illuminate\Http\Request;
use App\Http\Requests;

class WeaponsController extends Controller
{
    public function index()
    {
        $weapons = Weapon::all();

        return view('weapons.index', compact('weapons'));
    }
}
