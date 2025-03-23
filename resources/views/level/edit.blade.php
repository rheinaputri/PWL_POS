@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>

        <div class="card-body">
            <form action="{{ url('/level/' . $level->level_id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Kode Level</label>
                    <input type="text" name="level_kode" class="form-control" value="{{ $level->level_kode }}" required>
                </div>

                <div class="form-group">
                    <label>Nama Level</label>
                    <input type="text" name="level_nama" class="form-control" value="{{ $level->level_nama }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/level') }}" class="btn btn-default">Batal</a>
            </form>
        </div>
    </div>
@endsection
