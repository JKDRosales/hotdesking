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

<body>
    <!-- <div id="app"> -->
    @include('layouts.navbar')
    <main style="background-color:#F4EFEB;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl mt-5 ml-5 pl-5">
                    <h1 class="text-center pt-5 mt-5 display-3 font-weight-bold"><strong>Get Things Done</strong></h1>
                    <br>
                    <p class="text-center font-italic">User Friendly Workspace Scheduling Software</p>
                    <p class="text-center"><strong>ホットデスク</strong> (Hotto Desuku) ensures a worthy service that allows organizations <br> to automate booking tasks hassle free.</p>
                </div>
                <div class="col-xl ml-5 pl-5">
                    <img class="img-fluid" src="{{URL('images/desk.png') }}">
                </div>
            </div>
        </div>
         
        <!-- EMACHINE -->
        <div class="pt-5 px-4" style="background-color:#FFFF;">
            <div class="container">
                <h2 class="text-center pb-5 display-4"><strong>E-Machine</strong></h2>
                <div class="text-center pb-5">
                    <p>eMachine is an Australian-based technology organization that design, create, and innovate consumer electronics, computer machines, digital devices, and related services for the betterment not just of Australian lives, but of people all around the globe.</p>
                </div>
            </div>
        </div>

        <!-- BOOKING STATUS --><!--
        <div class="pt-5 px-4 pb-5" style="background-color:#F4EFEB; border-radius:25px;">
            <div class="container">
                <h2 class="text-center pb-5 display-4"><strong>Booking Status</strong></h2>
                <div class="row">
                    <div class="col-xl text-center pb-4">
                        <h2>14</h2>
                        <h3><strong>Occupied</strong></h3>
                    </div>
                    <div class="col-xl text-center pb-4">
                        <h2>80</h2>
                        <h3><strong>Reserved</strong></h3>
                    </div>
                    <div class="col-xl text-center pb-4">
                        <h2>56</h2>
                        <h3><strong>Available</strong></h3>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- FEATURES -->
        <div class="pb-3" style="background-color:#F4EFEB;">
            <h2 class="text-center pb-5 pt-5 display-4" id="features"><strong>Features</strong></h2>
            <div class="container pb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl ">
                        <img class="img-fluid" src="{{URL('images/booking.png') }}" width="500">
                    </div>
                    <div class="col-xl ">
                        <h3 class="text-center pt-5">Booking</h3>
                        <p>Desk reservation made easy through hot desk software, with a simple and intuitive user interface for work scheduling, you can now have a collaborative and ideal workplace in the organization.</p>
                        <li>Effortless reservation and booking depends on your preferred day and time.</li>
                        <li>Flexible changes into your work calendar.</li>
                        <li>Easily book and reserve desks with an interactive map.</li>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl">
                        <h3 class="text-center pt-5">Dashboard View</h3>
                        <p>Provides users with a unique and powerful way visualization to present all bookings made by users—shows actionable and valuable information at a glance in an effective dashboard.</p>
                        <li>Provide insights of bookings made by all users with a table view.</li>
                        <li>Allow users to view how many desks are available, occupied and reserved.</li>
                    </div>
                    <div class="col-xl pt-5 d-flex justify-content-center">
                        <img class="img-fluid" src="{{URL('images/dashboard.png')}} " width="500">
                    </div>
                </div>
            </div>
            <div class="container pt-5 mt-5">
                <div class="row">
                    <div class="col-xl d-flex justify-content-center pb-5">
                        <img class="img-fluid" src="{{URL('images/map.png')}}" width="500">
                    </div>
                    <div class="col-xl">
                        <h3 class="text-center mb-4 pt-4">Office Map & Desk Locations</h3>
                        <p>Custom designed maps take the booking experience to the next level. Amaze your users with a complete visual of your space! It allows your users to view availability, occupied and reserved bookings directly from an office map and desk locations. </p>
                        <li>A full-scale office map with desk location allows users to decide where to book quickly.</li>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-xl">
                        <h3 class="text-center mb-4 pt-5">Work Calendar</h3>
                        <p>Build to operate the organization’s activities with more effective and efficient to boost productivity within the company. </p>
                        <li>Easily back track all the activities done in the records.</li>
                        <li>Hassle-free management with simple and easy to use setup.</li>
                    </div>
                    <div class="col-xl pt-5 d-flex justify-content-center">
                        <img class="img-fluid" src="{{URL('images/calendar.png')}}" width="500">
                    </div>
                </div>
            </div>
            <div class="container pt-5 pb-5 mt-5">
                <div class="row">
                    <div class="col-xl d-flex justify-content-center">
                        <img class="img-fluid" src="{{URL('images/help.png')}}" width="500">
                    </div>
                    <div class="col-xl pb-5">
                        <h3 class="text-center mb-4 pt-5 d-flex justify-content-center">Help & Support</h3>
                        <p>Quickly find answers to users' questions and solutions to the problems. Help and Support is designed to resolve many common queries that users experience.</p>
                        <li>Enables users to get help using user guides, frequently asked questions and a privacy disclaimer.</li>
                        <li>Make it simple for customers to find the answers they're looking for.</li>
                    </div>
                </div>
            </div>
    </main>
    @include('layouts.footer')
    @include('layouts.scripts')
</body>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>