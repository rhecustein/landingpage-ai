<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Events\Frontend\UserProfileUpdated;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // dd($user->userprofile);
        return view('frontend.users.profile', compact('user'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:191',
            'last_name'  => 'required|string|max:191',
            'avatar'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = auth()->user();

        // Handle Avatar upload
        if ($request->hasFile('avatar')) {
            if ($user->getMedia('users')->first()) {
                $user->getMedia('users')->first()->delete();
            }

            $media = $user->addMedia($request->file('avatar'))->toMediaCollection('users');
            $user->avatar = $media->getUrl();
            $user->save();
        }

        $data_array = $request->except('avatar');
        $data_array['avatar'] = $user->avatar;
        $data_array['name'] = $request->first_name . ' ' . $request->last_name;
        $user->userprofile->update($data_array);

        event(new UserProfileUpdated($user->userprofile));
        // dd($data_array, $user->userprofile);
        return redirect()->route('user.profile.index');
    }
    public function changePassword(Request $request)
    {

        $this->validate($request, [
            'old_password' => 'current_password:web',
            'password' => 'required|confirmed|min:6',
        ]);

        $request_data = $request->only('password');
        $request_data['password'] = Hash::make($request_data['password']);

        $user = auth()->user();

        $user->update($request_data);

        return redirect()->route('user.profile.index');
    }
}
