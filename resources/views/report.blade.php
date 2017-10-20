@extends('layouts.admin')

@section('title','Report')

@section('content')
@php use Carbon\Carbon; @endphp
<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h3>Report</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Cari Report</div>
			<div class="panel-body">
				<p><a href="/home/report/2017">2017</a>, <a href="/home/report/2016">2016</a> </p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="page-header">
			<h4>Belum Dikonfirmasi</h4>
		</div>
	</div>
	<div class="row">
		@if(count($ordersNotConfirm) > 0 )
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th>Id</th>
					<th>Product Id</th>
					<th>Costumer Name</th>
					<th>Amount</th>
					<th>Total</th>
					<th>Konfirmasi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ordersNotConfirm as $order)
				<tr>
					<td><a href="/home/report/{{ $order->id }}">{{ $order->id }}</a></td>
					<td>{{ $order->product_id }}</td>
					<td>{{ $order->name }}</td>
					<td>{{ $order->email }}</td>
					<td>Rp. {{ number_format($order->total) }}</td>
					<td><a href='/home/report/{{ $order->id }}/confirm' class="btn btn-xs btn-primary btn-block">Konfirmasi</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<p class="text-center"><b>Maaf, Order Tidak Ditemukan.</b></p>
		@endif
	</div>
	<div class="row">
		<div class="page-header">
			<h4>Sudah Dikonfirmasi</h4>
		</div>
	</div>
	<div class="row">
		@if(count($ordersConfirm) > 0 )
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th>Id</th>
					<th>Product Id</th>
					<th>Costumer Name</th>
					<th>Amount</th>
					<th>Total</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ordersConfirm as $order)
				<tr>
					<td><a href="/home/report/{{ $order->id }}">{{ $order->id }}</a></td>
					<td>{{ $order->product_id }}</td>
					<td>{{ $order->name }}</td>
					<td>{{ $order->email }}</td>
					<td>Rp. {{ number_format($order->total) }}</td>
					<td>
					 @php 
					 	$dt = Carbon::parse($order->created_at);  
					 	echo $dt->day . '/'. $dt->month .'/'. $dt->year;
					 @endphp
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<p class="text-center"><b>Maaf, Order Tidak Ditemukan.</b></p>
		@endif
		<br><br><hr>
	</div>
</div>

@endsection