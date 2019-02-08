@extends('layouts/admin')
@section('content')
<h1>Users</h1>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Names</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if(count($users)>0)
      @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role->name}}</td>
          <td>{{$user->status == 1 ? 'Active' : 'Not Active'}}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        

      @endforeach

    @endif

    </tbody>
  </table>
@endsection

