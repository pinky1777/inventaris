@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detail Barang</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
            <p><strong>Kode Barang:</strong> {{ $barang->kode_barang }}</p>
            <p><strong>Kategori:</strong> {{ $barang->kategori->nama_kategori ?? '-' }}</p>
            <p><strong>Spesifikasi:</strong> {{ $barang->spesifikasi ?? '-' }}</p>
            <p><strong>Jumlah:</strong> {{ $barang->jumlah }}</p>
            <p><strong>Kondisi:</strong> {{ ucfirst($barang->kondisi) }}</p>
            <p><strong>Lokasi:</strong> {{ $barang->lokasi ?? '-' }}</p>
            <p><strong>Kepemilikan (Divisi):</strong> {{ $barang->divisi->nama_divisi ?? '-' }}</p>
            <p><strong>Tanggal Masuk:</strong> {{ $barang->tanggal_masuk }}</p>
        </div>
    </div>

    <a href="{{ route('barang.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
