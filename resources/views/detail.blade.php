@extends('layouts.main')

@section('title')
	{{ ucfirst($product->name) }}
@endsection

@section('style')
background-color : #f5f5f5;
@endsection

@section('content')

<div class="container" style="background-color: white">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>{{ ucfirst($product->name) }}</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{ asset('storage/materials/'.$product->image) }}" class="img-responsive">
			<table class="table table-hover table-bordered">
				<tr>
					<td>Size</td>
					<td>:</td>
					<td>{{ $product->size }} Meter persegi</td>
				</tr>
				<tr>
					<th>Price</th>
					<th>:</th>
					<th>Rp. {{ number_format($product->price,0) }}</th>
				</tr>
			</table>
		</div>
		<div class="col-md-8">
			<p style="font-size: 16px"> {{ $product->desc }}</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<hr>
				<h3 class="text-center">Order</h3>
				<hr>
			</div>
		</div> 
		<div class="col-md-12">
			<form class="form-horizontal" method="post" action="/product/{{ $product->id }}/buy">
			<fieldset>
				<legend>Product</legend>
				<div class="form-group {{ $errors->has('amount')? 'has-error' : '' }}">
			    <label class="col-sm-2 control-label">Id</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" placeholder="Id Product" value="{{ $product->id }}" disabled="true">
			      <input type="hidden" name="id" value='{{ $product->id }}'>
			    	@if($errors->has('id'))
			    		<p class="help-block">{{ $errors->first('id') }}</p>
			    	@endif
			    </div>
			  </div>
			  <div class="form-group {{ $errors->has('amount')? 'has-error' : '' }}">
			    <label class="col-sm-2 control-label">Amount</label>
			    <div class="col-sm-10">
			      <input type="text" name="amount" class="form-control" placeholder="Amount Product" value="1">
			      @if($errors->has('amount'))
			      	<p class="help-block">{{ $errors->first('amount') }}</p>
			      @endif
			    </div>
			  </div>
			</fieldset>
			<fieldset>
				<legend>Buyer</legend>
			  <div class="form-group {{ $errors->has('name')? 'has-error' : '' }}">
			    <label class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
			    	@if($errors->has('name'))
			    		<p class="help-block">{{ $errors->first('name') }}</p>
			    	@endif
			    </div>
			  </div>
			  <div class="form-group  {{ $errors->has('phoneNumber')? 'has-error' : '' }}">
			    <label class="col-sm-2 control-label">Phone Number</label>
			    <div class="col-sm-10">
			      <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" value="{{ old('phoneNumber') }}">
			    	@if($errors->has('phoneNumber'))
			    		<p class="help-block">{{ $errors->first('phoneNumber') }}</p>
			    	@endif
			    </div>
			  </div>
			  <div class="form-group  {{ $errors->has('email')? 'has-error' : '' }}">
			    <label class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
			      @if($errors->has('email'))
			      	<p class="help-block">{{ $errors->first('email') }}</p>
			      @endif
			    </div>
			  </div>
			  <div class="form-group  {{ $errors->has('address')? 'has-error' : '' }}">
			    <label class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
				    <textarea rows="4" name='address' placeholder="Address" class="form-control" >{{ old('address') }}</textarea>
			    	@if($errors->has('amount'))
			    		<p class="help-block">{{ $errors->first('address') }}</p>
			    	@endif
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-info btn-block">Order!</button>
			    </div>
			  </div>
			</fieldset>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
	<br><br>
</div>

@endsection