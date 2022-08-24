@extends('dashboard.layouts.index')
@section('title')
    Manggarai
@endsection
@section('conten')
<div class="jarak">
@foreach ($detail as $item)
    
<h4>{{ $item->name }}</h4> 
@endforeach
       </div>
    </div>
    <div class="container">
     <hr>
     <h4>Comments</h4>
        <!-- Main Body -->
        <section >
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6 col-12 pb-4 border">
                      @if ($riview->count()>0)
                    @foreach ($riview as $item)
                        <a class="float-end btn btn-primary" href="{{ url('hapus-komen/'.$item->id) }}"><i class="fa-solid fa-trash-can"></i> HAPUS</a>
                    <div class="text-justify darker mt-4 ">
                        <img src="{{ asset('asset/avatar.png') }}" alt="" class="rounded-circle" width="40" height="40">
                        <h4>{{ $item->name }}</h4>
                        <span>{{ $item->created_at }}</span>
                        <br>
                        <p class="text-black">{{ $item->riview }}</p>
                    </div>
                    @endforeach
                    @else
                    <h2 class="opacity-25">Belum ada Komentar</h2>
                    @endif
                        
                  </div>
               
                 
              </div>
          </div>
      </section>
    </div>
    </div>

@endsection