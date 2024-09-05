<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talk;
use App\Models\Setting;
use Auth;

class TalkController extends Controller
{
    public function roomselect(Setting $setting)
    {
        $user=Auth::id();
        $query=Setting::query();
        $query->where('user_id','=', $user);
        $settings=$query->get();
        return view('talks.roomselect')->with(['settings' => $settings]);
    }
    
    public function talk(Request $request, Talk $talk, Setting $setting)
    {
        $setting_string = preg_replace('/[^0-9]/', '', $request->path());
        $setting_id = intval($setting_string);
        $query=Talk::query();
        $query->where('setting_id', '=', $setting_id);
        $talk=$query->get();
        return view('talks.talk')->with(['talks' => $talk,'setting'=>$setting]);
    }
    
    public function store(Request $request, Talk $talk, Setting $setting)
    {
        $setting_string = preg_replace('/[^0-9]/', '', $request->path());
        $setting_int = intval($setting_string);
        $input = $request['talk'];
        $input += ['user_id' => $request->user()->id];
        $input += ['setting_id' => $setting_int];
        $talk->role=$input["role"];
        $talk->contents=$input["contents"];
        $talk->user_id=$input['user_id'];
        $talk->setting_id=$input['setting_id'];
        $talk->save();
        return redirect()->route('talkroom', ['setting' => $setting_int]);
    }
}
