@extends('front.layout.main-layout')
@section('custom-style')
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
    }

    h3 {
        color: #333;
    }

    h3 {
        color: #555;
    }

    p {
        margin-bottom: 20px;
    }
</style>
@endsection
@section('content')
    <!-- header end -->



    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>Privacy Policies</h4>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policies</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    
  <section class="pt-2" id="hero">
    
    
    
  </section>

  <section class="pt-2" id="services">
    <div class="">

    <!-- banner section start -->
    <section class="pt-2 banner-goggles banner-offer ratio2_1">
        <div class="container">

    <p>Last updated: [12-03-2024]</p>

    <h3>Introduction</h3>

    <p>Welcome to Agriness Trading ("us," "we," or "our"). At Agriness Trading, we are committed to protecting your privacy and handling your personal information responsibly. This privacy policy outlines how we collect, use, disclose, and safeguard your information when you use our products, services, or interact with our website.</p>

    <h3>Information We Collect</h3>

    <h3 class="text-dark">Personal Information</h3>

    <p>We may collect personal information, such as:</p>
    <ul class="list">
        <li>Name</li>
        <li>Contact information (email address, phone number, address)</li>
        <li>Billing and payment details</li>
    </ul>

    <h3>Farming Data</h3>

    <p>As a farming service provider, we may collect and process farming-related data, including:</p>
    <ul class="list">
        <li>Agricultural practices</li>
        <li>Crop and livestock information</li>
        <li>Geographic data</li>
    </ul>

    <!-- Add more sections as needed -->

    <h3>How We Use Your Information</h3>

    <p>We use your information for the following purposes:</p>
    <ul class="list">
        <li>Providing and improving our products and services</li>
        <li>Processing transactions and payments</li>
        <li>Communicating with you about our products, services, and promotions</li>
        <li>Analyzing and improving our business operations</li>
        <li>Complying with legal and regulatory obligations</li>
    </ul>

    <!-- Add more sections as needed -->

    <h3>Information Sharing</h3>

    <p>We may share your information with:</p>
    <ul class="list">
        <li>Third-party service providers for the purpose of providing our services</li>
        <li>Business partners and affiliates for joint promotions or collaborations</li>
        <li>Law enforcement agencies, government authorities, or legal entities when required by law</li>
    </ul>

    <!-- Add more sections as needed -->

    <h3>Security</h3>

    <p>We take reasonable measures to protect your information from unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the internet or electronic storage is completely secure.</p>

    <!-- Add more sections as needed -->

    <h3>Your Choices</h3>

    <p>You have the right to:</p>
    <ul class="list">
        <li>Access, update, or correct your personal information</li>
        <li>Opt-out of marketing communications</li>
        <li>Request the deletion of your personal information, subject to legal obligations</li>
    </ul>

    <!-- Add more sections as needed -->

    <h3>Cookies and Tracking Technologies</h3>

    <p>Our website may use cookies and similar tracking technologies to enhance user experience and collect information about your interactions. You can manage your cookie preferences through your browser settings.</p>

    <!-- Add more sections as needed -->

    <h3>Changes to This Privacy Policy</h3>

    <p>We reserve the right to update this privacy policy to reflect changes in our practices or applicable laws. We will notify you of any material changes by posting the updated policy on our website.</p>

    <!-- Add more sections as needed -->

    <h3>Contact Us</h3>

    <p>If you have questions, concerns, or requests regarding this privacy policy, please contact us at <a href="mailto:{{getWebsiteData()['primary_mail']}}">{{getWebsiteData()['primary_mail']}}</a>.</p>

    <!-- Add more sections as needed -->

    <h3>Consent</h3>

    <p>By using our website or services, you consent to the terms outlined in this privacy policy.</p>


        </div>
    </section>



    @endsection