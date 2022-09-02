@extends('user.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="calendar"></div>
        </div>
    </div>
@endsection

{{-- Css content modal --}}
<style>
    .modal-body_content div {
        margin-bottom: 8px;
    }
    .modal-body_content span {
        font-size: 16px;
        margin-right: 4px;
    }

    .modal-body_content h6 {
        display: inline;
        letter-spacing: 2px;
    }
</style>

{{-- Modal info appointment --}}
<div class="modal fade in" id="modal-info" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="overflow: auto">
            <div class="modal-header" style="background-color: #e91e63; color: #fff; padding-bottom: 24px;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title text-center text-uppercase" style="letter-spacing: 4px;">Thông tin chi tiết</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 modal-body_content"></div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('img/doctor.jpg') }}" style="width: 50%; height: 270px;object-fit: cover; object-position: center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script>
    $( document ).ready(function() {
        $(document).keydown(function(e) {
            let code = e.keyCode || e.which;
            if (code == 27) $("#modal-info").modal('hide');
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            events: '{{ route('get_doctor', Auth()->guard('doctor')->id()) }}',
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            eventClick: function(info) {
                let date = info.event.start.getDate() +'/' + info.event.start.getMonth() + '/' + info.event.start.getFullYear();
                let timeStart = info.event.start.getHours() + ':' + info.event.start.getMinutes();
                let timeEnd = info.event.end.getHours() + ':' + info.event.end.getMinutes();
                let name_patient = info.event._def.extendedProps.name_patient ?? 'Chưa có';
                let gender = info.event._def.extendedProps.gender ?? 'Chưa có';
                let genderName = gender;
                if(gender !== 'Chưa có') genderName = gender === 0 ? 'Nam' : 'Nữ';
                let checkDate = info.event._def.extendedProps.birth_date;
                let birthdate = checkDate ? (new Date(checkDate).toLocaleDateString('en-GB')) : 'Chưa có';
                let email = info.event._def.extendedProps.email ?? 'Chưa có';
                let phone = info.event._def.extendedProps.phone_patient ?? 'Chưa có';
                let desc = info.event._def.extendedProps.description ?? 'Chưa có';
                let status = info.event._def.extendedProps.status == 2 ? 'Đã duyệt' : 'Chưa duyệt';

                document.querySelector('.modal-body_content').innerHTML = `
                    <div>
                        <span>Tên:</span>
                        <h6>`+ name_patient +`</h6>
                    </div>
                    <div>
                        <span>Giới tính:</span>
                        <h6>`+ genderName +`</h6>
                    </div>
                    <div>
                        <span>Ngày sinh:</span>
                        <h6>`+ birthdate +`</h6>
                    </div>
                    <div>
                        <span>Email:</span>
                        <h6>`+ email +`</h6>
                    </div>
                    <div>
                        <span>Số điện thoại:</span>
                        <h6>`+ phone +`</h6>
                    </div>
                    <div>
                        <span>Bệnh lí:</span>
                        <h6>`+ desc +`</h6>
                    </div>
                    <div>
                        <span>Trạng thái:</span>
                        <h6>`+ status +`</h6>
                    </div>
                    <div>
                        <span>Lịch hẹn:</span>
                        <h6>`+ date + '  ' + timeStart + '-' + timeEnd +`</h6>
                    </div>
                `;
                $('#modal-info').modal('show');
            }
        });
        calendar.render();
    });
</script>
@endpush
