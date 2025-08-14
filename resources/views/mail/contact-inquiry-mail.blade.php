<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Contact Inquiry</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Open Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

      

        .custom-list{
            display: block;
        }
        .custom-list li {
            display: list-item;
            list-style: auto;
            text-align: left;
        }
        

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-left: 20px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 17px;
            padding: 15px;
            text-align: center;
        }
        p{
            font-size: 16px;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body style="margin: 20px auto;min-width: 400px;max-width: 700px;">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
        <tbody>
            <tr>
                <td>
                    
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <h2 class="title">Contact Inquiry</h2>
                            </td>
                        </tr>
                    </table>
                    <table width="100%" style=" margin-bottom: 30px;" class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
                        
                        <tr>
                            <td
                                style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;text-align:left;border-right: unset;">
                                Inquiry Date:</td>
                            <td colspan="3" class="price"
                                style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <b>{{dateTimeFormat()}}</b></td>
                        </tr>
                        {{-- {{dd($customer['name'])}} --}}
                        <tr>
                            <td
                                style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;text-align:left;border-right: unset;">
                                Full Name:</td>
                            <td colspan="3" class="price"
                                style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <b>{{$customer['name']}}</b></td>
                        </tr>
                        <tr>
                            <td
                                style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;text-align:left;border-right: unset;">
                                Phone:</td>
                            <td colspan="3" class="price"
                                style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <b>{{$customer['phone']}}</b></td>
                        </tr>
                        <tr>
                            <td
                                style="line-height: 1.5; padding: 10px;font-family: Arial;font-size: 14px;color: #000000;text-align:left;border-right: unset;">
                                Email: </td>
                            <td colspan="3" class="price"
                                style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <b>{{$customer['email']}}</b></td>
                        </tr>
                        <tr>
                            <td style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;
                                    text-align:left;border-right: unset;">Address :</td>
                            <td colspan="3" class="price"
                                style="
                                        line-height: 1.5; padding: 10px;text-align: right;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <b>{{$customer['address']}}</b></td>
                        </tr>
                        
                        <tr>
                            <td style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;
                                    text-align:left;border-right: unset;">Service :</td>
                            <td colspan="3" class="price"
                                style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <p>{{$customer['service']}}</p></td>
                        </tr>
                        @if($customer['individualService'])
                            <tr>
                                <td style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;
                                        text-align:left;border-right: unset;">Individual Services :</td>
                                    {{-- {{dd(explode(', ', $customer['individualService']))}} --}}
                                    
                                    @php  
                                        if($customer['individualService']){
                                            $individualServices = explode(', ', $customer['individualService']);
                                        }
                                        else{
                                            $individualServices = null;
                                        }
                                    @endphp

                                @if($individualServices)     
                                    <td colspan="3" class="price"
                                        style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                        
                                        <ul class="custom-list">
                                            @foreach($individualServices as $individualService)
                                                <li>{{$individualService}}</li>
                                            @endforeach  
                                        </ul> 
                                    </td>
                                @endif

                            </tr>
                        @endif
                        
                        <tr>
                            <td style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;
                                    text-align:left;border-right: unset;">Message :</td>
                            <td colspan="3" class="price"
                                style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <p>{{$customer['message']}}</p></td>
                        </tr>
                           
                    </table>

                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>