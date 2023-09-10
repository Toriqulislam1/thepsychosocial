<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\questiondata;
use Carbon\Carbon;

class questionController extends Controller
{
    function AddQuestion(Request $request){

        questiondata::insert([

            'name' => $request->client_name,
            'email' => $request->client_email,
            'phone' => $request->client_phone,
            'age' => $request->client_age,
            'address' => $request->client_address,
      		'created_at' => Carbon::now(),


		]);

return back();

    }
}
