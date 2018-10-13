@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <form action="{{route('manageusers.update', $user->id)}}" method="POST">
          {{method_field('PUT')}}
          {{csrf_field()}}
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>
 <div class="field">
            <label for="city" class="label">City:</label>
            <p class="control">
              <input type="text" class="input" name="city" id="city" value="{{$user->city}}">
            </p>
          </div>

           <div class="field">
            <label for="phone" class="label">Phone:</label>
            <p class="control">
              <input type="text" class="input" name="phone" id="phone" value="{{$user->phone}}">
            </p>
          </div>



          <div class="field">
            <label for="password" class="label">Password</label>
            <b-radio-group v-model="password_options">
              <div class="field">
                <b-radio name="password_options" value="keep">Do Not Change Password</b-radio>
              </div>
              <div class="field">
                <b-radio name="password_options" value="auto">Auto-Generate New Password</b-radio>
              </div>
              <div class="field">
                <b-radio name="password_options" value="manual">Manually Set New Password</b-radio>
                <p class="control">
                  <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                </p>
              </div>
            </b-radio-group>
          </div>
          <div class="column">
          <label for="roles" class="label">Roles:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />

          <b-checkbox-group v-model="rolesSelected">
            @foreach ($roles as $role)
              <div class="field">
                <b-checkbox :custom-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
              </div>
            @endforeach
          </b-checkbox-group>
        </div>
      </div>
            <input type="submit" class="button is-primary" name="" value="Edit User">
         </form>
      </div>
    </div>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  <script>

    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep'
      }
    });

  </script>
@endsection
