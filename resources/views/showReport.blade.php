@extends('layouts.admin')
@section('title','Report Details')

@section('content')

<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h3>Order Id: {{ $order->id }}</h3>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered table-condensed">
			<tr>
				<th>Status Konfirmasi</th>
				<td>:</td>
				<td>{{ ($order->isConfirm())? 'Sudah': 'Belum' }} </td>

				</td>
			</tr>
			<tr>
				<th>Product Id</th>
				<td>:</td>
				<td>{{ $order->product_id }}</td>
			</tr>
			<tr>
				<th>Date</th>
				<td>:</td>
				<td>{{ $order->created_at }}</td>
			</tr>
			<tr>
				<th>Costumer Name</th>
				<td>:</td>
				<td>{{ $order->name }}</td>
			</tr>
			<tr>
				<th>Costumer Email</th>
				<td>:</td>
				<td>{{ $order->email }}</td>
			</tr>
			<tr>
				<th>Costumer Address</th>
				<td>:</td>
				<td>{{ $order->address }}</td>
			</tr>
			<tr>
				<th>Product Amount</th>
				<td>:</td>
				<td>{{ $order->amount }}</td>
			</tr>
			<tr>
				<th>Costumer Total</th>
				<td>:</td>
				<td>Rp. {{ number_format($order->total) }}</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<a href="/home/report" class="btn btn-info btn-block"> Back to Report List </a>
	</div>
	<br>
</div>

@endsection