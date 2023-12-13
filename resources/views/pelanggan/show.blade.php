@extends('layouts.app')

@section('content')
<div class="mt-3 container">
    <h1 class="display-4">DETAIL DATA PELANGGAN</h1>
    <hr>

    <table class="table table-bordered table-hover mt-3 shadow-sm">
        <tbody>
            <tr class="table-primary">
                <th class="bg-primary text-white">NO. PELANGGAN</th>
                <td>{{ $pelanggan->pel_no }}</td>
            </tr>
            <tr class="table-danger">
                <th class="bg-primary text-white">NAMA PELANGGAN</th>
                <td>{{ $pelanggan->pel_nama }}</td>
            </tr>
            <tr class="table-primary">
                <th class="bg-primary text-white">GOLONGAN PELANGGAN</th>
                <td>{{ $pelanggan->golongan->gol_nama }}</td>
            </tr>
            <tr class="table-danger">
                <th class="bg-primary text-white">ALAMAT PELANGGAN</th>
                <td>{{ $pelanggan->pel_alamat }}</td>
            </tr>
            <tr class="table-primary">
                <th class="bg-primary text-white">NO. HP PELANGGAN</th>
                <td>{{ $pelanggan->pel_hp }}</td>
            </tr>
            <tr class="table-danger">
                <th class="bg-primary text-white">NO. KTP PELANGGAN</th>
                <td>{{ $pelanggan->pel_ktp }}</td>
            </tr>
            <tr class="table-primary">
                <th class="bg-primary text-white">NO. SERI PLN PELANGGAN</th>
                <td>{{ $pelanggan->pel_seri }}</td>
            </tr>
            <tr class="table-danger">
                <th class="bg-primary text-white">NO. METERAN PELANGGAN</th>
                <td>{{ $pelanggan->pel_meteran }}</td>
            </tr>
            <tr class="table-primary">
                <th class="bg-primary text-white">STATUS PELANGGAN</th>
                <td>
                    @if ($pelanggan->pel_aktif === 'Y')
                        <span class="badge bg-success">AKTIF</span>
                    @else
                        <span class="badge bg-danger">NONAKTIF</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('home') }}" class="btn btn-secondary mt-3">
        <i class="fas fa-arrow-left"></i> KEMBALI
    </a>
</div>
@endsection
