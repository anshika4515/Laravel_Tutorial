<h1>Header Page</h1>
<!--using includes -->
@foreach ( $status as $key=>$value)
    <p>{{$key}} -{{$value}}</p>
@endforeach