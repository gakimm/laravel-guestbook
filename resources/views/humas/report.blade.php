@extends('layouts.layout')

@section('title','SEMUA LAPORAN')

@section('content')

		<style type="text/css">
			@media print{
				#sisi{
					display: none;
				}
				.btn{
					display: none;
				}
			}
		</style>
			<div class="container-fluid">
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
							
						</tr>
					</thead>
					<tbody>
						@foreach($datus as $hums)
						<tr>
							<td>{{ $loop->index + 1 }}</td>
							<td>{{ $hums->nama_tamu }}</td>
							<td>{{ $hums->jk }}</td>
							<td>{{ $hums->alamat }}</td>
							<td>{{ $hums->status }}</td>
							<td>{{ $hums->jaminan }}</td>
							<td>{{ $hums->keterangan }}</td>
							<td>{{ $hums->created_at}}</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
					<div class="row">
						
						<div class="col-sm-2"><button class="btn btn-warning btn-md btn-block" onclick="window.print();" ><span class="pe-7s-print"></span> Print</button></div>
					</div>
					
					
				
			</div>
		
	
@endsection
