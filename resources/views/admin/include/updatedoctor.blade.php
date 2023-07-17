<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="/public">
</head>
<style>
    .container label{
        display: inline-block;
        width:200px;
    }
    input{
        margin-top:10px;
    }
    img{
        margin-top:10px;
    }
    select{
        width:170px;
        margin-top:10px;

    }
</style>
<body>
<div class="container" align="center">
    <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
        <label for="Name">Doctor Name:</label>
        <input type="text" name="name" value="{{$data->name}}">
        </div>
        <div>
        <label for="Name">Doctor Phone:</label>
        <input type="text" name="phone" value="{{$data->phone}}">
        </div>
        <div>
        <label for="Name">Speciality:</label>
        <input type="text" name="speciality" value="{{$data->speciality}}">
         
        </div>
        <div>
        <label for="Name">Room No:</label>
        <input type="text" name="room" value="{{$data->room}}">
        </div>
        <div>
        <label for="Name">Old Image:</label>
         <img heigh="150" width="150" src="assets/uploads/doctors/{{$data->image}}" alt="">
        </div>
        <div>
        <label for="Name">Change Image:</label>
         <input type="file" name="image">
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
</div>
</body>
</html>