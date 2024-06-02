@include('layout.header')
@include('layout.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px;  font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Data Periksa</i></h1>
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
         <h3 class="card-title" style=" color: red;"><i>Jika Ingin Melihat Data Lain Klik Dashboard di Sidebar</i></h3>
        </div>
        <div class="card-body" style="background-color: honeydew;">
        <div class="mb-2">
          <a href="{{ route('periksa.create') }}" class="btn btn-warning"><i class="fas fa plus">Tambah</i></a>
        </div>
        <div class="table-responsive" style="background-color: honeydew;">
    <table class="table table-striped">
      <thead>
        <tr  style="background-color: white;">
          <th>ID</th>
          <th>Tanggal</th>
          <th>Berat</th>
          <th>Tinggi</th>
          <th>Tensi</th>
          <th>Keterangan</th>
          <th>periksa ID</th>
          <th>Dokter ID</th>
          <th>Kelurahan_ID</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($list_periksa as $periksa)
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>{{ $periksa->tanggal }}</td>
          <td>{{ $periksa->berat }}</td>
          <td>{{ $periksa->tinggi }}</td>
          <td>{{ $periksa->tensi }}</td>
          <td>{{ $periksa->keterangan }}</td>
          <td>{{ $periksa->periksa_id }}</td>
          <td>{{ $periksa->dookter_id }}</td>
          <td>{{ $periksa->kelurahan_id }}</td>
          <td>
          <form action="{{ route('periksa.destroy', $periksa->id) }}" method="POST">
                <a href="{{ route('periksa.view', $periksa->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('periksa.edit', $periksa->id) }}" class="btn btn-success">Edit</a>

               @csrf 
               @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </td>
        </tr>
        @endforeach
        <!-- Add more rows if needed -->
      </tbody>
    </table>
  </div>
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

  @include('layout.footer')