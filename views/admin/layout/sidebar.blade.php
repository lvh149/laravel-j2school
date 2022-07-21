<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{asset('img/sidebar-1.jpg')}}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="#" class="simple-text logo-mini">

        </a>
        <a href="#" class="simple-text logo-normal">
            {{ config('app.name') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li id="1">
                <a href="{{route('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li id="2">
                <a href="{{route('appointment.index')}}">
                    <i class="material-icons">grid_on</i>
                    <p> Xét duyệt lịch hẹn
                    </p>
                </a>
            </li>
            <li id="3">
                <a href="{{route('customer.index')}}">
                    <i class="material-icons">people</i>
                    <p> Quản lý bệnh nhân </p>
                </a>
            </li>
            <li id="4">
                <a href="{{route('specialist.index')}}">
                    <i class="material-icons">work</i>
                    <p> Quản lý chuyên ngành </p>
                </a>
            </li>
            <li id="5">
                <a href="{{route('doctor.index')}}">
                    <i class="material-icons">people</i>
                    <p> Quản lý bác sĩ </p>
                </a>
            </li>
            <li id="6">
                <a href="{{route('time_doctor.index')}}">
                    <i class="material-icons">event_available</i>
                    <p> Quản lý lịch làm việc </p>
                </a>
            </li>
            <li id="7">
                <a href="#">
                    <i class="material-icons">timeline</i>
                    <p> Thống kê </p>
                </a>
            </li>
        </ul>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>
    <div class="sidebar-background" style="background-image: url({{asset('img/sidebar-1.jpg')}}) "></div>
</div>