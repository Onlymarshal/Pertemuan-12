@include('layout.header')
@include('layout.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Detail periksa</h1>
                    <h3 class="my-4">Detail periksa : {{ $periksa->kode}} - {{ $periksa->nama }}</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>Tesni</th>
                                <th>Keterangan</th>
                                <th>periksa ID</th>
                                <th>Dokter ID</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                <td>{{ $periksa->id}}</td>
                                <td>{{ $periksa->tanggal }}</td>
                                <td>{{ $periksa->berat }}</td>
                                <td>{{ $periksa->tinggi }}</td>
                                <td>{{ $periksa->tensi }}</td>
                                <td>{{ $periksa->keterangan }}</td>
                                <td>{{ $periksa->periksa_id }}</td>
                                <td>{{ $periksa->dookter_id }}</td>
                                
                                </tr>
                        </tbody>
                    </table>
                    <div>
                        <a href="{{ route('periksa.index') }}" class="btn btn-success mt-2">Kembali</a>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('layout.footer')