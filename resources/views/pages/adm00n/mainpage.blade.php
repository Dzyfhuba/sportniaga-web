@extends('layouts.adm00nlayout')
@section('content')
<div class="row">
	<div class="col-5">
		@if(count($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			{{ $error }} <br/>
			@endforeach
		</div>
		@endif
		<form action="/adm00n/process" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}

			<div class="form-group row">
				<label for="img" class="col-form-label col-4">File Gambar:</label>
				<input type="file" name="file" required>
			</div>
			<div class="form-group row">
				<label for="clb" class="col-form-label col-4">Nama Klub:</label>
				<select class="form-control col" id="club" name="club" required>
					<option>Arsenal</option>
					<option>MU</option>
					<option>Liverpool</option>
					<option>MC</option>
					<option>Barcelona</option>
					<option>Real Madrid</option>
					<option>Juventus</option>
					<option>Roma</option>
					<option>Munchen</option>
					<option>PSG</option>
					<option>Dortmund</option>
					<option>Leipzig</option>
					<option>Celtic</option>
					<option>Boca</option>
					<option>Falmengo</option>
					<option>LA Galaxy</option>
					<option>Palmeiras</option>
					<option>Sao Paolo</option>
					<option>Inter</option>
					<option>Ajax</option>
				</select>
			</div>
			<div class="form-group row">
				<label for="tp" class="col-form-label col-4">Tipe:</label>
				<select class="form-control col" id="type" name="type" required>
					<option>Home</option>
					<option>Away</option>
				</select>
			</div>
			<div class="form-group row">
				<label for="yr" class="col-form-label col-4">Tahun:</label>
				<input type="text" id="year" placeholder="Tahun" class="form-control col" name="year" required>
			</div>
			<div class="form-group row">
				<label for="gk" class="col-form-label col-4">Kiper:</label>
				<select class="form-control col" id="gk" name="gk" required>
					<option>Tidak</option>
					<option>Ya</option>
				</select>
			</div>
			<div class="form-group row">
				<label for="sz" class="col-form-label col-4">Ukuran:</label>
				<select class="form-control col" id="size" name="size" required>
					<option>S</option>
					<option>M</option>
					<option>L</option>
					<option>XL</option>
				</select>
			</div>
			<div class="form-group row">
				<label for="mtrl" class="col-form-label col-4">Bahan:</label>
				<input type="text" id="material" placeholder="Bahan" class="form-control col" name="material" required>
			</div>
			<div class="form-group row">
				<label for="prc" class="col-form-label col-4">Harga:</label>
				<input type="text" id="price" placeholder="Harga" class="form-control col" name="price" required>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Submit">
			</div>	
		</form>
	</div>
	<div class="col" style="overflow-x: auto;">
		{{ $item->links() }}
		<table class="table-responsive table-bordered table-striped">
			<thead class="text-center">
				<tr>
					<th width="1%">Item</th>
					<th>Klub</th>
					<th>Tipe</th>
					<th>Tahun</th>
					<th>Kiper</th>
					<th>Ukuran</th>
					<th>Bahan</th>
					<th>Harga</th>
					<th width="1%">Opsi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($item as $i)
				<tr>
					<td><img width="150px" src="{{url('/data_file/'.$i->file)}}"></td>
					<td>{{ $i->club }}</td>
					<td>{{ $i->type }}</td>
					<td>{{ $i->year }}</td>
					<td>{{ $i->gk }}</td>
					<td>{{ $i->size }}</td>
					<td>{{ $i->material }}</td>
					<td>{{ $i->price }}</td>
					<td>
						<a type="button" class="btn btn-danger btn-block" href="/adm00n/edit/{{ $i->id }}">Edit</a>
						<a type="button" class="btn btn-success btn-block" href="/adm00n/delete/{{ $i->id }}">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $item->links() }}
	</div>
</div>
@endsection