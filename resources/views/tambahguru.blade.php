<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Form Tambah Guru</h1>
        <form action="/inputguru" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Guru</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kodeguru">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama Guru</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="namaguru">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mapel</label>
              <input type="text" class="form-control" id="exampleInputPassword2" name="mapel">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>