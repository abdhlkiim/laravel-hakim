@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="...">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="..." crossorigin="anonymous"></script>

<style>
    body {
        background-color: #f8f9fa; /* Light gray background color */
        color: #495057; /* Dark gray text color */
    }

    .card {
        background-color: #ffffff; /* White card background color */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff; /* Primary blue color */
        color: #ffffff; /* White text */
        font-size: 24px;
        text-align: center;
        border-bottom: 0; /* Remove the default border */
    }

    .card-body {
        padding: 20px;
    }

    .lead {
        font-size: 18px;
    }

    .btn-primary {
        background-color: #007bff; /* Primary blue color */
        border-color: #007bff;
        width: 100%; /* Button takes full width */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Slightly darker blue on hover */
        border-color: #0056b3;
    }

    .table {
        background-color: #ffffff; /* White table background color */
    }

    /* Center the table within the card */
    .center-table {
        margin: 0 auto;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Project Laravel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="lead">Thank you for logging in to our website. You are now ready to explore and enjoy our content.</p>

                    <hr class="my-4">

                    <p class="lead"><center>Tugas Quiz Pemrograman Berbasis Web Dasar</center></p>

                    <table class="table center-table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">NIM</th>
                                <th scope="col">KELAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Abdul Hakim</td>
                                <td>0702213123</td>
                                <td>SISTEM INFORMASI 3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
