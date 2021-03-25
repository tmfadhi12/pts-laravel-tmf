@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 bg-white">
        <div class="card">
            <div class="card-header bg-primary">
                <a href="{{ url('/karyawan') }}">
                    <button class="btn btn-success float-left">Back</button>
                </a>
            </div>
            <div class="card-body">
                <form action="/karyawan/import" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="uploadData">Import Data</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary float-right" value="Save Data">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection