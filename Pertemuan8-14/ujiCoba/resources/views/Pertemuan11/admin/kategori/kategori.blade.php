@extends('Pertemuan11.admin.layout.appadmin')
@section('content')

<h1 class="mt-4">Kategori</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('adminla/dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Kategori</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        <a class="btn btn-primary" href="{{url('adminla/kategori/create')}}">Create</a>
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
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @php $no = 1; @endphp
                @foreach($kategori_produk as $p)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$p->nama}}</td>
                    <td>
                        <a class="btn btn-primary" href="">View</a>
                        <a class="btn btn-warning" href="{{url('adminla/kategori/edit/'.$p->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('adminla/kategori/delete/'.$p->id)}}" onclick="if(!confirm('Anda Yakin Hapus Data Produk ?')) {return false}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection