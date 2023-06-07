@extends('Pertemuan11.admin.layout.appadmin')
@section('content')

<h1 class="mt-4">Pesanan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('adminla/dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Pesanan</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pemesanan</th>
                    <th>Alamat Pemesanan</th>
                    <th>Nomor Handphone</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Deskripi</th>
                    <th>Kategori Pesanan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pemesanan</th>
                    <th>Alamat Pemesanan</th>
                    <th>Nomor Handphone</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Deskripsi</th>
                    <th>Kategori Pesanan</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @php $no = 1; @endphp
                @foreach($pesanan as $p)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$p->tanggal}}</td>
                    <td>{{$p->nama_pemesan}}</td>
                    <td>{{$p->alamat_pemesan}}</td>
                    <td>{{$p->no_hp}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->jumlah_pesanan}}</td>
                    <td>{{$p->deskripsi}}</td>
                    <td>{{$p->nama_produk}}</td>
                    <!-- nama_kategori diambil dari join yang ada di controller produk yang sudah dibuatkan join -->
                    <td>
                        <a class="btn btn-primary" href="">View</a>
                        <a class="btn btn-primary" href="">Edit</a>
                        <a class="btn btn-primary" href="" onclick="if(!confirm('Anda Yakin Hapus Data Produk ?')) {return false}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection