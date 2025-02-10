<h1> All users list </h1>
@foreach($data as $id => $user)
<h3>
  {{$user->id}}
  {{$user->name}}
  {{$user->cities}}
</h3>
@endforeach