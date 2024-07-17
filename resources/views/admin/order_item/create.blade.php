@extends('layouts.admin')
@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Add Orders Item</h5>
                <form class="row g-3" method="POST" action="{{ route('order_item.store') }}"enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Quantity</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="quantity"
                                class="form-control @error('quantity') is-invalid @enderror" id="input13"
                                value="{{ old('quantity') }}" placeholder="Full quantity" required>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4x">
                            <label for="input13" class="form-label">Price</label>
                            <div class="position-relative input-icon">
                                <input type="text" name="price"
                                    class="form-control @error('price') is-invalid @enderror" id="input13"
                                    value="{{ old('price') }}" placeholder="Full price" required>
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5"></i></span>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Produk</label>
                            <select name="produk_id" class="form-control">
                                <option value=""> Data Belum Tersedia</option>
                                @foreach ($produk as $data)
                                    <option value="{{ $data->id }}" @error('produk_id') is-invalid @enderror>
                                        {{ $data->nama_produk }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                                <a href="{{ route('order_item.index') }}" class="btn btn-grd-primary px-4">Kembali</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
