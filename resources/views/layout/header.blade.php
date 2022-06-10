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
                        <a href="#pablo">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            Contact Us
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


    <div class="page-header header-filter" style="background-image: url('{{ asset('img/doctor1.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1 class="title"> You should work with us!</h1>
                    <h4>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the
                        world. You probably won't have a better chance to show off all your potential if it's not by
                        designing a website for your own agency or web studio.</h4>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('user.booking') }}" target="_blank" class="btn btn-rose btn-round center btn-lg">
                    <i class="material-icons">shopping_cart</i> Đặt hẹn ngay
                </a>
            </div>
        </div>

    </div>
</div>
