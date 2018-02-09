@extends('admin.layout.auth')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ثبت نمایندگی جدید
            <small>پنل مدیریت</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li class="active">ثبت نمایندگی</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">فرم ثبت نام</h3>
                    </div><!-- /.box-header -->
                    <form role="form" method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label>نام</label>
                                        <input name="name" type="text" class="form-control" placeholder="نام" required>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label>پست الکترونیک</label>
                                        <input name="email" type="email" class="form-control" placeholder="پست الکترونیک" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>کلمه عبور</label>
                                        <input name="password" type="text" class="form-control" placeholder="کلمه عبور" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('lname') ? ' has-error' : '' }}">
                                        <label>نام خانوادگی</label>
                                        <input name="lname" type="text" class="form-control" placeholder="نام خانوادگی" required>
                                        @if ($errors->has('lname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lname') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('nic') ? ' has-error' : '' }}">
                                        <label>کد ملی</label>
                                        <input name="nic" type="number" min="1000000000" max="9999999999" class="form-control" placeholder="کد ملی" required>
                                        @if ($errors->has('nic'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nic') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div class="form-group {{ $errors->has('orgId') ? ' has-error' : '' }}">
                                        <label>کد سازمانی</label>
                                        <input name="orgId" type="number" class="form-control" placeholder="کد سازمانی" required>
                                        @if ($errors->has('orgId'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('orgId') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
                                        <label>شماره تلفن همراه</label>
                                        <input name="mobile" type="number" class="form-control" placeholder="شماره تلفن همراه" required>
                                        @if ($errors->has('mobile'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>شماره نمایندگی</label>
                                        <input disabled name="" type="number" class="form-control" placeholder="شماره نمایندگی" >
                                    </div>


                                    <div class="form-group  {{ $errors->has('bankNum') ? ' has-error' : '' }}">
                                        <label>شماره ۱۶ رقمی کارت بانکی</label>
                                        <input name="bankNum" type="number" min="1000000000000000" max="9999999999999999" class="form-control" placeholder="شماره ۱۶ رقمی کارت بانکی">
                                        @if ($errors->has('bankNum'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bankNum') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('bank') ? ' has-error' : '' }}">
                                        <label>نام بانک</label>
                                        <input name="bank" type="text" class="form-control" placeholder="نام بانک">
                                        @if ($errors->has('bank'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bank') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="InputFile">عکس پروفایل</label>
                                        <input type="file" name="image" id="InputFile">
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                        <p class="help-block">تصویر استاندارد</p>
                                    </div>

                                    <div class="form-group {{ $errors->has('city_id') ? ' has-error' : '' }}">

                                        <label>استان</label>
                                        <select class="form-control" id="state" name="state_id">

                                        </select>
                                        <label>شهر</label>
                                        <select class="form-control" id="city" name="city_id">

                                        </select>

                                        @if ($errors->has('city_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('city_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('path') ? ' has-error' : '' }}">
                                        <label>مسیر</label>
                                        <input name="path" type="text" class="form-control autocomplete" placeholder="یک مسیر را وارد کنید">
                                        @if ($errors->has('path'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('path') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label>آدرس</label>
                                        <textarea name="address" class="form-control" rows="3" placeholder="آدرس ..."></textarea>
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div>





                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">ثبت اطلاعات</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>   <!-- /.row -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<script src="/js/city.js" type="text/javascript"></script>


@if(isset($user->city_id))
<script type="text/javascript">
    window.loadWithRegion({{$user->city_id}});
</script>
    @else
    <script type="text/javascript">
        window.loadWithRegion(1);
    </script>
@endif


    <script>
        $(function() {
            var availableTags = [
               "مسیر نمونه"
            ];

            $(".autocomplete").autocomplete({
                source: availableTags
            });
        });
    </script>

    <style>
        .ui-autocomplete {
            position: absolute;
            z-index: 1000;
            cursor: default;
            padding: 0;
            margin-top: 2px;
            list-style: none;
            background-color: #ffffff;
            border: 1px solid #ccc
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .ui-autocomplete > li {
            padding: 3px 20px;
        }
        .ui-autocomplete > li.ui-state-focus {
            background-color: #DDD;
        }
        .ui-helper-hidden-accessible {
            display: none;
        }
    </style>

@endsection
