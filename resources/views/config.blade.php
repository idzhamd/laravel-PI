@extends('layouts.admin')

@section('title','Config Setting')

@section('content')

<div class="col-md-8 col-md-offset-3">
	<div class="row">
		<div class="page-header">
			<h2>Config Setting</h2>
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal" method="post" action="/home/config/update">
			<div class="form-group">
				<label class="col-sm-2 control-label">Account Bank</label>
				<div class="col-sm-10">
					<input type="text" name="accVendor" class="form-control" placeholder="Bank Name" value="{{ $accVendor }}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Account No</label>
				<div class="col-sm-10">
					<input type="text" name="accNo" class="form-control" placeholder="Account No" value="{{ $accNo }}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Account Name</label>
				<div class="col-sm-10">
					<input type="text" name="accName" class="form-control" placeholder="Account Name" value="{{ $accName }}">
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