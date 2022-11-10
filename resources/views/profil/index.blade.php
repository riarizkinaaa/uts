@extends('layout.template')
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">WA</th>
      <th scope="col">kEBUTUHAN</th>
      <th scope="col">Dskripsi</th>
      <th scope="col">foto</th>
      <th scope="col">kategori</th>
      <th scope="col">progres</th>
      <th scope="col">PIC</th>
    </tr>
  </thead>
  <tbody>
    @@php
        $no=1;
    @endphp
    @foreach ($profil as $key=>$value)
    <tr>
      <th scope="row">{{ $value->$no++ }}</th>
      <td>{{ $value->nama }}</td>
      <td>{{ $value->wa }}</td>
      <td>{{ $value->kebutuhan }}</td>
      <td>{{ $value->deskripsi }}</td>
      <td>{{ $value->foto }}</td>
      <td>{{ $value->urgensi }}</td>
      <td>{{ $value->kategori }}</td>
      <td>{{ $value->progres }}</td>
      <td>{{ $value->PIC }}</td>
    </tr>
  </tbody>
</table>    

@endsection