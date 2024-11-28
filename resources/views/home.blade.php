@extends('layouts.mainlayout')

@section('content')
<div>
<h2> Selamat datang {{ $nama }}, Anda adalah {{ $role }}</h2>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Buah</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($buah as $data)
      <tr>
        <td>{{ $loop->index + 1 }}</td> <!-- Nomor urut dimulai dari 1 -->
        <td>{{ $data }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection




