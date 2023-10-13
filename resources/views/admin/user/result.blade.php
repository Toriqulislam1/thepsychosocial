<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ __('Billing Invoice - Webjourney') }} </title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&subset=devanagari" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>


<style>
    * {
        font-family: Noto Sans, sans-serif;

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
        /* border-bottom: 1px solid #ddd; */
        margin-top: 0;
    }
    .table-title{
        font-size: 16px;
        font-weight: 600;
        line-height: 25px;
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
        line-height: 18px;
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
        margin-bottom: 10px !important;
        padding-bottom: 10px !important;

    }

    .table_footer_row td {
        color: rgba(0, 0, 0, 0.5);
        padding-top: 0px;
    }

    .custom--table tbody tr td .right-ans {
        color: #5cc35c;
    }

    .custom--table tbody tr td .wrong-ans {
        color: rgb(255, 139, 139);
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
        margin-top: 35px;
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
                    <img src="./logo.jpg" width="150px" alt="">
                </div>
            </div>

            <div class="invoice-header-contents">
                <h4 class="name">Name: {{ $datainfo->name}}</h4>
                <h4>Email: {{ $datainfo->email }}</h4>
                <h4>Phone: {{ $datainfo->phone }}</h4>
                <h4>Age: {{ $datainfo->age }}</h4>
            </div>
        </div>


        {{-- question 1 --}}
        @if($datainfo->q1 == 0)
        <div class="item-description">
            <h5 class="table-title">1.जब म नर्भस महसुस गर्छु, मलाई सास फेर्न गाह्रो हुन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q1 == 1)
        <div class="item-description">
            <h5 class="table-title">1.जब म नर्भस महसुस गर्छु, मलाई सास फेर्न गाह्रो हुन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">1.जब म नर्भस महसुस गर्छु, मलाई सास फेर्न गाह्रो हुन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
{{-- question end --}}

        {{-- question 2 --}}
        @if($datainfo->q2 == 0)
        <div class="item-description">
            <h5 class="table-title">2.म स्कूलमा, काममा वा सार्वजनिक स्थानहरूमा हुँदा मलाई टाउको दुख्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q2 == 1)
        <div class="item-description">
            <h5 class="table-title">2.म स्कूलमा, काममा वा सार्वजनिक स्थानहरूमा हुँदा मलाई टाउको दुख्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">2.म स्कूलमा, काममा वा सार्वजनिक स्थानहरूमा हुँदा मलाई टाउको दुख्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}


        {{-- question 3 --}}
        @if($datainfo->q3 == 0)
        <div class="item-description">
            <h5 class="table-title">3.मलाई राम्रोसँग नचिनेका मानिसहरूसँग बस्न मन लाग्दैन।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q3 == 1)
        <div class="item-description">
            <h5 class="table-title">3.मलाई राम्रोसँग नचिनेका मानिसहरूसँग बस्न मन लाग्दैन।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">3.मलाई राम्रोसँग नचिनेका मानिसहरूसँग बस्न मन लाग्दैन।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}

            {{-- question 4 --}}
            @if($datainfo->q4 == 0)
            <div class="item-description">
                <h5 class="table-title">4.म घरबाट टाढा सुत्दा म नर्भस हुन्छु</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @elseif($datainfo->q4 == 1)
            <div class="item-description">
                <h5 class="table-title">4.म घरबाट टाढा सुत्दा म नर्भस हुन्छु</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @else
            <div class="item-description">
                <h5 class="table-title">4.म घरबाट टाढा सुत्दा म नर्भस हुन्छु</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>

            @endif
        {{-- question end --}}

                {{-- question 5 --}}
                @if($datainfo->q5 == 0)
                <div class="item-description">
                    <h5 class="table-title">5.मानिसहरूले मलाई मन पराउँछन् भनेर म चिन्तित छु</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @elseif($datainfo->q5 == 1)
                <div class="item-description">
                    <h5 class="table-title">5.मानिसहरूले मलाई मन पराउँछन् भनेर म चिन्तित छु</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <div class="item-description">
                    <h5 class="table-title">5.मानिसहरूले मलाई मन पराउँछन् भनेर म चिन्तित छु</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                @endif
            {{-- question end --}}

                    {{-- question 6 --}}
        @if($datainfo->q6 == 0)
        <div class="item-description">
            <h5 class="table-title">6.जब म चिन्तित हुन्छु, मलाई बेहोस हुन सक्छ जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q6 == 1)
        <div class="item-description">
            <h5 class="table-title">6.जब म चिन्तित हुन्छु, मलाई बेहोस हुन सक्छ जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">6.जब म चिन्तित हुन्छु, मलाई बेहोस हुन सक्छ जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}

            {{-- question 7 --}}
            @if($datainfo->q7 == 0)
            <div class="item-description">
                <h5 class="table-title">7.म नर्भस छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @elseif($datainfo->q7 == 1)
            <div class="item-description">
                <h5 class="table-title">7.म नर्भस छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @else
            <div class="item-description">
                <h5 class="table-title">7.म नर्भस छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>

            @endif
        {{-- question end --}}

                {{-- question 8 --}}
                @if($datainfo->q8 == 0)
                <div class="item-description">
                    <h5 class="table-title">8.मलाई चिन्ता गर्न छोड्न गाह्रो छ</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @elseif($datainfo->q8 == 1)
                <div class="item-description">
                    <h5 class="table-title">8.मलाई चिन्ता गर्न छोड्न गाह्रो छ</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <div class="item-description">
                    <h5 class="table-title">8.मलाई चिन्ता गर्न छोड्न गाह्रो छ</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                @endif
            {{-- question end --}}

                    {{-- question 9 --}}
        @if($datainfo->q9 == 0)
        <div class="item-description">
            <h5 class="table-title">9.मानिसहरू मलाई भन्छन् कि म नर्भस देखिन्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q9 == 1)
        <div class="item-description">
            <h5 class="table-title">9.मानिसहरू मलाई भन्छन् कि म नर्भस देखिन्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">9.मानिसहरू मलाई भन्छन् कि म नर्भस देखिन्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}
            {{-- question 10 --}}
            @if($datainfo->q10 == 0)
            <div class="item-description">
                <h5 class="table-title">10.मैले राम्ररी नचिनेका मानिसहरूसँग म नर्भस महसुस गर्छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @elseif($datainfo->q10 == 1)
            <div class="item-description">
                <h5 class="table-title">10.मैले राम्ररी नचिनेका मानिसहरूसँग म नर्भस महसुस गर्छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @else
            <div class="item-description">
                <h5 class="table-title">10.मैले राम्ररी नचिनेका मानिसहरूसँग म नर्भस महसुस गर्छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>

            @endif
        {{-- question end --}}
                {{-- question 11 --}}
                @if($datainfo->q11 == 0)
                <div class="item-description">
                    <h5 class="table-title">11..मलाई स्कूलमा, काममा, वा सार्वजनिक स्थानहरूमा पेट दुख्छ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @elseif($datainfo->q11 == 1)
                <div class="item-description">
                    <h5 class="table-title">11..मलाई स्कूलमा, काममा, वा सार्वजनिक स्थानहरूमा पेट दुख्छ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <div class="item-description">
                    <h5 class="table-title">11..मलाई स्कूलमा, काममा, वा सार्वजनिक स्थानहरूमा पेट दुख्छ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                @endif
            {{-- question end --}}
                    {{-- question 12 --}}
        @if($datainfo->q12 == 0)
        <div class="item-description">
            <h5 class="table-title">12जब म चिन्तित हुन्छु, म पागल भएँ जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q12 == 1)
        <div class="item-description">
            <h5 class="table-title">12जब म चिन्तित हुन्छु, म पागल भएँ जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">12जब म चिन्तित हुन्छु, म पागल भएँ जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}
            {{-- question 13 --}}
            @if($datainfo->q13 == 0)
            <div class="item-description">
                <h5 class="table-title">13.म एक्लै सुत्ने भयभीत लाग्छ ।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @elseif($datainfo->q13 == 1)
            <div class="item-description">
                <h5 class="table-title">13.म एक्लै सुत्ने भयभीत लाग्छ ।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @else
            <div class="item-description">
                <h5 class="table-title">13.म एक्लै सुत्ने भयभीत लाग्छ ।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>

            @endif
        {{-- question end --}}
                {{-- question 14 --}}
                @if($datainfo->q14 == 0)
                <div class="item-description">
                    <h5 class="table-title">14.म अरू मानिसहरू जस्तै असल हुन चिन्ता गर्छु ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @elseif($datainfo->q14 == 1)
                <div class="item-description">
                    <h5 class="table-title">14.म अरू मानिसहरू जस्तै असल हुन चिन्ता गर्छु ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <div class="item-description">
                    <h5 class="table-title">14.म अरू मानिसहरू जस्तै असल हुन चिन्ता गर्छु ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                @endif
            {{-- question end --}}
                    {{-- question 15 --}}
        @if($datainfo->q15 == 0)
        <div class="item-description">
            <h5 class="table-title">15.जब म चिन्तित हुन्छु, मलाई लाग्छ कि चीजहरू वास्तविक छैनन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q15 == 1)
        <div class="item-description">
            <h5 class="table-title">15.जब म चिन्तित हुन्छु, मलाई लाग्छ कि चीजहरू वास्तविक छैनन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">15.जब म चिन्तित हुन्छु, मलाई लाग्छ कि चीजहरू वास्तविक छैनन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}
            {{-- question 16 --}}
            @if($datainfo->q16 == 0)
            <div class="item-description">
                <h5 class="table-title">16.मेरो परिवारमा केहि नराम्रो भइरहेको बारे म दुःखद सपनाहरू देख्छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @elseif($datainfo->q16 == 1)
            <div class="item-description">
                <h5 class="table-title">16.मेरो परिवारमा केहि नराम्रो भइरहेको बारे म दुःखद सपनाहरू देख्छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @else
            <div class="item-description">
                <h5 class="table-title">16.मेरो परिवारमा केहि नराम्रो भइरहेको बारे म दुःखद सपनाहरू देख्छु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>

            @endif
        {{-- question end --}}
                {{-- question 17 --}}
                @if($datainfo->q17 == 0)
                <div class="item-description">
                    <h5 class="table-title">17.म काम वा स्कूल, वा सार्वजनिक स्थानहरूमा जाने भय लाग्छ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @elseif($datainfo->q17 == 1)
                <div class="item-description">
                    <h5 class="table-title">17.म काम वा स्कूल, वा सार्वजनिक स्थानहरूमा जाने भय लाग्छ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <div class="item-description">
                    <h5 class="table-title">17.म काम वा स्कूल, वा सार्वजनिक स्थानहरूमा जाने भय लाग्छ।</h5>
                    <table class="custom--table">
                        <tbody>

                        <tr class="table_footer_row">

                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                            <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                            <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                @endif
            {{-- question end --}}
                    {{-- question 18 --}}
        @if($datainfo->q18 == 0)
        <div class="item-description">
            <h5 class="table-title">18.जब म चिन्तित हुन्छु, मेरो मुटु छिटो धड्किन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q18 == 1)
        <div class="item-description">
            <h5 class="table-title">18.जब म चिन्तित हुन्छु, मेरो मुटु छिटो धड्किन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">18.जब म चिन्तित हुन्छु, मेरो मुटु छिटो धड्किन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}
            {{-- question 19 --}}
            @if($datainfo->q19 == 0)
            <div class="item-description">
                <h5 class="table-title">19.म कम्पन अनुभव गर्दैछु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @elseif($datainfo->q19 == 1)
            <div class="item-description">
                <h5 class="table-title">19.म कम्पन अनुभव गर्दैछु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @else
            <div class="item-description">
                <h5 class="table-title">19.म कम्पन अनुभव गर्दैछु।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>

            @endif
        {{-- question end --}}

        {{-- question 20 --}}
        @if($datainfo->q20 == 0)
        <div class="item-description">
            <h5 class="table-title">20.मलाई केहि नराम्रो भइरहेको बारे मा दुःस्वप्नहरू छन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q20 == 1)
        <div class="item-description">
            <h5 class="table-title">20.मलाई केहि नराम्रो भइरहेको बारे मा दुःस्वप्नहरू छन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">20.मलाई केहि नराम्रो भइरहेको बारे मा दुःस्वप्नहरू छन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}


        {{-- question 2 --}}
        @if($datainfo->q21 == 0)
        <div class="item-description">
            <h5 class="table-title">21.मलाई चिन्ता छ कि मेरो काम आशा अनुसार जान्छन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q21 == 1)
        <div class="item-description">
            <h5 class="table-title">21.मलाई चिन्ता छ कि मेरो काम आशा अनुसार जान्छन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">21.मलाई चिन्ता छ कि मेरो काम आशा अनुसार जान्छन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 22 --}}
        @if($datainfo->q22 == 0)
        <div class="item-description">
            <h5 class="table-title">22.जब म चिन्तित हुन्छु, मलाई धेरै पसिना आउँछ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q22 == 1)
        <div class="item-description">
            <h5 class="table-title">22.जब म चिन्तित हुन्छु, मलाई धेरै पसिना आउँछ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">22.जब म चिन्तित हुन्छु, मलाई धेरै पसिना आउँछ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}


        {{-- question 23 --}}
        @if($datainfo->q23 == 0)
        <div class="item-description">
            <h5 class="table-title">23.म चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q23 == 1)
        <div class="item-description">
            <h5 class="table-title">23.म चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">23.म चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}

        {{-- question 24 --}}
        @if($datainfo->q24 == 0)
        <div class="item-description">
            <h5 class="table-title">24.जब म धेरै चिन्ता गर्छु, मलाई निद्रामा समस्या हुन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q24 == 1)
        <div class="item-description">
            <h5 class="table-title">24.जब म धेरै चिन्ता गर्छु, मलाई निद्रामा समस्या हुन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">24.जब म धेरै चिन्ता गर्छु, मलाई निद्रामा समस्या हुन्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}




        {{-- question 25 --}}
        @if($datainfo->q25 == 0)
        <div class="item-description">
            <h5 class="table-title">25.म कुनै कारण बिना नै साँच्चै डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q25 == 1)
        <div class="item-description">
            <h5 class="table-title">25.म कुनै कारण बिना नै साँच्चै डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">25.म कुनै कारण बिना नै साँच्चै डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}




        {{-- question 26 --}}
        @if($datainfo->q26 == 0)
        <div class="item-description">
            <h5 class="table-title">26.म घरमा एक्लै हुन डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q26 == 1)
        <div class="item-description">
            <h5 class="table-title">26.म घरमा एक्लै हुन डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">26.म घरमा एक्लै हुन डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 27 --}}
        @if($datainfo->q27 == 0)
        <div class="item-description">
            <h5 class="table-title">27.मलाई राम्ररी नचिनेका मानिसहरूसँग कुरा गर्न गाह्रो छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q27 == 1)
        <div class="item-description">
            <h5 class="table-title">27.मलाई राम्ररी नचिनेका मानिसहरूसँग कुरा गर्न गाह्रो छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">27.मलाई राम्ररी नचिनेका मानिसहरूसँग कुरा गर्न गाह्रो छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 28 --}}
        @if($datainfo->q28 == 0)
        <div class="item-description">
            <h5 class="table-title">28.जब म चिन्तित हुन्छु, मलाई निसासिए जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q28 == 1)
        <div class="item-description">
            <h5 class="table-title">28.जब म चिन्तित हुन्छु, मलाई निसासिए जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">28.जब म चिन्तित हुन्छु, मलाई निसासिए जस्तो लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}


        {{-- question 29 --}}
        @if($datainfo->q29 == 0)
        <div class="item-description">
            <h5 class="table-title">29.मानिसहरूले मलाई भन्छन् कि म धेरै चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q29 == 1)
        <div class="item-description">
            <h5 class="table-title">29.मानिसहरूले मलाई भन्छन् कि म धेरै चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">29.मानिसहरूले मलाई भन्छन् कि म धेरै चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}

            {{-- question 30 --}}
            @if($datainfo->q30 == 0)
            <div class="item-description">
                <h5 class="table-title">30.मलाई मेरो परिवारबाट टाढा रहन मन पर्दैन।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @elseif($datainfo->q30 == 1)
            <div class="item-description">
                <h5 class="table-title">30.मलाई मेरो परिवारबाट टाढा रहन मन पर्दैन।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            @else
            <div class="item-description">
                <h5 class="table-title">30.मलाई मेरो परिवारबाट टाढा रहन मन पर्दैन।</h5>
                <table class="custom--table">
                    <tbody>

                    <tr class="table_footer_row">

                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                        <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                        <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                    </tr>
                    </tbody>
                </table>
            </div>

            @endif
        {{-- question end --}}



        {{-- question 31 --}}
        @if($datainfo->q31 == 0)
        <div class="item-description">
            <h5 class="table-title">31.जब म धेरै चिन्ता गर्छु, म बेचैन महसुस गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q31 == 1)
        <div class="item-description">
            <h5 class="table-title">31.जब म धेरै चिन्ता गर्छु, म बेचैन महसुस गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">31.जब म धेरै चिन्ता गर्छु, म बेचैन महसुस गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 32 --}}
        @if($datainfo->q32 == 0)
        <div class="item-description">
            <h5 class="table-title">32.म चिन्ता (वा आतंक) panic attacks हुन डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q32 == 1)
        <div class="item-description">
            <h5 class="table-title">32.म चिन्ता (वा आतंक) panic attacks हुन डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">32.म चिन्ता (वा आतंक) panic attacks हुन डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 33 --}}
        @if($datainfo->q33 == 0)
        <div class="item-description">
            <h5 class="table-title">33.मलाई चिन्ता छ कि मेरो परिवारमा केहि नराम्रो हुन सक्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q33 == 1)
        <div class="item-description">
            <h5 class="table-title">33.मलाई चिन्ता छ कि मेरो परिवारमा केहि नराम्रो हुन सक्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">33.मलाई चिन्ता छ कि मेरो परिवारमा केहि नराम्रो हुन सक्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 34 --}}
        @if($datainfo->q34 == 0)
        <div class="item-description">
            <h5 class="table-title">34.मलाई राम्ररी नचिनेका मानिसहरूसँग लज्जा लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q2 == 1)
        <div class="item-description">
            <h5 class="table-title">34.मलाई राम्ररी नचिनेका मानिसहरूसँग लज्जा लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">34.मलाई राम्ररी नचिनेका मानिसहरूसँग लज्जा लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 35 --}}
        @if($datainfo->q35 == 0)
        <div class="item-description">
            <h5 class="table-title">35.म भविष्यमा के हुनेछ भनेर चिन्ता गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q35 == 1)
        <div class="item-description">
            <h5 class="table-title">35.म भविष्यमा के हुनेछ भनेर चिन्ता गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">35.म भविष्यमा के हुनेछ भनेर चिन्ता गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 36 --}}
        @if($datainfo->q36 == 0)
        <div class="item-description">
            <h5 class="table-title">36.जब म चिन्तित हुन्छु, मलाई उबाकी (vomit) लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q36 == 1)
        <div class="item-description">
            <h5 class="table-title">36.जब म चिन्तित हुन्छु, मलाई उबाकी (vomit) लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">36.जब म चिन्तित हुन्छु, मलाई उबाकी (vomit) लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 37 --}}
        @if($datainfo->q37 == 0)
        <div class="item-description">
            <h5 class="table-title">37.म कति राम्रो काम गर्छु भन्ने चिन्ता गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q37 == 1)
        <div class="item-description">
            <h5 class="table-title">37.म कति राम्रो काम गर्छु भन्ने चिन्ता गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">37.म कति राम्रो काम गर्छु भन्ने चिन्ता गर्छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 38 --}}
        @if($datainfo->q38 == 0)
        <div class="item-description">
            <h5 class="table-title">38.म एक्लै बाहिर वा भीडभाड भएको ठाउँमा जान डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q38 == 1)
        <div class="item-description">
            <h5 class="table-title">38.म एक्लै बाहिर वा भीडभाड भएको ठाउँमा जान डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">38.म एक्लै बाहिर वा भीडभाड भएको ठाउँमा जान डराउँछु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 39 --}}
        @if($datainfo->q39 == 0)
        <div class="item-description">
            <h5 class="table-title">39.म पहिले नै भइसकेका चीजहरूको बारेमा चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q39 == 1)
        <div class="item-description">
            <h5 class="table-title">39.म पहिले नै भइसकेका चीजहरूको बारेमा चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">39.म पहिले नै भइसकेका चीजहरूको बारेमा चिन्तित छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}


        {{-- question 40 --}}
        @if($datainfo->q40 == 0)
        <div class="item-description">
            <h5 class="table-title">40.जब म चिन्तित हुन्छु, मलाई चक्कर लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q40 == 1)
        <div class="item-description">
            <h5 class="table-title">40.जब म चिन्तित हुन्छु, मलाई चक्कर लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">40.जब म चिन्तित हुन्छु, मलाई चक्कर लाग्छ।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}





        {{-- question 41 --}}
        @if($datainfo->q41 == 0)
        <div class="item-description">
            <h5 class="table-title">41.म अन्य मानिसहरूसँग हुँदा म नर्भस महसुस गर्छु र उनीहरूले मलाई हेर्दा मैले केही गर्नुपर्छ (उदाहरणका लागि: बोल्नुहोस्, खेल खेल्नुहोस्।)</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q41 == 1)
        <div class="item-description">
            <h5 class="table-title">41.म अन्य मानिसहरूसँग हुँदा म नर्भस महसुस गर्छु र उनीहरूले मलाई हेर्दा मैले केही गर्नुपर्छ (उदाहरणका लागि: बोल्नुहोस्, खेल खेल्नुहोस्।)</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">41.म अन्य मानिसहरूसँग हुँदा म नर्भस महसुस गर्छु र उनीहरूले मलाई हेर्दा मैले केही गर्नुपर्छ (उदाहरणका लागि: बोल्नुहोस्, खेल खेल्नुहोस्।)</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}


        {{-- question 42 --}}
        @if($datainfo->q42 == 0)
        <div class="item-description">
            <h5 class="table-title">42.म पार्टीहरू, नृत्यहरू, वा कुनै ठाउँमा जाँदा मलाई नर्भस लाग्छ जहाँ मलाई राम्ररी नचिनेका मानिसहरू हुनेछन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q42 == 1)
        <div class="item-description">
            <h5 class="table-title">42.म पार्टीहरू, नृत्यहरू, वा कुनै ठाउँमा जाँदा मलाई नर्भस लाग्छ जहाँ मलाई राम्ररी नचिनेका मानिसहरू हुनेछन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">42.म पार्टीहरू, नृत्यहरू, वा कुनै ठाउँमा जाँदा मलाई नर्भस लाग्छ जहाँ मलाई राम्ररी नचिनेका मानिसहरू हुनेछन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}


        {{-- question 43 --}}
        @if($datainfo->q43 == 0)
        <div class="item-description">
            <h5 class="table-title">43.म पार्टीहरू, नृत्यहरू, वा कुनै ठाउँमा जाँदा मलाई नर्भस लाग्छ जहाँ मलाई राम्ररी नचिनेका मानिसहरू हुनेछन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q43 == 1)
        <div class="item-description">
            <h5 class="table-title">43.म पार्टीहरू, नृत्यहरू, वा कुनै ठाउँमा जाँदा मलाई नर्भस लाग्छ जहाँ मलाई राम्ररी नचिनेका मानिसहरू हुनेछन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">43.म पार्टीहरू, नृत्यहरू, वा कुनै ठाउँमा जाँदा मलाई नर्भस लाग्छ जहाँ मलाई राम्ररी नचिनेका मानिसहरू हुनेछन्।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}



        {{-- question 44 --}}
        @if($datainfo->q44 == 0)
        <div class="item-description">
            <h5 class="table-title">44.म लजालु छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @elseif($datainfo->q44 == 1)
        <div class="item-description">
            <h5 class="table-title">44.म लजालु छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="item-description">
            <h5 class="table-title">44.म लजालु छु।</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">

                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 0 (सत्य होइन )</td>
                    <td><span class="wrong-ans"><i class="fa-solid fa-circle-xmark"></i></span> 1 (केहि हदसम्म सत्य वा कहिलेकाहीँ सत्य) 2. (धेरै सत्य वा अक्सर</td>
                    <td><span class="right-ans"><i class="fa-solid fa-circle-check"></i></span> 2. (धेरै सत्य वा अक्सर सत्य)</td>

                </tr>
                </tbody>
            </table>
        </div>

        @endif
    {{-- question end --}}












<!-- Invoice area end -->

</body>

</html>
