@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
          <a href="{{route('manageusers.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Phone</th>
                <th>Date Created</th>
                <th>status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th>{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->city}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->created_at->toFormattedDateString()}}</td>
                  <td>{{!empty($user->deleted_at)?'trashed':'published'}}</td>
                     @if(empty($user->deleted_at))
                     <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('manageusers.show', $user->id)}}">View</a><a class="button is-light" href="{{route('manageusers.edit', $user->id)}}" style="background-color: #9D0CC1">Edit</a>
                      <form method="POST" action="{{route('manageusers.destroy', $user->id)}}">
                        <form method="POST" action="{{route('manageusers.destroy', $user->id)}}">
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                      <button style="background-color: #FF0000;margin-right: -78px;margin-top: -35px" class="button is-light" type="submit" >
                        Delete
                      </button>
                      </form>
                    </td>
                    @endif
                    <td>
                      @if($user->deleted_at)
                      <form method="POST" action="{{route('manageusers.restore', $user->id)}}">
                         {{ csrf_field() }}

                        <button style="background-color: #EB6EFF;margin-left: 35px;margin-top: 0px" class="button is-light" type="submit" >Undo
                        </button>
                      </form>
                        @endif
                    </td>
                    <td>
                      @if($user->deleted_at)
                      <form method="POST" action="{{route('manageusers.deleteforever', $user->id)}}">
                         {{ csrf_field() }}

                        <button style="background-color: #CD2B08;margin-left: -18px;margin-top: 0px" class="button is-light" type="submit" >Destroy
                        </button>
                      </form>
                        @endif
                    </td>
               </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$users->links()}}
    </div>
@endsection
