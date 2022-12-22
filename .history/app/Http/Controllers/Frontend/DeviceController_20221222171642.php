<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::with('tags')
            ->currentUser()
            ->where('is_deleted', 0)
            ->get();

        return view(
            "client.users.device.index",
            compact('devices')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devices = Device::currentUser()
            ->where('is_deleted', 0)
            ->get();
        return view(
            "client.users.device.create",
            compact('devices')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'unique:devices,phone'],
            'tags' => ['required', 'array'],
            'tags.*.name' => ['required'],
        ]);
        $device = Device::create($data + ['user_id' => auth()->user()->id]);
        $device->tags()->createMany($data['tags']);
        return redirect()->route('devices');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        abort_if(!$device->user()->is(auth()->user()), 401);
        return view(
            "client.users.device.edit",
            compact('device')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        abort_if(!$device->user()->is(auth()->user()), 401);

        $data = $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'unique:devices,phone,' . $device->id],
            'tags' => ['required', 'array'],
            'tags.*.name' => ['required'],
        ]);
        $device->update($data);
        $device->tags()->delete();
        $device->tags()->createMany($data['tags']);
        return redirect()->route('devices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        abort_if(!$device->user()->is(auth()->user()), 401);
        $device->update(['is_deleted' => true]);

        return redirect()->route('frontend.users.device');
    }
}
