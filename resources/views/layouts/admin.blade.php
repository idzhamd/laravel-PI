@section('navbar','navbar-fixed-top')
@include('layouts.include.header')

<div class="container-fluid">
<br><br>
<div class="row">
	<div class="sidebar col-md-2">
	<br><br>
		<ul class="sidebarDropdown">
			<li class="dropdown">
			<a href="#">Product</a>
				<ul class="dropdownMenu">
					<li><a href="/home/list">Daftar Product</a></li>
					<li><a href="/home/add">Tambah Product</a></li>
				</ul>
			</li>
			<li><a href="/home/config">Configuration</a></li>
			<li><a href="/home/report">Laporan</a></li>
		</ul>
	</div>
	@yield('content')
</div>
</div>

@include('layouts.include.footer')