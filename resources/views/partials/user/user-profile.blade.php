@extends('app')
@section('content')
    <div class="fill-page-container color-fill">
        <div class="profile-container">
            <h1>Profile</h1>
            <div class="profile-form">
                <div class="profile-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Name" value="{{ Auth::user()->name }}">
                </div>
                <div class="profile-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" value="{{ Auth::user()->username }}">
                </div>
                <div class="profile-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="username@mail.com" value="{{ Auth::user()->email }}">
                </div>
                <div class="profile-group">
                    <img src="{{Auth::user()->avatar}}">
                </div>
            </div>
        </div>
    </div>
@stop