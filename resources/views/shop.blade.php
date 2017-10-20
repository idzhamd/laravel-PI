@extends('layouts.main')

@section('title','Shop')

@section('content')

<div class="container">
	<div class="row">
		@foreach($products as $product)
		<div class="col-md-6">
			<div class="thumbnail">
				<div class="row">
					<div class="col-md-6">
						<img src="{{ asset('storage/materials/'.$product->image) }}" class="img-responsive">
					</div>
					<div class="col-md-6">
						<div class="caption">
							<table class="table table-condensed">
								<tr>
									<td>Name</td>
									<td>:</td>
									<td>{{ ucfirst($product->name) }}</td>
								</tr>
								<tr>
									<td>Size</td>
									<td>:</td>
									<td>{{ $product->size }}</td>
								</tr>
								<tr>
									<th>Price</th>
									<th>:</th>
									<th>Rp. {{ number_format($product->price) }}</th>
								</tr>
							</table>
							<a href="product/{{ $product->id }}" class="btn btn-info btn-block">Buy</a>
						</div>		
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="row" style="text-align: center">
			{{ $products->links() }}
	</div>
</div>

@endsection