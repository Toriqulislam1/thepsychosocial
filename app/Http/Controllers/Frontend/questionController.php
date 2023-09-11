<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\questiondata;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class questionController extends Controller
{
    function AddQuestion(Request $request){

        $v1 = $request->qv1;
        $v2 = $request->qv2;
        $v3 = $request->qv3;
        $v4 = $request->qv4;
        $v5 = $request->qv1;
        $v6 = $request->qv5;
        $v7 = $request->qv7;
        $v8 = $request->qv8;
        $v9 = $request->qv;
        $v10 = $request->qv10;
        $v11 = $request->qv11;
        $v12 = $request->qv12;
        $v13 = $request->qv13;
        $v14 = $request->qv14;
        $v15 = $request->qv15;
        $v16 = $request->qv16;
        $v17 = $request->qv17;
        $v18 = $request->qv18;
        $v19 = $request->qv19;
        $v20 = $request->qv20;
        $v21 = $request->qv21;
        $v22 = $request->qv22;
        $v23 = $request->qv23;
        $v24 = $request->qv24;
        $v25 = $request->qv25;
        $v26 = $request->qv26;
        $v27 = $request->qv27;
        $v28 = $request->qv28;
        $v29 = $request->qv29;
        $v30 = $request->qv30;
        $v31 = $request->qv31;
        $v32 = $request->qv32;
        $v33 = $request->qv34;
        $v34 = $request->qv34;
        $v35 = $request->qv35;
        $v36= $request->qv36;
        $v37 = $request->qv37;
        $v38 = $request->qv38;
        $v39 = $request->qv39;
        $v40 = $request->qv40;


     $total = $v1+$v2+$v3+$v4+$v5+$v6+$v7+$v8+$v9+$v10+$v11+$v12+$v13+$v14+$v15+$v16+$v17+$v18+$v19+$v20+$v21+$v22+$v23+$v24+$v25+$v26+$v27+$v28+$v29+$v30+$v31+$v32+$v33+$v34+$v35+$v36+$v37+$v38+$v39+$v40;



      $id = questiondata::insertGetId([

            'name' => $request->client_name,
            'email' => $request->client_email,
            'phone' => $request->client_phone,
            'age' => $request->client_age,
            'address' => $request->client_address,
      		'created_at' => Carbon::now(),


		]);

        $pdf = Pdf::loadView('admin.invoice.pdf',[
            'id' => $id,
            'total' =>$total,





            ])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream('invoice-pdf');


    }
}
