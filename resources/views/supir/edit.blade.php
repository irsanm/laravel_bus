@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit supir</div>
      <div class="panel-body">
        <form action="{{ route('supir.update',$supir) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan nama anda" value="{{$supir->nama}}">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat anda" value="{{$supir->alamat}}">
                </div>
                <div class="form-group">
                  <label for="">Telepon</label>
                  <input type="text" class="form-control" name="tlp" placeholder="Masukan no telepon" value="{{$supir->tlp}}">
                </div>
                
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();