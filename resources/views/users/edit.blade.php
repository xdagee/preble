@extends('layouts.master')
@section('title', '| Edit User')
@section('content')

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Users</h4>
                                    <p class="category">Add new user</p>
                                </div>
                                <div class="card-content">
                                    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }} {{-- Form model binding to automatically populate our fields with user data --}}

                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('email', 'Email') }}
                                        {{ Form::email('email', null, array('class' => 'form-control')) }}
                                    </div>

                                    <h5><b>Assign Roles</b></h5>

                                    <div class='form-group'>
                                        @foreach ($roles as $role)
                                            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                        @endforeach
                                    </div>

                                    {{-- <div class="form-group">
                                        {{ Form::label('password', 'Password') }}<br>
                                        {{ Form::password('password', array('class' => 'form-control')) }}

                                    </div> --}}

                                    {{-- <div class="form-group">
                                        {{ Form::label('password', 'Confirm Password') }}<br>
                                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                                    </div> --}}

                                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                                    {{ Form::close() }}
                                     <div class="clearfix"></div>
                                        @include ('layouts.errors')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection