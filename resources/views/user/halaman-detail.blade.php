@extends('../master-template')
@section('judul-halaman','Data mhs')
@section('content-halaman')
<table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIK</th>
        <th scope="col">Usia</th>
        <th scope="col">Jurusan</th>
        <th scope="col-3">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1;?>
        @foreach($MahasiswaById as $d)
        <td>{{$no++}}</td>
        <td>{{$d->nama}}</td>
        <td>{{$d->usia}}</td>
        <td>{{$d->nik}}</td>
        <td>{{$d->jurusan}}</td>
        <td>
            <a href="/user/halaman-edit/{{$d->id}}" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
            <a href="/user/delete/{{$d->id}}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
        </td>
    </tbody>
</table>
    
@endforeach
@endsection