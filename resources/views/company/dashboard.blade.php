<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Site</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('company.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('company.jobPost') }}">Post Job</a></li>
                        <li><a href="{{ route('company.viewPost') }}">View Post</a></li>
                        <li><a href="{{ route('company.logout') }}">Logout</a></li>
                        <li><a href="" style="font-weight:bold; color:red; margin-left:700px">{{ $company->first_name }} {{ $company->last_name }}</a></li>
                    </ul>
            </div>
        </nav>
        <div class="container">
                <h1 style="margin-top:2%">Dashboard</h1>
                {{ @csrf_field() }}
                <table class="table table-hover" align="center" style="margin-top:7%;">
                    <thead>
                            <tr>
                              <th>Applicant Name</th>
                              <th>Job Title</th>
                              <th>Email Address</th>
                              <th>Resume</th>
                              <th>Skills</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          @foreach ($jobpost as $data)
                            @foreach ($apply as $value)
                                @if ($data->id == $value->job_id)
                                    @foreach ($applicant as $item)
                                        @if ($value->applicant_id == $item->id)
                                        <tbody>
                                                <tr>
                                                  <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                                  <td>{{ $data->job_title }}</td>
                                                  <td>{{ $item->email_address }}</td>
                                                  <td>{{ $item->upload_resume }}</td>
                                                  <td>{{ $item->skills }}</td>
                                                  <td><a href="delete-appliedPost/{{ $value->id }}">Delete<a></td>
                                                </tr>
                                              </tbody>
                                        @endif
                                    @endforeach

                                @endif
                            @endforeach

                    @endforeach
                      </table>
            </div>

    </body>
</html>
