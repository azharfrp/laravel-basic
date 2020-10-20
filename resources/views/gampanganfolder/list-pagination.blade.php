@extends('layouts.app')
@section('title', 'List Pagination')
@section('content')
<main role="main">
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <strong>List</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No.</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Posisi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lq AS $query)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $query->nama }}</td>
                                <td>{{ $query->umur }}</td>
                                <td>{{ $query->alamat }}</td>
                                <td>{{ $query->posisi }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $lq->links() }}
            </div>
        </div>
    </div>
</main>
@endsection