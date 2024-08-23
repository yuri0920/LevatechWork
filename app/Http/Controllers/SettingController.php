<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Setting;

class SettingController extends Controller
{
    public function create()
    {
        return view('settings.create');
    }
    
    public function store(Request $request, Setting $setting)
    {
        $input = $request['setting'];
        $input['user_id']=Auth::id();
        $setting->fill($input)->save();
        return redirect('/home');
    }
}
