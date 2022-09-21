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
            @if(\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Peringatan!</strong> {{\Session::get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-header">
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm mb-2">Tambah Produk</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>
                            <!-- <a href="{{ route('products.show', $item->id) }}" class="text-reset text-decoration-none fw-semibold">Detail</a> | -->
                            <a href="{{ route('products.edit', $item->id) }}" class="text-reset text-decoration-none fw-semibold">Edit</a> |
                            <form action="{{ route('products.destroy', $item->id) }}" method="POST" id="formDelete" class="d-inline" style="cursor: pointer;">
                                @csrf
                                @method('DELETE')
                                <a onclick="document.getElementById('formDelete').submit()" class="text-reset text-decoration-none fw-semibold">Hapus</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>