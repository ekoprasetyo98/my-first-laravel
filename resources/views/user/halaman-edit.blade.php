@extends('../master-template')
@section('judul-halaman','Edit Data Mahsiswa')
@section('content-halaman')
<div class="col-sm-12 col-md-4 col-bg-4">
    @foreach($dataMahasiswaById as $d)
<form action="/user/updateData/proses" method="post">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$d->nama}}">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Usia</label>
        <input type="text" name="usia" class="form-control" value="{{$d->usia}}">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" value="{{$d->nik}}">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jurusan Tehnik</label>
        <select name="jurusan" class="form-control" id="">
            <option value="Belum diisi">...</option>
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
@endforeach
</div>

@endsection