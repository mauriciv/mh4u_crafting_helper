<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Requests;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::all()->where('type', 'Weapon');
        return view('items.index', compact('items'));
    }
}
