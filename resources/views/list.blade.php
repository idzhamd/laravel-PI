@extends('layouts.admin')

@section('title','List Product')

@section('content')

<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h2>Daftar Product</h2>
		</div>
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Size</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td><a href="/home/product/{{$product->id}}">{{ $product->name }}</a></td>
						<td>{{ $product->size }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection
