@extends('layouts.admin')
@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Add Orders</h5>
                <form class="row g-3" method="POST" action="{{ route('order.store') }}"enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">User</label>
                        <select name="user_id" class="form-control">
                            <option value=""> Data Belum Tersedia</option>
                            @foreach ($user as $data)
                                <option value="{{ $data->id }}" @error('user_id') is-invalid @enderror>
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Order Status</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="order_status"
                                class="form-control @error('order_status') is-invalid @enderror" id="input13"
                                value="{{ old('order_status') }}" placeholder="Full order_status" required>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                            @error('order_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4x">
                            <label for="input13" class="form-label">Total Price</label>
                            <div class="position-relative input-icon">
                                <input type="text" name="total_price"
                                    class="form-control @error('total_price') is-invalid @enderror" id="total_price"
                                    value="{{ old('total_price') }}" placeholder="Full total_price" required>
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5"></i></span>
                                @error('total_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4x">
                                <label for="input13" class="form-label">Shipping Address</label>
                                <div class="position-relative input-icon">
                                    <input type="text" name="shipping_address"
                                        class="form-control @error('shipping_address') is-invalid @enderror"
                                        id="shipping_address" value="{{ old('shipping_address') }}"
                                        placeholder="Full shipping_address" required>
                                    <span class="position-absolute top-50 translate-middle-y"><i
                                            class="material-icons-outlined fs-5"></i></span>
                                    @error('shipping_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                                        <a href="{{ route('order.index') }}" class="btn btn-grd-primary px-4">Kembali</a>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
