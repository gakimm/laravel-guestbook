@extends('layouts.layout')

@section('title','Input Tamu')
@section('content')
	
			
	<div class="row">
			<div class="col-sm-12">
				@if(session('pesan'))
				<div class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       {{ session('pesan') }}
                        </div>
				@endif
				
			
		<form method="post" action="{{ url('save') }}" >
			@csrf
		<div class="row">
		<div class="col-sm-6">
				<div class="form-group">
					<label>Nama Tamu</label>
					<input type="text" class="form-control" name="nama_tamu" placeholder="nama tamu" required>
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<select class="form-control" required="" name="jk">
						<option value="">Pilih Jenis Kelamin . . .</option>
						<option value=""></option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea  class="form-control" name="alamat" placeholder="alamat" required></textarea>
				</div>
			</div>
		<div class="col-sm-6">
				<div class="form-group">
					<label>Status</label>
					<input type="text" class="form-control" name="status" placeholder="status tamu" required> 
				</div>
				<div class="form-group">
					<label>Jaminan</label>
					<input type="text" class="form-control" name="jaminan" placeholder="jaminan masuk" required>
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<textarea  class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
				</div>

		</div>
		<div class="col-sm-12">
			<input type="submit" name="simpan" class="btn btn-md btn-success btn-block" value="Simpan">
		</div>
		</form>
		
		</div>
		</div>
	</div>
	
@endsection
