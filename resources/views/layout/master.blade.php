<html lang="en">

<head>
    <style>
        .gm-err-container {
            height: 100%;
            width: 100%;
            display: table;
            background-color: #e8eaed;
            position: relative;
            left: 0;
            top: 0
        }

        .gm-err-content {
            border-radius: 1px;
            padding-top: 0;
            padding-left: 10%;
            padding-right: 10%;
            position: static;
            vertical-align: middle;
            display: table-cell
        }

        .gm-err-content a {
            color: #3c4043
        }

        .gm-err-icon {
            text-align: center
        }

        .gm-err-title {
            margin: 5px;
            margin-bottom: 20px;
            color: #3c4043;
            font-family: Roboto, Arial, sans-serif;
            text-align: center;
            font-size: 24px
        }

        .gm-err-message {
            margin: 5px;
            color: #3c4043;
            font-family: Roboto, Arial, sans-serif;
            text-align: center;
            font-size: 12px
        }

        .gm-err-autocomplete {
            padding-left: 20px;
            background-repeat: no-repeat;
            background-size: 15px 15px
        }
    </style>
    <style>
        .gm-style-moc {
            background-color: rgba(0, 0, 0, .45);
            pointer-events: none;
            text-align: center;
            transition: opacity ease-in-out
        }

        .gm-style-mot {
            color: white;
            font-family: Roboto, Arial, sans-serif;
            font-size: 22px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }
    </style>
    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Sections - Material Kit PRO by Creative Tim</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-kit.css?v=1.2.1') }}" rel="stylesheet">

    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/4/common.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/4/util.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/4/map.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/4/marker.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/4/stats.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/4/onion.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/4/controls.js">
    </script>
</head>

<body class="landing-page">
    @include('layout.header')

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Các dịch vụ</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your
                            product. Keep you user engaged by providing meaningful information. Remember that by this
                            time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you
                            want the user to see more.</h5>
                    </div>
                </div>

                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="fa-solid fa-user-doctor"></i>
                                </div>
                                <h4 class="info-title">Khám tổng quát</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about
                                    each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="fa-solid fa-briefcase-medical"></i>
                                </div>
                                <h4 class="info-title">Điều trị</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about
                                    each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="fa-solid fa-stethoscope"></i>
                                </div>
                                <h4 class="info-title">Khám theo bệnh</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about
                                    each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                <div class="team-5 section-image" style="background-image: url('{{ asset('img/doctor2.jpg') }}')">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <h2 class="title">Bác sĩ của chúng tôi</h2>
                                <h5 class="description">This is the paragraph where you can write more details about
                                    your team. Keep you user engaged by providing meaningful information.</h5>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img"
                                                    style="width:200px; height: 200px; object-fit:cover;"
                                                    src="{{ asset('img/faces/doctor3.jpg') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Alec Thompson</h4>
                                            <h6 class="category text-muted">Founder</h6>

                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human
                                                foundation in truth...
                                            </p>

                                            <div class="footer">
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img"
                                                    style="width:200px; height: 200px; object-fit:cover;"
                                                    src="{{ asset('img/faces/doctor4.jpg') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Kendall Andrew</h4>
                                            <h6 class="category text-muted">Graphic Designer</h6>

                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human
                                                foundation in truth...
                                            </p>

                                            <div class="footer">
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img"
                                                    style="width:200px; height: 200px; object-fit:cover;"
                                                    src="{{ asset('img/faces/doctor5.jpg') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Gina Andrew</h4>
                                            <h6 class="category text-muted">Web Designer</h6>

                                            <p class="card-description">
                                                I love you like Kanye loves Kanye. Don't be scared of the truth.
                                            </p>

                                            <div class="footer">
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img"
                                                    style="width:200px; height: 200px; object-fit:cover;"
                                                    src="{{ asset('img/faces/doctor6.jpg') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">George West</h4>
                                            <h6 class="category text-muted">Backend Hacker</h6>

                                            <p class="card-description">
                                                I love you like Kanye loves Kanye. Don't be scared of the truth because
                                                we need to restart the human foundation.
                                            </p>

                                            <div class="footer">
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        @include('layout.subscribe')
    </div>

    @include('layout.footer')


    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script src="{{ asset('js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>
    @stack('js')
</body>

</html>
