<div class="header-2">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.creative-tim.com">Clinic</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <a href="{{ route('user.homepage') }}">
                            Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            Giới thiệu
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            Liện hệ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('doctor') }}">
                             Bác sĩ
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                            <i class="fa-brands fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-white">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="page-header header-filter" style="background-image: url('{{ asset('img/doctor1.jpg') }}'); margin-bottom: -400px;">
    </div>
</div>
