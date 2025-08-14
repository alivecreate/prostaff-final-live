<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>ORDER DETAILS</title>
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
            margin-bottom: 10px;
            margin-left: 20px;
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
                                <h2 class="title">ORDER DETAILS</h2>
                            </td>
                        </tr>
                    </table>
                    <table  width="100%" style=" margin-bottom: 30px;" class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
                        
                        <tr>
                            <td
                                style="line-height: 1.5; padding: 10px;font-size: 14px;color: #000000;text-align:left;border-right: unset;">
                                Order Date:</td>
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
                                    text-align:left;border-right: unset;">Message :</td>
                            <td colspan="3" class="price"
                                style="line-height: 1.5; padding: 10px;text-align: left;padding-right: 16px;font-size: 14px;color: #000000;text-align:right;border-left: unset;">
                                <p>{{$customer['message']}}</p></td>
                        </tr>
                        
                        <tr align="left">
                            <th>PRODUCT</th>
                            <th style="padding-left: 15px; text-align:left;">DESCRIPTION</th>
                            <th style=" text-align:left;">QUANTITY</th>
                        </tr>
                            
                        @foreach ($cartData as $product_id => $quantity)
                        
                            <tr>
                                <td>
                                    @if(isset(getProductImage($product_id)['image']))
                                        <img width="100" src="{{asset('web/media/md')}}/{{getProductImage($product_id)['image']}}" alt="">
                                    @endif
                                </td>
                                <td valign="top" style="padding-left: 15px;"  width="400">
                                    <h5 style="margin-top: 15px;">{{findSingleProduct($product_id)['name']}}</h5>
                                </td>
                                <td valign="top" style="padding-left: 15px; text-align:left;">
                                    <h5 style="font-size: 14px; color:#444;margin-top:15px; margin-bottom: 0px;"> {{$quantity}} KG</h5>
                                </td>
                            </tr>
                        @endforeach
                        
                        <tr>
                            
                            <th valign="top" style="padding-left: 15px;" colspan="2">
                                <h5 style="margin-top: 15px; font-weight:bold;">Total Items</h5>
                            </th>
                            <th valign="top" style="padding-left: 15px; text-align:left;">
                                <h5 style=" font-weight:bold;font-size: 14px; color:#444;margin-top:15px; margin-bottom: 0px;"> {{count($cartData)}}</h5>
                            </th>
                        </tr>
                           
                    </table>

                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>