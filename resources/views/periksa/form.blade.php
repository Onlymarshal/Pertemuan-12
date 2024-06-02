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
                    <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px;  font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Create New Periksa</i></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create New periksa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card" >
                <div class="card-header" >
                    <h3 class="card-title" style="color: red"><i>Create periksa</i></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="background-color: honeydew;">
                    <form action="{{ route('periksa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kode">ID</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="{{ $periksa->kode }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $periksa->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Berat</label>
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $periksa->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tinggi</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $periksa->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tensi</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $periksa->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Keterangan</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Pasien ID</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Dokter ID</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <select name="kelurahan_id" class="form-select form-select-lg mb-3" >
                                <option value="">-- Pilih --</option>
                                @foreach($list_kelurahan as $kelurahan)
                                <option value="{{ $kelurahan->id }}">
                                    {{ $periksa->kelurahan_id==$kelurahan->id ? 'selected' : ''}}>{{ $kelurahan->nama }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{ $periksa->id }}" >
                        <a href="{{ route('periksa.index') }}" class="btn btn-success mr-2">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <br>
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