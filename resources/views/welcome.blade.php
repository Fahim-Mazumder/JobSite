<!DOCTYPE html>
<html>
    <head>
        <title>Job Site</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
                <h1 style="margin-top:2%">Welcome to Job Site</h1>

                <h3 align="center" style="margin-top:15%">
                    <a href="{{ route('applicant.login') }}">Are you a Job Seeker?</a><br>
                    OR<br>
                    <a href="{{ route('company.login') }}">Are you a Job Recruiter?</a><br>
                </h3>
        </div>

    </body>
</html>
