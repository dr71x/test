<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card card-body" style="margin-top: 50px">
            <form action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Nama Mahasiwa</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nama" class="form-control" placeholder="Ketikkan Nama Anda Disini">
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Prodi Mahasiswa</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="prodi" class="form-control" placeholder="Ketikkan Alamat Anda">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Alamat</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="alamat" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="btn" type="submit" style="background-color: pink;">Simpan</button>
                </div>
            </form>
        </div>

        <div class="card card-body" style="margin-top: 50px">
            <table class="table table-striped">
               <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi Mahasiswa</th>
                    <th>Alamat Mahasiswa</th>
                    <th>Aksi</th>
                </tr>
               </thead>
               <tbody>
                <tr>
                    @foreach ($mahasiswa as $item)
                        <tr>
                            <td>
                                {{ $item->nama }}
                            </td>
                            <td>
                                {{ $item->prodi }}
                            </td>
                            <td>
                                {{ $item->alamat }}
                            </td>
                            <td>
                                <a href="{{ route('hapus',['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tr>
               </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>