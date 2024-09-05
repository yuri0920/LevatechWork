<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Setting;
use Cloudinary;

class SettingController extends Controller
{
    public function create()
    {
        return view('settings.create');
    }
    
    public function store(Request $request, Setting $setting)
    {
        $selfimage_url = Cloudinary::upload($request->file('selfimage')->getRealPath())->getSecurePath();
        $partnerimage_url = Cloudinary::upload($request->file('partnerimage')->getRealPath())->getSecurePath();
        
        $input = $request['setting'];
        $input['user_id']=Auth::id();
        $input += ['selfimage_url'=>$selfimage_url];
        $input += ['partnerimage_url' => $partnerimage_url];
        $setting->fill($input)->save();
        return redirect('/talks');
    }
}
