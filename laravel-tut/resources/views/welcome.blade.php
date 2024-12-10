<h1>Our first Page</h1>

<a href="/about">About Page</a>
<!-- to use named routes -->
<a href="{{route('mypost')}}">Post Page</a> 

{{--some blade templates --}}
{{5+2}}

{!!"<h1>Hello</h1>"!!}


@php
 $users = ["abc" , "def" ,"ghi"]
@endphp

@foreach ( $users as $user )
   <li>{{$loop->count}} - {{$user}} </li>
@endforeach

@foreach ( $users as $user )
   @if($loop->first)
      <li style="color:red">{{$user}}</li>
   @else
     <li>{{$user}}</li>
     @endif
@endforeach