@extends('user.layout.master')
@section('content')
    <div class="row" style="display: flex; justify-content: space-between; padding: 20px;">
        <div class="col-sm-5 col-sm-offset-1 text-center" style="margin: 0">
            <img src="{{ asset('storage/' . $doctor->avatar) }}" alt="Thumbnail Image"
                class="img-circle img-raised img-responsive center-block"
                style="height: 140px; width: 150px; object-fit: cover;">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fa-solid fa-star text-rose" style="font-size:14px;"></i>
                        <span class="text-primary" style="font-size:14px; font-weight: 500;">5.0</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fa-solid fa-eye text-rose" style="font-size:14px;"></i>
                        <span class="text-primary" style="font-size:14px; font-weight: 500;">5K</span>
                    </div>
                </div>
            </div>
            <h4 class="title">
                <span class="tim-note">Bác sĩ {{ $doctor->name }}</span>
            </h4>
            <p class="text-muted">
                @foreach ($specialists as $specialist)
                    @if ($specialist->id === $doctor->specialist_id)
                        {{ $specialist->name }}
                    @endif
                @endforeach
            </p>
            <div class="progress progress-line-primary" style="margin-top: 20px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                    style="width: 100%;">
                </div>
            </div>
            <h4 class="title text-left">
                <span class="tim-note ">Thông tin</span>
            </h4>
            <div class="row" style="display: flex; justify-content: space-around; align-item: center;">
                <button type="button" class="btn"
                    style="width: 28.5%; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #bdbdbd;">
                    <p>Giá</p>
                    <span> {{ $doctor->price }}</span>
                </button>

                <button type="button" class="btn btn-default"
                    style="width: 28.5%; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #bdbdbd;">
                    <p>Kinh nghiệm</p>
                    <span> > 15 năm</span>
                </button>

                <button type="button" class="btn btn-default"
                    style="width: 28.5%; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #bdbdbd;">
                    <p>Bệnh nhân</p>
                    <span>600 +</span>
                </button>
            </div>
            <div class="progress progress-line-primary" style="margin-top: 20px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                    style="width: 100%;">
                </div>
            </div>
            <h4 class="title text-left">
                <span class="tim-note ">Tiểu sử</span>
                <blockquote style="margin-top: 20px;">
                    <small>
                        Bác sĩ cấp cứu tổng hợp Bệnh viện quận Tân Phú
                    </small>
                    <small>
                        Bác sĩ cấp cứu Phòng khám Hoàn Mỹ Sài Gòn
                    </small>
                </blockquote>
            </h4>
        </div>
        <div class="col-sm-7 col-sm-offset-1 text-center" style="margin: 0">
            <h2 class="title" style="margin-top:0; margin-bottom: 0;">Đăng kí lịch hẹn</h2>
            <div class="row">
                @foreach ($time_doctors as $time_doctor)
                    {{-- @if ($time_doctor->time->dateformat >= $current_time) --}}
                    <div class="col-md-4">
                        <a href={{ route('user.customer.create', $time_doctor) }}
                            class="btn btn-primary btn-square btn-default btn-block">
                            <i class="material-icons">assignment</i>
                            {{ $time_doctor->time->time_start . '-' . $time_doctor->time->time_end }}
                            <div class="ripple-container"></div>
                        </a>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
