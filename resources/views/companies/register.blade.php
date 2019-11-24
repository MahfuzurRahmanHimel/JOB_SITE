<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
    </head>
    <body>
        <form method="post" action="/register">
            @csrf
          <div class="form-group">
            <label for="first_name">First Name :</label>
            <input type="text" class ="form-control" name="first_name"placeholder="Enter First Name" required>
          <div class="form-group">
            <label for="last_name">Last Name :</label>
            <input type="text" class ="form-control" name="last_name" placeholder="Enter Last Name" required>
          </div>
          <div class="form-group">
            <label for="business_name">Business Name :</label>
            <input type="text" class ="form-control" name="business_name"placeholder="Enter Business Name" required>
          </div>
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class ="form-control" name="email" placeholder="Enter Email" required>
          </div>
          <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class ="form-control" name="password" placeholder="Enter Password" required>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                
    </body>
</html>
