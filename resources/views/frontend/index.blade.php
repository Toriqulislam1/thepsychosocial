<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Survey</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <style>

        *{
            margin: 0;
            padding: 0;
            list-style: none;
            box-sizing: border-box;
        }

        .container{
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('question-store') }}" method="POST" class="mt-5 pt-5 mb-5">
            @csrf
            <div class="row">

                <!-- Name  -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="client_name" class="form-control form-control-lg" placeholder="Name">
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="email" name="client_email" class="form-control form-control-lg" placeholder="Email">
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="client_phone" class="form-control form-control-lg" placeholder="Phone">
                    </div>
                </div>

                <!-- Age -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="client_age" class="form-control form-control-lg" placeholder="Age  ">
                    </div>
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" name="client_address" rows="3" placeholder="Address"></textarea>
                </div>
                    {{-- decription --}}
                    <p class="fs-5 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    {{-- decription end --}}

                <!-- Survey Quize  -->
                <div class="row mt-5">
                    <div class="col-md-6">&nbsp;</div>
                    <div class="col-md-2 fw-bold text-center d-none d-md-block">None (Not at all)</div>
                    <div class="col-md-2 fw-bold text-center d-none d-md-block">Slight (Rare,less than a day or two)</div>
                    <div class="col-md-2 fw-bold text-center d-none d-md-block">Mild (Several days)</div>
                </div>
                @php
                $questions = App\Models\client::all();
                @endphp
                <!-- Question 01 -->

                {{-- @foreach ($questions as $key=>$question) --}}

                <div class="row survey-single-question-wrapper mb-4">

                    <div class="col-md-6">
                        <p class="fw-normal fs-5 form-check-label">1. question1</p>
                    </div>

                    <div class="col-sm col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="1" name="qv1" value="0">
                        <label for="1" class="text-center d-md-none form-check-label">None (Not at all)</label>
                    </div>

                    <div class="col-sm col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="2" name="qv1" value="1">
                        <label for="2" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
                    </div>

                    <div class="col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="3" name="qv1" value="2">
                        <label for="3" class="text-center d-md-none form-check-label">Mild (Several days)</label>
                    </div>


                    {{-- Question 02 --}}

                    <div class="col-md-6">
                        <p class="fw-normal fs-5 form-check-label">2. question1</p>
                    </div>

                    <div class="col-sm col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="4" name="qv2" value="0">
                        <label for="4" class="text-center d-md-none form-check-label">None (Not at all)</label>
                    </div>

                    <div class="col-sm col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="5" name="qv2" value="1">
                        <label for="5" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
                    </div>

                    <div class="col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="6" name="qv2" value="2">
                        <label for="6" class="text-center d-md-none form-check-label">Mild (Several days)</label>
                    </div>

                    {{-- Question 02 end--}}




 {{-- Question 03 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">3. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="7" name="qv3" value="0">
    <label for="7" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="8" name="qv3" value="1">
    <label for="8" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="9" name="qv3" value="2">
    <label for="9" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- Question 03 end--}}



 {{-- Question 04 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">4. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="10" name="qv4" value="0">
    <label for="10" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="11" name="qv4" value="1">
    <label for="11" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="12" name="qv4" value="2">
    <label for="12" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- Question 04 end--}}





 {{-- Question 05--}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="13" name="qv5" value="0">
    <label for="13" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="14" name="qv5" value="1">
    <label for="14" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="15" name="qv5" value="2">
    <label for="15" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- Question 05 end--}}


 {{-- Question 06 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">6. question</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="16" name="qv6" value="0">
    <label for="16" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="17" name="qv6" value="1">
    <label for="17" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="18" name="qv6" value="2">
    <label for="18" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- Question 06 end--}}




 {{-- Question 07 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">8. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="19" name="qv7" value="0">
    <label for="19" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="20" name="qv7" value="1">
    <label for="20" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="21" name="qv7" value="2">
    <label for="21" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- Question 07 end--}}




 {{-- Question 08 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">8. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="22" name="qv8" value="0">
    <label for="22" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="23" name="qv8" value="1">
    <label for="23" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="24" name="qv8" value="2">
    <label for="24" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- Question 08 end--}}




 {{-- Question 09 end--}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">9. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="25" name="qv9" value="0">
    <label for="25" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="26" name="qv9" value="1">
    <label for="26" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="27" name="qv9" value="2">
    <label for="27" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- Question 09 end--}}




 {{-- Question 10 end --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">10. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="28" name="qv10" value="0">
    <label for="28" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="29" name="qv10" value="1">
    <label for="29" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="30" name="qv10" value="2">
    <label for="30" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 10 end--}}



 {{-- 11 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="31" name="qv11" value="0">
    <label for="31" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="32" name="qv11" value="1">
    <label for="32" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="33" name="qv11" value="2">
    <label for="33" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 11 end--}}



 {{-- 12 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">12. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="34" name="qv12" value="0">
    <label for="34" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="35" name="qv12" value="1">
    <label for="35" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="36" name="qv12" value="2">
    <label for="36" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 12 end--}}



 {{-- 13 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">13. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="37" name="qv13" value="0">
    <label for="37" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="38" name="qv13" value="1">
    <label for="38" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="39" name="qv13" value="2">
    <label for="39" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 13 end--}}



 {{-- 14 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">14. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="40" name="qv14" value="0">
    <label for="40" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="41" name="qv14" value="1">
    <label for="41" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="42" name="qv14" value="2">
    <label for="42" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 14 end--}}


 {{-- 15 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">15. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="43" name="qv15" value="0">
    <label for="43" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="44" name="qv15" value="1">
    <label for="44" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="45" name="qv15" value="2">
    <label for="45" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 15 end--}}





 {{-- 16 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="46" name="qv16" value="0">
    <label for="46" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="47" name="qv16" value="1">
    <label for="47" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="48" name="qv16" value="2">
    <label for="48" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 16 end--}}





 {{-- 17 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">17. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="49" name="qv17" value="0">
    <label for="49" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="50" name="qv17" value="1">
    <label for="50" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="51" name="qv17" value="2">
    <label for="51" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 17 end--}}





 {{-- 18 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">18. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="52" name="qv18" value="0">
    <label for="52" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="53" name="qv18" value="1">
    <label for="53" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="54" name="qv18" value="2">
    <label for="54" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 18 end--}}





 {{-- 19 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">19. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="55" name="qv19" value="0">
    <label for="55" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="56" name="qv19" value="1">
    <label for="56" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="57" name="qv19" value="2">
    <label for="57" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 19 end--}}





 {{-- 20 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">20. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="58" name="qv20" value="0">
    <label for="58" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="59" name="qv20" value="1">
    <label for="59" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="60" name="qv20" value="2">
    <label for="60" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 20 end--}}





 {{-- 21 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">21. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="61" name="qv21" value="0">
    <label for="61" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="62" name="qv21" value="1">
    <label for="62" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="63" name="qv21" value="2">
    <label for="63" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 21 end--}}







 {{-- 22 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="64" name="qv22" value="0">
    <label for="64" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="65" name="qv22" value="1">
    <label for="65" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="66" name="qv22" value="2">
    <label for="66" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 22 end--}}





 {{-- 23 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">23. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="67" name="qv23" value="0">
    <label for="67" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="68" name="qv23" value="1">
    <label for="68" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="69" name="qv23" value="2">
    <label for="69" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 23 end--}}







 {{-- 24 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">24. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="70" name="qv24" value="0">
    <label for="70" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="71" name="qv24" value="1">
    <label for="71" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="72" name="qv24" value="2">
    <label for="72" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 24 end--}}





 {{-- 25 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">25. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="73" name="qv25" value="0">
    <label for="73" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="74" name="qv25" value="1">
    <label for="74" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="75" name="qv25" value="2">
    <label for="75" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 25 end--}}





 {{-- 26 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">26. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="76" name="qv26" value="0">
    <label for="76" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="77" name="qv26" value="1">
    <label for="77" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="78" name="qv26" value="2">
    <label for="78" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 26 end--}}





 {{-- 27 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">28. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="79" name="qv27" value="0">
    <label for="79" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="80" name="qv27" value="1">
    <label for="80" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="81" name="qv27" value="2">
    <label for="81" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 27 end--}}


 {{-- 28 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">28. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="82" name="qv28" value="0">
    <label for="82" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="83" name="qv28" value="1">
    <label for="83" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="84" name="qv28" value="2">
    <label for="84" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 28 end--}}





 {{-- 29 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">29. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="85" name="qv29" value="0">
    <label for="85" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="86" name="qv29" value="1">
    <label for="86" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="87" name="qv29" value="2">
    <label for="87" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 29 end--}}



 {{-- 30 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">30. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="88" name="qv30" value="0">
    <label for="88" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="89" name="qv30" value="1">
    <label for="89" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="90" name="qv30" value="2">
    <label for="90" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 30 end--}}



 {{-- 31 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">31. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="91" name="qv31" value="0">
    <label for="91" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="92" name="qv31" value="1">
    <label for="92" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="93" name="qv31" value="2">
    <label for="93" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 31 end--}}


 {{-- 32 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="94" name="qv32" value="0">
    <label for="94" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="95" name="qv32" value="1">
    <label for="95" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="96" name="qv32" value="2">
    <label for="96" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 32 end--}}



 {{-- 33 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="97" name="qv33" value="0">
    <label for="97" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="98" name="qv33" value="1">
    <label for="98" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="99" name="qv33" value="2">
    <label for="99" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 33 end--}}



 {{-- 34 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">34. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="100" name="qv34" value="0">
    <label for="100" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="101" name="qv34" value="1">
    <label for="101" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="102" name="qv34" value="2">
    <label for="102" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 34 end--}}


 {{-- 35 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">35. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="103" name="qv35" value="0">
    <label for="103" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="104" name="qv35" value="1">
    <label for="104" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="105" name="qv35" value="2">
    <label for="105" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 35 end--}}




 {{-- 36 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">36. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="106" name="qv36" value="0">
    <label for="106" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="107" name="qv36" value="1">
    <label for="107" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="108" name="qv36" value="2">
    <label for="108" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 36 end--}}



 {{-- 37 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="109" name="qv37" value="0">
    <label for="109" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="110" name="qv37" value="1">
    <label for="110" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="111" name="qv37" value="2">
    <label for="111" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 37 end--}}

 {{-- 38 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">2. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="112" name="qv38" value="0">
    <label for="112" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="113" name="qv38" value="1">
    <label for="113" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="114" name="qv38" value="2">
    <label for="114" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 38 end--}}

 {{-- 39 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">39. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="115" name="qv39" value="0">
    <label for="4" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="5" name="qv39" value="1">
    <label for="115" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="116" name="qv39" value="2">
    <label for="116" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 39 end--}}

 {{-- 40 --}}

 <div class="col-md-6">
    <p class="fw-normal fs-5 form-check-label">40. question1</p>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="117" name="qv40" value="0">
    <label for="117" class="text-center d-md-none form-check-label">None (Not at all)</label>
</div>

<div class="col-sm col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="118" name="qv40" value="1">
    <label for="118" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
</div>

<div class="col-md-2 text-sm-start text-md-center">
    <input type="radio" class="form-check-input" id="119" name="qv40" value="2">
    <label for="119" class="text-center d-md-none form-check-label">Mild (Several days)</label>
</div>

{{-- 40 end--}}






                </div>
                {{-- @endforeach --}}
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>


            </div>
        </form>
    </div>
</body>
</html>
