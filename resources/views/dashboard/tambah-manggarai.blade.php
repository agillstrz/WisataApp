@extends('dashboard.layouts.index')
@section('title')
    Manggarai
@endsection
@section('conten')

<form class="row g-3" method="post" action="{{ url('insert-manggarai') }}"  enctype="multipart/form-data">
    @csrf
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Jenis</label>
      <select class="form-select" name="kate_id" aria-label="Default select example">
        <option selected>Open this select menu</option>
        @foreach ($kategori as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
       
      </select>
    </div>

    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="Pulau Pules" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Jam Operasional</label>
      <input type="text" name="waktu" class="form-control" id="validationDefault01" placeholder="08.00 – 15.30 WIB"  >
    </div>
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="validationDefault01" >
    </div>

    <div class="col-md-6">
      <label for="validationDefault03" class="form-label">Foto</label>
      <input type="file" name="image" class="form-control" id="validationDefault03" required>
    </div>
  
    <div class="col-md-8">
          <label for="floatingTextarea2">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
    </div>

  
 
    </div>
    <div class="col-12 pt-3">
      <button class="btn btn-tambah" type="submit">Tambah Data</button>
    </div>
  </form>
@endsection