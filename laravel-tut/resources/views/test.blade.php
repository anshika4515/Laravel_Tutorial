@php
 $user = "Anshika";
 $fruits = ["Apple","Banana","Orange"];
@endphp
{{-- <script>
  var data = @json($user);
  console.log(data); 
</script> --}}
<script>
  var data = @json($fruits);
  data.forEach(function(entry){
    console.log(entry);
  })
</script> 