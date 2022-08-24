@extends('dashboard.layouts.index')
@section('title')
    Manggarai
@endsection
@section('conten')

<form class="row g-3" method="post" action="{{ url('insert-kategori') }}"  enctype="multipart/form-data">
    @csrf
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Nama kategori</label>
      <input type="text" name="name" class="form-control" id="validationDefault01" value="Destination" required>
    </div>

  

 
    </div>
    <div class="col-12 pt-3">
      <button class="btn btn-tambah" type="submit">Tambah data</button>
    </div>
  </form>
@endsection