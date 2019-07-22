@extends('layouts.layout')

@section('title','DATA TAMU')

@section('content')

	
			<div class="container-fluid">
				@if(session('pesan'))
					<div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       {{ session('pesan') }}
                       </div>
				@endif
				<table class="table table-bordered">
					<thead class="table table-info">
						<tr>
							<th>No</th>
							<th>Nama Tamu</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Status</th>
							<th>Jaminan</th>
							<th>Keterangan</th>
							<th>Waktu Kunjungan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($datu as $hums)
						<tr>
							<td>{{ $loop->index + 1 }}</td>
							<td>{{ $hums->nama_tamu }}</td>
							<td>{{ $hums->jk }}</td>
							<td>{{ $hums->alamat }}</td>
							<td>{{ $hums->status }}</td>
							<td>{{ $hums->jaminan }}</td>
							<td>{{ $hums->keterangan }}</td>
							<td>{{ $hums->created_at}}</td>
							<td><a href="{{ url('delete/'.$hums->id) }}" class="btn btn-danger btn-md">Hapus</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		
	
@endsection
