@extends('admin.app')
@section('title', 'Page Title')
@section('content')
<div class="row">
    <div class="col-md-12 center login-header">
        <h2>Welcome to Charisma</h2>
    </div>
    <!--/span-->
</div><!--/row-->

<div class="row">
    <div class="well col-md-5 center login-box">
        <div class="alert alert-info">
            Please login with your Username and Password.
        </div>
        <form class="form-horizontal" action="user_login" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="clearfix"></div><br>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                </div>
                <div class="clearfix"></div>

                <p class="center col-md-5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </p>
            </fieldset>
        </form>
    </div>
    <!--/span-->
</div><!--/row-->
@endsection