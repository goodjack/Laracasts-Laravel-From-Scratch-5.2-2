<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    public function index()
    {
        return view('cards.index');
    }

    public function create()
    {
        return view('cards.create');
    }

    public function store($id)
    {
        return view('cards.store', compact('id'));
    }
}
