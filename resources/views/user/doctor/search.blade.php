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
                    <h4 class="title">
                        <span class="tim-note"
                            style="margin-left: 12px; margin-right: 4px; border-left: 2px solid #ccc; padding-left: 12px;">
                            Tỉm thấy
                        </span>
                        <span style="color: #e91e63; font-size: 26px;">
                            {{ count($doctors) }}
                        </span>
                        bác sĩ
                    </h4>
                </div>
                <div class="col-md-7" style="display: flex; justify-content: flex-end; align-items: center;">
                    <form class="navbar-form navbar-right" role="search" method="get" id="search-form"
                        action="{{ route('doctor.search') }}">
                        <div class="form-group form-rose is-empty">
                            <input type="text" class="form-control" placeholder="Search" value="" name="key">
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
            <div class="col-md-12">
                <h4 class="card-title">Tìm kiếm bác sĩ</h4>
                <table class="table table-shopping" style="overflow: hidden;">
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td class="col-md-4">
                                    <img src="{{ asset('storage/' . $doctor->avatar) }}">
                                </td>
                                <td class="col-md-8" style="padding-left: 30px; color: #73777B">
                                    <h4 class="title" style="margin-top: 0px;">
                                        <span class="tim-note">{{ $doctor->name }}</span>
                                    </h4>
                                    <div
                                        style="
                                                        display: flex;
                                                        justify-content: space-between;
                                                        align-items: center;
                                                        margin-bottom: 20px;
                                                        ">
                                        <h7 class="info-title">{{ $doctor->specialist->name }}</h7>
                                        <h7 style="font-weight: 600; color: #e91e63;">
                                            {{ $doctor->experience }}
                                        </h7>
                                    </div>
                                    <div class="row"
                                        style="
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: space-between;
                                                        margin-bottom: 20px;
                                                        margin-left: -16.5px;
                                                        ">
                                        <div class="col-md-4" style="display: flex; align-items: center;">
                                            <i class="material-icons" style="color: #e91e63;">email</i>
                                            {{ $doctor->email }}
                                        </div>
                                        <div class="col-md-4" style="display: flex; align-items: center;">
                                            <i class="material-icons" style="color: #e91e63;">phone</i>
                                            {{ $doctor->phone }}
                                        </div>
                                        <div class="col-md-4" style="display: flex; align-items: center;">
                                            <i class="material-icons" style="color: #e91e63;">explore</i>
                                            {{ $doctor->nationality }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div style="display: flex; align-items: center; margin-bottom: 20px">
                                            <h6 class="category text-danger" style="margin: 0 12px 0 16.5px">
                                                25%off
                                            </h6>
                                            <h3 class="card-title" style="margin: 0">
                                                {{ $doctor->price }}<small>đ</small>
                                            </h3>
                                        </div>
                                        <a href="{{ route('user.appointment.create', $doctor) }}"
                                            class="btn btn-rose btn-raised btn-round" style="margin: 0 0 0 16px;">
                                            Đặt hẹn ngay
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $(".select-sort").change(function() {
                $("#form-sort").submit();
            });
        });
    </script>
@endpush
