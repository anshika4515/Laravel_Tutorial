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
                <h1>Add New User</h1>
                <form action="{{route('addFriend')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Age</label>
                      <input type="text" class="form-control" name="age">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">City</label>
                      <input type="text" class="form-control" name="city">
                    </div>
                    <button  type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>