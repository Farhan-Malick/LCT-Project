<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/payments.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>sell-tickets</title>
</head>

<body>
@include("auth.partials.darkheader")
    <!-- progress bar starts here  -->
    <section class="section-two">
        <div class="container-fluid mx-0">
            <div class="row px-0">
                <div class="col-lg-12 px-0">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25% Complete</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main body starts here  -->
    <section class="section-three">
        <div class="container-fluid my-3">
            <div class="row px-0 mx-0">
                <div class="col-lg-3">
                    <div class="card p-3 shadow-sm br-10 mb-3">
                        <div class="card-header primary-bg text-light">
                            <h4 class="fw-700 m-0">Your Order Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="ticket-details">
                                <p>Houston Astros at Philadelphia Phillies: World Series (Home Game 3, Series Game 5)
                                    <span class="bg-danger text-light  br-10 px-3">In 3 Hours</span>
                                </p>
                                <p class="fw-600 m-0">Thursday, 03 November 2022 20:03</p>
                                <p>Citizens Bank Park, Philadelphia, Pennsylvania, USA</p>
                                <p><span class="bg-secondary text-light p-1 br-10">Section:451</span> <span
                                        class="bg-secondary text-light p-1 br-10">row:4</span></p>
                            </div>
                            <div class="tickets-details d-sm-flex d-block justify-content-between">
                                <p>Number of Tickets</p>
                                <p>1</p>
                            </div>
                            <div class="tickets-details d-sm-flex d-block justify-content-between">
                                <p>Ticket Price</p>
                                <p>US$ 743 <span>Per ticket</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 shadow-sm br-10 mb-3">
                        <div class="card-header primary-bg text-light">
                            <h4 class="fw-700 m-0">About Your Tickets</h4>
                        </div>
                        <div class="card-body">
                            <p> <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>Unrestricted view (what's
                                this?)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-3 shadow-sm br-10 mb-3">
                        <div class="confirm d-flex justify-content-between align-items-center">
                            <h5 class="fw-700">Please confirm how many tickets you would like to purchase</h5>
                            <div class="social-link">
                                <i class="bi bi-facebook me-2"></i>
                                <i class="bi bi-twitter me-2"></i>
                                <i class="bi bi-link-45deg"></i>
                            </div>
                        </div>
                        <div class="number-of-tickets">
                            <h6>Number of tickets</h6>
                            <form action="">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </form>
                        </div>
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-9">
                                <div class="my-ticket my-4  position-relative">
                                    <div class="my_ticket_title p-3">
                                        <h4 class="fw-700">Houston Astros at Philadelphia Phillies: World Series (Home
                                            Game
                                            3, Series
                                            Game 5)
                                        </h4>
                                        <p class="m-0">Thursday, 03 November 2022 20:03 </p>
                                        <p>Citizens Bank Park, Philadelphia, Pennsylvania, USA</p>
                                        <p>Notes:</p>
                                        <p> <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>Unrestricted view
                                            (what's this?)</p>
                                        <span><i class="bi bi-upc"></i></span>
                                    </div>
                                    <div class="border-right-top"></div>
                                    <div class="border-right-bottom"></div>
                                    <div class="border-left-top"></div>
                                    <div class="border-left-bottom"></div>
                                </div>
                            </div>
                            <div
                                class="col-lg-3 text-center d-flex flex-column ticket-left position-relative justify-content-center">
                                <h4 class="fw-700">ADMIT 1</h4>
                                <span>Section</span>
                                <span class="text-success fw-700">414</span>
                                <span>Row</span>
                                <span class="text-success fw-700">4</span>
                                <div class="border-right-top"></div>
                                <div class="border-right-bottom"></div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card  shadow-sm br-10 mb-3">
                        <div class="card-body">
                            <h5>Join the crowd to share your amazing experience at this event #PhiladelphiaPhillies</h5>
                            <img src="../../assets/images/p-1.jpg" class="img-fluid br-10" alt="">
                        </div>
                    </div>
                    <div class="card  shadow-sm br-10 mb-3">
                        <div class="card-body">
                            <h5>Join the crowd to share your amazing experience at this event #PhiladelphiaPhillies</h5>
                            <img src="../../assets/images/slider-img.jpg" class="img-fluid br-10" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form">
                        <div class="form__left">
                            <svg
                            id="undraw_Beer_celebration_cefj"
                            xmlns="http://www.w3.org/2000/svg"
                            width="210.077"
                            height="270.538"
                            viewBox="0 0 308.077 270.538"
                            >
                            <g id="circle">
                                <circle
                                id="Ellipse_1"
                                data-name="Ellipse 1"
                                cx="98.66"
                                cy="98.66"
                                r="98.66"
                                transform="translate(52.663 43.747)"
                                opacity="0.4"
                                stroke="#3ad29f"
                                stroke-miterlimit="10"
                                stroke-width="5"
                                stroke-dasharray="12"
                                fill="none"
                                />
                                <circle
                                id="Ellipse_2"
                                data-name="Ellipse 2"
                                cx="75.231"
                                cy="75.231"
                                r="75.231"
                                transform="translate(76.092 67.177)"
                                opacity="0.4"
                                stroke="#3ad29f"
                                stroke-miterlimit="10"
                                stroke-width="5"
                                stroke-dasharray="12"
                                fill="none"
                                />
                            </g>
                            <path
                                id="Path_2"
                                data-name="Path 2"
                                d="M946.661,503.1a.549.549,0,1,0-.53-.549A.55.55,0,0,0,946.661,503.1Z"
                                transform="translate(-665.377 -347.695)"
                                fill="#f5f5f5"
                            />
                            <g
                                id="Group_8"
                                data-name="Group 8"
                                transform="translate(278.722 239.456)"
                                opacity="0.5"
                            >
                                <path
                                id="Path_3"
                                data-name="Path 3"
                                d="M946.856,735.358a3.988,3.988,0,0,0-5.2.484,4.073,4.073,0,0,0,.162,5.678l4.971,4.944a.83.83,0,0,0,1.174,0l4.944-4.971a4.073,4.073,0,0,0,.13-5.678,3.988,3.988,0,0,0-5.2-.455A.837.837,0,0,1,946.856,735.358Z"
                                transform="translate(-940.582 -734.597)"
                                fill="#6c63ff"
                                />
                            </g>
                            <g
                                id="Group_9"
                                data-name="Group 9"
                                transform="translate(15.872 224.447)"
                                opacity="0.5"
                            >
                                <path
                                id="Path_4"
                                data-name="Path 4"
                                d="M228.856,694.358a3.988,3.988,0,0,0-5.2.484,4.073,4.073,0,0,0,.162,5.678l4.971,4.944a.83.83,0,0,0,1.174,0l4.944-4.971a4.073,4.073,0,0,0,.13-5.678,3.987,3.987,0,0,0-5.2-.455A.837.837,0,0,1,228.856,694.358Z"
                                transform="translate(-222.582 -693.597)"
                                fill="#6c63ff"
                                />
                            </g>
                            <g
                                id="Group_10"
                                data-name="Group 10"
                                transform="translate(29.051 24.929)"
                                opacity="0.5"
                            >
                                <path
                                id="Path_5"
                                data-name="Path 5"
                                d="M264.856,149.358a3.988,3.988,0,0,0-5.2.484,4.073,4.073,0,0,0,.162,5.678l4.971,4.944a.83.83,0,0,0,1.174,0l4.944-4.971a4.073,4.073,0,0,0,.13-5.678,3.988,3.988,0,0,0-5.2-.455A.837.837,0,0,1,264.856,149.358Z"
                                transform="translate(-258.582 -148.597)"
                                fill="#6c63ff"
                                />
                            </g>
                            <g
                                id="Group_11"
                                data-name="Group 11"
                                transform="translate(232.595 8.822)"
                                opacity="0.5"
                            >
                                <path
                                id="Path_6"
                                data-name="Path 6"
                                d="M820.856,105.358a3.987,3.987,0,0,0-5.2.484,4.073,4.073,0,0,0,.162,5.678l4.971,4.944a.83.83,0,0,0,1.174,0l4.944-4.971a4.073,4.073,0,0,0,.13-5.678,3.988,3.988,0,0,0-5.2-.455.837.837,0,0,1-.977,0Z"
                                transform="translate(-814.582 -104.597)"
                                fill="#6c63ff"
                                />
                            </g>
                            <g
                                id="Group_12"
                                data-name="Group 12"
                                transform="translate(169.261)"
                                opacity="0.5"
                            >
                                <rect
                                id="Rectangle_7"
                                data-name="Rectangle 7"
                                width="1.098"
                                height="6.223"
                                transform="translate(2.563)"
                                fill="#3ad29f"
                                />
                                <rect
                                id="Rectangle_8"
                                data-name="Rectangle 8"
                                width="1.098"
                                height="6.223"
                                transform="translate(6.223 2.563) rotate(90)"
                                fill="#3ad29f"
                                />
                            </g>
                            <g
                                id="Group_13"
                                data-name="Group 13"
                                transform="translate(9.647 79.807)"
                                opacity="0.5"
                            >
                                <rect
                                id="Rectangle_9"
                                data-name="Rectangle 9"
                                width="1.098"
                                height="6.223"
                                transform="translate(2.563)"
                                fill="#3ad29f"
                                />
                                <rect
                                id="Rectangle_10"
                                data-name="Rectangle 10"
                                width="1.098"
                                height="6.223"
                                transform="translate(6.223 2.563) rotate(90)"
                                fill="#3ad29f"
                                />
                            </g>
                            <g
                                id="Group_14"
                                data-name="Group 14"
                                transform="translate(215.022 264.314)"
                                opacity="0.5"
                            >
                                <rect
                                id="Rectangle_11"
                                data-name="Rectangle 11"
                                width="1.098"
                                height="6.223"
                                transform="translate(2.563)"
                                fill="#3ad29f"
                                />
                                <rect
                                id="Rectangle_12"
                                data-name="Rectangle 12"
                                width="1.098"
                                height="6.223"
                                transform="translate(6.223 2.563) rotate(90)"
                                fill="#3ad29f"
                                />
                            </g>
                            <g
                                id="Group_15"
                                data-name="Group 15"
                                transform="translate(13.308 181.945)"
                                opacity="0.5"
                            >
                                <rect
                                id="Rectangle_13"
                                data-name="Rectangle 13"
                                width="1.098"
                                height="6.223"
                                transform="translate(2.563)"
                                fill="#3ad29f"
                                />
                                <rect
                                id="Rectangle_14"
                                data-name="Rectangle 14"
                                width="1.098"
                                height="6.223"
                                transform="translate(6.223 2.563) rotate(90)"
                                fill="#3ad29f"
                                />
                            </g>
                            <g
                                id="Group_16"
                                data-name="Group 16"
                                transform="translate(81.4 191.097)"
                                opacity="0.5"
                            >
                                <rect
                                id="Rectangle_15"
                                data-name="Rectangle 15"
                                width="1.098"
                                height="6.223"
                                transform="translate(2.563)"
                                fill="#3ad29f"
                                />
                                <rect
                                id="Rectangle_16"
                                data-name="Rectangle 16"
                                width="1.098"
                                height="6.223"
                                transform="translate(6.223 2.563) rotate(90)"
                                fill="#3ad29f"
                                />
                            </g>
                            <path
                                id="Path_7"
                                data-name="Path 7"
                                d="M344.886,747.075a1.345,1.345,0,0,1-.749-1.626.654.654,0,0,0,.029-.149h0a.675.675,0,0,0-1.212-.447h0a.646.646,0,0,0-.075.132,1.345,1.345,0,0,1-1.626.75.644.644,0,0,0-.149-.029h0a.675.675,0,0,0-.447,1.212h0a.641.641,0,0,0,.132.075,1.345,1.345,0,0,1,.75,1.626.645.645,0,0,0-.029.149h0a.675.675,0,0,0,1.212.447h0a.647.647,0,0,0,.075-.132,1.345,1.345,0,0,1,1.626-.75.647.647,0,0,0,.149.029h0a.675.675,0,0,0,.447-1.212h0A.65.65,0,0,0,344.886,747.075Z"
                                transform="translate(-281.389 -501.472)"
                                fill="#f55f44"
                                opacity="0.5"
                            />
                            <path
                                id="Path_8"
                                data-name="Path 8"
                                d="M592.886,713.075a1.345,1.345,0,0,1-.75-1.626.644.644,0,0,0,.029-.149h0a.675.675,0,0,0-1.212-.447h0a.643.643,0,0,0-.075.133,1.345,1.345,0,0,1-1.626.75.643.643,0,0,0-.149-.029h0a.675.675,0,0,0-.447,1.212h0a.651.651,0,0,0,.133.075,1.345,1.345,0,0,1,.75,1.626.644.644,0,0,0-.029.149h0a.674.674,0,0,0,1.212.447h0a.646.646,0,0,0,.075-.132,1.345,1.345,0,0,1,1.626-.75.649.649,0,0,0,.149.029h0a.675.675,0,0,0,.447-1.212h0A.645.645,0,0,0,592.886,713.075Z"
                                transform="translate(-438.6 -479.919)"
                                fill="#3ad29f"
                                opacity="0.5"
                            />
                            <path
                                id="Path_9"
                                data-name="Path 9"
                                d="M688.886,245.075a1.345,1.345,0,0,1-.75-1.626.651.651,0,0,0,.029-.149h0a.675.675,0,0,0-1.212-.447h0a.646.646,0,0,0-.075.132,1.345,1.345,0,0,1-1.626.75.645.645,0,0,0-.149-.029h0a.675.675,0,0,0-.447,1.212h0a.649.649,0,0,0,.132.075,1.345,1.345,0,0,1,.75,1.626.647.647,0,0,0-.029.149h0a.674.674,0,0,0,1.212.447h0a.642.642,0,0,0,.075-.132,1.345,1.345,0,0,1,1.626-.75.647.647,0,0,0,.149.029h0a.675.675,0,0,0,.447-1.212h0A.649.649,0,0,0,688.886,245.075Z"
                                transform="translate(-499.456 -183.248)"
                                fill="#f55f44"
                                opacity="0.5"
                            />
                            <path
                                id="Path_10"
                                data-name="Path 10"
                                d="M945.886,251.075a1.345,1.345,0,0,1-.75-1.626.647.647,0,0,0,.029-.149h0a.675.675,0,0,0-1.212-.447h0a.643.643,0,0,0-.075.132,1.345,1.345,0,0,1-1.626.75.645.645,0,0,0-.149-.029h0a.675.675,0,0,0-.447,1.212h0a.644.644,0,0,0,.132.075,1.345,1.345,0,0,1,.75,1.626.651.651,0,0,0-.029.149h0a.675.675,0,0,0,1.212.447h0a.648.648,0,0,0,.075-.132,1.345,1.345,0,0,1,1.626-.75.648.648,0,0,0,.149.029h0a.675.675,0,0,0,.447-1.212h0A.643.643,0,0,0,945.886,251.075Z"
                                transform="translate(-662.372 -187.051)"
                                fill="#f55f44"
                                opacity="0.5"
                            />
                            <path
                                id="Path_11"
                                data-name="Path 11"
                                d="M575.886,526.075a1.345,1.345,0,0,1-.749-1.626.655.655,0,0,0,.029-.149h0a.675.675,0,0,0-1.212-.447h0a.645.645,0,0,0-.075.132,1.345,1.345,0,0,1-1.626.75.652.652,0,0,0-.149-.029h0a.675.675,0,0,0-.447,1.212h0a.643.643,0,0,0,.132.075,1.345,1.345,0,0,1,.75,1.626.653.653,0,0,0-.029.149h0a.675.675,0,0,0,1.212.447h0a.651.651,0,0,0,.075-.132,1.345,1.345,0,0,1,1.626-.749.657.657,0,0,0,.149.029h0a.675.675,0,0,0,.447-1.212h0A.648.648,0,0,0,575.886,526.075Z"
                                transform="translate(-427.824 -361.377)"
                                fill="#f55f44"
                                opacity="0.5"
                            />
                            <path
                                id="Path_12"
                                data-name="Path 12"
                                d="M1011.886,100.075a1.345,1.345,0,0,1-.75-1.626.641.641,0,0,0,.029-.149h0a.675.675,0,0,0-1.212-.447h0a.643.643,0,0,0-.075.132,1.345,1.345,0,0,1-1.626.75.645.645,0,0,0-.149-.029h0a.675.675,0,0,0-.447,1.212h0a.649.649,0,0,0,.132.075,1.345,1.345,0,0,1,.75,1.626.647.647,0,0,0-.029.149h0a.675.675,0,0,0,1.212.447h0a.648.648,0,0,0,.075-.132,1.345,1.345,0,0,1,1.626-.75.648.648,0,0,0,.149.029h0a.675.675,0,0,0,.447-1.212h0A.641.641,0,0,0,1011.886,100.075Z"
                                transform="translate(-704.21 -91.33)"
                                fill="#f55f44"
                                opacity="0.5"
                            />
                            <path
                                id="Path_13"
                                data-name="Path 13"
                                d="M699.662,334.331l-1.881-13.153L591.9,332.236,610.893,435.92A20.443,20.443,0,0,0,634.577,452.5l63.2-11.149a20.443,20.443,0,0,0,16.581-23.684L712,404.272a35.51,35.51,0,0,0-12.337-69.941Zm10.875,61.649-9.412-53.357a27.09,27.09,0,0,1,9.412,53.357Z"
                                transform="translate(-440.46 -225.412)"
                                fill="#d4def7"
                            />
                            <rect
                                id="Rectangle_17"
                                data-name="Rectangle 17"
                                width="80.905"
                                height="50.52"
                                transform="matrix(0.985, -0.174, 0.174, 0.985, 161.737, 100.091)"
                                fill="#f7f7f7"
                            />
                            <path
                                id="Path_16"
                                data-name="Path 16"
                                d="M633.356,399.491s17.56-7.93,36.052-.04,43.623-14.015,43.623-14.015l4.258,24.138L661.665,427.21,645.4,425.618Z"
                                transform="translate(-467.105 -273.803)"
                                fill="#6c63ff"
                            />
                            <path
                                id="Path_17"
                                data-name="Path 17"
                                d="M633.356,399.491s17.56-7.93,36.052-.04,43.623-14.015,43.623-14.015l4.258,24.138L661.665,427.21,645.4,425.618Z"
                                transform="translate(-467.105 -273.803)"
                                opacity="0.05"
                            />
                            <path
                                id="Path_18"
                                data-name="Path 18"
                                d="M728.612,473.764l-79.675,14.055-15.581-88.328q40.046,21.486,79.675-14.055Z"
                                transform="translate(-467.105 -273.803)"
                                fill="#6c63ff"
                            />
                            <path
                                id="Path_19"
                                data-name="Path 19"
                                d="M671.328,476.991a1.282,1.282,0,0,0,.717,2.46A1.282,1.282,0,0,0,671.328,476.991Z"
                                transform="translate(-490.613 -331.804)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_20"
                                data-name="Path 20"
                                d="M769.45,613.014a1.282,1.282,0,0,0,.717,2.46A1.282,1.282,0,0,0,769.45,613.014Z"
                                transform="translate(-552.814 -418.031)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_21"
                                data-name="Path 21"
                                d="M720.619,560.7a1.282,1.282,0,0,0,.717,2.46A1.282,1.282,0,0,0,720.619,560.7Z"
                                transform="translate(-521.86 -384.869)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_22"
                                data-name="Path 22"
                                d="M757.06,502.485a1.282,1.282,0,0,0,.717,2.46A1.282,1.282,0,0,0,757.06,502.485Z"
                                transform="translate(-544.96 -347.966)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_23"
                                data-name="Path 23"
                                d="M844.187,466.807a1.282,1.282,0,0,0,.717,2.46A1.282,1.282,0,0,0,844.187,466.807Z"
                                transform="translate(-600.191 -325.349)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_24"
                                data-name="Path 24"
                                d="M179.772,264.214a35.51,35.51,0,0,0,28.8,41.139l-2.363,13.4a20.443,20.443,0,0,0,16.581,23.684L286,353.582A20.443,20.443,0,0,0,309.68,337l18.139-98.746L222.792,222.48l-1.88,12.933A35.51,35.51,0,0,0,179.772,264.214Zm8.292,1.463A27.09,27.09,0,0,1,219.449,243.7l-9.412,53.357A27.09,27.09,0,0,1,188.064,265.677Z"
                                transform="translate(-179.226 -162.735)"
                                fill="#d4def7"
                            />
                            <rect
                                id="Rectangle_18"
                                data-name="Rectangle 18"
                                width="80.905"
                                height="50.52"
                                transform="matrix(-0.985, -0.174, 0.174, -0.985, 130.375, 113.599)"
                                fill="#f7f7f7"
                            />
                            <path
                                id="Path_27"
                                data-name="Path 27"
                                d="M401.659,300.491s-17.56-7.93-36.052-.04-43.623-14.015-43.623-14.015l-4.258,24.138L373.35,328.21l16.266-1.592Z"
                                transform="translate(-267.023 -211.046)"
                                fill="#6c63ff"
                            />
                            <path
                                id="Path_28"
                                data-name="Path 28"
                                d="M401.659,300.491s-17.56-7.93-36.052-.04-43.623-14.015-43.623-14.015l-4.258,24.138L373.35,328.21l16.266-1.592Z"
                                transform="translate(-267.023 -211.046)"
                                opacity="0.05"
                            />
                            <path
                                id="Path_29"
                                data-name="Path 29"
                                d="M286.8,374.764l79.675,14.055,15.581-88.327q-40.046,21.486-79.675-14.055Z"
                                transform="translate(-247.416 -211.046)"
                                fill="#6c63ff"
                            />
                            <path
                                id="Path_30"
                                data-name="Path 30"
                                d="M504.706,377.991a1.282,1.282,0,0,1-.717,2.46A1.282,1.282,0,0,1,504.706,377.991Z"
                                transform="translate(-384.534 -269.047)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_31"
                                data-name="Path 31"
                                d="M406.585,514.014a1.282,1.282,0,0,1-.717,2.46A1.282,1.282,0,0,1,406.585,514.014Z"
                                transform="translate(-322.334 -355.274)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_32"
                                data-name="Path 32"
                                d="M455.415,461.7a1.282,1.282,0,0,1-.717,2.46A1.282,1.282,0,0,1,455.415,461.7Z"
                                transform="translate(-353.288 -322.112)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_33"
                                data-name="Path 33"
                                d="M418.974,403.485a1.282,1.282,0,0,1-.717,2.46A1.282,1.282,0,0,1,418.974,403.485Z"
                                transform="translate(-330.188 -285.208)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_34"
                                data-name="Path 34"
                                d="M331.847,367.807a1.282,1.282,0,0,1-.717,2.46A1.282,1.282,0,0,1,331.847,367.807Z"
                                transform="translate(-274.957 -262.592)"
                                fill="#fafafa"
                            />
                            <path
                                id="Path_35"
                                data-name="Path 35"
                                d="M697.922,283.728c-2.347-8.049-28.717-7.439-58.9,1.361s-52.748,22.459-50.4,30.508c1.431,4.909,11.8,6.6,26.52,5.169a9.485,9.485,0,0,0,17.154,7.408c3.534,7.185,9.341,11.5,14.312,10.047,5.441-1.586,8.019-9.529,6.328-18.447,2.741,2.143,5.834,3.042,8.7,2.206,3.5-1.02,5.89-4.394,6.773-8.812a8.882,8.882,0,0,0,6.739.919c2.82-.822,4.923-3.175,6.1-6.371,2.327,6.336,7.691,10.258,12.424,8.878,5.03-1.467,7.444-8.365,5.39-15.407a16.035,16.035,0,0,0-5.732-8.566C696.947,289.319,698.657,286.248,697.922,283.728Z"
                                transform="translate(-439.373 -203.546)"
                                opacity="0.03"
                            />
                            <path
                                id="Path_36"
                                data-name="Path 36"
                                d="M695.02,273.775c-2.347-8.049-28.717-7.439-58.9,1.361s-52.748,22.459-50.4,30.508c1.431,4.909,11.8,6.6,26.52,5.169a9.485,9.485,0,0,0,17.154,7.408c3.534,7.185,9.341,11.5,14.312,10.047,5.441-1.586,8.019-9.529,6.328-18.447,2.74,2.143,5.834,3.042,8.7,2.206,3.5-1.02,5.89-4.394,6.772-8.812a8.882,8.882,0,0,0,6.739.919c2.82-.822,4.923-3.175,6.1-6.371,2.327,6.336,7.691,10.258,12.424,8.878,5.03-1.467,7.444-8.365,5.39-15.407a16.036,16.036,0,0,0-5.732-8.566C694.045,279.367,695.755,276.3,695.02,273.775Z"
                                transform="translate(-437.533 -197.238)"
                                fill="#fff"
                            />
                            <path
                                id="Path_37"
                                data-name="Path 37"
                                d="M289.64,184.728c2.347-8.049,28.717-7.439,58.9,1.361s52.748,22.459,50.4,30.508c-1.431,4.909-11.8,6.6-26.52,5.169a9.485,9.485,0,0,1-17.154,7.408c-3.534,7.185-9.34,11.5-14.312,10.047-5.441-1.586-8.019-9.529-6.327-18.447-2.741,2.143-5.834,3.042-8.7,2.206-3.5-1.02-5.89-4.394-6.772-8.812a8.882,8.882,0,0,1-6.739.919c-2.82-.822-4.923-3.175-6.1-6.371-2.327,6.336-7.691,10.258-12.424,8.878-5.03-1.467-7.444-8.365-5.39-15.407a16.035,16.035,0,0,1,5.732-8.566C290.615,190.319,288.905,187.248,289.64,184.728Z"
                                transform="translate(-246.571 -138.594)"
                                opacity="0.03"
                            />
                            <path
                                id="Path_38"
                                data-name="Path 38"
                                d="M292.542,174.775c2.347-8.049,28.717-7.439,58.9,1.361s52.748,22.459,50.4,30.508c-1.431,4.909-11.8,6.6-26.52,5.169a9.485,9.485,0,0,1-17.154,7.408c-3.534,7.185-9.341,11.5-14.312,10.047-5.441-1.586-8.019-9.529-6.328-18.447-2.74,2.143-5.834,3.042-8.7,2.206-3.5-1.02-5.89-4.394-6.772-8.812a8.882,8.882,0,0,1-6.739.919c-2.82-.822-4.923-3.175-6.1-6.371-2.328,6.336-7.691,10.258-12.424,8.878-5.03-1.467-7.444-8.365-5.39-15.407a16.035,16.035,0,0,1,5.732-8.566C293.517,180.367,291.807,177.3,292.542,174.775Z"
                                transform="translate(-248.411 -132.286)"
                                fill="#fff"
                            />
                            </svg>
                        </div>
                        <div class="form__right">
                            <span class="form__right__steps">4/4</span>
                            <h2 class="form__right__title">Last Step !</h2>
                            <p class="form__right__info">Enter Your Payment info Below.</p>
                            <div class="form__right__check">
                            <input type="radio" name="paymentMethod" id="option1" />
                            <label for="option1" class="form__right__check--creditCard">
                        
                                <span class="form__right__check--creditCard__text"
                                >Credit Card</span
                                >
                            </label>

                            <input type="radio" name="paymentMethod" id="option2" />
                            <label for="option2" class="form__right__check--payPal"> Stripe
                            
                            </label>
                            </div>
                            <div class="form__right__form-control">
                            <label for="cardCode" class="form__right__form-control--name"
                                >Card Number</label
                            >
                            <input
                                type="text"
                                class="form__right__form-control--cardNumber"
                                id="cardCode"
                                placeholder="123 4567 8912 3456"
                            />
                            <small style="color: red; margin-left: 10px;">Error Of Card</small>
                            </div>
                            <div class="form__right__expireDate">
                            <div class="form__right__expireDate__right expireDateForm">
                                <label
                                for="cardCode"
                                style="margin-top: 5px;"
                                class="form__right__form-control--name"
                                >Expire Date</label
                                >
                                <select
                                type="text"
                                class="form__right__expireDate--month"
                                id="month"
                                placeholder="123 4567 8912 3456"
                                >
                                <option value="0">Month</option>
                                </select>
                                <select
                                type="text"
                                class="form__right__expireDate--year"
                                id="year"
                                placeholder="123 4567 8912 3456"
                                >
                                <option value="0">Year</option>
                                </select>
                            </div>
                            <div class="form__right__expireDate__left">
                                <label
                                for="cardCode"
                                style="margin-top: 5px;"
                                class="form__right__form-control--name"
                                >CVC</label
                                >
                                <input
                                type="text"
                                class="form__right__expireDate__left--cvc"
                                id="cardCode"
                                placeholder="111"
                                maxlength="3"
                                />
                            </div>
                            </div>
                            <div class="form__right__form-control">
                            <label for="cardCode" class="form__right__form-control--name"
                                >By creating an account, you agree to Study.com’s Terms of Use and
                                Privacy Policy.</label
                            >
                            <button class="form__right__form-control--button">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<script>
    let year = document.getElementById("year");
let month = document.getElementById("month");
let Option1 = document.getElementById("option1");
let Option2 = document.getElementById("option2");
let Control = document.querySelector(".form__right__form-control");
let DateForm = document.querySelector(".form__right__expireDate");
let Button = document.querySelector(".form__right__form-control--button");

for (let i = 1; i <= 12; i++) {
  let option = document.createElement("option");
  option.value = i;
  option.textContent = i;
  month.appendChild(option);
}
let CurrentYear = 2020;
for (let i = CurrentYear; i <= CurrentYear + 5; i++) {
  let option = document.createElement("option");
  option.value = i;
  option.textContent = i;
  year.appendChild(option);
}

Option1.addEventListener("click", toggle);
Option2.addEventListener("click", toggle);

function toggle() {
  if (Option1.checked) {
    DateForm.style.display = "flex";
    Control.style.display = "block";
    Button.textContent = "Join Now";
  } else {
    DateForm.style.display = "none";
    Control.style.display = "none";
    Button.textContent = "Continue To Stripe";
  }
}
</script>
@include("auth.partials.footer")
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>