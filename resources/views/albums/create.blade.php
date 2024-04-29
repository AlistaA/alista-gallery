@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">Buat Album Baru</div>

                <div class="card-body">
                    <form action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="NamaAlbum" class="form-label">Nama Album</label>
                            <input type="text" name="NamaAlbum" class="form-control" id="NamaAlbum" placeholder="Enter album name">
                        </div>

                        <div class="mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi Album</label>
                            <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3" placeholder="Enter description"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
