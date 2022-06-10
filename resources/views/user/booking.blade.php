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
    <nav class="navbar navbar-rose">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-rose">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#pablo">Clinic</a>
            </div>

            <div class="collapse navbar-collapse" id="example-navbar-rose">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#pablo">
                            <i class="material-icons">explore</i>
                            Discover
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            <i class="material-icons">account_circle</i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            <i class="material-icons">settings</i>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-1 text-center" style="margin-right: 15px;">
                        <img src="{{ asset('img/faces/doctor3.jpg') }}" alt="Thumbnail Image"
                            class="img-circle img-raised img-responsive center-block"
                            style="height: 140px; width: 150px; object-fit: cover;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa-solid fa-star text-rose" style="font-size:14px;"></i>
                                    <span class="text-primary" style="font-size:14px; font-weight: 500;">5.0</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa-solid fa-eye text-rose" style="font-size:14px;"></i>
                                    <span class="text-primary" style="font-size:14px; font-weight: 500;">5K</span>
                                </div>
                            </div>
                        </div>
                        <h4 class="title">
                            <span class="tim-note">Bác sĩ Chiêu Minh</span>
                        </h4>
                        <p class="text-muted">
                            Khoa tim mạch
                        </p>
                        <div class="progress progress-line-primary" style="margin-top: 20px;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 100%;">
                            </div>
                        </div>
                        <h4 class="title text-left">
                            <span class="tim-note ">Thông tin</span>
                        </h4>
                        <div class="row"
                            style="display: flex; justify-content: space-around; align-item: center;">
                            <button type="button" class="btn"
                                style="width: 28.5%; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #bdbdbd;">
                                <p>Giá</p>
                                <span>100.000đ</span>
                            </button>

                            <button type="button" class="btn btn-default"
                                style="width: 28.5%; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #bdbdbd;">
                                <p>Kinh nghiệm</p>
                                <span> > 5 năm</span>
                            </button>

                            <button type="button" class="btn btn-default"
                                style="width: 28.5%; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #bdbdbd;">
                                <p>Bệnh nhân</p>
                                <span>600 +</span>
                            </button>
                        </div>
                        <div class="progress progress-line-primary" style="margin-top: 20px;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 100%;">
                            </div>
                        </div>
                        <h4 class="title text-left">
                            <span class="tim-note ">Tiểu sử</span>
                            <blockquote style="margin-top: 20px;">
                                <small>
                                    Bác sĩ cấp cứu tổng hợp Bệnh viện quận Tân Phú
                                </small>
                                <small>
                                    Bác sĩ cấp cứu Phòng khám Hoàn Mỹ Sài Gòn
                                </small>
                            </blockquote>
                        </h4>
                    </div>
                    <div class="  d-block">
                        <div class="contact-content">
                            <div class="container">
                                <h2 class="title" style="margin-top:0;">Đặt lịch hẹn</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form role="form" id="contact-form" method="post">
                                            <div class="row">
                                                <div class="col-md-6" style="margin-right: 15px;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating is-empty">
                                                                <label class="control-label">Tên người đăng kí</label>
                                                                <input type="email" class="form-control">
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating is-empty">
                                                                <label class="control-label">Số điện thoại</label>
                                                                <input type="email" class="form-control">
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating is-empty">
                                                                <label class="control-label">Tên bệnh nhân</label>
                                                                <input type="email" class="form-control">
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating is-empty">
                                                                <label class="control-label">Số điện thoại</label>
                                                                <input type="email" class="form-control">
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="control-label" style="font-size: 14px;">Giới
                                                        tính</label>
                                                    <div class="form-group label-floating is-empty">
                                                        <div class="radio">
                                                            <label style="padding-right: 30px;">
                                                                <input type="radio" name="optionsRadios"
                                                                    checked="true"><span
                                                                    class="circle"></span><span
                                                                    class="check"></span>
                                                                Nam
                                                            </label>
                                                            <label style="padding-right: 30px;">
                                                                <input type="radio" name="optionsRadios"><span
                                                                    class="circle"></span><span
                                                                    class="check"></span>
                                                                Nữ
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="optionsRadios"><span
                                                                    class="circle"></span><span
                                                                    class="check"></span>
                                                                Khác
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="label-control">Ngày sinh</label>
                                                        <input type="text" class="form-control datepicker"
                                                            value="10/10/2016">
                                                        <span class="material-input"></span>
                                                    </div>
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Vấn đề sức khỏe</label>
                                                        <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="label-control">Chọn ngày</label>
                                                        <input type="text" class="form-control datepicker"
                                                            value="10/10/2016">
                                                        <span class="material-input"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="label-control">Chọn giờ</label>
                                                        <ul class="nav nav-pills nav-pills-icons"
                                                            style="display: flex;  justify-content: space-between; align-items: center; flex-wrap: wrap;"
                                                            role="tablist">
                                                            <!--
                                                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                            -->
                                                            <li>
                                                                <a href="#dashboard-1" role="tab" data-toggle="tab">
                                                                    1:00
                                                                </a>
                                                            </li>
                                                            <li class="active">
                                                                <a href="#schedule-1" role="tab" data-toggle="tab">
                                                                    5:00
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tasks-1" role="tab" data-toggle="tab">
                                                                    6:00
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tasks-1" role="tab" data-toggle="tab">
                                                                    6:00
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tasks-1" role="tab" data-toggle="tab">
                                                                    6:00
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tasks-1" role="tab" data-toggle="tab">
                                                                    6:00
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit text-center">
                                                <input type="submit" class="btn btn-rose btn-raised btn-round"
                                                    value="Đặt hẹn">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')


    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

    @stack('js')
</body>

</html>
