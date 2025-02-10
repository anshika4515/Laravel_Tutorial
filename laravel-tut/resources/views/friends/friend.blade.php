<h1>List of friends</h1>
<a href="/addfriends" class="btn btn-success btn-sm mb-3">Add New User</a>
@foreach($data as $id => $friend)
<h3>
    {{$friend->id}}
    {{$friend->name}}
    {{$friend->age}}
    {{$friend->city}}
    <a href="" class="btn-btn-warning btn-sm">Updates</a>
</h3>
@endforeach