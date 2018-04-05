@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit mengendarai</div>
      <div class="panel-body">
        <form action="{{ route('mengendarai.update',$mengendarai) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
                  <label for="">Bus</label>
                  <input type="text" class="form-control" name="bus_id">
                </div>
                <div class="form-group">
                  <label for="">Supir</label>
                  <input type="text" class="form-control" name="supir_id">
                </div>
                <div class="form-group">
                  <label for="">Tempat</label>
                  <input type="text" class="form-control" name="tempat">
                </div>
                <div class="form-group">
                  <label for="">Tujuan</label>
                  <input type="text" class="form-control" name="tujuan">
                </div>
                <div class="form-group">
                  <label for="">Harga</label>
                  <input type="text" class="form-control" name="harga">
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