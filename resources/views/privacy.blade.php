<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.head')
</head>

<body style="background-color: #F4EFEB;">
    <div>
        @include('layouts.simplenav')
        <main>
            <div class="container">
                <div class=" d-flex align-items-center mb-5 py-5">
                    <div class="container">
                        <h1 class="col text-center">Privacy Disclaimer</h1>
                        <br>
                        <p class="col text-justify">Welcome to our hot desk site. Your trust is one of our most important assets. We take seriously the protection and proper use of the personal information you supply to us. This policy explains what personal information we may collect from you when you visit our websites, how we use such information, and the choices you have regarding our use of this information.</p>
                        <p class="col text-justify">We use information from our interactions with you and other customers on our Site. Because we respect your privacy, we have implemented procedures designed to handle your personal information in a safe, secure, and responsible manner.</p>
                        <p class="col text-justify">If you do not agree with the practices described in this policy, please do not provide us with your personal information or interact with the Site.</p>
                        <br>
                        <p class="col text-justify"><b>The Information We Collect and Use</b></p>
                        <p class="col text-justify">Information Collection: We may collect some or all of the following information from you when you visit and interact with our Site:</p>
                        <p class="col text-justify">1. Personal information that you voluntarily provide to us. Personal information is information about you that specifically identifies you or, when combined with other information we have, can be used to identify you. It includes such things as name, mailing address, telephone number, email address, date of birth, personal shopping preferences, purchase and ordering history, gender, demographic information, and financial information, such as payment card information.</p>
                        <p class="col text-justify">2. Non-identifying information we collect when you use the Site. Non-identifying information is information that alone cannot identify you and has not been associated with you. It includes such things as data from cookies or data about the device you use to access, use, or interact with our Site.</p>
                        <!--<p class="col text-center">Sample Only</p>
                         <div class="button float-right position-absolute" style="width: 10rem; float: right; bottom:200; right:0;">
                             <a href="#" class="btn btn-success">Help</a>
                         </div>-->
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('layouts.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

@include('layouts.scripts')


</html>