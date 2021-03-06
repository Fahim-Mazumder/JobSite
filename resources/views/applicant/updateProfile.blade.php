<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Site</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('applicant.jobApply') }}">Apply Job</a></li>
                        <li class="active"><a href="{{ route('applicant.profile') }}">Profile</a></li>
                        <li><a href="{{ route('applicant.viewProfile') }}">View Profile</a></li>
                        <li><a href="{{ route('applicant.logout') }}">Logout</a></li>
                        <li><a href="" style="font-weight:bold; color:red; margin-left:700px">{{ $applicant->first_name }} {{ $applicant->last_name }}</a></li>
                    </ul>
            </div>
        </nav>
        <div class="container">
            <h1 style="margin-top:2%">Profile</h1>
                    <form class="form-horizontal" method="post" action="{{ route('applicant.updateProfileStore', $applicant->id) }}" enctype="multipart/form-data" align="center" style="margin-top:7%; margin-left:30%">
                        {{ @csrf_field() }}

                        <div class="form-group">
                                <label class="control-label col-sm-2" for="first_name">First Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name" value="{{ $applicant->first_name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name" value="{{ $applicant->last_name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email_address">Email Address:</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="email_address" placeholder="Enter email" name="email_address" value="{{ $applicant->email_address }}" required>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="profile_picture">Profile Picture:</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture" value={{ $applicant->profile_picture }} required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="upload_resume">Upload Resume:</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="upload_resume" name="upload_resume" value={{ $applicant->upload_resume }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="skills">Skills:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="skills" placeholder="Enter skills" name="skills" value={{ $applicant->skills }} required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-default" onclick="post()">Submit</button>
                            </div>
                        </div>
                    </form>
                    <script>
                        function post() {
                            alert("Successfully Profile Updated");
                        }
                    </script>
        </div>

    </body>
</html>
