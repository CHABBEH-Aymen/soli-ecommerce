@extends('layouts.app')

@section('content')
<div class="w-full flex gap-5 flex-wrap px-8">
	@foreach($products as $product)
		<x-product-card title="{{$product->title}}" desc="{{$product->desc}}" img="{{$product->img}}"></x-product-card>
	@endforeach
</div>
    
@endsection