<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use App\Models\Role;
use App\Models\User;
use App\Authorizable;
use App\Models\Device;
use App\Models\Permission;
use App\Models\Userprofile;
use Illuminate\Support\Str;
use App\Models\UserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Events\Frontend\UserProfileUpdated;

class UserController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Users';

        // module name
        $this->module_name = 'users';

        // directory path of the module
        $this->module_path = 'users';

        // module icon
        $this->module_icon = 'fas fa-users';

        // module model name, path
        $this->module_model = "App\Models\User";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($username)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::where('username', 'LIKE', $username)->first();

        $body_class = 'profile-page';

        $meta_page_type = 'profile';

        return view(
            "frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", 'body_class', 'meta_page_type')
        );
    }

    public function overview()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Overview';

        $users = $module_model::all();

        $body_class = 'overview-page';

        $meta_page_type = 'overview';

        return view(
            "client.$module_name.overview",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'users', 'body_class', 'meta_page_type')
        );
    }

    public function chatbot()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Chatbot';

        $users = $module_model::all();

        $body_class = 'chatbot-page';

        $meta_page_type = 'chatbot';

        return view(
            "client.$module_name.chat.index",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'users', 'body_class', 'meta_page_type')
        );
    }

    public function voice()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Voice';

        $users = $module_model::all();

        $body_class = 'voice-page';

        $meta_page_type = 'voice';

        return view(
            "client.$module_name.voice.index",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'users', 'body_class', 'meta_page_type')
        );
    }

    public function usage()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Usage';

        $users = $module_model::all();

        $body_class = 'usage-page';

        $meta_page_type = 'usage';

        return view(
            "client.$module_name.usage.index",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'users', 'body_class', 'meta_page_type')
        );
    }

    public function device()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Device';

        $users = $module_model::all();

        $body_class = 'device-page';

        $meta_page_type = 'device';
        $devices = Device::with('tags')
            ->currentUser()
            ->where('is_deleted', 0)
            ->get();

        return view(
            "client.$module_name.device.index",
            compact('module_title', 'devices', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'users', 'body_class', 'meta_page_type')
        );
    }
    public function device_create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Device';

        $users = $module_model::all();

        $body_class = 'device-page';

        $meta_page_type = 'device';

        return view(
            "client.$module_name.device.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'users', 'body_class', 'meta_page_type')
        );
    }
    public function device_edit(Device $device)
    {
        abort_if(!$device->user()->is(auth()->user()), 401);
        $module_name = $this->module_name;
        return view(
            "client.$module_name.device.edit",
            compact('device')
        );
    }
    public function device_store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'unique:devices,phone'],
            'tags' => ['required', 'array'],
            'tags.*' => ['required'],
        ]);
        $device = Device::create($data + ['user_id' => auth()->user()->id]);
        $device->tags()->createMany($data['tags']);
        return redirect()->route('frontend.users.device');
    }
    public function device_update(Request $request, Device $device)
    {
        abort_if(!$device->user()->is(auth()->user()), 401);

        $data = $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'unique:devices,phone,' . $device->id],
            'tags' => ['required', 'array'],
            'tags.*' => ['required'],
        ]);
        $device->update($data);
        $device->tags()->delete();
        $device->tags()->createMany($data['tags']);
        return redirect()->route('frontend.users.device');

        // dd($data);
    }
    public function device_delete(Device $device)
    {
        abort_if(!$device->user()->is(auth()->user()), 401);
        $device->update(['is_deleted' => true]);

        return redirect()->route('frontend.users.device');

        // dd($data);
    }

    public function tagihan()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Tagihan';

        $users = $module_model::all();

        $body_class = 'tagihan-page';

        $meta_page_type = 'tagihan';

        return view(
            "client.$module_name.tagihan.index",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'users', 'body_class', 'meta_page_type')
        );
    }
    /**
     * Display Profile Details of Logged in user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $id = decode_id($id);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'Profile';

        $$module_name_singular = $module_model::findOrFail($id);

        if ($$module_name_singular) {
            $userprofile = Userprofile::where('user_id', $id)->first();
        } else {
            Log::error('UserProfile Exception for Username: ' . $username);
            abort(404);
        }

        $body_class = 'profile-page';

        $meta_page_type = 'profile';

        return view("frontend.$module_name.profile", compact('module_name', 'module_name_singular', "$module_name_singular", 'module_icon', 'module_action', 'module_title', 'body_class', 'userprofile', 'meta_page_type'));
    }

    /**
     * Show the form for Profile Paeg Editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileEdit($id)
    {
        $id = decode_id($id);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit Profile';

        $page_heading = ucfirst($module_title);
        $title = $page_heading . ' ' . ucfirst($module_action);

        if (!auth()->user()->can('edit_users')) {
            $id = auth()->user()->id;
        }

        if ($id != auth()->user()->id) {
            return redirect()->route('frontend.users.profile', $id);
        }

        $$module_name_singular = $module_model::findOrFail($id);
        $userprofile = Userprofile::where('user_id', $id)->first();

        $body_class = 'profile-page';

        return view(
            "frontend.$module_name.profileEdit",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", 'userprofile', 'body_class')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'Profile Update';

        if ($id != auth()->user()->id) {
            return redirect()->route('frontend.users.profile', $id);
        }

        $this->validate($request, [
            'first_name' => 'required|string|max:191',
            'last_name'  => 'required|string|max:191',
            'avatar'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $module_name = $this->module_name;
        $module_name_singular = Str::singular($this->module_name);

        if (!auth()->user()->can('edit_users')) {
            $id = auth()->user()->id;
            $username = auth()->user()->username;
        }

        $$module_name_singular = $module_model::findOrFail($id);

        // Handle Avatar upload
        if ($request->hasFile('avatar')) {
            if ($$module_name_singular->getMedia($module_name)->first()) {
                $$module_name_singular->getMedia($module_name)->first()->delete();
            }

            $media = $$module_name_singular->addMedia($request->file('avatar'))->toMediaCollection($module_name);

            $$module_name_singular->avatar = $media->getUrl();

            $$module_name_singular->save();
        }

        $data_array = $request->except('avatar');
        $data_array['avatar'] = $$module_name_singular->avatar;
        $data_array['name'] = $request->first_name . ' ' . $request->last_name;

        $user_profile = Userprofile::where('user_id', '=', $$module_name_singular->id)->first();
        $user_profile->update($data_array);

        event(new UserProfileUpdated($user_profile));

        return redirect()->route('frontend.users.profile', $$module_name_singular->id)->with('flash_success', 'Update successful!');
    }

    /**
     * Show the form for Profile Paeg Editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'change Password';

        $body_class = 'profile-page';

        if ($id != auth()->user()->id) {
            return redirect()->route('frontend.users.profile', $id);
        }

        $id = auth()->user()->id;

        $$module_name_singular = $module_model::findOrFail($id);

        $body_class = 'profile-page';

        return view("frontend.$module_name.changePassword", compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", 'body_class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePasswordUpdate(Request $request, $username)
    {
        if ($username != auth()->user()->username) {
            return redirect()->route('frontend.users.profile', $username);
        }

        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        $module_name = $this->module_name;
        $module_name_singular = Str::singular($this->module_name);

        $$module_name_singular = auth()->user();

        $request_data = $request->only('password');
        $request_data['password'] = Hash::make($request_data['password']);

        $$module_name_singular->update($request_data);

        return redirect()->route('frontend.users.profile', auth()->user()->id)->with('flash_success', 'Update successful!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'Edit';

        if ($id != auth()->user()->id) {
            return redirect()->route('frontend.users.profile', $id);
        }

        $roles = Role::get();
        $permissions = Permission::select('name', 'id')->get();

        $$module_name_singular = User::findOrFail($id);

        $body_class = 'profile-page';

        $userRoles = $$module_name_singular->roles->pluck('name')->all();
        $userPermissions = $$module_name_singular->permissions->pluck('name')->all();

        return view("frontend.$module_name.edit", compact('userRoles', 'userPermissions', 'module_name', "$module_name_singular", 'module_icon', 'module_action', 'title', 'roles', 'permissions', 'body_class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $module_name = $this->module_name;
        $module_name_singular = Str::singular($this->module_name);

        if ($id != auth()->user()->id) {
            return redirect()->route('frontend.users.profile', $id);
        }

        $$module_name_singular = User::findOrFail($id);

        $$module_name_singular->update($request->except(['roles', 'permissions']));

        if ($id == 1) {
            $user->syncRoles(['administrator']);

            return redirect("admin/$module_name")->with('flash_success', 'Update successful!');
        }

        $roles = $request['roles'];
        $permissions = $request['permissions'];

        // Sync Roles
        if (isset($roles)) {
            $$module_name_singular->syncRoles($roles);
        } else {
            $roles = [];
            $$module_name_singular->syncRoles($roles);
        }

        // Sync Permissions
        if (isset($permissions)) {
            $$module_name_singular->syncPermissions($permissions);
        } else {
            $permissions = [];
            $$module_name_singular->syncPermissions($permissions);
        }

        return redirect("admin/$module_name")->with('flash_success', 'Update successful!');
    }

    /**
     * Remove the Social Account attached with a User.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function userProviderDestroy(Request $request)
    {
        $user_provider_id = $request->user_provider_id;
        $user_id = $request->user_id;

        if (!$user_provider_id > 0 || !$user_id > 0) {
            flash('Invalid Request. Please try again.')->error();

            return redirect()->back();
        } else {
            $user_provider = UserProvider::findOrFail($user_provider_id);

            if ($user_id == $user_provider->user->id) {
                $user_provider->delete();

                flash('<i class="fas fa-exclamation-triangle"></i> Unlinked from User, "' . $user_provider->user->name . '"!')->success();

                return redirect()->back();
            } else {
                flash('<i class="fas fa-exclamation-triangle"></i> Request rejected. Please contact the Administrator!')->warning();
            }
        }

        throw new Exception('There was a problem updating this user. Please try again.');
    }

    /**
     * Resend Email Confirmation Code to User.
     *
     * @param [type] $hashid [description]
     * @return [type] [description]
     */
    public function emailConfirmationResend($id)
    {
        if ($id != auth()->user()->id) {
            if (auth()->user()->hasAnyRole(['administrator', 'super admin'])) {
                Log::info(auth()->user()->name . ' (' . auth()->user()->id . ') - User Requested for Email Verification.');
            } else {
                Log::warning(auth()->user()->name . ' (' . auth()->user()->id . ') - User trying to confirm another users email.');

                abort('404');
            }
        }

        $user = User::where('id', 'LIKE', $id)->first();

        if ($user) {
            if ($user->email_verified_at == null) {
                Log::info($user->name . ' (' . $user->id . ') - User Requested for Email Verification.');

                // Send Email To Registered User
                $user->sendEmailVerificationNotification();

                flash('Email Sent! Please Check Your Inbox.')->success()->important();

                return redirect()->back();
            } else {
                Log::info($user->name . ' (' . $user->id . ') - User Requested but Email already verified at.' . $user->email_verified_at);

                flash($user->name . ', You already confirmed your email address at ' . $user->email_verified_at->isoFormat('LL'))->success()->important();

                return redirect()->back();
            }
        }
    }
}
