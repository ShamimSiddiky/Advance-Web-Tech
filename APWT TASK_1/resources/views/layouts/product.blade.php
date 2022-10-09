@extends('layouts.app')
@section('content')

<h1>Our available products are: </h1>

@foreach($product as $product)
<li>{{$product}}</li>
@endforeach

@endsection
