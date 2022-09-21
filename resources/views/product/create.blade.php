<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container" style="margin-top: 10rem;">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-header mb-2">
                Tambah Produk
            </div>
            <form action="{{ route('products.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama produk">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga produk">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <div class="input-group mb-3">
                            <textarea class="form-control" placeholder="Keterangan produk" name="keterangan" id="keterangan"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah produk">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
        </div>

    </div>

</body>

</html>