<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Keysa',
            'Hanny',
            'Dewi',
            'Zahwa',
            'Eca'
        ];

        return view('members.index', compact('members'));
    }
}