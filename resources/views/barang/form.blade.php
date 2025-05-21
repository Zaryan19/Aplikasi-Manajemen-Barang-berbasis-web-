@php
    $isEdit = isset($barang);
@endphp
<form method="POST" action="{{ $isEdit ? route('barang.update', $barang) : route('barang.store') }}" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label>Kode</label>
        <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode', $barang->kode ?? '') }}" required>
        @error('kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" value="{{ old('nama_barang', $barang->nama_barang ?? '') }}" required>
        @error('nama_barang')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $barang->deskripsi ?? '') }}</textarea>
        @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label>Harga Satuan</label>
        <input type="number" name="harga_satuan" class="form-control @error('harga_satuan') is-invalid @enderror" value="{{ old('harga_satuan', $barang->harga_satuan ?? '') }}" required>
        @error('harga_satuan')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah', $barang->jumlah ?? '') }}" required>
        @error('jumlah')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" {{ $isEdit ? '' : 'required' }}>
        @if($isEdit && $barang->foto)
            <img src="{{ asset('storage/'.$barang->foto) }}" width="80" class="mt-2">
        @endif
        @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button class="btn btn-success">{{ $isEdit ? 'Update' : 'Simpan' }}</button>
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
</form>