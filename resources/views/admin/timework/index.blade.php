@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Quản lý lịch làm việc</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Tên bác sĩ</th>
                                <th>Ngày khám</th>
                                <th>Khung giờ khám</th>
                                <th>Thời gian khám</th>
                                <th>Tình trạng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($time_doctors as $time_doctor)
                                <tr>
                                    <td>
                                        {{ $time_doctor->id }}
                                    </td>
                                    <td>
                                        {{ $time_doctor->doctor->name }}
                                    </td>
                                    <td>
                                        {{ $time_doctor->time->date}}
                                    </td>
                                    <td>
                                        {{ $time_doctor->time->time_start ."-".  $time_doctor->time->time_end}}
                                    </td>
                                    <td>
                                        {{60}}
                                    </td>
                                    <td>
                                        @if ($time_doctor->appointment)
                                            {{ \App\Enums\AppointmentStatusEnum::getKeyByValue($time_doctor->appointment->status) }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{ $time_doctors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        $(function (){
            $("#6").addClass('active');
        })
    </script>
@endpush
