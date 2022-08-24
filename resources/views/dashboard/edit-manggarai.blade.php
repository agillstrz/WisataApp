@extends('dashboard.layouts.index')
@section('title')
    Manggarai
@endsection
@section('conten')

<form class="row g-3" method="post" action="{{ url('update-manggarai/'.$manggarai->id) }}"  enctype="multipart/form-data">
    @method('PUT')
    @csrf
    
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Jenis</label>
      <select class="form-select" name="kate_id" aria-label="Default select example">
        <option value="">{{ $manggarai->kategori->name }}</option>
        
        
      </select>
    </div>

    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control" id="validationDefault01" value="{{ $manggarai->name }}" required>
    </div>

    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Jam Operasional</label>
      <input type="text" name="waktu" value="{{ $manggarai->waktu }}" class="form-control" id="validationDefault01" placeholder="08.00 – 15.30 WIB"  >
    </div>

    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Alamat</label>
      <input type="text" name="alamat" value="{{ $manggarai->alamat }}" class="form-control" id="validationDefault01" >
    </div>

    <div class="col-md-6">
      @if ($manggarai->image)
      <img src="{{ asset('assets/uploads/'. $manggarai->image) }}" width="80px" alt="manggarai image">
      @endif
              <label for="image" class="form-label">Foto Kategori</label>
              <input type="file" class="form-control" name="image" id="image" >
    </div>
  
    <div class="col-md-8">
          <label for="floatingTextarea2">Deskripsi</label>
            <textarea class="form-control" name="deskripsi"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{  $manggarai->deskripsi }} </textarea>
    </div>
 
    </div>
    <div class="col-12 pt-3">
      <button class="btn btn-tambah" type="submit">Simpan Data</button>
    </div>
  </form>
@endsection