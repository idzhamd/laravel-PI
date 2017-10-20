@extends('layouts.main')

@section('title','Ucapan Terimakasih')

@section('style')
background-color : #f5f5f5;
@endsection

@section('content')
<div class="container" style="background-color: white">
	<div class="row">
		<div class="col-md-10">
			<div class="page-header">
				<h2>Terimakasih, {{ $order->name }}</h2>
			</div>
		</div>
		<div class="col-md-10">
			<table class="table table-condensed">
				<tr>
					<td>Id Order</td>
					<td>:</td>
					<td>{{ $order->id }}</td>
				</tr>
				<tr>
					<td>Nama Product</td>
					<td>:</td>
					<td>{{ ucfirst($product->name) }}</td>
				</tr>
				<tr>
					<td>Nama Pemesan</td>
					<td>:</td>
					<td>{{ $order->name }}</td>
				</tr>
				<tr>
					<td>Email Pemesan</td>
					<td>:</td>
					<td>{{ $order->email }}</td>
				</tr>
				<tr>
					<td>Alamat Tujuan</td>
					<td>:</td>
					<td>{{ $order->address }}</td>
				</tr>
				<tr>
					<td>Total Jumlah Pembayaran</td>
					<td>:</td>
					<th>Rp. {{ number_format($order->total) }}</th>
				</tr>
			</table>
			<hr>
			<h4>Silahkan Transfer Ke Rekening Kami: </h4>
			<table class="table table-condensed">
				<tr>
					<td>Tujuan Bank</td>
					<td>:</td>
					<td>{{ $accVendor }}</td>
				</tr>
				<tr>
					<td>No. Rekening</td>
					<td>:</td>
					<td>{{ $accNo }}</td>
				</tr>
				<tr>
					<td>Atas Nama</td>
					<td>:</td>
					<td>{{ $accName }}</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<a href="/shop" class="btn btn-primary btn-block">Kembali Ke Menu Shop</a>
		</div>
	</div>
	<br>
</div>
@endsection