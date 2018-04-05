@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/supir/create') }}" class="btn btn-primary btn-sm">Add supirs <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($supir as $c)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $c->nama}}</td>
              <td>{{ $c->alamat}}</td>
              <td>{{ $c->tlp}}</td>
              <td>
                <a href="{{ route('supir.edit', $c) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('supir.destroy',$c) }}" method="post">
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