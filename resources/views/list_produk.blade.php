<div><h1>Input Produk</h1></div>
<form method="POST" action="{{ route('produk.simpan') }}">
    @csrf
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3"><input type="text" class="form-control" id="nama" name="nama"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3"><textarea class="form-control" id="deskripsi" name="deskripsi"></textarea></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><input type="number" class="form-control" id="harga" name="harga"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<div class="ml-10 mt-20">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Harga Produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->harga }}</td>
                <td>
                    <form action="{{ route('produk.delete', $item->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete {{ $item->nama }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
