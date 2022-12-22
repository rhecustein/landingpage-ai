<?php

namespace App\Http\Controllers\Frontend\API;

use App\Http\Controllers\Controller;
use App\Models\CheckTrial;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckTrialController extends Controller
{
    public function checks(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        }

        $no = $request->no;

        if (Device::where('phone', $no)->exists()) {
            return response()->json([
                'status' => 'registered'
            ]);
        }

        $checkTrial = CheckTrial::firstOrCreate([
            'no' => $no
        ]);

        if ($checkTrial->attempt >= CheckTrial::LIMIT_REQUEST) {
            return response()->json([
                'status' => 'must register'
            ]);
        }

        $checkTrial->increment('attempt');
        return response()->json([
            'status' => 'go'
        ]);
    }
}
