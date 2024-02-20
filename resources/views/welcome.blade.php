<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT.ChipiChapa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/view.css')}}">
</head>
<body>
   
    <nav class="navbar navbar-expand-lg bg-dark-subtle">
        <div class="container-fluid">
          <div class="navbar-brand"> <img src="{{asset('pictures/gedung.png')}}" width="50px" alt="">PT.ChipiChapa</div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('viewform')}}">Add Data</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="judul">
        <h3>DATA KARYAWAN</h3>
        <h4>PT.ChipiChapa</h4>
      </div>

      <div class="content">

        <div class="card">
          <div class="card-header">
            Data Karyawan
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
              <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
              </tr>
              
              @foreach ($semuakaryawan as $karyawan)
                    <tr>
                        <td>{{$karyawan->name}}</th>
                        <td>{{$karyawan->age}}</th>
                        <td>{{$karyawan->address}}</td>
                        <td>{{$karyawan->phoneNumber}}</td>
                        <td>
                            <a href="{{route('updateform', ['id' => $karyawan->id])}}" class="btn btn-warning">Update</a>
                            <form method="POST" action="{{route('delete', ['id' => $karyawan->id])}}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">Delete</button>
                              </form>
                        </td>
                      </tr>
                      @endforeach
                  </table>
                </div>
              </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>