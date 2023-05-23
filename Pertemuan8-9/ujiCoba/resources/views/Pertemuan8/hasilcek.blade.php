<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3>Data Kesehatan {{ $data->nama }}</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td style="width:150px">Nama</td>
                            <td>{{ $data->nama }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemeriksaan</td>
                            <td>{{ $data->tgl_periksa }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{ $data->tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>{{ $data->jk }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>