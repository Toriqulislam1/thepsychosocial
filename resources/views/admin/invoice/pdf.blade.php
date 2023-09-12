


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ __('Free Anxiety Rating Scale') }} </title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>


<style>
    * {
        font-family: 'Lato', sans-serif;
        line-height: 26px;
        font-size: 15px;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    /*=========================================================
      [ Table ]
    =========================================================*/

    .custom--table {
        width: 100%;
        color: inherit;
        vertical-align: top;
        font-weight: 400;
        border-collapse: collapse;
        border-bottom: 2px solid #ddd;
        margin-top: 0;
    }
    .table-title{
        font-size: 24px;
        font-weight: 600;
        line-height: 32px;
        margin-bottom: 10px;
    }
    .custom--table thead {
        font-weight: 700;
        background: inherit;
        color: inherit;
        font-size: 16px;
        font-weight: 500;
    }

    .custom--table tbody {
        border-top: 0;
        overflow: hidden;
        border-radius: 10px;
    }
    .custom--table thead tr {
        border-top: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        text-align: left;
    }
    .custom--table thead tr th {
        border-top: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        text-align: left;
        font-size: 16px;
        padding: 10px 0;
    }
    .custom--table tbody tr {
        vertical-align: top;
    }
    .custom--table tbody tr td {
        font-size: 14px;
        line-height: 18px
        vertical-align: top;
    }
    .custom--table tbody tr td:last-child{
        padding-bottom: 10px;
    }
    .custom--table tbody tr td .data-span {
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
    }
    .custom--table tbody .table_footer_row {
        border-top: 2px solid #ddd;
        margin-bottom: 10px !important;
        padding-bottom: 10px !important;

    }

    /* invoice area */

    .item-description h2 {
        color: rgba(0,0,0, 0.5);
        font-style: italic;
    }

    .invoice-area {
        padding: 10px 0;
    }

    .invoice-wrapper {
        max-width: 650px;
        margin: 0 auto;
        box-shadow: 0 0 10px #f3f3f3;
        padding: 40px;
    }

    .invoice-header {
        margin-bottom: 40px;
    }

    .invoice-flex-contents {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 24px;
        flex-wrap: wrap;
    }

    .invoice-logo {}

    .invoice-logo img {
        border-radius: 50%;
        width: 150px;
    }

    .invoice-header-contents h4{
        font-size: 14px;
        color: rgba(0,0,0, 0.8);
    }

    .invoice-header-contents {
        display: flex;
        justify-content: space-between;
        border-bottom: 3px solid #FDD700;
    }

    .invoice-details {
        margin-top: 20px;
    }

    .invoice-details-flex {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
    }

    .invoice-details-title {
        font-size: 24px;
        font-weight: 700;
        line-height: 32px;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .invoice-single-details {}

    .details-list {
        margin: 0;
        padding: 0;
        list-style: none;
        margin-top: 10px;
    }

    .details-list .list {
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        color: #666;
        margin: 0;
        padding: 0;
        transition: all .3s;
    }
    .details-list .list strong {
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
        color: #666;
        margin: 0;
        padding: 0;
        transition: all .3s;
    }

    .details-list .list a {
        display: inline-block;
        color: #666;
        transition: all .3s;
        text-decoration: none;
        margin: 0;
        line-height: 18px
    }

    .item-description {
        margin-top: 10px;
    }

    .products-item {
        text-align: left;
    }

    .invoice-total-count {}

    .invoice-total-count .list-single {
        display: flex;
        align-items: center;
        gap: 30px;
        font-size: 16px;
        line-height: 28px;
    }

    .invoice-total-count .list-single strong {}

    .invoice-subtotal {
        border-bottom: 2px solid #ddd;
        padding-bottom: 15px;
    }

    .invoice-total {
        padding-top: 10px;
    }

    .terms-condition-content {
        margin-top: 30px;
    }

    .terms-flex-contents {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .terms-left-contents {
        flex-basis: 50%;
    }

    .terms-title {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .terms-para {
        margin-top: 10px;
    }

    .invoice-footer {}

    .invoice-flex-footer {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 30px;
    }

    .single-footer-item {
        flex: 1;
    }

    .single-footer {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .single-footer .icon {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30px;
        width: 30px;
        font-size: 16px;
        background-color: #000e8f;
        color: #fff;
    }

    .icon-details {
        flex: 1;
    }

    .icon-details .list {
        display: block;
        text-decoration: none;
        color: #666;
        transition: all .3s;
        line-height: 24px;
    }
</style>




<!-- Invoice area Starts -->

 <div class="invoice-area">
    <div class="invoice-wrapper">
        <div class="invoice-header">
            <div class="invoice-flex-contents">
                <div class="invoice-logo">
                    <img src="{{ asset('frontend\assets\img\logo.jpg') }}" width="150px" alt="">
                </div>
            </div>
@php
    $data = App\Models\questiondata::find($id);

@endphp
            <div class="invoice-header-contents">
                <h4 class="name">{{ __('Name') }}: {{ $data->name }}</h4>
                <h4>{{ __('Email') }} :{{ $data->email }}</h4>
                <h4>{{ __('Phone') }}: {{ $data->phone}}</h4>
                <h4>{{ __('Age') }}:{{ $data->age}} </h4>
            </div>
        </div>


        <div class="item-description">
            <h5 class="table-title"> {{ $data->total_score}} - Anxiety Disorder</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A total score of ≥ 23 may indicate the presence of an Anxiety Disorder </h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            <h5 class="table-title"> {{ $data->PanicDisorder_score}}- Panic Disorder or Significant Somatic Symptoms</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 5 for items 1,2,6,9,11,12,15,17,18,19,22,25,28,32,36,38,40 may indicate Panic
                        Disorder or Significant Somatic Symptoms</h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            <h5 class="table-title"> {{ $data->Generalized_score}}- Generalized Anxiety Disorder.</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 12 for items 5,7,8,14,21,23,24,29,31,35,37,39,44 may indicate Generalized Anxiety Disorder.
                        </h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            <h5 class="table-title">{{ $data->Separation_score}} - Separation Anxiety Disorder.</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 3 for items 4,13,16,20,26,30,33 may indicate Separation Anxiety Disorder.</h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            <h5 class="table-title">{{ $data->SocialPhobis_score}} - Social Phobis Disorder.</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 7 for items 3,10,27,34,41,42,43 may indicate Social Phobis Disorder.</h2>
                </tr>
                </tbody>
            </table>
        </div>

        @if($data->total_score <21)


        <div class="item-description">
            <h5 class="table-title">Remarks</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h1 style="background-color: #FED700; color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px;">mild ( 0 -20 )</h1>
                </tr>
                </tbody>
            </table>
        </div>
        @elseif($data->total_score >21 && $data->total_score<41)

        <div class="item-description">
            <h5 class="table-title">Remarks</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h1 style="background-color: #FED700; color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px;">moderate (21- 40 )
                    </h1>
                </tr>
                </tbody>
            </table>
        </div>

        @else


        <div class="item-description">
            <h5 class="table-title">Remarks</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h1 style="background-color: #FED700; color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px;">severe (40+ )</h1>
                </tr>
                </tbody>
            </table>
        </div>

        @endif

    </div>
</div>

<!-- Invoice area end -->

</body>

</html>
