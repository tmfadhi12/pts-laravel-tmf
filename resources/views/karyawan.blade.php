@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Karyawan</h3>
                <br>
                <a href="karyawan/addData/" class="btn btn-sm btn-info">Add Data</a>
                <a href="karyawan/export/xlsx" class="btn btn-sm btn-success">Export XLSX</a>
                <a href="karyawan/export/csv" class="btn btn-sm btn-info">Export CSV</a>
                <a href="karyawan/export/pdf" class="btn btn-sm btn-danger">Export PDF</a>
                <a href="karyawan/import/file" class="btn btn-sm btn-primary">Import</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Hadir</th>
                        <th>Izin</th>
                        <th>Bolos</th>
                        <th>Telat</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                        <tr>
                            <td>{{ $datas->namaKaryawan }}</td>
                            <td>{{ $datas->hadirMasuk }}</td>
                            <td>{{ $datas->izinMasuk }}</td>
                            <td>{{ $datas->bolosMasuk }}</td>
                            <td>{{ $datas->telatMasuk }}</td>
                            <td>
                                @if ($datas->bolosMasuk < 3 && $datas->telatMasuk < 3)
                                    Karyawan Terbaik
                                @elseif($datas->bolosMasuk > 7 && $datas->telatMasuk > 7 || $datas->hadirMasuk < 60 )
                                    Karyawan Terburuk
                                @else
                                -
                                @endif
                            </td>
                            <td>
                            <form action="/karyawan/destroy/{{$datas->id}}" method="POST">
   
                            <a href="/karyawan/edit/{{$datas->id}}" class="btn btn-sm btn-primary">Edit</a> 

                                @csrf
                                @method('POST')

                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection