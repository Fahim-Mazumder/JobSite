<!DOCTYPE html>
<html>
    <head>
        <title>Company Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Company Login</h1>
            <h3><a href="{{ route('job.index') }}">Home</a></h3>
            <p style="color:red" align="center">{{ session('message') }}</p>
                <form class="form-horizontal" method="post" action="{{ route('company.loginCheck') }}" align="center" style="margin-top:10%; margin-left:30%">
                    {{ @csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email_address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                    </div>
                </form>
                <br>
                <div align="center" style="margin-left:5%">New User? Then <a href="{{ route('company.register') }}"><h3>Register here</h3></a></div>
        </div>
    </body>
</html>
