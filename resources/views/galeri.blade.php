
<x-header />

<!--SECTION GALERI-->
  <div class="row my-5">
    <div class="col-12">
      <h2>GALERI</h2>
      <div class="row">

        
          @foreach ($data as $item)
        <div class="col-3 mb-4">
          <div class="card h-100">
            <div class="card-header p-0">
          <img width="100%" src="{{ $item->foto }}" alt="" class="img-fluid">
          </div>
        </div>
        </div>
         @endforeach

        
    </div>
  </div>
  <!--TUTUP SECTION GALERI-->
<x-footer />
    
    