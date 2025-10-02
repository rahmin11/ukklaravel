<x-header />

<!-- SECTION GALERI -->
<div class="row my-5">
  <div class="col-12">
    <h2>EKTRAKULIKULER</h2>

    <div class="row"> <!-- Ini baris untuk semua gambar -->

      @foreach ($data as $item)
        <div class="col-3 mb-4">
          <div class="card h-100">
            <div class="card-header p-0">
              <img width="100%" src="{{ $item->foto }}" alt="" class="img-fluid">
              <div class="card-body">
                <h5 class="card-title text-center"> {{ $item->nama_eskul }}</h5>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
</div>
</div>
<!-- TUTUP SECTION GALERI -->

<x-footer />
