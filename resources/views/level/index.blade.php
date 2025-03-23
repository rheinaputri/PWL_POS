
@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>

            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create') }}">Tambah</a>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table_level">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Level</th>
                        <th>Nama Level</th>
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
        $('#table_level').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('level.list') }}",
            columns: [
                { data: "level_id", orderable: true, searchable: true },
                { data: "level_kode", orderable: true, searchable: true },
                { data: "level_nama", orderable: true, searchable: true },
                { data: "aksi", orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush
