
Result Size: 1222 x 223
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
​

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('applicant.home')}}">{{ session('user') }} </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('applicant.profile')}}">Profile</a></li>
    </ul>
     <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('applicant.viewjob')}}">View Job</a></li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('logout.index')}}">Log Out</a></li>
    </ul>
  </div>
</nav>


<div style="padding-top: 50px;">
  
  <div class="panel panel-default">

      <div class="panel-heading">Profile</div>
      <div class="panel-body">
        <div class="col-md-8 float-left">
          <label>Last Name:</label> {{$applicant->first_name}} <br>
          <label>First Name:</label> {{$applicant->last_name}} <br>
          <label>Email:</label>  {{$applicant->email}} <br>
          <label>Resume:</label>  {{$applicant->resume}} <br>
          <label>Skills:</label>  {{$applicant->skills}} <br>
        </div>
        <div class="col-md-3 pull-right">
          <img src="/images/{{$applicant->profile_pic}}">
        </div>
      </div>
      <div class="panel-footer"><button class="btn btn-secondary float-right" > <a href="{{ URL::to('applicantprofile/update/' . $applicant->id) }}">Edit Profile</a> </button> </div>
  </div>
</div>


</body>


