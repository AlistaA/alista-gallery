@extends('layouts.app')

@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{ $album->NamaAlbum }}</h1>
        <p class="lead text-muted">{{ $album->Deskripsi }}</p>
        <p>
          <a href="/photo/upload/{{ $album->id }}" class="btn btn-primary my-2">Upload Photo</a>
          <a href="/albums" class="btn btn-secondary my-2">Back</a>
        </p>
      </div>
    </div>
</section>

@if (count($album->photos) > 0)

<div class="row">
    @foreach ($album->photos as $photo)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <a href="{{ route('photos.show', $photo->id) }}">
                <img src="/storage/albums/{{ $album->id }}/{{ $photo->foto }}" height="200px" width="250px" class="card-img-top" alt="photo Image">
            </a>
        </div>
    </div>
    @endforeach
</div>

@else
    <p class="text-center">No photos to display</p>
@endif

@endsection

<style>
    /* Custom styling */
    .btn-primary {
        background-color: #007bff; /* Ubah warna tombol utama */
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Ubah warna ketika tombol utama dihover */
        border-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d; /* Ubah warna tombol sekunder */
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #545b62; /* Ubah warna ketika tombol sekunder dihover */
        border-color: #545b62;
    }

    .card {
        transition: transform 0.3s ease; /* Animasi saat kartu dihover */
    }

    .card:hover {
        transform: scale(1.05); /* Perbesar kartu saat dihover */
    }
</style>
