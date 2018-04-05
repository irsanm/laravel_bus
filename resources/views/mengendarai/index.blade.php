@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/mengendarai/create') }}" class="btn btn-primary btn-sm">Add mengendarai<i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Bus</th>
              <th>Supir</th>
              <th>Tempat</th>
              <th>Tujuan</th>
              <th>Harga</th>
              <th>waktu</th>
            </tr>
          </thead>
          <tbody>
            @foreach($mengendarais as $m)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $m->merek}}</td>
              <td>{{ $m->nama}}</td>
              <td>{{ $m->tempat}}</td>
              <td>{{ $m->tujuan}}</td>
              <td>{{ $m->harga}}</td>
              <td><?=$m->waktu?></td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()