<!DOCTYPE html>
<html>
    <head>
        <title>View Post</title>
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
                        <li><a href="{{ route('company.jobPost') }}">Post Job</a></li>
                        <li class="active"><a href="{{ route('company.viewPost') }}">View Post</a></li>
                        <li><a href="{{ route('company.logout') }}">Logout</a></li>
                        <li><a href="" style="font-weight:bold; color:red; margin-left:700px">{{ $company->first_name }} {{ $company->last_name }}</a></li>
                    </ul>
            </div>
        </nav>
        <div class="container">
            <h1 style="margin-top:2%">View Post</h1>
            {{ @csrf_field() }}
            <table class="table table-hover" align="center" style="margin-top:7%;">
                <thead>
                        <tr>
                          <th>Job Title</th>
                          <th>Job Description</th>
                          <th>Salary</th>
                          <th>Location</th>
                          <th>Country</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      @foreach ($jobpost as $data)
                      <tbody>
                        <tr>
                          <td>{{ $data->job_title }}</td>
                          <td>{{ $data->job_description }}</td>
                          <td>{{ $data->salary }}</td>
                          <td>{{ $data->location }}</td>
                          <td>{{ $data->country }}</td>
                          <td><a href="edit-jobPost/{{ $data->id }}">Edit<a></td>
                          <td><a href="delete-jobPost/{{ $data->id }}">Delete<a></td>
                        </tr>
                      </tbody>
                @endforeach
                  </table>
        </div>

    </body>
</html>
