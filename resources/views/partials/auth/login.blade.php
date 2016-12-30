@extends('app')
@section('content')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <div class="lr-wrapper" align="center">
        <div class="lr-content">
            <div class="lr-head">
                <div class="lr-l_b" id="login" onClick>
                    <div></div>
                    <span>Login</span>
                </div>
                <div class="lr-r_b" id="register">
                    <div></div>
                    <span>SignUp</span>
                </div>
            </div>
            <div class="lr-main">
                <form method="DELETE" id="l-f" action="javascript:login();">
                    <input type="text" id="username_login" name="l-username" class="l-username" placeholder="Username"/>
                    <input type="password" id="password_login" name="l-password" class="l-password"
                           placeholder="Password"/>
                    <input type="submit" name="l-submit" class="l-submit" value="Login"/>
                </form>
                <form method="DELETE" id="r-f" action="javascript:login();">
                    <input type="email" id="r-email" class="r-email" name="r-email" placeholder="Email"/>
                    <input type="text" id="username_register" name="r-username" class="r-username"
                           placeholder="Username"/>
                    <input type="password" id="password_register" name="r-password" class="r-password"
                           placeholder="Password"/>
                    <input type="submit" name="l-submit" class="r-submit" value="Sign Up"/>
                </form>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(document).ready(function(){
            $("#register").click(function(){
                $("#login").css("background-color", "#ecf0f1");
                $("#login > span").css("color", "#333");
                $("#register").css("background-color", "#e74c3c");
                $("#register > span").css("color", "white");
                $("#l-f").toggle(500);
                $("#r-f").toggle(1000);
            });
            $("#login").click(function(){
                $("#register").css("background-color", "#ecf0f1");
                $("#register > span").css("color", "#333");
                $("#login").css("background-color", "#e74c3c");
                $("#login > span").css("color", "white");
                $("#l-f").toggle(1000);
                $("#r-f").toggle(500);
            });
        });
    </script>
@stop