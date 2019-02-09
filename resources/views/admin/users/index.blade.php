@extends('layouts/admin')
@section('content')
<h1>Users</h1>
@if(Session::has('deleted_user'))
  <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> {{Session('deleted_user')}}
  </div>
@endif

    <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Names</th>
        <th>Email</th>
        <th>Role</th>
        <th>Photo</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @if(count($users)>0)
      @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
          <td>{{$user->email}}</td>
          <td>{{$user->role->name}}</td>
          <td><img class="img-circle" height="50" src="{{$user->photo ? $user->photo->file : '/images/dp.jpg'}}" alt=""></td>
          <td>{{$user->status == 1 ? 'Active' : 'Not Active'}}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td>{{$user->updated_at->diffForHumans()}}</td>
          <td>-
          {!! Form::model($user,['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                  {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
          {!! Form::close() !!}
          </td>
        </tr>
        

      @endforeach

    @endif

    </tbody>
  </table>
@endsection

