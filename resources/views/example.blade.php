<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
        @foreach($users as $user)
        <div class="container">
        <div class="alert alert-info addBorder">
                <div class="row">
                <div class="col-6 col-md-3">
                    <strong>id</strong> 
                </div>
                <div class="col-6 col-md-3">
                    <p>
                        {{$user['id']}}
                    </p>
                </div>
                <div class="col-6 col-md-3">
                    <strong>nombre</strong>
                </div>
                <div class="col-6 col-md-3">
                    <p>
                        {{$user['name']}}
                    </p>
                </div>
        </div>
        </div>
        @endforeach
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>