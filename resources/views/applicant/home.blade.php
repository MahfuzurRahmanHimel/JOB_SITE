
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
 
  <a class="navbar-brand" href=""> {{ session('user') }} </a>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('applicant.profile')}}">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('applicant.viewjob')}}">View Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('logout.index')}}">Log Out</a>
    </li>
    </ul>
</nav>

<div class="container-fluid" style="margin-top:80px">
  <h2>Dashboard</h2>
</div>

</body>
