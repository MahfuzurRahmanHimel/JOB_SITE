
Result Size: 1222 x 223
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
​
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="{{route('companies.home')}}"> {{$compaany->first_name}} </a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('companies.applicantinfo')}}">Applicants</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('companies.jobpost')}}">Job post</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="{{route('logout.index')}}">Log Out</a>
    </li>
    </ul>
</nav>

<div class="container-fluid" style="margin-top:80px">
 
  <!-- <div class="panel panel-default"> -->
    <table class="table">
      <thead>
        <th>Job Id</th>
        <th>Job Title</th>
        <th>JOb Description</th>
        <th>Salary</th>
        <th>Lcation</th>
        <th>Country</th>

      </thead>
     @foreach($jobpost as $jobs)
          <thead>
           
            <td> {{$jobs->id}}</td>
            <td> {{$jobs->job_title}}</td>
            <td> {{$jobs->job_description}}</td>
            <td> {{$jobs->salary}}</td>
            <td> {{$jobs->location}}</td>
            <td> {{$jobs->country}}</td>
            
          </thead>
     @endforeach 
      
    </table>
     
 
</div>

</body>
