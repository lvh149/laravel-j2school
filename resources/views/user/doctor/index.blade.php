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
                <div class="col-md-2" style="display: flex; align-items: center;">
                    <div class="form-group form-rose is-empty">
                        <input type="text" class="form-control" placeholder="Search"
                               value="" name="name">
                        <span class="material-input"></span>
                    </div>
                    <button id="search-btn" class="btn btn-rose btn-raised btn-fab btn-fab-mini">
                        <i class="material-icons">search</i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="col-md-12 col-lg-12">
                    <div id="order-by-price">
                        <h4 class="card-title">Sắp xếp</h4>
                        <div class="form-group">
                            <select class="select-order-by-price form-control" name="orderValue">
                                <option value="desc">Cao - Thấp</option>
                                <option value="asc">Thấp - Cao</option>
                            </select>
                        </div>
                    </div>
                    <h4 class="card-title">Lọc</h4>
                    {{-- Search Free And Price Doctor --}}
                    <div class="form-filter">
                        <div class="form-group">
                            <label style="font-weight: 600;">Tầm giá</label>
                            <input type="hidden"
                                   name="min_price"
                                   value="{{ $min_price }}"
                                   id="input_min_price"
                            >
                            <input type="hidden"
                                   name="max_price"
                                   value="{{ $max_price }}"
                                   id="input_max_price"
                            >
                            <div class="panel-body panel-refine">
                                <span class="pull-left" data-currency="đ">
                                    <span id="price-left">{{ $min_price }}</span>
                                </span>
                                <span class="pull-right" data-currency="đ">
                                    <span id="price-right">{{ $max_price }}</span>
                                </span>
                                <div class="clearfix"></div>
                                <div id="sliderRefine" class="slider slider-rose noUi-target noUi-ltr noUi-horizontal">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">Chuyên khoa</label>
                            <select class="form-control" name="select-specialist" id="select-specialist">
                                @foreach($specialists as $specialist)
                                    <option value="{{ $specialist->id }}">{{ $specialist->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-control" style="font-weight: 600;">Chọn ngày</label>
                            <input class="form-control datepicker" type="date" name="date"
                                   value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label class="label-control" style="font-weight: 600;">Chọn giở</label>
                            <input name="time_start" type="time" value="08:00:00">
                            <input name="time_end" type="time" value="22:00:00">
                        </div>
                        <button id="filter" class="btn-filter btn btn-square btn-rose col-md-12">Lọc</button>
                    </div>
                </div>
            </div>
            <div id="show_doctor" class="col-md-10">
                @foreach ($doctors as $doctor)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image" style="height: auto;">
                                <a href="{{ route('user.appointment.create', $doctor) }}">
                                    <img src="{{ $doctor->avatar }}"
                                         style="width: 100%; height: 250px; object-fit: cover; object-position: center;">
                                </a>
                                <div class="colored-shadow"
                                     style="
                                             background-image: url('{{ $doctor->avatar }}');
                                             opacity: 1;
                                             width: 103%;
                                             height: 255px;">
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
                                       class="btn btn-rose btn-raised btn-square m-0 col-md-12"
                                       style="margin-bottom: 20px;">
                                        Đặt hẹn ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination pull-right">
                    {{ $doctors->links('user.paginator.index') }}
                </div>
            </div>
        </div>
        @endsection
        @push('js')
            <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>
            <script>
                $(document).ready(function () {
                    //get value from url send to input
                    var min_price = window.location.href.indexOf("min_price=") === -1 ? "1000" : window.location.href.split('min_price=').pop().split('&')[0];
                    var max_price = window.location.href.indexOf("max_price=") === -1 ? "10000" : window.location.href.split('max_price=').pop().split('&')[0];
                    var orderValue = window.location.href.indexOf("orderValue=") === -1 ? "desc" : window.location.href.split('orderValue=').pop().split('&')[0];
                    var date = window.location.href.indexOf("date=") === -1 ? $('input[name="date"]').val() : window.location.href.split('date=').pop().split('&')[0];
                    var time_start = window.location.href.indexOf("time_start=") === -1 ? "08:00:00" : window.location.href.split('time_start=').pop().split('&')[0].replaceAll('%3A',':');
                    var time_end = window.location.href.indexOf("time_end=") === -1 ? "20:00:00" : window.location.href.split('time_end=').pop().split('&')[0].replaceAll('%3A',':');
                    var specialist = window.location.href.indexOf("specialist=") === -1 ? $("#select-specialist").val() : window.location.href.split('time_end=').pop().split('&')[0].replaceAll('%3A',':');
                    var name = window.location.href.indexOf("name=") === -1 ? $('input[name="name"]').val() : window.location.href.split('name=').pop().split('&')[0];

                    $('.select-order-by-price').val(orderValue).change();
                    $("#select-specialist").val(specialist).change();
                    $('input[name="date"]').val(date).change();
                    $('input[name="time_start"]').val(time_start).change();
                    $('input[name="time_end"]').val(time_end).change();
                    $('input[name="min_price"]').val(min_price).change();
                    $('input[name="max_price"]').val(max_price).change();
                    $('input[name="name"]').val(name).change();
                });

                //======= Search Doctor =======
                function searchDoctor(page) {
                    let searchVal = $('input[name="name"]').val();
                    $.ajax({
                        url: "{{ route('doctor.search') }}",
                        type: 'GET',
                        dataType: 'json',
                        data: {
                            'name': searchVal,
                        },
                        complete: function (response) {
                            var url = '{{url("user/doctor/search")}}';
                            var append = url.indexOf("?") == -1 ? "?" : "&";
                            var finalURL = url + append
                                + $('input[name="name"]').serialize()
                                + "&page=" + page;
                            //set to current url
                            window.history.pushState('', '', finalURL);
                            // console.log(finalURL);
                            $('#show_doctor').html(response.responseText);
                        }
                    });
                }

                //======= Filter Doctor =======
                function getFreeDoctors(page) {
                    let date = $('input[name="date"]').val();
                    let time_start = $('input[name="time_start"]').val();
                    let time_end = $('input[name="time_end"]').val();
                    let orderValue = $('.select-order-by-price').val();
                    let specialist = $('#select-specialist').val();
                    let min_price = $('input[name="min_price"]').val();
                    let max_price = $('input[name="max_price"]').val();

                    $.ajax({
                        url: "{{ route('get_free_doctor') }}",
                        type: 'GET',
                        dataType: 'json',
                        data: {
                            'date': date,
                            'time_start': time_start,
                            'time_end': time_end,
                            'orderValue': orderValue,
                            'page': page,
                            'specialist': specialist,
                            'min_price': min_price,
                            'max_price': max_price,
                        },
                        complete: function (response) {
                            var url = '{{url("user/doctor/viewDoctor")}}';
                            var append = url.indexOf("?") == -1 ? "?" : "&";
                            var finalURL = url + append
                                + $('.select-order-by-price').serialize()
                                + "&" + $('#select-specialist').serialize()
                                + "&" + $('input[name="min_price"]').serialize()
                                + "&" + $('input[name="max_price"]').serialize()
                                + "&" + $('input[name="date"]').serialize()
                                + "&" + $('input[name="time_start"]').serialize()
                                + "&" + $('input[name="time_end"]').serialize()
                                + "&page=" + page;
                            //set to current url
                            window.history.pushState('', '', finalURL);
                            // console.log(finalURL);
                            $('#show_doctor').html(response.responseText);
                        }
                    });
                }

                $(document).ready(function () {
                    $('#search-btn').click(function () {
                        searchDoctor(1);
                    })

                    $(document).on('keypress',function(e) {
                        if(e.which == 13) {
                            searchDoctor(1);
                        }
                    });

                    $('.btn-filter').click(function () {
                        getFreeDoctors(1);
                    })

                    $(document).on("click", ".pagination a", function (event) {
                        event.preventDefault();
                        var page = $(this).attr('href').split('page=')[1];
                        getFreeDoctors(page);
                        searchDoctor(page);
                    });

                    //======= Price filter =======
                    const slider2 = document.getElementById('sliderRefine');

                    const minPrice = parseInt($('#input_min_price').val());
                    const maxPrice = parseInt($('#input_max_price').val());

                    const priceLeft = $('#price-left');
                    const priceRight = $('#price-right');

                    const priceMinVal = parseInt(priceLeft.text());
                    const priceMaxVal = parseInt(priceRight.text());

                    noUiSlider.create(slider2, {
                        start: [priceMinVal, priceMaxVal],
                        connect: true,
                        step: 500,
                        range: {
                            'min': [{{ $configs['filter_min_price'] }} - 1000],
                            'max': [{{ $configs['filter_max_price'] }} + 2000]
                        }
                    });

                    let val;
                    slider2.noUiSlider.on('update', function (values, handle) {
                        val = Math.round(values[handle]);
                        if (handle) {
                            $('#price-right').text(val);
                            $('#input_max_price').val(val);
                        } else {
                            $('#price-left').text(val);
                            $('#input_min_price').val(val);
                        }
                    });
                });
            </script>
    @endpush
