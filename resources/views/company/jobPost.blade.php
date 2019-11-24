<!DOCTYPE html>
<html>
    <head>
        <title>Job Post</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Site</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('company.dashboard') }}">Dashboard</a></li>
                        <li class="active"><a href="{{ route('company.jobPost') }}">Post Job</a></li>
                        <li><a href="{{ route('company.viewPost') }}">View Post</a></li>
                        <li><a href="{{ route('company.logout') }}">Logout</a></li>
                        <li><a href="" style="font-weight:bold; color:red; margin-left:700px">{{ $company->first_name }} {{ $company->last_name }}</a></li>
                    </ul>
            </div>
        </nav>
        <div class="container">
            <h1 style="margin-top:2%">Job Post</h1>

                    <form class="form-horizontal" method="post" action="{{ route('company.jobPostStore') }}" enctype="multipart/form-data" align="center" style="margin-top:7%; margin-left:30%">
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="job_title">Job Title:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="job_title" placeholder="Enter job title" name="job_title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="job_description">Job Description:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="job_description" placeholder="Enter job description" name="job_description" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="salary">Salary:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="salary" placeholder="Enter salary" name="salary" required>
                            </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="location">Location:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="location" placeholder="Enter location" name="location" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="country">Country:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" required>
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
                            alert("Successfully Job Posted");
                        }
                    </script>
        </div>

    </body>
</html>
