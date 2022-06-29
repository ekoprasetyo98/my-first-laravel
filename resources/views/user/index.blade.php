@extends('../master-template')
@section('judul-halaman','Data User')
@section('content-halaman')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
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
      <?php $no = 1;?>
    @foreach($dataMahasiswa as $d)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$d->nama}}</td>
      <td>{{$d->usia}}</td>
      <td>{{$d->nik}}</td>
      <td>{{$d->jurusan}}</td>
      <td>
        <a href="/user/halaman-edit/{{$d->id}}" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
        <a href="/user/halaman-detail/{{$d->id}}" class="btn btn-secondary"><i class="bi bi-eye-fill"></i></a>
        <a href="/user/delete/{{$d->id}}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$dataMahasiswa->links()}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/proses/tambah" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Usia</label>
            <input type="text" name="usia" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jurusan Tehnik</label>
            <select name="jurusan" class="form-control" id="">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                <option value="Teknologi Pangan">Teknologi Pangan</option>
                <option value="Teknologi Elektro">Teknologi Elektro</option>
                <option value="Teknologi Mesin">Teknologi Mesin</option>
            </select>
            
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        </form>
        
      </div>
    </div>
  </div>
</div>
@endsection