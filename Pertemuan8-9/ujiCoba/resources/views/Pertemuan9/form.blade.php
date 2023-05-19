<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="text-center">Form Biodata</h3>
                    {{-- menampilkan error validasi --}}
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif <br />
                    <form action="{{url('hasil')}}" method="get">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control" value="{{old('nama')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ttl" class="col-4 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-8">
                                <input id="ttl" name="ttl" type="text" class="form-control" value="{{old('ttl')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Jenis Kelamin</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="jenis_kelamin" id="jenis_kelamin_l" type="radio" class="custom-control-input" value="Laki-laki">
                                    <label for="jenis_kelamin_l" class="custom-control-label">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="jenis_kelamin" id="jenis_kelamin_p" type="radio" class="custom-control-input" value="Perempuan">
                                    <label for="jenis_kelamin_p" class="custom-control-label">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hobi" class="col-4 col-form-label">Hobi</label>
                            <div class="col-8">
                                <input id="hobi" name="hobi" type="text" class="form-control" value="{{old('hobi')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>