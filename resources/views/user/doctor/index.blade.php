@extends('user.layout.master')
@section('content')
    <div style="padding: 20px;">
        <div class="row">
            <div class="header header-raised header-rose text-center"
                style="display: flex; justify-content: space-between; align-items: center;">
                <div class="col-md-5" style="display: flex; align-items: flex-end; padding-left: 0">
                    <h2 style="margin: 0">
                        Bác sĩ
                    </h2>
                </div>
                <div class="col-md-7">
                        <form class="navbar-form navbar-right" role="search" method="get" id="search-form"
                            action="{{ route('doctor.search') }}">
                            <div class="form-group form-rose is-empty">
                                <input type="text" class="form-control" placeholder="Search" value=""
                                    name="key">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-rose btn-raised btn-fab btn-fab-mini">
                                <i class="material-icons">search</i>
                            </button>
                        </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="col-md-12 col-lg-12">
                    <form id="form-sort">
                        <h4 class="card-title">Sắp xếp</h4>
                        <div class="form-group">
                            <select class="select-sort form-control" name="price_sort">
                                <option selected>Giá</option>
                                <option value="desc">Cao - Thấp</option>
                                <option value="asc">Thấp - Cao</option>
                            </select>
                        </div>
                    </form>
                    <h4 class="card-title">Lọc</h4>
                        {{-- Search Free And Price Doctor --}}
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label style="font-weight: 600;">Tầm giá</label>
                                <div class="panel-body panel-refine">
                                    <span id="price-left" class="pull-left" data-currency="đ"></span>
                                    <span id="price-right" class="pull-right" data-currency="đ"></span>
                                    <div class="clearfix"></div>
                                    <div id="sliderRefine" class="slider slider-rose noUi-target noUi-ltr noUi-horizontal">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label-control" style="font-weight: 600;">Chọn ngày</label>
                                <input class="form-control datepicker" type="date" name="date" value="{{ date('Y-m-d') }}">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label class="label-control" style="font-weight: 600;">Chọn giờ</label>--}}
{{--                                @php--}}
{{--                                    //$now = date('H') + 7;--}}
{{--                                    $now = now();--}}
{{--                                @endphp--}}
{{--                                @if($now->format('H') <= 12)--}}
{{--                                    @php--}}
{{--                                        $startHour = \Carbon\Carbon::createFromTime(8);--}}
{{--                                        $endHour = $startHour->copy()->addHours(4);--}}
{{--                                    @endphp--}}
{{--                                    <label>Sáng</label>--}}
{{--                                    <br>--}}
{{--                                    @for($startHour; $startHour < $endHour; $startHour->addMinutes(15))--}}
{{--                                        <label>--}}
{{--                                            <input--}}
{{--                                                name="time"--}}
{{--                                                type="radio"--}}
{{--                                                value="{{ $startHour->format('H:i') }}"--}}
{{--                                                style="margin-left: 6px;"--}}
{{--                                                @if($now->copy()->addHour() >= $startHour)--}}
{{--                                                    disabled--}}
{{--                                                @endif--}}
{{--                                            />--}}
{{--                                            {{ $startHour->format('H:i') }}--}}
{{--                                        </label>--}}
{{--                                    @endfor--}}
{{--                                @endif--}}
{{--                                @if($now->format('H') <= 17)--}}
{{--                                    @php--}}
{{--                                        $startHour = \Carbon\Carbon::createFromTime(13);--}}
{{--                                        $endHour = $startHour->copy()->addHours(4);--}}
{{--                                    @endphp--}}
{{--                                    <br>--}}
{{--                                    <label>Chiều</label>--}}
{{--                                    <br>--}}
{{--                                    @for($startHour; $startHour < $endHour; $startHour->addMinutes(15))--}}
{{--                                        <label>--}}
{{--                                            <input--}}
{{--                                                name="time"--}}
{{--                                                type="radio"--}}
{{--                                                value="{{ $startHour->format('H:i') }}"--}}
{{--                                                style="margin-left: 6px;"--}}
{{--                                                @if($now->copy()->addHour()->format('H') >= $startHour->format('H') - 1)--}}
{{--                                                    disabled--}}
{{--                                                @endif--}}
{{--                                            />--}}
{{--                                            {{ $startHour->format('H:i') }}--}}
{{--                                        </label>--}}
{{--                                    @endfor--}}
{{--                                @endif--}}
{{--                            </div>--}}
                            <input name="time_start" type="time">
                            <input name="time_end" type="time">
                            <button type="submit" class="btn btn-rose col-md-12">Lọc</button>
                        </form>
                </div>
            </div>
            <div id="show_doctor" class="col-md-10">
                @foreach ($doctors as $doctor)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image" style="height: auto;">
                                <a href="{{ route('user.appointment.create', $doctor) }}">
                                    <img src="{{ $doctor->avatar }}"
                                         style="width: 100%; height: 200px; object-fit: cover; object-position: top;">
                                </a>
                                <div class="colored-shadow"
                                     style="
                                    background-image: url('{{ $doctor->avatar }}');
                                    opacity: 1;
                                    width: 103%;
                                    height: 200px;">
                                </div>
                            </div>
                            <div class="card-content d-flex flex-column">
                                <div class="">
                                    <h6 class="category text-rose">{{ $doctor->specialist->name }}</h6>
                                </div>
                                <div class="">
                                    <h4 class="card-title">
                                        <a href="{{ route('user.appointment.create', $doctor) }}">{{ $doctor->name }}</a>
                                    </h4>
                                </div>
                                <div class="" style="display: flex; align-items: center; margin-bottom: 12px;">
                                    <i class="material-icons" style="font-size: 14px; color: #e91e63;">email</i>
                                    {{ $doctor->email }}
                                </div>
                                <div class="" style="display: flex; align-items: center; margin-bottom: 12px;">
                                    <i class="material-icons" style="font-size: 14px; color: #e91e63;">phone</i>
                                    {{ $doctor->phone }}
                                </div>
                                <h3 class="card-title" style="margin: 0;">
                                    <span class="text-rose">{{ $doctor->price }}</span> đ
                                </h3>
                                <div class="">
                                    <a href="{{ route('user.appointment.create', $doctor) }}"
                                       class="btn btn-rose btn-raised btn-square m-0 col-md-12" style="margin-bottom: 20px;">
                                        Đặt hẹn ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

    </div>
        {{ $doctors->links('user.paginator.index') }}
@endsection
@push('js')
    <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>
    <script>
        function getFreeDoctors() {
            let date = $('input[name="date"]').val();
            let time_start = $('input[name="time_start"]').val();
            let time_end = $('input[name="time_end"]').val();
            $.ajax({
                url: "{{ route('get_free_doctor') }}",
                type: 'GET',
                dataType: 'json',
                data: { 'date': date, 'time_start': time_start,'time_end': time_end},
                success:function (response) {
                    console.log(response);
                    let html = '';
                    response.forEach(function (doctor) {

                    })
                    $('#show_doctor').html(html);
                }
            });
        }

        $(document).ready(function() {
            getFreeDoctors();
            $('input[name="date"], input[name="time_start"], input[name="time_end"]').change(function() {
                getFreeDoctors();
            })

            $(".select-sort").change(function() {
                $("#form-sort").submit();
            });

            //======= Slider =======
            var slider2 = document.getElementById('sliderRefine');
            noUiSlider.create(slider2, {
                start: [{{ $min_price }}, {{ $max_price }}],
                connect: true,
                range: {
                    'min': [{{ $min_price }}],
                    'max': [{{ $max_price }}]
                }
            });

            var limitFieldMin = document.getElementById('price-left');
            var limitFieldMax = document.getElementById('price-right');

            slider2.noUiSlider.on('update', function( values, handle ){
                if (handle){
                    limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);
                } else {
                    limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);
                }
            });
        });
    </script>
@endpush
