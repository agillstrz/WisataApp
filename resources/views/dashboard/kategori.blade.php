@extends('dashboard.layouts.index')

@section('conten')
<div class="pb-4">
<a class="btn btn-tambah" href="{{ url('tambah-kategori') }}">Tambah kategori <span><i class="fa-solid fa-plus"></i></span></a>

</div>
<table class="table text-center " style="width: 50%">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
    </tr>
  </thead>
  <tbody>
    @php
        $no=1;
    @endphp
    @foreach ($kategori as $item)
    <tr>
          
      <th scope="row">{{ $no++ }}</th>
      <td >{{ $item->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection