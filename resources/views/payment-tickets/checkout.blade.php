<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset(" assets/styles/payments.css") }}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- Bootstrap icons CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <title>Last Chance Ticket - Buyer</title>
    <style>
        .track-line {
            height: 2px !important;
            background-color: #61c3e3;
            opacity: 1;
        }

        .dot {
            height: 10px;
            width: 10px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 0px;
            background-color: #61c3e3;
            border-radius: 50%;
            display: inline-block
        }

        .big-dot {
            height: 25px;
            width: 25px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            background-color: #61c3e3;
            border-radius: 50%;
            display: inline-block;
        }

        .big-dot i {
            font-size: 12px;
        }

        .card-stepper {
            z-index: 0
        }


    </style>
</head>

<body>
    @include("auth.partials.newHeader")


    <section class="" style="background-color: #eee;">

        <div class="container py-5 ">
            <!--<div class="row text-center tabs-row">-->
            <!--    <div class="col-md-4 col-lg-4 p-2">-->
            <!--        <h5 class="tabs-title "><i class="bi bi-check-lg me-3"></i>1. Browse Events</h5>-->
            <!--    </div>-->
            <!--    <div class="col-md-4 col-lg-4 p-2">-->
            <!--        <h5 class="tabs-title "><i class="bi bi-check-lg me-3"></i>2. Choose Your Tickets</h5>-->
            <!--    </div>-->
            <!--    <div class="col-md-4 col-lg-4 p-2">-->
            <!--        <h5 class="tabs-title tabs-active"><i class="bi bi-pen-fill me-3"></i>3.Confirm Details</h5>-->
            <!--    </div>-->
            <!--</div>-->


            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 mb-3">
                    <div class="card card-stepper" style="border-radius: 10px;">
                        <div class="card-body p-4">
                            <div class="container">

                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">


                                    <span class="lead fw-normal">Your Order Details</span>
                                    <span class="text-muted small">by LAST CHANCE TICKET</span>
                                </div>

                                <div>
                                    <a href="{{URL('/')}}" class="">
                                        <h3 style="font-family: Georgia, 'Times New Roman', Times, serif">LAST CHANCE
                                            TICKET</h3>
                                        {{-- <img src="{{asset('assets/images/logo1.png')}}" width="30px" height="40px"
                                            alt=""> --}}
                                    </a>
                                    {{-- <button class="btn btn-outline-primary" type="button">Track order
                                        details</button> --}}
                                    {{-- <span class="bg-danger text-white p-2" style=" border-radius: 30%" type="">{{
                                        get_when($events->event_date) }}</span> --}}
                                </div>
                            </div>
                            <hr class="my-4">

                            <div
                                class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                <span class="dot"></span>
                                <hr class="flex-fill track-line"><span class="dot"></span>
                                <hr class="flex-fill track-line"><span class="dot"></span>
                                <hr class="flex-fill track-line"><span class="dot"></span>
                                <hr class="flex-fill track-line"><span
                                    class="d-flex justify-content-center align-items-center big-dot dot">
                                    <i class="fa fa-check text-white"></i></span>
                            </div>
                            <div class="row d-flex flex-row justify-content-between align-items-center">

                                <div class="col-md-2 d-flex flex-column align-items-start"><span><b>EVENT : </b> <br>{{
                                        $events->event_name }}</span></div>
                                <div class="col-md-2 d-flex flex-column "><span></span><b>EVENT TIME :</b>{{
                                    $events->start_time }}-{{ $events->end_time }}<span></div>
                                <div class="col-md-2 d-flex  flex-column  "><span><b>DATE : </b><br>{{
                                        $events->event_date }}</span></div>
                                <div class="col-md-2 d-flex flex-column "><span><b>VENUE : </b><br>{{ $events->vTitle
                                        }}</span></div>
                                <div class="col-md-2 d-flex flex-column "><span><b>CATEGORY : </b><br>
                                        {{$tickets->type_cat}}</span></div>
                                {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                            </div><br>
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-2 d-flex flex-column "><span><b>SECTION : ROW</b><br>{{
                                        $tickets->type_sec
                                        }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{
                                        $tickets->type_row }}</span></div>
                                <div class="col-md-2 d-flex flex-column "><span><b>SEATING AREA :</b><br>{{
                                        $tickets->seated_area }}</span></div>
                                <div class="col-md-2 d-flex flex-column "><span><b>TICKET : </b><br>{{
                                        $tickets->ticket_type }}</span></div>
                                <div class="col-md-2 d-flex flex-column "><span id="noticket"><b>AVAILABLE TICKETS :
                                        </b><br>{{ $tickets->quantity }}</span></div>
                                <div class="col-md-2 d-flex flex-column "><span><b>PER-TICKET :</b><br>${{
                                        $tickets->price }}</span></div>

                                <input type="hidden" id="pricetotal" value="{{ $tickets->price }}" name="price">
                                {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                            </div>
                            <form method="get" action="{{ route('buyer.ticket.purchase', $tickets->id) }}" role="form"
                                method="post" class="validation">
                                {{-- @csrf --}}
                                <div class="row d-flex flex-row justify-content-between align-items-center" id="v2">
                                    {{-- <input type="hidden" id="" name="shipcharges" value="" /> --}}
                                    @if ($tickets->ticket_type == "Paper-Ticket")
                                    <div class="col-md-4 d-flex flex-column " name="shipingCharges"
                                        id="shipment-charges"></div>
                                    @endif
                                    {{-- <div class="col-md-2 d-flex flex-column "><span><b>TOTAL-PRICE :</b><br>${{
                                            $tickets->price }}</span></div>
                                    --}}
                                    {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    @if ($message = Session::get('message'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <div class="card p-3 shadow-sm br-10 mb-3">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="confirm d-flex justify-content-between align-items-center "
                                    style="margin-top: 30px;">
                                    <h5 class="fw-700 mb-5">Please confirm how many tickets you would like to purchase
                                    </h5>
                                    {{-- <div class="social-link">
                                        <i class="bi bi-facebook me-2"></i>
                                        <i class="bi bi-twitter me-2"></i>
                                        <i class="bi bi-link-45deg"></i>
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            <div class="alert-icon">
                                                <i class="flaticon-warning "></i>
                                            </div>
                                            <div class="alert-text">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div><br />
                                        @endif
                                    </div>
                                </div>
                                <div class="number-of-tickets mb-5">
                                    <h6>Select The Number Of Tickets</h6>
                                    @php
                                    $selectedQuantity = request()->get('selectedQuantity');
                                    @endphp

                                    <select class="form-select @error('quantity') is-invalid @enderror" id="ticket"
                                        name="quantity" required>
                                        <option selected disabled>Select Number of Tickets</option>
                                        @for ($i = 1; $i <= $tickets->quantity; $i++)
                                            <option value="{{ $i }}" @if($selectedQuantity==$i) selected @endif>{{ $i }}
                                                Tickets</option>
                                            @endfor
                                    </select>
                                </div>

                                <div class="mt-2">
                                    @if ($tickets->ticket_type == "Paper-Ticket")
                                    <div id="v1">
                                        <table>
                                            <tr>
                                                <td>Select Your Country</td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <select name="country_id"
                                                        class="form-control @error('country_id') is-invalid @enderror"
                                                        id="country_id">
                                                        <option selected disabled>Select Country</option>
                                                        <option name="country_id">Afghanistan</option>
                                                        <option name="country_id">Åland Islands</option>
                                                        <option name="country_id">Albania</option>
                                                        <option name="country_id">Algeria</option>
                                                        <option name="country_id">American Samoa</option>
                                                        <option name="country_id">Andorra</option>
                                                        <option name="country_id">Angola</option>
                                                        <option name="country_id">Anguilla</option>
                                                        <option name="country_id">Antarctica</option>
                                                        <option name="country_id">Antigua & Barbuda</option>
                                                        <option name="country_id">Argentina</option>
                                                        <option name="country_id">Armenia</option>
                                                        <option name="country_id">Aruba</option>
                                                        <option name="country_id">Australia</option>
                                                        <option name="country_id">Austria</option>
                                                        <option name="country_id">Azerbaijan</option>
                                                        <option name="country_id">Bahamas</option>
                                                        <option name="country_id">Bahrain</option>
                                                        <option name="country_id">Bangladesh</option>
                                                        <option name="country_id">Barbados</option>
                                                        <option name="country_id">Belarus</option>
                                                        <option name="country_id">Belgium</option>
                                                        <option name="country_id">Belize</option>
                                                        <option name="country_id">Benin</option>
                                                        <option name="country_id">Bermuda</option>
                                                        <option name="country_id">Bhutan</option>
                                                        <option name="country_id">Bolivia</option>
                                                        <option name="country_id">Caribbean Netherlands</option>
                                                        <option name="country_id">Bosnia & Herzegovina</option>
                                                        <option name="country_id">Botswana</option>
                                                        <option name="country_id">Bouvet Island</option>
                                                        <option name="country_id">Brazil</option>
                                                        <option name="country_id">British Indian Ocean Territory
                                                        </option>
                                                        <option name="country_id">Brunei</option>
                                                        <option name="country_id">Bulgaria</option>
                                                        <option name="country_id">Burkina Faso</option>
                                                        <option name="country_id">Burundi</option>
                                                        <option name="country_id">Cambodia</option>
                                                        <option name="country_id">Cameroon</option>
                                                        <option name="country_id">Canad</option>
                                                        <option name="country_id">Cape Verde</option>
                                                        <option name="country_id">Cayman Islands</option>
                                                        <option name="country_id">Central African Republic</option>
                                                        <option name="country_id">Chad</option>
                                                        <option name="country_id">Chile</option>
                                                        <option name="country_id">China</option>
                                                        <option name="country_id">Christmas Island</option>
                                                        <option name="country_id">Cocos (Keeling) Islands</option>
                                                        <option name="country_id">Colombia</option>
                                                        <option name="country_id">Comoros</option>
                                                        <option name="country_id">Congo - Brazzaville</option>
                                                        <option name="country_id">Congo - Kinshasa</option>
                                                        <option name="country_id">Cook Islands</option>
                                                        <option name="country_id">Costa Rica</option>
                                                        <option name="country_id">Côte d’Ivoire</option>
                                                        <option name="country_id">Croatia</option>
                                                        <option name="country_id">Cuba</option>
                                                        <option name="country_id">Curaçao</option>
                                                        <option name="country_id">Cyprus</option>
                                                        <option name="country_id">Czechia</option>
                                                        <option name="country_id">Denmark</option>
                                                        <option name="country_id">Djibouti</option>
                                                        <option name="country_id">Dominica</option>
                                                        <option name="country_id">Dominican Republic</option>
                                                        <option name="country_id">Ecuador</option>
                                                        <option name="country_id">Egypt</option>
                                                        <option name="country_id">El Salvador</option>
                                                        <option name="country_id">Equatorial Guinea</option>
                                                        <option name="country_id">Eritrea</option>
                                                        <option name="country_id">Estonia</option>
                                                        <option name="country_id">Ethiopia</option>
                                                        <option name="country_id">Falkland Islands (Islas Malvinas)
                                                        </option>
                                                        <option name="country_id">Faroe Islands</option>
                                                        <option name="country_id">Fiji</option>
                                                        <option name="country_id">Finland</option>
                                                        <option name="country_id">France</option>
                                                        <option name="country_id">French Guiana</option>
                                                        <option name="country_id">French Polynesia</option>
                                                        <option name="country_id">French Southern Territories</option>
                                                        <option name="country_id">Gabon</option>
                                                        <option name="country_id">Gambia</option>
                                                        <option name="country_id">Georgia</option>
                                                        <option name="country_id">Germany</option>
                                                        <option name="country_id">Ghana</option>
                                                        <option name="country_id">Gibraltar</option>
                                                        <option name="country_id">Greece</option>
                                                        <option name="country_id">Greenland</option>
                                                        <option name="country_id">Grenada</option>
                                                        <option name="country_id">Guadeloupe</option>
                                                        <option name="country_id">Guam</option>
                                                        <option name="country_id">Guatemala</option>
                                                        <option name="country_id">Guernsey</option>
                                                        <option name="country_id">Guinea</option>
                                                        <option name="country_id">Guinea-Bissau</option>
                                                        <option name="country_id">Guyana</option>
                                                        <option name="country_id">Haiti</option>
                                                        <option name="country_id">Heard & McDonald Island</option>
                                                        <option name="country_id">Vatican City</option>
                                                        <option name="country_id">Honduras</option>
                                                        <option name="country_id">Hong Kong</option>
                                                        <option name="country_id">Hungary</option>
                                                        <option name="country_id">Iceland</option>
                                                        <option name="country_id">India</option>
                                                        <option name="country_id">Indonesia</option>
                                                        <option name="country_id">Iran</option>
                                                        <option name="country_id">Iraq</option>
                                                        <option name="country_id">Ireland</option>
                                                        <option name="country_id">Isle of Man</option>
                                                        <option name="country_id">Israel</option>
                                                        <option name="country_id">Italy</option>
                                                        <option name="country_id">Jamaica</option>
                                                        <option name="country_id">Japan</option>
                                                        <option name="country_id">Jersey</option>
                                                        <option name="country_id">Jordan</option>
                                                        <option name="country_id">Kazakhsta</option>
                                                        <option name="country_id">Kenya</option>
                                                        <option name="country_id">Kiribati</option>
                                                        <option name="country_id">North Korea</option>
                                                        <option name="country_id">South Korea</option>
                                                        <option name="country_id">Kosovo</option>
                                                        <option name="country_id">Kuwait</option>
                                                        <option name="country_id">Kyrgyzstan</option>
                                                        <option name="country_id">Laos</option>
                                                        <option name="country_id">Latvia</option>
                                                        <option name="country_id">Lebanon</option>
                                                        <option name="country_id">Lesotho</option>
                                                        <option name="country_id">Liberia</option>
                                                        <option name="country_id">Libya</option>
                                                        <option name="country_id">Liechtenstein</option>
                                                        <option name="country_id">Lithuania</option>
                                                        <option name="country_id">Luxembourg</option>
                                                        <option name="country_id">Macao</option>
                                                        <option name="country_id">North Macedonia</option>
                                                        <option name="country_id">Madagascar</option>
                                                        <option name="country_id">Malawi</option>
                                                        <option name="country_id">Malaysia</option>
                                                        <option name="country_id">Maldives</option>
                                                        <option name="country_id">Mali</option>
                                                        <option name="country_id">Malta</option>
                                                        <option name="country_id">Marshall Islands</option>
                                                        <option name="country_id">Martinique</option>
                                                        <option name="country_id">Mauritania</option>
                                                        <option name="country_id">Mauritius</option>
                                                        <option name="country_id">Mayotte</option>
                                                        <option name="country_id">Mexico</option>
                                                        <option name="country_id">Micronesia</option>
                                                        <option name="country_id">Moldova</option>
                                                        <option name="country_id">Monaco</option>
                                                        <option name="country_id">Mongolia</option>
                                                        <option name="country_id">Montenegro</option>
                                                        <option name="country_id">Montserrat</option>
                                                        <option name="country_id">Morocco</option>
                                                        <option name="country_id">Mozambique</option>
                                                        <option name="country_id">Myanmar (Burma)</option>
                                                        <option name="country_id">Namibia</option>
                                                        <option name="country_id">Nauru</option>
                                                        <option name="country_id">Nepal</option>
                                                        <option name="country_id">Netherlands</option>
                                                        <option name="country_id">Curaçao</option>
                                                        <option name="country_id">New Caledonia</option>
                                                        <option name="country_id">New Zealand</option>
                                                        <option name="country_id">Nicaragua</option>
                                                        <option name="country_id">Niger</option>
                                                        <option name="country_id">Nigeria</option>
                                                        <option name="country_id">Niue</option>
                                                        <option name="country_id">Norfolk Island</option>
                                                        <option name="country_id">Northern Mariana Islands</option>
                                                        <option name="country_id">Norway</option>
                                                        <option name="country_id">Oman</option>
                                                        <option name="country_id">Pakistan</option>
                                                        <option name="country_id">Palau</option>
                                                        <option name="country_id">Palestine</option>
                                                        <option name="country_id">Panama</option>
                                                        <option name="country_id">Papua New Guinea</option>
                                                        <option name="country_id">Paraguay</option>
                                                        <option name="country_id">Peru</option>
                                                        <option name="country_id">Philippines</option>
                                                        <option name="country_id">Pitcairn Islands</option>
                                                        <option name="country_id">Poland</option>
                                                        <option name="country_id">Portugal</option>
                                                        <option name="country_id">Puerto Rico</option>
                                                        <option name="country_id">Qatar</option>
                                                        <option name="country_id">Réunion</option>
                                                        <option name="country_id">Romania</option>
                                                        <option name="country_id">Russia</option>
                                                        <option name="country_id">Rwanda</option>
                                                        <option name="country_id">St. Barthélemy</option>
                                                        <option name="country_id">St. Helena</option>
                                                        <option name="country_id">St. Kitts & Nevis</option>
                                                        <option name="country_id">St. Lucia</option>
                                                        <option name="country_id">St. Martin</option>
                                                        <option name="country_id">St. Pierre & Miquelon</option>
                                                        <option name="country_id">St. Vincent & Grenadines</option>
                                                        <option name="country_id">Samoa</option>
                                                        <option name="country_id">San Marino</option>
                                                        <option name="country_id">São Tomé & Príncipe</option>
                                                        <option name="country_id">Saudi Arabia</option>
                                                        <option name="country_id">Senegal</option>
                                                        <option name="country_id">Serbia</option>
                                                        <option name="country_id">Serbia</option>
                                                        <option name="country_id">Seychelles</option>
                                                        <option name="country_id">Sierra Leone</option>
                                                        <option name="country_id">Singapore</option>
                                                        <option name="country_id">Sint Maarte</option>
                                                        <option name="country_id">Slovakia</option>
                                                        <option name="country_id">Slovenia</option>
                                                        <option name="country_id">Solomon Islands</option>
                                                        <option name="country_id">Somalia</option>
                                                        <option name="country_id">South Africa</option>
                                                        <option name="country_id">South Georgia & South Sandwich Islands
                                                        </option>
                                                        <option name="country_id">South Sudan</option>
                                                        <option name="country_id">Spain</option>
                                                        <option name="country_id">Sri Lanka</option>
                                                        <option name="country_id">Sudan</option>
                                                        <option name="country_id">Suriname</option>
                                                        <option name="country_id">Svalbard & Jan Mayen</option>
                                                        <option name="country_id">Eswatini</option>
                                                        <option name="country_id">Sweden</option>
                                                        <option name="country_id">Switzerland</option>
                                                        <option name="country_id">Syria</option>
                                                        <option name="country_id">Taiwan</option>
                                                        <option name="country_id">Tajikistan</option>
                                                        <option name="country_id">Tanzania</option>
                                                        <option name="country_id">Thailand</option>
                                                        <option name="country_id">Timor-Leste</option>
                                                        <option name="country_id">Togo</option>
                                                        <option name="country_id">Tokelau</option>
                                                        <option name="country_id">Tonga</option>
                                                        <option name="country_id">Trinidad & Tobago</option>
                                                        <option name="country_id">Tunisia</option>
                                                        <option name="country_id">Turkey</option>
                                                        <option name="country_id">Turkmenistan</option>
                                                        <option name="country_id">Turks & Caicos Islands</option>
                                                        <option name="country_id">Tuvalu</option>
                                                        <option name="country_id">Uganda</option>
                                                        <option name="country_id">Ukraine</option>
                                                        <option name="country_id">United Arab Emirates</option>
                                                        <option name="country_id">United Kingdom</option>
                                                        <option name="country_id">United State</option>
                                                        <option name="country_id">U.S. Outlying Island</option>
                                                        <option name="country_id">Uruguay</option>
                                                        <option name="country_id">Uzbekistan</option>
                                                        <option name="country_id">Vanuatu</option>
                                                        <option name="country_id">Venezuela</option>
                                                        <option name="country_id">Vietnam</option>
                                                        <option name="country_id">British Virgin Islands</option>
                                                        <option name="country_id">U.S. Virgin Islands</option>
                                                        <option name="country_id">Wallis & Futuna</option>
                                                        <option name="country_id">Western Sahara</option>
                                                        <option name="country_id">Yemen</option>
                                                        <option name="country_id">Zambia</option>
                                                        <option name="country_id">Zimbabwe</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card p-3 shadow-sm br-10 mb-5">
                                    <div class="card-header  text-light" style="background: #22b3c1;">
                                        <h4 class="fw-700 m-0 text-white">About Your Tickets</h4>
                                    </div>
                                    <div class="card-body">
                                        <!--<p> <i class="fa fa-ban me-2 text-danger"></i>RESTRICTIONS :{{$tickets->ticket_restrictions}}</p>-->
                                        <!--<p> <i class="fa fa-handshake  me-2 text-success"></i> BENEFITS : {{$tickets->ticket_benefits}}</p>-->

                                        <p> <i class="fa fa-ban me-2 text-danger"></i>RESTRICTIONS : {{implode(',',
                                            json_decode($tickets->ticket_restrictions, true))}}</p>
                                        <p> <i class="fa fa-handshake  me-2 text-success"></i> BENEFITS : {{implode(','
                                            , json_decode($tickets->ticket_benefits, true))}}</p>
                                        <p> <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>FANS SECTION :
                                            {{$tickets->fan_section}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="card" style="padding: 13px;">
                                            <div class="panel-heading">
                                                <div class="row text-center">
                                                    {{-- <h3 class="panel-heading">Payment Details</h3> --}}
                                                </div>
                                            </div>
                                            <div class="">
                                                <style>

                                                    @keyframes spinner {
                                                        0% {
                                                            transform: rotateZ(0deg);
                                                        }
                                                        100% {
                                                            transform: rotateZ(359deg);
                                                        }
                                                    }
                                                    * {
                                                        box-sizing: border-box;
                                                    }
                                                    .wrapper {
                                                        display: flex;
                                                        align-items: center;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        width: 100%;
                                                        min-height: 100%;
                                                        padding: 20px;
                                                    }
                                                    .login {
                                                        border-radius: 2px 2px 5px 5px;
                                                        padding: 10px 20px 20px 20px;
                                                        width: 90%;
                                                        max-width: 320px;
                                                        background: #fff;
                                                        position: relative;
                                                        padding-bottom: 80px;
                                                        /* box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3); */
                                                    }
                                                    .login.loading button {
                                                        max-height: 100%;
                                                        padding-top: 50px;
                                                    }
                                                    .login.loading button .spinner {
                                                        opacity: 1;
                                                        top: 40%;
                                                    }
                                                    .login.ok button {
                                                        background-color: #8bc34a;
                                                    }
                                                    .login.ok button .spinner {
                                                        border-radius: 0;
                                                        border-top-color: transparent;
                                                        border-right-color: transparent;
                                                        height: 20px;
                                                        animation: none;
                                                        transform: rotateZ(-45deg);
                                                    }
                                                    .login input {
                                                        display: block;
                                                        padding: 15px 10px;
                                                        margin-bottom: 10px;
                                                        width: 100%;
                                                        border: 1px solid #ddd;
                                                        transition: border-width 0.2s ease;
                                                        border-radius: 2px;
                                                        color: #ccc;
                                                    }
                                                    .login input + i.fa {
                                                        color: #fff;
                                                        font-size: 1em;
                                                        position: absolute;
                                                        margin-top: -47px;
                                                        opacity: 0;
                                                        left: 0;
                                                        transition: all 0.1s ease-in;
                                                    }
                                                    .login input:focus {
                                                        outline: none;
                                                        color: #444;
                                                        border-color: #2196f3;
                                                        border-left-width: 35px;
                                                    }
                                                    .login input:focus + i.fa {
                                                        opacity: 1;
                                                        left: 30px;
                                                        transition: all 0.25s ease-out;
                                                    }
                                                    .login a {
                                                        font-size: 0.8em;
                                                        color: #2196f3;
                                                        text-decoration: none;
                                                    }
                                                    .login .title {
                                                        color: #444;
                                                        font-size: 1.2em;
                                                        font-weight: bold;
                                                        margin: 10px 0 30px 0;
                                                        border-bottom: 1px solid #eee;
                                                        padding-bottom: 20px;
                                                    }
                                                    .login button {
                                                        width: 100%;
                                                        height: 100%;
                                                        padding: 10px 10px;
                                                        background: #2196f3;
                                                        color: #fff;
                                                        display: block;
                                                        border: none;
                                                        margin-top: 20px;
                                                        position: absolute;
                                                        left: 0;
                                                        bottom: 0;
                                                        max-height: 60px;
                                                        border: 0px solid rgba(0, 0, 0, 0.1);
                                                        border-radius: 0 0 2px 2px;
                                                        transform: rotateZ(0deg);
                                                        transition: all 0.1s ease-out;
                                                        border-bottom-width: 7px;
                                                    }
                                                    .login button .spinner {
                                                        display: block;
                                                        width: 40px;
                                                        height: 40px;
                                                        position: absolute;
                                                        border: 4px solid #fff;
                                                        border-top-color: rgba(255, 255, 255, 0.3);
                                                        border-radius: 100%;
                                                        left: 50%;
                                                        top: 0;
                                                        opacity: 0;
                                                        margin-left: -20px;
                                                        margin-top: -20px;
                                                        animation: spinner 0.6s infinite linear;
                                                        transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
                                                        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
                                                    }
                                                    .login:not(.loading) button:hover {
                                                        box-shadow: 0px 1px 3px #2196f3;
                                                    }
                                                    .login:not(.loading) button:focus {
                                                        border-bottom-width: 4px;
                                                    }

                                                    .btn-hover:hover {
                                                        color: #fff !important;
                                                        background: #1b5e64;
                                                        border: 1px solid #1b5e64;
                                                    }

                                                    .main-btn {
                                                        font-size: 16px;
                                                        color: #fff;
                                                        font-weight: 400;
                                                        text-align: center;
                                                        background: #22b3c1;
                                                        height: 50px;
                                                        display: inline-block;
                                                        line-height: 49px;
                                                        padding: 0 30px;
                                                        border-radius: 3px;
                                                        border: 1px solid #22b3c1;
                                                    }
                                                </style>
                                                   @if ($message = Session::get('guest'))
                                                   <div class="alert alert-success alert-block">
                                                       <strong>{{ $message }}</strong>
                                                   </div>
                                                   @endif
                                                <button type="submit" class="main-btn btn-hover h_50 w-100 ">Proceed to
                                                    Checkout</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="contactModal" class="modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-right">
                                                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                               <div class="wrapper">
                                               <!-- Add this code in the appropriate view where you want to display the guest login form -->

                                                <form class="login" action="{{ route('guest-login') }}" method="post">
                                                    @csrf
                                                    <h4 class="title"><b>Login as Guest</b></h4>
                                                    <label for=""><b>Email Address</b></label>
                                                    <input type="email" name="email" placeholder="Email Address" autofocus/>
                                                    <i class="fa fa-user"></i>
                                                    <label for=""><b>Phone Number</b></label>
                                                    <input type="phone" name="phone" placeholder="Phone Number" />
                                                    <i class="fa fa-key"></i>
                                                    {{-- <a href="#">Forgot your password?</a> --}}
                                                    <a href="{{ URL('/login') }}" style="text-decoration: none" class="text-dark"><b style="font-size:15px">Continue with <span style="color: #2196f3">LCT</span></b></a>
                                                    <button>
                                                        <i class="spinner"></i>
                                                        <span class="state">Log in</span>
                                                    </button>
                                                </form>

                                               </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {{-- <button type="submit" class="btn btn-primary">Finish & Check your
                                            Ticket</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- progress bar starts here  -->
    <section class="section-two">
        <div class="container-fluid mx-0">
            <div class="row px-0">
                <div class="col-lg-12 px-0">
                    {{-- <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25% Complete</div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    @include("auth.partials.footer")
    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"
        integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        $(document).ready(function() {
            @if(session('show_modal'))
                $('#contactModal').modal('show');
            @endif
        });
    </script>
    <script>
        var sellerCountry = "<?php echo $tickets->country ?>";
$("#country_id").on('change', function (e) {
    var countrySelected = $(this).val();
    if(sellerCountry !== countrySelected){
        $("#shipment-charges").html("<input type='hidden' value='50' name='shipingCharges'><span><b>INTERNATIONAL SHIPMENT CHARGES :</b><br>$50</span>")
    }else{
        $("#shipment-charges").html("<input type='hidden' value='20' name='shipingCharges'><span><b>LOCAL SHIPMENT CHARGES :</b><br>$20</span>")
    }
});
    </script>




</body>

</html>

