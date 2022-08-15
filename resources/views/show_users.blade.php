<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Show Users</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
     <div class="container mt-5">
     <h4>Users Table</h4>
     <table class="table table-bordered table-hover">
          <thead>
               <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">Profile Photo</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($collection as $item)
               <tr>
                    <th scope="row">{{$item['id']}}</th>
                    <td>{{$item['first_name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td> <img src="{{$item['avatar']}}" class="img-fluid img-thumbnail" alt="..."></td>
               </tr>
               @endforeach
          </tbody>
     </table>
     </div>
</body>

</html>