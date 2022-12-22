<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('frontend.client.index');
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
}
