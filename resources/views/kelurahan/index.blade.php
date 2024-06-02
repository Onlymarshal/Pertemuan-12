@include('layout.header')
@include('layout.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px;  font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Data Kelurahan</i></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#../pasien">Home</a></li>
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
        <h3 class="card-title" style="color: red;"><i>Jika Ingin Melihat Data Lain Klik Dashboard di Sidebar</h3>
        </div>
        <div class="card-body" style="background-color: honeydew;">
        <div class="mb-2">
          <a href="{{ route('kelurahan.create') }}" class="btn btn-warning"><i class="fas fa plus">Tambah</i></a>
        </div>
        <div class="table-responsive" style="background-color: honeydew;">
    <table class="table table-striped">
      <thead>
        <tr  style="background-color: white;">
          <th>ID</th>
          <th>Nama</th>
          <th>Kecamatan ID</th>
          <th>Kelurahan_ID</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($list_kelurahan as $kelurahan)
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>{{ $kelurahan->nama }}</td>
          <td>{{ $kelurahan->kec_id }}</td>
          <td>{{ $kelurahan->kelurahan_id }}</td>
          <td>
          <form action="{{ route('kelurahan.destroy', $kelurahan->id) }}" method="POST">
                <a href="{{ route('kelurahan.view', $kelurahan->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('kelurahan.edit', $kelurahan->id) }}" class="btn btn-success">Edit</a>
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