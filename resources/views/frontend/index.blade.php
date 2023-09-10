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

                @foreach ($questions as $key=>$question)

                <div class="row survey-single-question-wrapper mb-4">
                    
                    <div class="col-md-6">
                        <p class="fw-normal fs-5 form-check-label">{{ $key+1 }}. {{ $question->client_title}}</p>
                    </div>

                    <div class="col-sm col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="{{ $key }} " name="{{ $key }}" value="0">
                        <label for="{{ $key }}" class="text-center d-md-none form-check-label">None (Not at all)</label>
                    </div>

                    <div class="col-sm col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="op1{{ $key}}" name="{{ $key }}" value="1">
                        <label for="op1{{ $key}}" class="text-center d-md-none form-check-label">Slight (Rare,less than a day or two)</label>
                    </div>

                    <div class="col-md-2 text-sm-start text-md-center">
                        <input type="radio" class="form-check-input" id="op{{ $key }}" name="{{ $key }}" value="2">
                        <label for="op{{ $key}}" class="text-center d-md-none form-check-label">Mild (Several days)</label>
                    </div>

                </div>
                @endforeach
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>


            </div>
        </form>
    </div>
</body>
</html>
