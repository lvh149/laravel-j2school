@extends('admin.layout.master')
@section('content')
    <a class="btn btn-success" href="{{route('time_doctor.create')}}">
        Thêm
    </a>
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
                                <th>Sửa</th>
                                <th>Xoá</th>
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
                                        {{ $time_doctor->time->dateformat}}
                                    </td>
                                    <td>
                                        {{ $time_doctor->time->time_start ."-".  $time_doctor->time->time_end}}
                                    </td>
                                    <td>
                                        {{$time_doctor->time->time}}
                                    </td>
                                    <td>
                                        @if ($time_doctor->appointment)
                                            {{ \App\Enums\AppointmentStatusEnum::getKeyByValue($time_doctor->appointment->status) }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('time_doctor.edit',$time_doctor)}}">
                                            <button class="btn btn-info">Sửa</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('time_doctor.destroy',$time_doctor)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" style="margin-top: 25px">Xoá</button>
                                        </form>
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
        $(function () {
            $("#6").addClass('active');
        })
    </script>
@endpush
