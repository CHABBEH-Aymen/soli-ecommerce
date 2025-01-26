@extends('adminlte::page')

@section("css")
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>  
@stop

@section('content')

<div class="py-11">
	<div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
	    <h2 class="text-2xl font-bold mb-6">Add New Product</h2>
	    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
	        @csrf
	        @method('PUT')
	        <!-- Product Title -->
	        <div class="mb-4">
	            <label for="title" class="block text-gray-700 font-medium mb-2">Product Title</label>
	            <input type="text" id="title" name="title" 
	                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
	                placeholder="Enter product title" required>
	        </div>

	        <!-- Product Description -->
	        <div class="mb-4">
	            <label for="desc" class="block text-gray-700 font-medium mb-2">Product Description</label>
	            <textarea id="desc" name="desc" rows="4"
	                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
	                placeholder="Enter product description" required></textarea>
	        </div>

	        <!-- Product Image -->
	        <div class="mb-4">
	            <label for="img" class="block text-gray-700 font-medium mb-2">Product Price</label>
	            <input type="number" min="1" id="price" name="price" 
	                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
	        </div>

	        <div class="text-right">
	            <button type="submit" 
	                class="px-6 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500">
	                Save Product
	            </button>
	        </div>
	    </form>
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("form > div > button").on("click", function (event) {
      event.preventDefault();
      $.ajax({
        method: 'POST',
        url: $(this).closest("form").attr("action"),
        data: $(this).closest("form").serialize(),
        datatype: 'json',
        success: function(data){
        	let success = `<x-dialog mesg="Done!" desc="Item Added Successfuly"></x-dialog>`;
        	let error = `<x-dialog mesg="Error" desc="Something Went Wrong"></x-dialog>"`;
        	if(data.status == 200) {
        		$("html").append(success);
        		$("dialog").get(0).showModal();
        	}
        	else {
        		$("html").append(error);
        		$("dialog").get(0).showModal();
        	}
        }
      });
    });
  });
</script>

@stop