@extends('layouts.user')

@section('css')
<link href="{{ asset('user/account/style.css') }}" rel="stylesheet">
<style>
    .list-group-item a {
        color: black !important;
        text-decoration: none !important;
        display: flex;
    }

    .list-group-item.active {
        background-color: #e9ecef !important;
        border-color: #e9ecef !important;
    }

    .list-group-item:hover {
        background-color: #e9ecef !important;
        border-color: #e9ecef !important;
    }

    .list-group-item .badge-danger {
        color: #fff;
        background-color: #30caa8 !important;
    }

    img.card-img-top {
        /* height: 100px; */
        /* width: 100px; */
        background-size: 32px 32px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        margin: 0;
        overflow: hidden;
        position: relative;
        height: 100px;
        width: 100px;
        z-index: 0;
    }

    .avatar {
        color: black;
        text-decoration: none;
    }
</style>
@endsection

@section('page')

@if($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <p>{{$message}}</p>
    <p class="mb-0"></p>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    Upload Validation Error
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif



<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 update-icon">
                <p>Thông Tin Cá Nhân</p>
            </div>
        </div>
    </div>
    <div class="container midd">
        <div class="row">
            <div class="col-sm-4">
                <div class="card content-card">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{route('post.create')}}">
                                <span>Đăng bán bất động sản</span>
                            </a>
                        </li>
                        <li class="list-group-item ">
                            <a href="{{route('account')}}">
                                <span>Thông tin cơ bản</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="">
                                <span>Đánh giá và nhận xét</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('account.my_re')}}">
                                <span>Bất động sản của bạn</span>
                            </a>
                        </li>
                        <li class="list-group-item ">
                            <a href="{{ route('appointment.detail',['id'=>$id]) }}">
                                <span>Cuộc hẹn</span> 
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('logout') }}"><span>Đăng xuất</span> </a>
                        </li>
                    </ul>
                </div>
            </div>




            <div class="col-sm-8">
                <div class="card content-card">
                    <div class="card-header contnet-header">
                    <p>Bạn có <span style="color:red"> {{count($result)}}</span> cuộc hẹn!</p>
                    </div>
                        <div class="row">
                            <div class="col-sm-12   ">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                          <tr class="table-primary">
                                            <th>Nội dung cuộc hẹn</th>
                                            <th>Thời gian cuộc hẹn</th>
                                            <th>Trạng thái</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($result as $val)
                                            <tr >
                                            <td>{{$val->appointment_content}}</td>
                                            <td>{{$val->appointment_time}}</td>
                                            <td>
                                                @if($val->appointment_status==1)
                                                <span style="color:rgba(17, 255, 0, 1)">Đã xác nhận</span>
                                                @else
                                                <span style="color:#ff0076">Đang xử lý</span>
                                                @endif
                                            </td>
                                            </tr>
                                        @endforeach
                                        
                                        </tbody>
                                      </table>
                                  
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection