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
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1.4;
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
 
    <h2 class="title">Thank You for the contacting us,</h2>
    <p>Our team has received your inquiry and will review it shortly. We strive to provide prompt and informative responses to all inquiries, and we'll do our best to address your questions or concerns.</p>

    <img class="" style="background:white"
        width="200"
        src="{{asset('web/media/sm')}}/{{ getWebsiteData()['main_logo'] }}" alt="">
        <h3>Contact Detail:</h3>
        <h4>{{ getWebsiteData()['primary_phone'] }}</h4>
        <h4>{{ getWebsiteData()['primary_mail'] }}</h4>
        <h4>{{ getWebsiteData()['address'] }}</h4>


</body>

</html>