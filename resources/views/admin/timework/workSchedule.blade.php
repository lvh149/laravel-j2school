@extends('admin.layout.master')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <label class="label-control">Chọn Chuyên ngành</label>
            <select class="selectpicker" data-style="btn btn-primary btn-round"
                    title="Chọn Chuyên ngành" data-size="7" name="specialist"
                    id="select-specialist">
                <option value=""></option>
                @foreach($specialists as $specialist)
                    <option value="{{ $specialist->id }}">
                        {{ $specialist->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-3">
            <label class="label-control">Chọn Bác sĩ</label>
            <select class="selectpicker select-doctor" multiple name="doctor_id[]"
                    data-style="btn btn-primary btn-round"
                    id='select-doctor'>
                <option value=""></option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="calendar"></div>
        </div>
    </div>

@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                {{--events: '{{ route('admin.get_schedule') }}',--}}
                events: function(fetchInfo, successCallback, failureCallback) {
                    var doctor_id = $('#select-doctor').val();
                    var specialist_id = $('#select-specialist').val();
                    $.ajax({
                        type:"GET",
                        url:"{{ route('admin.get_schedule') }}" ,
                        data: {
                            "doctor_id": doctor_id,
                            "specialist_id": specialist_id,
                        },
                    }).done(function(data) {
                        successCallback(data); //use the supplied callback function to return the event data to fullCalendar
                    })
                },
                initialView: 'dayGridMonth',
                dayMaxEvents: true,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listWeek'
                },
                eventDidMount: function (info) {
                    if (info.event.extendedProps.status === 1) {
                        info.el.style.backgroundColor = 'blue';
                    } else if (info.event.extendedProps.status === 2) {
                        info.el.style.backgroundColor = 'purple';
                    }
                },
            });
            calendar.render();
            $('#select-doctor').change(function() {
                calendar.refetchEvents();
            });
            $('#select-specialist').change(function() {
                calendar.refetchEvents();
            });
        });

        $('#select-specialist').change(function () {
            console.log($('#select-specialist').val())
            $("#select-doctor option").remove();
            let id = $(this).val();
            $.ajax({
                url: '{{ route('api.doctor') }}',
                data: {
                    "id": id
                },
                type: 'get',
                dataType: 'json',
                success: function (data) {
                    $.each(data.data, function (index, each) {
                        $('#select-doctor').append($('<option>', {value: each.id, text: each.name}));
                    });
                    $("#select-doctor").selectpicker('refresh')

                },
            });
        });
    </script>
@endpush