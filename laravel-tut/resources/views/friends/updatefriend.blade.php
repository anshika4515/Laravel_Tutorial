<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update User</h1>
                <form action="{{route('updateFriendData',$data->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="{{ $data->name }}" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Age</label>
                      <input type="text" value="{{$data->age}}" class="form-control" name="age">
               </div>
                    <div class="mb-3">
                      <label class="form-label">City</label>
                      <input type="text" value="{{$data->city}}" class="form-control" name="city">
                    </div>
                    <button  type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>