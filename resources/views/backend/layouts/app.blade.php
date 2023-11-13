<x-backend.css />
<x-backend.header />
<x-backend.sidebar />

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			{{ $slot }}
		</div>		
	</div>
</div>

<x-backend.js />