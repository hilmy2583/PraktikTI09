<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <h3>Form HTML pada PHP</h3>
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
                    <form action="{{url('tes')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control" value="{{old('nama')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label>
                            <div class="col-8">
                                <input id="email" name="email" type="email" class="form-control" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
                            <div class="col-5">
                                <select id="lokasi" name="lokasi" class="custom-select">
                                    @foreach ($ar_lokasi as $lokasi)
                                    <option value="{{ $lokasi }}">{{ $lokasi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Jenis Kelamin</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control">
                                    <input name="jenis_kelamin" id="jenis_kelamin_l" type="radio" class="custom-control-input" value="Laki-laki">
                                    <label for="jenis_kelamin_l" class="custom-control-label">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control">
                                    <input name="jenis_kelamin" id="jenis_kelamin_p" type="radio" class="custom-control-input" value="Perempuan">
                                    <label for="jenis_kelamin_p" class="custom-control-label">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Skill</label>
                            <div class="col-8">
                                @foreach ($ar_skill as $skill)
                                <input type="checkbox" name="skill[]" value="{{ $skill }}">
                                {{ $skill }}<br>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" value="proses" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>