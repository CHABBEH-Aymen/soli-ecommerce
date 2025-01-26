@extends('adminlte::page')

@section("css")
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>  
@stop

@section('content_header')
    <h1>Dashboard</h1>
@endsection
@section('content')
<div class="overflow-x-auto">
  <a class="btn btn-success my-8" id="create-product" href="{{ route('product.create') }}">Create new Product</a>
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>Product Name</th>
        <th>Descirption</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
          <x-product-row title="{{ $product->title }}" desc="{{ $product->desc }}" price="{{ $product->price }}">
            <form action="{{ route('product.destroy', $product->id) }}" method="DELETE">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-ghost btn-xs hover:bg-red-400">Delete</button>
            </form>
          </x-product-row>
      @endforeach
    </tbody>
    <!-- foot -->
    <tfoot>
      <tr>
        <th></th>
        <th>Product Name</th>
        <th>Descirption</th>
        <th>Price</th>
        <th></th>
      </tr>
    </tfoot>
  </table>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".table > tbody > tr > th > form").on("click", function (event) {
      event.preventDefault();
      let form = $(this)
      $.ajax({
        method: 'POST',
        url: $(form).attr("action"),
        data: $(form).serialize(),
        datatype: 'json',
        success: function(data){
          if(data.status == 200)$(form).closest("tr").remove();
        }
      });
    });
  });
</script>
@endsection