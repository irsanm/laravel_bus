@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit bus</div>
      <div class="panel-body">
        <form action="{{ route('bus.update',$bus) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
                  <label for="">Merek</label>
                  <input type="text" class="form-control" name="merek" placeholder="Masukan merek bus" value="{{$bus->merek}}">
                </div>
                <div class="form-group">
                  <label for="">Tahun</label>
                  <input type="text" class="form-control" name="tahun" placeholder="Masukan tahun pembuatan" value="{{$bus->tahun}}">
                </div>
                <div class="form-group">
                  <label for="">Warna</label>
                  <input type="text" class="form-control" name="warna" placeholder="Masukan warna" value="{{$bus->warna}}">
                </div>
                <div class="form-group">
                  <label for="">Plat</label>
                  <input type="text" class="form-control" name="plat" placeholder="Masukan no plat" value="{{$bus->plat}}">
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