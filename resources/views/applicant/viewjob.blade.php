
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
  <script>
    var msg = '{{Session::get('alert')}}';
    
    var exist = '{{Session::has('alert')}}';
  
    if(exist){
      alert(msg);
    }
    elseif(sus){
      alert(message);
    }
  </script>
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
<!--<div class="container-fluid" style="margin-top:70px">
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">colum name</th>
      <th scope="col">Job ID</th>
      <th scope="col">Job Title</th>
      <th scope="col">Job Description</th>
      <th scope="col">Salary</th>
      <th scope="col">Location</th>
      <th scope="col">Country</th>
      <th scope="col">Operation</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>-->
<div style="padding-top: 50px;">
  @foreach($jobposts as $jobpost)
  <div class="panel panel-default">

      <div class="panel-heading">{{$jobpost->job_title}}</div>
      <div class="panel-body">
         @foreach($compaany as $value)
         @if($value->id==$jobpost->com_id)
        <label>Company Name:</label> {{$value->first_name}} <br>
        <label>Description:</label> {{$jobpost->job_description}} <br>
        <label>Salary:</label>  {{$jobpost->salary}} <br>
        <label>Location:</label>  {{$jobpost->location}} <br>
        <label>Country:</label>  {{$jobpost->country}} <br>
         @endif
        @endforeach

      </div>
      <div class="panel-footer"><button class="btn btn-secondary float-right" > <a href="{{ URL::to('/apply/' . $jobpost->id) }}">Apply</a> </button> 
      </div>
  </div>
  @endforeach
</div>


</body>


