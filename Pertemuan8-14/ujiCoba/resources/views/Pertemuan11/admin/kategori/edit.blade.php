@extends('Pertemuan11.admin.layout.appadmin')
@section('content')




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<br>
<h1 >Form Input Produk</h1>
<div class="col-8 ">
<form method="POST" action="{{url('adminla/kategori/update')}}" enctype="multipart/form-data" >
{{ csrf_field() }}
@foreach ($kategori_produk as $p)

  <div class="form-group row">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control" value="{{$p->nama}}">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</form>
@endforeach
@endsection
