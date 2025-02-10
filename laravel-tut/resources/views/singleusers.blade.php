<h1> User Details</h1>
@foreach($data as $id => $user)
<h3>{{$user->id}}</h3>
 <h3>{{$user->name}}</h3>
  <h3>{{$user->cities}}</h3>
@endforeach