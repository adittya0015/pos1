@extends('layouts.master')

@section('title')
    <title>Dashboad | PT KUMITIR BR</title>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">INVENTORY MANAGEMENT</h1>
                  <h1 class="text-dark">PT KUMITIR BR</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <div class="content">
              <div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-6">
                                <div class="card">
                                  <div class="card-header card-primary card-outline">
                                    <h5 class="m-0">Barang</h5>
                                  </div>
                                  <div class="card-body">
                                    <p class="card-text">Halaman untuk menambah, mengubah dan menghapus data barang</p>
                                    <a href="#" class="btn btn-primary">Masuk</a>
                                  </div>
                                </div>
                    
                                <div class="card card-primary card-outline">
                                  <div class="card-header">
                                    <h5 class="m-0">Penerimaan Barang</h5>
                                  </div>
                                  <div class="card-body">
                                    <p class="card-text">Menambahkan barang ataupun menerima barang untuk ditempatkan pada Gudang</p>
                                    <a href="#" class="btn btn-primary">Masuk</a>
                                  </div>
                            </div>
                        </div>
                        <!-- Samping Kanan -->
                        <div class="col-lg-6">
                                <div class="card">
                                  <div class="card-header card-primary card-outline">
                                    <h5 class="m-0">Keluar Barang</h5>
                                  </div>
                                  <div class="card-body">
                                    <p class="card-text">Mengurangi barang ataupun mengeluarkan barang untuk diproduksi</p>
                                    <a href="#" class="btn btn-primary">Masuk</a>
                                  </div>
                                </div>
                    
                                <div class="card card-primary card-outline">
                                  <div class="card-header">
                                    <h5 class="m-0">Laporan Bulanan</h5>
                                  </div>
                                  <div class="card-body">
                                    <p class="card-text">Laporan bulanan untuk stok barang</p>
                                    <a href="#" class="btn btn-primary">Masuk</a>
                                  </div>
                            </div>
                        </div>
                              <!-- /.col-md-6 -->
                  </div>
              </div>
          </div>
      
</div>
@endsection