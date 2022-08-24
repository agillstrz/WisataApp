@extends('layouts.index')
@section('title')
    Manggarai
@endsection
@section('conten') 
<div class="pb-5 jarak" style="background-color: #a3b18a">

<div class="container pt-5">
   <div class="row">
       @foreach ($detail as $item)
       @if($item->kate_id==1)
       <h1 class="text-center text-capitalize">{{ $item->name }}</h1>
    <div class="col-6">
        <div class="d-flex justify-content-center">
          
            <img width="400" src="{{ asset('assets/uploads/'.$item->image) }}" alt="">
          </div>
          <div class="pt-3 ">
              <p class="text-justify deskripsini">{{ $item->deskripsi }}</p>
          </div>
        </div>
 <div class="col-6  d-flex justify-content-center ">
    <div class=" fw-bold  ">
       <div class=" text-center w-full h-full">
           <h5>Jam Operational : <span class="text-decoration-underline">{{ $item->waktu }}</span> </h5>
           <div class="fs-4">
              
               <p>📌Alamat</p>
               <iframe src="{{ $item->alamat }}" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
       </div>
    </div>
</div>
@else 
       <h1 class="text-center text-capitalize">{{ $item->name }}</h1>
    <div class="col-12">
        <div class="d-flex justify-content-center">
          
            <img width="400" src="{{ asset('assets/uploads/'.$item->image) }}" alt="">
          </div>
          <div class="pt-3 ">
              <p class="text-justify deskripsini">{{ $item->deskripsi }}</p>
          </div>
        </div>
@endif
    @endforeach
   </div>
</div>
<div class="container pt-5">
 <hr>
 <h4>Comments</h4>
    <!-- Main Body -->
    <section >
      <div class="container">
          <div class="row">
     
              <div class="col-sm-5 col-md-6 col-12 pb-4 border" style="background-color: #bfcaac" >
                @foreach ($riview as $item)
            @auth
            @if(auth()->user()->role_as=='1')
            <div class="float-end pt-2">
                <a class=" btn btn-danger" href="{{ url('hapus-komen/'.$item->id) }}"><i class="fa-solid fa-trash-can"></i> HAPUS</a>
            </div>
            @endif
            @endauth
                <div class="text-justify darker mt-4 ">
                    <img src="{{ asset('asset/avatar.png') }}" alt="" class="rounded-circle" width="40" height="40">
                    <h4>{{ $item->name }}</h4>
                    <span>{{ $item->created_at }}</span>
                    <br>
                    <p class="text-black">{{ $item->riview }}</p>
                </div>
                <hr>
            
                @endforeach
                    
              </div>
              <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4 classform">
                  <form method="post" action="{{ url('tambah-riview') }}" enctype="multipart/form-data" id="algin-form">
                    @csrf
                    @foreach ($detail as $item)
             <input type="hidden" value="{{ $item->id }}"  name="manggarai_id" >

                    @endforeach
                    <div class="form-group">
                        <h4 class="text-capitalize text-center fs-4">Komentar</h4>
                        <label class="labelcolor"  for="name">Name</label>
                        <input type="text" name="name" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        
                        <label class="labelcolor" for="message">Pesan</label>
                        <textarea name="riview" id=""msg cols="30" rows="5" class="form-control"></textarea>
                    </div>
                
                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-tambah">Tambah komen</button>
                    </div>
                </form>
            </div>
             
          </div>
      </div>
  </section>
</div>
</div>
@endsection