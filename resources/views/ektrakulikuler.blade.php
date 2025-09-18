

<x-header />
  <!--SECTION GALERI-->
  <div class="row my-5">
    <div class="col-12">
      <h2>EKTRAKULIKULER</h2>

      @foreach ( $data as $item )

      
         <div class="row">
        <div class="col-3">
          <div class="card">
          <div class="card-header"><img width="100% "src="{{ $item->foto}}" alt="">
            <h3>{{ $item->nama_eskul }}</h3></div>
          </div>
        </div>
      @endforeach
     

        


      </div>
    </div>
    </div>
    <!--TUTUP SECTION GALERI-->

<x-footer />

    
     