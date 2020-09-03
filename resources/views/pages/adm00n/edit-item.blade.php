<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="author" href="humans.txt">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	@include('includes.header')
	<div class="container-fluid my-2">
		<div class="row">
			<div class="col-sm-5">
				<a href="/adm00n" class="btn btn-secondary">Back</a>
						<p>if you don`t want to change image, download image on right side and input it</p>
				<form action="/adm00n/update/{{$item->id}}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					{{method_field('PUT')}}

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
						<input type="text" id="material" placeholder="Bahan" class="form-control col" name="material" value="{{$item->material}}" required>
					</div>
					<div class="form-group row">
						<label for="prc" class="col-form-label col-4">Harga:</label>
						<input type="text" id="price" placeholder="Harga" class="form-control col" name="price" value="{{$item->price}}" required>
					</div>
					<div class="text-center">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>	
				</form>
			</div>
			<div class="col-sm">
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
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img width="150px" src="{{url('/data_file/'.$item->file)}}"></td>
							<td>{{ $item->club }}</td>
							<td>{{ $item->type }}</td>
							<td>{{ $item->year }}</td>
							<td>{{ $item->gk }}</td>
							<td>{{ $item->size }}</td>
							<td>{{ $item->material }}</td>
							<td>{{ $item->price }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>