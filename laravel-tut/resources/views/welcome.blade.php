@php
  $fruits = ["one"=>"apple" , "two"=>"mango" , "three"=> "banana"];
@endphp
{{-- @include('pages.header',['status'=>$fruits]) <!--- including other files --> --}}
@extends('layout.layout')
@section('content')
 <h1>Homepage</h1>
 <p>THis is home page</p>
@endsection
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
@include('pages.footer')   <!--- including other files --> 
@includeIf('pages.content') <!--include file only if it exist -->

<!-- used to create reusable templates -->
{{-- @include -> br br jake include krna pdta hai
@section
@yield
@extend --}}