@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Masukkan Data Murid</h3>
    </div>
 
  <form role="form" method="post" action="/karyawan/savedata">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="nama_karyawan">Nama Karyawan</label>
          <input type="text" class="form-control" id="nama_karyawan" placeholder="Masukkan Nama karyawan"
          name="nama_karyawan">
        </div>
        <div class="form-group">
          <label for="hadir_masuk">Hadir Masuk</label>
          <input type="number" min="0" max="100" class="form-control" id="hadir_masuk" placeholder="Masukkan Nilai Hadir Masuk" name="hadir_masuk">
        </div>
        <div class="form-group">
          <label for="izin_masuk">Izin Masuk</label>
          <input type="number" min="0" max="100" class="form-control" id="izin_masuk" placeholder="Masukkan Nilai Izin Masuk"
          name="izin_masuk">
        </div>
        <div class="form-group">
          <label for="bolos_masuk">Bolos Masuk</label>
          <input type="number" min="0" max="100" class="form-control" id="bolos_masuk" placeholder="Masukkan Nilai Bolos Masuk"
          name="bolos_masuk">
        </div>
        <div class="form-group">
          <label for="telat_masuk">Telat Masuk</label>
          <input type="number" min="0" max="100" class="form-control" id="telat_masuk" placeholder="Masukkan Nilai Nilai Telat Masuk"
          name="telat_masuk">
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
@endsection