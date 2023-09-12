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
        $v9 = $request->qv9;
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
        $v41 = $request->qv41;
        $v42 = $request->qv42;
        $v43 = $request->qv43;
        $v44 = $request->qv44;



        // $total = $v1+$v2+$v3+$v4+$v5+$v6+$v7+$v8+$v9+$v10+$v11+$v12+$v13+$v14+$v15+$v16+$v17+$v18+$v19+$v20+$v21+$v22+$v23+$v24+$v25+$v26+$v27+$v28+$v29+$v30+$v31+$v32+$v33+$v34+$v35+$v36+$v37+$v38+$v39+$v40+$v41+$v42+$v43+$v44;
        // $PanicDisorder = $v1+$v2+$v6+$v9+$v11+$v12+$v15+$v17+$v18+$v19+$v22+$v25+$v28+$v32+$v36+$v38+$v40;
        // $Generalized =$v5+$v7+$v8+$v14+$v21+$v23+$v24+$v29+$v31+$v35+$v37+$v39+$v44;
        // $Separation = $v4+$v13+$v16+$v20+$v26+$v30+$v33;
        // $SocialPhobis= $v3+$v10+$v27+$v34+$v41+$v42+$v43;



        // if($total>=23){
        //     $total_score =$total;
        // }else{
        //     $total = $total;
        // }

        // if($PanicDisorder >= 5){
        //     $PanicDisorder_score =$PanicDisorder;
        // }else{
        //     $PanicDisorder = $PanicDisorder;
        // }

        // if($Generalized >= 12){
        //     $Generalized_score =$Generalized;
        // }else{
        //     $Generalized = $Generalized;
        // }

        // if($Separation >= 3){
        //     $Separation_score =$Separation;
        // }else{
        //     $Separation = $Separation;
        // }
        // if($SocialPhobis >= 7){
        //     $SocialPhobis_score =$SocialPhobis;
        // }else{
        //     $SocialPhobis = $SocialPhobis;
        // }




      $id = questiondata::insertGetId([

            'name' => $request->client_name,
            'email' => $request->client_email,
            'phone' => $request->client_phone,
            'age' => $request->client_age,
            'address' => $request->client_address,

            // 'total' =>$total,
            // 'PanicDisorder' =>$PanicDisorder,
            // 'Generalized' => $Generalized,
            // 'Separation' =>$Separation,
            // 'SocialPhobis' => $SocialPhobis,

            // 'total_score' => $total,
            // 'PanicDisorder_score' =>$PanicDisorder_score,
            // 'Generalized_score' => $Generalized_score,
            // 'SocialPhobis_score' => $SocialPhobis_score,
            // 'Separation_score' => $Separation_score,

            'q1' => $v1,
            'q2' => $v2,
            'q3' => $v3,
            'q4' => $v4,
            'q5' => $v5,
            'q6' => $v6,
            'q7' => $v7,
            'q8' => $v8,
            'q9' => $v9,
            'q10' => $v10,
            'q11' => $v11,
            'q12' => $v12,
            'q13' => $v13,
            'q14' => $v14,
            'q15' => $v15,
            'q16' => $v16,
            'q17' => $v17,
            'q18' => $v18,
            'q19' => $v19,
            'q20' => $v20,
            'q21' => $v21,
            'q22' => $v22,
            'q23' => $v23,
            'q24' => $v24,
            'q25' => $v25,
            'q26' => $v26,
            'q27' => $v27,
            'q28' => $v28,
            'q29' => $v29,
            'q30' => $v30,
            'q31' => $v31,
            'q32' => $v32,
            'q33' => $v33,
            'q34' => $v34,
            'q35' => $v35,
            'q36' => $v36,
            'q37' => $v37,
            'q38' => $v38,
            'q39' => $v39,
            'q40' => $v40,
            'q41' => $v41,
            'q42' => $v42,
            'q43' => $v43,
            'q44' => $v44,

      		'created_at' => Carbon::now(),


		]);

        $pdf = Pdf::loadView('admin.invoice.pdf',[
            'id' => $id,






            ])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream('invoice-pdf');


    }//end



function Userinfo(){


   $clients= questiondata::all();

    return view('admin.user.data',[

        'clients'=>$clients,
    ]);
}//end

function UserDelete($id){

    questiondata::find($id)->delete();

    $notification = array(
        'message' => 'user data Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);


}//end


function adminPdf($id){


    $pdf = Pdf::loadView('admin.invoice.pdf',[
        'id' => $id,



        ])->setOptions(['defaultFont' => 'sans-serif']);

    return $pdf->stream('invoice-pdf');


}










}
