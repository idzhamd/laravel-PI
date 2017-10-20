@extends('layouts.main')

@section('title')
{{ config('app.name') }}
@endsection

@section('style')
background-color : #f5f5f5;
@endsection

@section('content')
<div class="container">
    <div class="row">
        	<div class="jumbotron">
        		<div class="row">
	        		<div class="col-md-6">
	        			<h2>Tentang Kami?</h2>
	        		</div>
	        		<div class="col-md-6">
	        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        		</div>
        		</div>
        	</div>
        	<div class="jumbotron">
        		<div class="row">
	        		<div class="col-md-6">
	        			<h2>kontak kami</h2>
	        		</div>
	        		<div class="col-md-6">
	        			<p>no telfon: 083897754117.</p>
	        			<p>email: citrakaryamandiri@gmail.com.</p>
	        			<p>alamat:jl raya pondok gede dirgantara 3 halim p. </p>
	        		</div>
        		</div>
        	</div>
        	<div class="row">
        		<div class="page-header">
	        		<h2 class="text-center" style="color: #2c3e50"> Temukan Kami Disini </h2>
        		</div>
        		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63448.03351091793!2d106.84395525742075!3d-6.328925327420751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed1a921e2c25%3A0xcf305c4260592445!2sCiracas%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sid!2sid!4v1497621456162" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        	</div>
        </div>
    </div>
</div>
<br><br><br>
<div class="container">
	<hr>
	<p style="color: #2c3e50" class="text-center"> &copy 2017</p><br><br>
</div>
@endsection

