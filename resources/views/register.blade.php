@extends('layouts.auth')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <h2 class="text-uppercase">Tạo tài khoản mới</h2>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Chúc bạn vui vẻ</p>

    <form method="POST" action="{{ route('user.post.register') }}">
      {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
        <input name="name" type="text" class="form-control" placeholder="Họ và tên" value="{{ old('name') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <span class="text-danger">{{ $errors->first('name') }}</span>
      </div>
      <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger">{{ $errors->first('email') }}</span>
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
        <input name="password" type="password" class="form-control" placeholder="Mật khẩu" value="{{ old('password') }}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span class="text-danger">{{ $errors->first('password') }}</span>
      </div>
      <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Xác nhận mật khẩu" value="{{ old('password_confirmation') }}">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <a href="{{ route('user.login') }}" class="text-uppercase">Đăng nhập</a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng Ký</button>
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

    <a href="#">Quên mật khẩu</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->    
@endsection
