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
                    <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px;  font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Create Data Paramedik</i></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create New Paramedik</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content" >

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Paramedik</h3>

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
                    <form action="{{ route('paramedik.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $paramedik->kode }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $paramedik->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">gender</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" id="gender1" value="L" {{ $paramedik->gender=='L' ? 'checked' : ''}}>
                            <label for="inlineRadio1" class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" id="gender2" value="P" {{ $paramedik->gender=='P' ? 'checked' : ''}}>
                            <label for="inlineRadio2" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $paramedik->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $paramedik->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="kategori" id="kategori1" value="perawat" {{ $paramedik->kategori=='Perawat' ? 'checked' : ''}}>
                            <label for="inlineRadio1" class="form-check-label">Perawat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="kategori" id="kategori2" value="teknisi_Medis" {{ $paramedik->kategori=='teknisi_medis' ? 'checked' : ''}}>
                            <label for="inlineRadio2" class="form-check-label">Teknisi Medis</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="kategori" id="kategori3" value="ahli_paramedis" {{ $paramedik->kategori=='ahli_paramedis' ? 'checked' : ''}}>
                            <label for="inlineRadio3" class="form-check-label">Ahli paramedis</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="kategori" id="kategori4" value="asisten_medis" {{ $paramedik->kategori=='asisten_medis' ? 'checked' : ''}}>
                            <label for="inlineRadio4" class="form-check-label">Asisten medis</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telpon">Telpon</label>
                            <input type="text" class="form-control" id="telpon" name="telpon" value="{{ $paramedik->telpon }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea type="number" class="form-control" id="alamat" name="alamat" required>
                                {{ $paramedik->alamat }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="unit_kerja_id">Unit_kerja_id</label>
                            <input type="text" class="form-control" id="unit_kerja_id" name="unit_kerja_id" value="{{ $paramedik->unit_kerja_id }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <select name="kelurahan_id" class="form-select form-select-lg mb-3" >
                                <option value="">-- Pilih --</option>
                                @foreach($list_kelurahan as $kelurahan)
                                <option value="{{ $kelurahan->id }}">
                                    {{ $paramedik->kelurahan_id==$kelurahan->id ? 'selected' : ''}}>{{ $kelurahan->nama }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{ $paramedik->id }}" >
                        <a href="{{ route('paramedik.index') }}" class="btn btn-success mr-2">Batal</a>
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