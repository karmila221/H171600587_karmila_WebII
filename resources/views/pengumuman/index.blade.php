@extends ('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List Pengumuman</div>
				<div class="card-body">
				<a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data </a>
				<table border="2">
				<tr>
					<td> ID </td>
					<td> Judul </td>
					<td> Isi </td>
					<td> User Id </td>
					<td> Create </td>
					<td> Aksi </td>
				</tr>
@foreach ($Pengumuman as $item)
<tr>
					<td> {!! $item-> id !!} </td>
					<td> {!! $item-> judul!!} </td>
					<td> {!! $item-> isi !!} </td>
					<td> {!! $item-> users_id !!} </td>
					<td> {!! $item-> created_at !!} </td>
					<td>
						<a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat </a>
					</td>
</tr>
@endforeach 	
				</table>	
				</div>
			</div>
		</div>
	</div>
</div>

@endsection