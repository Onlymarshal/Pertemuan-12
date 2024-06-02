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
                    <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px;  font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Create Data Kelurahan</i></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create New kelurahan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header" >
                    <h3 class="card-title">Create kelurahan</h3>

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
                    <form action="{{ route('kelurahan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kode">ID</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="{{ $kelurahan->kode }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $kelurahan->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kec_id">Kecamatan ID</label>
                            <input type="number" class="form-control" id="kec_id" name="kec_id" value="{{ $kelurahan->kec_id }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <select name="kelurahan_id" class="form-select form-select-lg mb-3" >
                                <option value="">-- Pilih --</option>
                                @foreach($list_kelurahan as $kelurahan)
                                <option value="{{ $kelurahan->id }}">
                                    {{ $kelurahan->kelurahan_id==$kelurahan->id ? 'selected' : ''}}>{{ $kelurahan->nama }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{ $kelurahan->id }}" >
                        <a href="{{ route('kelurahan.index') }}" class="btn btn-success mr-2">Batal</a>
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