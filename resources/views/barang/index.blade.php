@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Barang</h2>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th> <!-- Tambahkan kolom No -->
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($barang as $b)
            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Nomor urut -->
                <td>{{ $b->kode }}</td>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->deskripsi }}</td>
                <td>Rp{{ number_format($b->harga_satuan, 0, ',', '.') }}</td>
                <td>{{ $b->jumlah }}</td>
                <td>
                    @if($b->foto)
                        <img src="{{ asset('storage/' . $b->foto) }}" width="80" alt="Foto">
                    @endif
                </td>
                <td>
                    <a href="{{ route('barang.edit', $b) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('barang.destroy', $b) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection