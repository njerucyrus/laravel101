<?php

namespace Blog\Http\Controllers;

use Blog\UserProfile;
use Illuminate\Http\Request;


class UserProfileController extends Controller
{
    public function create(Request $request)
    {
        $user = $request->user();
        return view('create_profile', compact('user'));
    }

    public function store(Request $request)
    {
      $profile = new UserProfile;
      $profile->country = $request->input('country');
      $profile->gender = $request->input('gender');
      $profile->user_id = $request->user()->id;
      $profile->save();
      $request->session()->flash('profile created successfully');
      return redirect('/home');
    }

    /*
     * for showing the profile page
     *
     */
    public function show($id){
        $profile = UserProfile::findOrFail($id);
        return view('user_profile', compact('profile'));

    }
    /*
     * for showing update form page
     */
    public function edit($id){
        $profile = UserProfile::findOrFail($id);
        return view('update_profile', compact('profile'));
    }
    public function update(Request $request, $id){
        $profile = UserProfile::find($id);
        $profile->country = $request->input('country');
        $profile->gender = $request->input('gender');
        $profile->save();

    }
}
