<h1>About Page</h1>
<a href="{{ route('mypost')}}">Back to post page</a>
@extends('layout.layout')
@section('content')
 <h1>Aboutpage</h1>
 <p>THis is home page</p>

 <!-- using verbatim for adding dynamic value in js -->
@verbatim
<div id="app">{{ message }}</div>
 @endverbatim
@endsection

@push('scripts')
   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush