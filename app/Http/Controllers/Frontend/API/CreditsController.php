<?php

namespace App\Http\Controllers\Frontend\API;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreditsController extends Controller
{
    public function credits(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no' => 'required|exists:devices,phone',
            'cr' => 'required|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        }


        $no = $request->no;
        $credit = $request->cr;


        $device = Device::where('phone', $no)->first();

        $user = $device->user->userprofile;

        if ($user->credits < $credit) {
            return response()->json([
                'status' => 'need topup'
            ]);
        }

        $user->decrement('credits', $credit);

        return response()->json([
            'status' => 'OK'
        ]);
    }
}
