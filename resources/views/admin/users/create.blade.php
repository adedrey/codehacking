@extends('layouts/admin')

@section('content')
<h1>Create Users</h1>
    {!! Form::open(['method'=>'post', 'action'=>'AdminUsersController@store', 'class'=>'form-horizontal', 'files'=>true ]) !!}
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
            {!! Form::select('role_id',array(''=>'Choose Options') + $roles, null,['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
            
        </div>
        <div class="form-group">
        

        <div class="form-group">
            {!! Form::label('status','Status: ', ['class'=>'control-label col-sm-2']) !!}
            <div class="col-sm-6 ">
            {!! Form::select('status',array(1=>'Active', 0=> 'Not Active'),0, ['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-offset-4"></div>
            
        </div>
        <div class="form-group">
        {!! Form::label('photo','Upload: ', ['class'=>'control-label col-sm-2']) !!}
            <div class="col sm-6">
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
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
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
            </div>
            
        </div>

        @include('includes.form_errors')
        
        

    {!! Form::close() !!}
@endsection