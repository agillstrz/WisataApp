@extends('layouts.index')
@section('title')
    Manggarai
@endsection
@section('conten')
<section id="home" class="main-hijau pt-5">
    <div class="container">
    <div class="row vh-100">
        <div class="col-lg-6  text-center align-self-center">
            <div class="fs-5"> 
                <h2> Mai Cenggo</h2>
                <p class="pt-4 tengah">Menghabiskan waktu berlibur merupakan salah satu cara untuk menghilangkan stres. Tak perlu jauh-jauh ke luar negeri, Indonesia punya banyak destinasi wisata menarik yang menanti untuk dikunjungi.
                   Mulai dari menikmati sunset dari pantai, menyelam dengan puluhan biota laut, mendaki gunung, hingga wisata edukasi bisa Anda pilih.</p>
            </div>
        </div>
        <div class="col-lg-6  text-center align-self-center" style="padding-left: 140px">
            <div class="">
                <img src="{{ asset('asset/logo.png') }}" class="" />
        </div>
    </div>
    </div>
  </section>
  
  <section class="pt-5" id="destination" style="background-color:#BFCAAC">
    <div class="container py-2 px-5">
        <div>
            <h2 class="text-center py-5 fw-bold">Jelajahi Wisata Kabupaten Manggarai</h2>
        <p class=" fs-5 tengah"> Nusa Tenggara Timur atau yang disebut NTT merupakan salah satu provinsi yang ada di Indonesia Timur. 
          Provinsi ini memiliki beberapa pembagian wilayah kabupaten, salah satunya adalah Kabupaten Manggarai.
          Manggarai adalah salah satu kabupaten di NTT yang mempunyai sepuluh kecamatan dengan enam perwakilan yang dikoordinatori oleh pemerintah Kota Ruteng juga menjadi ibu kota dari Manggarai. 
          Berikut deretan tempat wisata di Manggarai yang jarang diketahui masyarakat pendatang:</p>
        </div>
        <div>
            
            <div class="content pt-5">
                <div class="container">
                    <div class="row">
                        @foreach ($manggarai as $item)
                        <div class="col-xs-12 col-sm-4 ">
                            <div class="card"  style="background-color: #a3b18a">
                                <a class="img-card" href="{{ url('detail/' .$item->id) }}">
                                <img  src="{{ asset('assets/uploads/'.$item->image) }}" />
                              </a>
                                <div class="card-content">
                                    <h5 class="card-title text-center text-capitalize   ">
                                       {{ $item->name }}
                                    
                                    </h5>
                                    <p class="">
                                       {{ $item->excerpt }}
                                    </p>
                                    <div class="ps-3 text-end">
                                        <a href="{{ url('detail/' .$item->id) }}" class="btn lengkap">
                                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                                         </a>
                                     </div>
                                </div>
                            
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


  <section id="Souvenir">
    <div class="container">
      <div class="row text-center mb-3 py-5 px-3">
        <div class="col ">
          <h2 class="text-center px-3 py-5">Souvenir</h2>
          <p class="tengah fs-5"> Souvenir adalah benda atau barang kerajinan tangan atau seni kerajinan yang diciptakan dari hasil kreativitas para perajin yang mampu merubah bahan tertentu menjadi produk-produk kerajinan seni yang unik dan menarik. 
            Arti lain yang bisa digunakan dari souvenir adalah cinderamata, kenang kenangan, oleh-oleh, atau hadiah khusus yang unik.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        @foreach ($souvenir as $item)
        <div class="col-xs-12 col-sm-4 ">
            <div class="card">
                <a class="img-card" href="{{ url('detail/' .$item->id) }}">
                <img  src="{{ asset('assets/uploads/'.$item->image) }}" />
              </a>
                <div class="card-content" style="background-color: #d6e0c5">
                    <h5 class="card-title text-center text-capitalize">
                       {{ $item->name }}
                    
                    </h5>
                    <p class="">
                       {{ $item->excerpt }}
                    </p>
                    <div class="ps-3 text-end">
                        <a href="{{ url('detail/' .$item->id) }}" class="btn lengkap">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                         </a>
                     </div>
                </div>
           
              
            </div>
        </div>
        @endforeach
    </div>
  </section>



@endsection