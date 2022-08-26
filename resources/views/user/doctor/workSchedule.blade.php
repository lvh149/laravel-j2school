@extends('user.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="calendar"></div>
        </div>
    </div>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            events: '{{ route('get_doctor', \Illuminate\Support\Facades\Auth::id()) }}',
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            }
        });
        calendar.render();
    });
</script>
@endpush
