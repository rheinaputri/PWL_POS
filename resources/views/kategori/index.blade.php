@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>

            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('kategori/create') }}">Tambah</a>
            </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="table_kategori">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    @endsection

    @push('js')
        <script>
            $(document).ready(function() {
                $('#table_kategori').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('kategori.list') }}",
                    columns: [{
                            data: "kategori_id",
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: "kategori_kode",
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: "kategori_nama",
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: "aksi",
                            orderable: false,
                            searchable: false
                        }
                    ]
                });
            });
        </script>
    @endpush
