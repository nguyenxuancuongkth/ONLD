@extends('layouts.business')

@section('content')
<!-- Page Heading/Breadcrumbs -->
<div class="row my-4">
    <div class="col-lg-4">
        <img class="img-fluid rounded" src="{{ asset('images/lotte-cinema.jpg') }}" alt="">
    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-8">
        <section class="text-center">
            <div class="container">
                <h1 class="text-danger">Tặng vé xem  phim miễn phí</h1>
                <p class="lead">Người được thích nhiều nhất trong tuần sẽ được gửi tặng một cặp vé xem phim ở rạp Lotte</p>
                <p class="lead">Thời gian diễn ra sự kiện: 1/10/2017 - 15/10/2017</p>
                <p>
                    <a href="#" class="btn btn-success">Tham gia ngay</a>
                </p>
            </div>
        </section>
    </div>
    <!-- /.col-md-4 -->
</div>
<div class="card">
    <div class="col-md-12">
        <p></p>
        <div class="row">
            <!-- Select Basic -->
            <div class="col-md-2">
                <div class="form-group">
                    <select class="custom-select form-control">
                        <option selected>Giới tính</option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                        <option value="3">Khác</option>
                    </select>
                </div>
            </div>
            <!-- Select Basic -->
            <div class="col-md-2">
                <div class="form-group">
                    <select class="custom-select form-control">
                        <option selected>Hôn nhân</option>
                        <option value="1">Độc Thân</option>
                        <option value="2">Đã có gia đình</option>
                        <option value="3">Ly dị</option>
                    </select>
                </div>
            </div>
            <!-- Text input-->
            <!-- Select Basic -->
            <div class="col-md-2">
                <div class="form-group">
                    <select class="custom-select form-control">
                        <option selected>Mục tiêu</option>
                        <option value="1">Tìm người yêu</option>
                        <option value="2">Tìm bạn bè mới</option>
                        <option value="3">Tìm người tâm sự</option>
                    </select>
                </div>
            </div>
            <!-- Select Basic -->
            <div class="col-md-2">
                <div class="form-group">
                    <select class="custom-select form-control">
                        <option selected>Khu vực</option>
                        <option value="1">Miền bắc</option>
                        <option value="2">Miền trung</option>
                        <option value="3">Miền nam</option>
                    </select>
                </div>
            </div>
            <!-- Select Basic -->
            <div class="col-md-2">
                <div class="form-group">
                    <select class="custom-select form-control">
                        <option selected>Tuổi</option>
                        <option value="1">Miền bắc</option>
                        <option value="2">Miền trung</option>
                        <option value="3">Miền nam</option>
                    </select>
                </div>
            </div>

            <!-- Button -->
            <div class="col-md-2">
                <div class="form-group">
                    <button id="singlebutton" name="singlebutton" class="btn btn-success float-right">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
    <p class="d-md-none"></p>
</div>
<p></p>
<div class="row">
    <div class="col-md-9">
        <div class="row">
           <?php for ($i=0; $i < 20; $i++): ?>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="col-md-12">
                        <p></p>
                        <div class="media">
                            <img class="d-flex mr-3 img-thumbnail" src="http://dating.dev/lte/dist/img/user8-128x128.jpg" width="130" height="130" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="card-title"><a class="atag" href="http://dating.dev/user/detail/1">william shakespeare</a></h5>                                
                                <div class="row">
                                    <div class="col-md-3">
                                        Nam
                                    </div>
                                    <div class="col-md-4">   
                                        27 Tuổi  
                                    </div>    
                                    <div class="col-md-5">   
                                        Đã Kết Hôn
                                    </div>                                                                     
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        Hà Nội 
                                    </div>
                                    <div class="col-md-7">
                                        Nhân viên văn phòng
                                    </div>                                    
                                </div>    
                                <p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#" class="btn btn-sm btn-success btn-block"><span class="fa fa-plus-circle"></span> Chi Tiết </a>
                                    </div>     
                                    <div class="col-md-4">
                                        <a href="#"  class="btn btn-sm btn-success btn-block"><span class="fa fa-plus-circle"></span> Thích </a>
                                    </div>   
                                    <div class="col-md-4">
                                        <a href="#"  class="btn btn-sm btn-success btn-block"><span class="fa fa-plus-circle"></span> Nhắn Tin </a>
                                    </div>                                                                                    
                                </div>                                                            
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>                
            </div>            
        <?php endfor;?>
    </div>    
</div>        
<!-- /.col-md-4 -->
<div class="col-md-3">
    <div class="row">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Hot Girl</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Hot Boy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#references" role="tab" data-toggle="tab">Thành Viên Mới</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="profile">
                <p></p>
                <ul class="list-unstyled">
                    <?php for ($i=0; $i < 10; $i++): ?>
                        <li class="media" style="border-bottom: 1px solid #CCC;">
                            <a href="#">
                                <img class="d-flex mr-3 rounded-circle img-thumbnail"
                                src="{{ asset('lte/dist/img/user4-128x128.jpg') }}"
                                width="80" height="80" alt="Generic placeholder image" style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px;">
                            </a>
                            <div class="media-body" style="margin-right: 15px;">
                                <p></p>
                                <h6><a href="#">Manning Hilton</a></h6>
                                <p>This is the body content sThis is theing body content sThis</p>
                            </div>
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="buzz">
                <p></p>
                <ul class="list-unstyled">
                    <?php for ($i=0; $i < 10; $i++): ?>
                        <li class="media" style="border-bottom: 1px solid #CCC;">
                            <a href="#">
                                <img class="d-flex mr-3 rounded-circle img-thumbnail"
                                src="{{ asset('lte/dist/img/user4-128x128.jpg') }}"
                                width="80" height="80" alt="Generic placeholder image" style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px;">
                            </a>
                            <div class="media-body">
                                <p></p>
                                <h6><a href="#">Manning Hilton</a></h6>
                                <p>This is the body content sThis is theing body content sThis is the</p>
                            </div>
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="references">
                <p></p>
                <ul class="list-unstyled">
                    <?php for ($i=0; $i < 10; $i++): ?>
                        <li class="media" style="border-bottom: 1px solid #CCC;">
                            <a href="#">
                                <img class="d-flex mr-3 rounded-circle img-thumbnail"
                                src="{{ asset('lte/dist/img/user4-128x128.jpg') }}"
                                width="80" height="80" alt="Generic placeholder image" style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px;">
                            </a>
                            <div class="media-body">
                                <p></p>
                                <h6><a href="#">Manning Hilton</a></h6>
                                <p>This is the body content sThis is theing body content sThis is the</p>
                            </div>
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.row -->
<!-- /.row -->
@endsection
@push('styles')
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('lte/font-awesome/css/font-awesome.min.css') }}"> --}}
    <style>

    </style>
@endpush
@push('scripts')
    {{--<script src="/example.js"></script>--}}
@endpush
