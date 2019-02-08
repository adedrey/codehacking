@extends('layouts/admin')

@section('content')
<h1>Edit Users</h1>
<div class="col-sm-3">
    <img height="50pxs" src="{{$user->photo ? $user->photo->file : '/images/dp.jpg'}}" alt="" class="img-responsive img-circle">
</div>
<div class="col-sm-9">
    {!! Form::model($user, ['method'=>'PUT', 'action'=>['AdminUsersController@update', $user->id], 'class'=>'form-horizontal', 'files'=>true ]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:', ['class'=>'control-label col-sm-2']) !!}
            <div class="col-sm-6 ">
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
            
        </div>

        <div class="form-group">
            {!! Form::label('email','Email:', ['class'=>'control-label col-sm-2']) !!}
            <div class="col-sm-6 ">
            {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
            
        </div>

        <div class="form-group">
            {!! Form::label('role_id','Role:', ['class'=>'control-label col-sm-2']) !!}
            <div class="col-sm-6 ">
            {!! Form::select('role_id', $roles, null,['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
            
        </div>
        <div class="form-group">
        

        <div class="form-group">
            {!! Form::label('status','Status: ', ['class'=>'control-label col-sm-2']) !!}
            <div class="col-sm-6 ">
            {!! Form::select('status',array(1=>'Active', 0=> 'Not Active'),null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
            
        </div>
        <div class="form-group">
        {!! Form::label('photo','Upload: ', ['class'=>'control-label col-sm-2']) !!}
            <div class="col sm-6">
                {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
        </div>

        <div class="form-group">   
            {!!  Form::label('password', 'Password: ', ['class'=>'control-label col-sm-2']) !!}
            <div class="col-sm-6">
            {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Create User',['class'=>'btn btn-default']) !!}
            </div>
            
        </div>

        
    {!! Form::close() !!}

    @include('includes.form_errors')
</div>
@endsection