@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body">
            <div class="card-block">
                <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="products_id" class="form-control-label">Nama Barang</label>
                        <select name="products_id" class="form-control @error('products_id') is-invalid @enderror">
                            <option value="" selected disabled>Pilih salah satu</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('products_id')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="photo" class="form-control-label">Foto</label>
                        <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*"
                            class="form-control @error('photo') is-invalid @enderror" />
                        @error('photo')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="is_default">Jadikan Default</label>
                        <br>
                        <div class="form-check-inline">
                            <input class="form-check-input @error('is_default') is-invalid @enderror" type="radio"
                                name="is_default" value="1" checked>
                            <label class="form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input @error('is_default') is-invalid @enderror" type="radio"
                                name="is_default" value="0">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                        {{-- <label for="is_default" class="form-control-label">Jadikan Default</label>
                        <br>
                        <label class="btn btn-primary">
                            <input type="radio" name="is_default" value="1"
                                class="btn-check @error('is_default') is-invalid @enderror" /> Ya
                        </label>
                        &nbsp;
                        <label>
                            <input type="radio" name="is_default" value="0"
                                class="btn-check @error('is_default') is-invalid @enderror" checked /> Tidak
                        </label> --}}
                        @error('is_default')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Tambah Foto
                            Barang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
