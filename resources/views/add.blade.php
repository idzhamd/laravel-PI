@extends('layouts.admin')

@section('title','Tambah Product')

@section('content')
<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h2>Tambah Product</h2>
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal" method="post" action="/home/product/insert" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" placeholder="Product Name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Size</label>
				<div class="col-sm-10">
					<input type="text" name="size" class="form-control" placeholder="Product Size">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Price</label>
				<div class="col-sm-10">
					<input type="text" name="price" class="form-control" placeholder="Product Price">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Description</label>
				<div class="col-sm-10">
					<textarea name="desc" placeholder="Product Description" class="form-control" rows="3"></textarea>
				</div>
			</div>
			<br>
			{{ csrf_field() }}
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default btn-block">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection