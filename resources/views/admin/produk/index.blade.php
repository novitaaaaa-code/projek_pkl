@extends('layouts.admin')
@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Components</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary">Add Data</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase"> DataTable Produk</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>price</th>
                        <th>stock quantity</th>
                        <th>images</th>
                        <th>kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($produk as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nama_produk}}</td>
                        <td>{{$data->deskripsi}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->stock_quantity}}</td>
                        <td><img src="{{asset('image/produk/'.$data->image)}}" width="100"></td>
                        <td>{{$data->kategori->nama_kategori}}</td>
                        <td>
                            <form id="destroy-form" action="{{route('produk.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('produk.edit',$data->id)}}" class="btn btn-sm btn-warning">
                                    Edit
                                </a> |
                                <a href="{{ route('produk.destroy', $data->id) }}" class="btn btn-sm btn-danger"
                                    data-confirm-delete="true">Delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
		$('#example').DataTable();
	});
</script>

@endpush
