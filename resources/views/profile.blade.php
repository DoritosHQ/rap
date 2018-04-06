<!doctype html>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profile Page</title>
</head>

<body>
    <style>

body{
    background-color: black;
    background-image: url(Images/ProfilePageBackground.gif);
     background-size:75%;
     margin-top:12%;
     background-repeat: no-repeat;
}
img{

    margin: 1%;
    margin-left: 37%;
}
h3{
color:white;
text-align: center;
}

p{
margin-top:29px;
}
table{
    margin-top: 4%;
}
    </style>
                {{-- Profile pic --}}
</br>
    <div class="container">
        <div class="row">
                <div class="col text-center text-white">

                    <img src={{$user->image_path}} class="rounded-circle" width="200px" height="200px"/></br></br></br></br></br>

                </div>

                <div class="col text-center text-white text-capitalize">

                    <p>{{$user->username}}</p>
                    <p>{{$user->firstname}} {{$user->lastname}}</p>
                    <p>{{$user->city}}, {{$user->state}} {{$user->zipcode}}</p>

                </div>

                {{-- table --}}
        </div>

        <table class="table table-striped table-dark text-center">

          <thead>
              <h3>Your Connections</h3>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">F.Name</th>
              <th scope="col">L.Name</th>
              <th scope="col">City</th>
              <th scope="col">State</th>
              <th scope="col">Zipcode</th>
            </tr>
          </thead>
          <tbody>

            <tr class="text-capitalize">
              <th scope="row">1</th>
              <td>{{$user->username}}</td>
              <td>{{$user->firstname}}</td>
              <td>{{$user->lastname}}</td>
              <td>{{$user->city}}</td>
              <td>{{$user->state}}</td>
              <td>{{$user->zipcode}}</td>

            </tr>
            <tr>
              <th scope="row">2</th>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td></td>
              <td></td>

            </tr>
          </tbody>
        </table>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
