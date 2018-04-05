@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create buss</div>
          <div class="panel-body">
            <form action="{{ url('/bus/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Merek</label>
                  <input type="text" class="form-control" name="merek" placeholder="Masukan merek bus">
                </div>
                <div class="form-group">
                  <label for="">Tahun</label>
                  <input type="text" class="form-control" name="tahun" placeholder="Masukan tahun pembuatan">
                </div>
                <div class="form-group">
                  <label for="">Warna</label>
                  <input type="text" class="form-control" name="warna" placeholder="Masukan warna">
                </div>
                <div class="form-group">
                  <label for="">Plat</label>
                  <input type="text" class="form-control" name="plat" placeholder="Masukan no plat">
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