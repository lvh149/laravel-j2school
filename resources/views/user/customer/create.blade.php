@extends('user.layout.master')
@section('content')
    <div class="col-sm-12 col-sm-offset-1"
        style="display: flex; flex-direction: column; align-items: center; margin: 0px; padding: 20px;">
        <h2 class="title" style="margin-top:0; margin-bottom: 0;">Đăng kí thông tin</h2>
        <form action="{{ route('user.customer.store') }}" method="post" enctype="multipart/form" class="col-lg-8 col-sm-8">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group is-empty">
                        <input type="text" name="name_booking" placeholder="Tên người đăng kí" class="form-control">
                        <span class="material-input"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group is-empty">
                        <input type="text" name="phone_booking" placeholder="Số điện thoại" class="form-control">
                        <span class="material-input"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group is-empty">
                        <input type="text" name="name_patient" placeholder="Tên người khám" class="form-control">
                        <span class="material-input"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group is-empty">
                        <input type="text" name="phone_patient" placeholder="Số điện thoại" class="form-control">
                        <span class="material-input"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="form-group is-empty">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                        <span class="material-input"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="form-group is-empty" style="display: flex; align-items: center;">
                        <label class="pull-left" style="margin-bottom: 0">Giới tính</label>
                        <div class="row">
                            <div class="col-lg-3 col-sm-4 checkbox-radios" style="margin-right: 20px;">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" checked="true" value="1">
                                        <span class="circle"></span><span class="check"></span> Nam
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 checkbox-radios">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="0">
                                        <span class="circle"></span><span class="check"></span> Nữ
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label class="pull-left">Ngày sinh</label>
                        <input type="date" name="birth_date" class="form-control datepicker" value="10/10/2016">
                        <span class="material-input"></span>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-12 col-sm-12">
                    <label class="pull-left">Tình trạng sức khỏe</label>
                    <textarea name="description" class="form-control" rows="5"></textarea>
                </div>
            </div>



            <input type="hidden" name="time_doctor_id" value="{{ $time_doctor->id }}">
            <input type="hidden" name="price" value="{{ $time_doctor->doctor->price }}">

            <button class="col-lg-12 col-sm-12 btn btn-primary btn-square" type="submit">Đăng kí</button>
        </form>
    </div>
    </div>
@endsection
@push('js')
@endpush
