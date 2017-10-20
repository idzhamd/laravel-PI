@extends('layouts.admin')

@section('title')

Edit {{ $product->name }}

@endsection

@section('content')

<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h2>Edit {{ ucfirst($product->name) }}</h2>
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal" action="/home/product/{{ $product->id }}/update" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Id</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" placeholder="Id" value="{{ $product->id }}" disabled="true">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Name</label>
		    <div class="col-sm-10">
		      <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Size (m2)</label>
		    <div class="col-sm-10">
		      <input type="text" name="size" class="form-control" placeholder="Size per-Meter Persegi" value="{{ $product->size }}">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Price</label>
		    <div class="col-sm-10">
		      <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Image</label>
		    <div class="col-sm-10">
		    	<input type="file" name="image" class="form-control">
		    </div>
		  </div>
		  <br>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default btn-block">Save</button>
		    </div>
		  </div>
		  {{ csrf_field() }}
		</form>
	</div>
</div>

@endsection