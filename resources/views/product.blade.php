@extends('layouts.admin')

@section('title')

{{ $product->name }}

@endsection

@section('content')

<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h2>{{ ucfirst($product->name) }}</h2>
		</div>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-condensed">
					<tr>
						<th>Id. Product</th>
						<th>:</th>
						<th>{{ $product->id }}</th>
					</tr>
					<tr>
						<th>Size</th>
						<th>:</th>
						<th>{{ $product->size }} Meter Persegi</th>
					</tr>
					<tr>
						<th>Price</th>
						<th>:</th>
						<th>Rp. {{ number_format($product->price) }}</th>
					</tr>
				</table>
				<p>{{ $product->desc }}</p>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="{{ asset('storage/materials/'.$product->image) }}" class="img-responsive">
				</div>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-6">
				<a href="/home/product/{{ $product->id }}/edit" class="btn btn-warning btn-block">Edit</a>
			</div>
			<div class="col-md-6">
				<a href="" class="btn btn-danger btn-block" id="delete">Delete</a>
				<form action="/home/product/{{$product->id}}/delete" method="post" id="deleteForm" style="display: none">
					<input type="hidden" name="_method" value="DELETE">
					{{ csrf_field() }}
				</form>
			</div>
		</div>
	</div>
</div>

@endsection