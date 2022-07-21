@extends('user.layout.master')
@section('content')
    <div class="row" style="display: flex; justify-content: space-between; padding: 90px 0;">
        <div class="col-sm-4 col-sm-offset-1 text-center" style="margin: 0">
            <img src="{{ asset('img/faces/doctor3.jpg') }}" alt="Thumbnail Image"
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
                <span class="tim-note">Bác sĩ Chiêu Minh</span>
            </h4>
            <p class="text-muted">
                Khoa tim mạch
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
                    <span>100.000đ</span>
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
        <div class="col-sm-8 col-sm-offset-1 text-center" style="margin: 0">
            <h2 class="title" style="margin-top:0; margin-bottom: 0;">Đặt lịch hẹn</h2>
            <form id="contact-form" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group is-empty">
                                    <input type="text" value="" name="registrantName"
                                        placeholder="Tên người đăng kí" class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group is-empty">
                                    <input type="text" value="" name="registrantPhone" placeholder="Số điện thoại"
                                        class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group is-empty">
                                    <input type="text" value="" name="patientName" placeholder="Tên bệnh nhân"
                                        class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group is-empty">
                                    <input type="text" value="" name="patientPhone" placeholder="Số điện thoại"
                                        class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 15px;">
                            <label class="control-label text-left" style="font-size: 14px; width: 100%;">Giới tính</label>
                            <div class="form-group label-floating is-empty">
                                <div class="radio">
                                    <label style="padding-right: 30px;">
                                        <input type="radio" name="gender" checked="true" value="1">
                                        <span class="circle"></span><span class="check">
                                        </span>
                                        Nam
                                    </label>
                                    <label style="padding-right: 30px;">
                                        <input type="radio" name="gender" value="0">
                                        <span class="circle"></span><span class="check">
                                        </span>
                                        Nữ
                                    </label>
                                    <label>
                                        <input type="radio" name="gender" value="2">
                                        <span class="circle"></span><span class="check">
                                        </span>
                                        Khác
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-left" style="font-size: 14px; width: 100%;">
                            <label class="label-control">Ngày sinh</label>
                            <input type="date" class="form-control datepicker" name="birth_date" />
                        </div>
                        <div class="form-group text-left" style="font-size: 14px; width: 100%;">
                            <label class="control-label">Vấn đề sức khỏe</label>
                            <textarea name="health_problem" class="form-control" id="message" rows="4"></textarea>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-left" style="font-size: 14px; width: 100%;">
                            <label class="label-control">Chọn ngày</label>
                            <input type="date" class="form-control datepicker" name="date_picker" />

                        </div>
                        <div class="form-group">
                            <label class="label-control">Chọn giờ</label>
                            <ul class="nav nav-pills nav-pills-icons row"
                                style="display: flex;  justify-content: space-between; align-items: center; flex-wrap: wrap;"
                                role="tablist">
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#tasks-1" role="tab" data-toggle="tab">
                                        6:00
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="submit text-center">
                    <input type="submit" class="btn btn-rose btn-raised btn-round" value="Đặt hẹn">
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
@endpush
