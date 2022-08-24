@extends('dashboard.layouts.index')
@section('title')
    Manggarai
@endsection
@section('conten')

<div class="pb-3">
  <a class="btn btn-tambah" href="{{ url('tambah-manggarai') }}">Tambah Destinasi/souvenir <span><i class="fa-solid fa-plus"></i></span></a>
</div>

<table class="table align-middle table-bordered border-dark table-hover text-center table-sm ">
  <thead>
   
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama</th>
      <th scope="col">foto</th>
      <th scope="col">Lihat Komentar</th>
      <th scope="col">kelola</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 0;
@endphp
    @foreach ($manggarai as $item)
    <tr>
          <th scope="row">{{ ++$no }}</th>
          <td >{{ $item->kategori->name }}</td>
          <td >{{ $item->name }}</td>
          <td ><img width="80px" src="{{ asset('assets/uploads/'. $item->image) }}" alt=""></td>
          <td ><a class="btn btn-tambah" href="{{ url('lihat-komentar/' .$item->id) }}"><i class="fa-solid fa-eye"></i> Lihat Komentar</a></td>
          <td ><a class="btn btn-primary " href="{{ url('edit-manggarai/'.$item->id) }}"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
            <a class="btn btn-danger " href="{{ url('hapus-manggarai/'.$item->id) }}"><i class="fa-solid fa-trash-can"></i>Hapus</a></td>
        
        </tr>
      </tbody>
      @endforeach
</table>


@endsection