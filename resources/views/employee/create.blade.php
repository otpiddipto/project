<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Employee</title>
</head>
<body>
    <h1>Input Employee</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $errors)
            <li>{{$errors}}</li>
            @endforeach
        </ul>
        
        
        @endif
    </div>

    <form method="post" action="{{route('employee.store')}}">
        @csrf
        @method('post')

        <div>
            <label for="">Name:<br></label>
            <input type="name" name="name" placeholder="Input Name">
        </div>

        <br>

        <div>
            <label for="">Age:<br></label>
            <input type="age" name="age" placeholder="Input Age">
        </div>

        <br>

        <div>
            <label for="">Address:<br></label>
            <input type="address" name="address" placeholder="Input Address">
        </div>

        <br>

        <div>
            <label for="">Phone Number:<br></label>
            <input type="phone number" name="phone number" placeholder="Input Phone Number">
        </div>

        <br>

        <div>
            <input type="submit" value="Save">
        </div>


        
    </form>
</body>
</html>