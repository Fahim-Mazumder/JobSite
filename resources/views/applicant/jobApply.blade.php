<!DOCTYPE html>
<html>
    <head>
        <title>Job Apply</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist)
            {
              alert(msg);
            }
        </script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Site</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('applicant.jobApply') }}">Apply Job</a></li>
                        <li><a href="{{ route('applicant.profile') }}">Profile</a></li>
                        <li><a href="{{ route('applicant.viewProfile') }}">View Profile</a></li>
                        <li><a href="{{ route('applicant.logout') }}">Logout</a></li>
                        <li><a href="" style="font-weight:bold; color:red; margin-left:700px">{{ $applicant->first_name }} {{ $applicant->last_name }}</a></li>
                    </ul>
            </div>
        </nav>

        <div class="container">
                {{ @csrf_field() }}
                <h1 style="margin-top:2%">Apply Job</h1>
                @foreach ($jobpost as $data)
                <form id="jobApply">
                <div class="row" align="left" style="margin-top:2%; width:1200px">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title" align="left">Position: {{ $data->job_title }}</h3>
                            </div>
                            <div class="panel-body" align="left" style="font-weight:bold">
                                @foreach ($company as $value)
                                @if($value->id == $data->cid)
                                    Company name: {{ $value->business_name }}<br>
                                    Job Description: {{ $data->job_description }}<br>
                                    Salary: {{ $data->salary }}<br>
                                    Location: {{ $data->location }}<br>
                                    Country: {{ $data->country }}<br>
                                    Email Address: {{ $value->email_address }}<br>
                                @endif
                                @endforeach
                            </div>
                            <div class="panel-footer">
                                    <button class="btn btn-secondary" style="font-weight:bold"> <a href="{{ URL::to('/jobsite/apply/' . $data->id) }}">Apply</a> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                @endforeach
            </div>
    </body>
</html>
