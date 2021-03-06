@inject('permissions', 'App\Http\Controllers\GroupController')
@if ($permissions->get()->count())
    @foreach ($permissions->get() as $view)
        @if ($view->status == 1 && $view->permission == 3)
@extends('backend.master')
@section('content-header')
<!-- Main content -->
<ol class="breadcrumb">
    <li>
        <a href="/admin/dashboard">
            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
            الرئيسية
        </a>
    </li>
    <li>
        <a href="/admin/register/users">الاعضاء</a>
    </li>
    <li class="active">تعديل بيانات العضو</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
         <div class="panel panel-primary" id="hidepanel1">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    تعديل بيانات العضو {{$user->name}}
                                </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                {!! Form::model($user, [$user->id, 'method' => 'POST']) !!}
                                        <div class="form-group">
                                          <label>الاسم</label><br>
                                          {!! Form::text('name', null, 
                                              array('class'=>'form-control', 'style'=>'width:100%')) !!}
                                        </div>
                                        <div class="form-group">
                                          <label>البريد الالكتروني</label><br>
                                          {!! Form::text('email', null, 
                                              array('class'=>'form-control', 'style'=>'width:100%')) !!}
                                        </div>
                                        <div class="form-group">
                                          <label>كلمة السر</label><br>
                                          <input type="password" name="password" class="form-control" style="width:100%"/>
                                        </div>
                                        <div class="form-group">
                                          <label>تأكيد كلمة السر</label><br>
                                          <input type="password" name="password_confirmation" class="form-control" style="width:100%"/>
                                        </div>
                                        <div class="form-group">
                                            {!!Form::submit('تعديل',['class'=>'btn btn-default'])!!}
                                        </div>
                                {!!Form::close()!!}
                </div>
        </div>
    </div>
</div>
                @endif
                        @if ($view->status == 2 && $view->permission == 3)
            @section('content')
                <p style="margin-right: 380px;font-size: large;color: rgb(224, 109, 109);"><i class="fa fa-fw fa-minus-square"></i>غير مسموح لك بالدخول لهذه الصفحة</p>
            @endsection
        @endif
    @endforeach
@endif
@endsection
@stop