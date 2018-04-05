@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create Supir</div>
          <div class="panel-body">
            <form action="{{ url('/mengendarai/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Bus</label>
                  <select name="bus_id" class="form-control">
                    <?php foreach($buses as $b):?>
                    <option value="<?=$b->id?>"><?=$b->merek?></option>
                  <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Supir</label>
                  <select name="supir_id" class="form-control">
                    <?php foreach($supirs as $s):?>
                    <option value="<?=$s->id?>"><?=$s->nama?></option>
                  <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tempat</label>
                  <input type="text" class="form-control" name="tempat" placeholder="Masukan Tempat Ngetem">
                </div>
                <div class="form-group">
                  <label for="">Tujuan</label>
                  <input type="text" class="form-control" name="tujuan" placeholder="Masukan Tujuan">
                </div>
                <div class="form-group">
                  <label for="">Harga</label>
                  <input type="text" class="form-control" name="harga" placeholder="Masukan Harga">
                </div>
                <div class="form-group">
                  <label for="">Waktu</label>
                  <input type="text" class="form-control" name="waktu" placeholder="Masukan Waktu Pemberangkatan">
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