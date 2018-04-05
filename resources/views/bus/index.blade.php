@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/bus/create') }}" class="btn btn-primary btn-sm">Add buss <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Merek</th>
              <th>Tahun</th>
              <th>Warna</th>
              <th>Plat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($bus as $c)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $c->merek}}</td>
              <td>{{ $c->tahun}}</td>
              <td>{{ $c->warna}}</td>
              <td>{{ $c->plat}}</td>
              <td>
                <a href="{{ route('bus.edit', $c) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('bus.destroy',$c) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()