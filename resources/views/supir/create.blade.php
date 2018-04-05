@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create Supir</div>
          <div class="panel-body">
            <form action="{{ url('/supir/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan nama anda">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat anda">
                </div>
                <div class="form-group">
                  <label for="">Telepon</label>
                  <input type="text" class="form-control" name="tlp" placeholder="Masukan no telepon">
                </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()