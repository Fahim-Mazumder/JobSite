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
                        <li><a href="{{ route('applicant.profile') }}">Profile</a></li>
                        <li class="active"><a href="{{ route('applicant.viewProfile') }}">View Profile</a></li>
                        <li><a href="{{ route('applicant.logout') }}">Logout</a></li>
                        <li><a href="" style="font-weight:bold; color:red; margin-left:700px">{{ $applicant->first_name }} {{ $applicant->last_name }}</a></li>
                    </ul>
            </div>
        </nav>
        <div class="container">
            <h1 style="margin-top:2%">View Profile</h1>
                <form method="post" action="{{ route('applicant.updateProfile', $applicant->id) }}" align="center" style="margin-top:7%; margin-left:30%; width:100%">
                    <div class="row">
                            {{ @csrf_field() }}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="well well-sm">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <img src="{{ asset('images/profile picture/' . $applicant->profile_picture) }}" alt="" class="img-rounded img-responsive" style="height:200px"/>
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <h3 style="font-weight:bold">{{ $applicant->first_name }} {{ $applicant->last_name }}</h3>
                                        <p style="font-weight:bold">
                                            <i class="glyphicon glyphicon-envelope"></i>{{ $applicant->email_address }}
                                            <br />
                                            Resume: <i class="glyphicon glyphicon-file"></i><a href="">{{ $applicant->upload_resume }}</a>
                                            <br />
                                            Skills: {{ $applicant->skills }}
                                        </p>
                                            <a href="applicantUpdateprofile/{{ $applicant->id }}"><button type="button" class="btn btn-primary">Update profile</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
        </div>

    </body>
</html>
