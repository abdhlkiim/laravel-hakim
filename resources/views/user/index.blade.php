@extends('layouts.app')

@section('content')
<div class="mt-3 container">
    <h1 class="display-4">DATA USER</h1>
    <hr>
    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">
        <i class="fas fa-arrow-left"></i> KEMBALI</a>    
    <div class="table-responsive">
        <table class="table my-3 table-bordered table-hover bgindi shadow" id="dtb">
            <thead class="bg-primary text-white">
                <tr>
                    <th class="text-center bg-primary text-white">NO</th>
                    <th class="bg-primary text-white">NAMA</th>
                    <th class="bg-primary text-white">EMAIL</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rows as $row)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data user.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
