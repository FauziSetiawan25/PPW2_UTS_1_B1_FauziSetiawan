@extends('layout')

@section('content')
<div class="container">
    <h2>Data Pemain</h2>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>No punggung</td>
                        <td>Posisi</td>
                        <td>Aksi</td>
                    </tr>
                    @foreach ($pemain as $pemain)
                    <tr>
                        <td>{{ $pemain->id }}</td>
                        <td>{{ $pemain->nama_pemain }}</td>
                        <td>{{ $pemain->no_punggung }}</td>
                        <td>{{ $pemain->posisi }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <form action="" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin mau dihapus?')" 
                                        type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection