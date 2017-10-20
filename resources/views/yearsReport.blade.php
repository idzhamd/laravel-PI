@extends('layouts.admin')

@section('title','Report')

@section('content')
@php use Carbon\Carbon; @endphp
<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h3>{{ $title }}</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Cari Report</div>
			<div class="panel-body">
				<p><a href="/home/report/">Order Status</a>, <a href="/home/report/2017">2017</a>, <a href="/home/report/2016">2016</a> </p>
			</div>
		</div>
	</div>
	<div class="row">
		@if(count($orders) > 0 )
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
				@foreach($orders as $order)
				<tr>
					<td><a href="/home/report/{{ $order->id }}">{{ $order->id }}</a></td>
					<td>{{ $order->product_id }}</td>
					<td>{{ $order->name }}</td>
					<td>{{ $order->email }}</td>
					<td>Rp. {{ number_format($order->total) }}</td>
					<td>
						@php 
							$dt = Carbon::parse($order->created_at);
							echo $dt->day . '/' . $dt->month . '/' . $dt->year;
						@endphp
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<p class="text-center"><b>Maaf, Transaksi Tidak Ditemukan.</b></p>
		@endif
	</div>
	<br><br><hr>
	<div class="row">
		<div class="col-md-3 col-md-offset-9">
			<table class="table table-condensed" align="right"> 
				<tr>
					<th>Amount</th>
					<th>:</th>
					<th>{{ $bigAmount }}</th>
				</tr>
				<tr>
					<th>Total</th>
					<th>:</th>
					<th>Rp. {{ number_format($bigTotal) }}</th>
				</tr>
			</table>
		</div>
	</div>
</div>
</div>
@endsection