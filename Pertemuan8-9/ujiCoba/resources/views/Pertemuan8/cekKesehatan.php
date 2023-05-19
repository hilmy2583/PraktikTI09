<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Form Cek Kesehatan</h3><br />
                        <!-- form validasi -->
                        <form action="{{url('hasil')}}" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Tanggal Pemeriksaan</label>
                                <input class="form-control" type="text" name="tgl_periksa" id="tgl_periksa">
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir/Usia</label>
                                <input class="form-control" type="text" name="tgl_lahir" id="tgl_lahir">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label><br>
                                <input type="radio" name="jk" id="jk" value="Laki-laki"> Laki-laki <br>
                                <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>