<!DOCTYPE html>
<html>
    <head>
        <title>Applicant Register</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
            <div class="container">
                    <h1>Applicant Register</h1>
                    <h3><a href="{{ route('job.index') }}">Home</a></h3>
                        <form class="form-horizontal" method="post" action="{{ route('applicant.store') }}" enctype="multipart/form-data" align="center" style="margin-top:7%; margin-left:30%">
                            {{ @csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="first_name">First Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email Address:</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email_address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-4">
                                    <button type="submit" class="btn btn-default" onclick="register()">Register</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div align="center" style="margin-left:5%">Already registered? Then <a href="{{ route('applicant.login') }}"><h3>Login here</h3></a></div>
                </div>
                <script>
                    function register() {
                        alert("Successfully Registered");
                    }
                </script>
    </body>
</html>
