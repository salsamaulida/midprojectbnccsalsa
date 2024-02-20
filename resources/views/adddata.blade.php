<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/add.css')}}">

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
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/adddata">Add Data</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <form action="{{route('create')}}" method="POST" class="content">
          @csrf
          <h2>Form Data Karyawan</h2>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input name="name" type="text" class="form-control" placeholder="Masukkan Nama" required>
            @error('name')
              <div class="text-danger">{{$message}}</div>
            @enderror
              </div>
              <div class="mb-3">

            <div class="mb-3">
                <label class="form-label">Umur</label>
                <input name="age" type="number" class="form-control" placeholder="Masukkan Umur" required>
            @error('age')
              <div class="text-danger">{{$message}}</div>
            @enderror
              </div>
              <div class="mb-3">

                <div class="mb-3">
                  <label class="form-label">Alamat</label>
                  <textarea name="address" class="form-control" rows="3" required></textarea>
            @error('address')
              <div class="text-danger">{{$message}}</div>
            @enderror
                </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input name="phoneNumber" type="number" class="form-control" placeholder="Masukkan Nomor Telepon" required>
            @error('phoneNumber')
              <div class="text-danger">{{$message}}</div>
            @enderror
              </div>
              <div class="mb-3">

            <button type="submit" class="btn btn-success">Submit</button>
      </form>
    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>