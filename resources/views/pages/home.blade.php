@extends('layouts.default')
@section('preview')

<div id="previewCarousel" class="carousel slide pb-3" data-ride="carousel">
	<ol class="carousel-indicators" style="bottom: -20px">
		@for($i = 0; $i < 5; $i++)
		<li data-target="#previewCarousel" data-slide-to="{{ $i }}" class="{{ ($i == 0) ? 'active' : '' }}"></li>
		@endfor
	</ol>
	<div class="carousel-inner">
		@for($i = 0; $i < 5; $i++)
		<div class="carousel-item{{ ($i == 0) ? ' active' : '' }}">
			<img src="data_file/{{$preview[$i]->file}}" class="d-block w-100" alt="..." style="object-fit: cover; height: 50vh">
			<div class="carousel-caption w-25 text-dark p-0 m-0" style="bottom: 0px; left: 0px; background-color: rgba(230, 230, 230, 0.7); font-size: 2.9vmin">
				<p class="align-self-center m-3">Rp. {{number_format($preview[$i]->price, 0, ",", ".")}}</p>
			</div>
		</div>
		@endfor
	</div>
</div>

@endsection

@section('category')
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

@endsection

{{-- @section('jerseybola')
<div style="overflow-x: hidden;">
<p>
	{{$preview[0]}}
</p>
</div>
@endsection --}}
