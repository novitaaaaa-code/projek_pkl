@extends('layouts.admin')

@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Transaction</h5>
            <form class="row g-3" method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Order</label>
                            <select name="order_id" class="form-control">
                              <option value=""> Data Belum Tersedia</option>
                              @foreach ($order as $data)
                              <option value="{{ $data->id }}" @error('order_id') is-invalid @enderror>
                                {{ $data->order_status}}
                              </option>
                              @endforeach
                            </select>
                        </div>
                <div class="mb-3">
                    <label for="input13" class="form-label">Transaction Method</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="transaksi_method" class="form-control @error('transaksi_method') is-invalid @enderror" id="input13" value="{{ old('transaksi_method') }}" placeholder="Enter Transaction Method" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                        @error('transaksi_method')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="input14" class="form-label">Transaction Status</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="transaksi_status" class="form-control @error('transaksi_status') is-invalid @enderror" id="input14" value="{{ old('transaksi_status') }}" placeholder="Enter Transaction Status" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                        @error('transaksi_status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-grd-primary px-4">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
