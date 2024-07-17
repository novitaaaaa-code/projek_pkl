@extends('layouts.admin')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Admin</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class="row">
                <div class="col-xxl-5 d-flex align-items-stretch">
                    <div class="card w-100 overflow-hidden rounded-4">
                        <div class="card-body position-relative p-4">
                                <div class="col-12 col-sm-7">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="https://placehold.co/110x110/png" class="rounded-circle bg-grd-info p-1"
                                            width="60" height="60" alt="user">
                                        <div class="">
                                            <p class="mb-0 fw-semibold">Welcome back</p>
                                            <h4 class="fw-semibold mb-0 fs-4 mb-0">{{Auth::user()->name}}</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-5">
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="card rounded-4 rounded-4 mt-5">
                  <div class="card-body">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4 g-3">
                      <div class="col">
                        <div class="card rounded-4 mb-0 border">
                          <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                              <img src="assets/images/apps/05.png" width="35" alt="">
                              <div class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                  data-bs-toggle="dropdown">
                                  <span class="material-icons-outlined fs-5"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="mb-0 fw-light">45.2K</h4>
                              <p class="mb-0">Acount</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-end gap-1 mt-3">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card rounded-4 mb-0 border">
                          <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                              <img src="assets/images/apps/18.png" width="35" alt="">
                              <div class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                  data-bs-toggle="dropdown">
                                  <span class="material-icons-outlined fs-5"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="mb-0 fw-light">62.4K</h4>
                              <p class="mb-0">Produk</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-end gap-1 mt-3">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card rounded-4 mb-0 border">
                          <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                              <img src="assets/images/apps/17.png" width="35" alt="">
                              <div class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                  data-bs-toggle="dropdown">
                                  <span class="material-icons-outlined fs-5"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="mb-0 fw-light">25.8K</h4>
                              <p class="mb-0">Kategori</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-end gap-1 mt-3">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card rounded-4 mb-0 border">
                          <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                              <img src="assets/images/apps/19.png" width="35" alt="">
                              <div class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                  data-bs-toggle="dropdown">
                                  <span class="material-icons-outlined fs-5"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="mb-0 fw-light">58.9K</h4>
                              <p class="mb-0">Order</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-end gap-1 mt-3">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div><!--end row-->
                  </div>
                </div>
            </div>
        </div>
    </main>
@endsection
