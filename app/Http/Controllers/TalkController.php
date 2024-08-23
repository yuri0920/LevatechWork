<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talk;



class TalkController extends Controller
{
    
    public function talk(Talk $talk)
    {
        return view('talks.talk')->with(['talks' => $talk->get()]);
    }
    
    public function store(Request $request, Talk $talk)
    {
        $input = $request['talk'];
        $talk->fill($input)->save();
        return redirect('/talk');
    }
}
