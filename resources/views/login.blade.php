@extends('layouts.auth')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <h2 class="text-uppercase">Đăng Nhập</h1>
        </div>   
        @if (session('status'))
        <div class="alert alert-warning alert-block">
           {{ session('status') }}
       </div>    
       @endif  

       <!-- /.login-logo -->
       <div class="login-box-body">
        <p class="login-box-msg">Chúc bạn vui vẻ</p>
        <form method="POST" action="{{ route('user.authenticate') }}">
            {{ csrf_field() }}

            <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                <input name="email" type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                <input name="password" type="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <a href="{{ route('user.register') }}" class="text-uppercase">Tạo tài khoản mới</a>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng Nhập</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>Hoặc đăng nhập bằng tài khoản Social <br>(Chúng tôi không đăng bất kì thứ gì lên tường của bạn)</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng nhập sử dụng
            Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng nhập sử dụng
            Google+</a>
        </div>
        <!-- /.social-auth-links -->
        <a href="#">Quên mật khẩu</a>
        <br>
    </div>
    <!-- /.login-box-body -->
</div>
@endsection
