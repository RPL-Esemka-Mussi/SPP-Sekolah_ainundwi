@extends('main.bootstrap')

@section('content')
<div class="text-center py-5 h-100 bg-dark text-white">
    <h3>Kelola Spp</h3>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Edit Spp</h4>
        </div>
        <div>
            <a href="{{ url('spp') }}" class="btn btn-warning">Kembali</a>
            </div>
    </div>
    <hr>
    <form action="{{ url('spp/update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $spp->id }}">
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" value="{{ $spp->tahun}}" required>
        </div>

        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="number" name="nominal" id="nominal" class="form-control" value="{{ $spp->nominal}}" required>
        </div>

        <div class="mt-3 text-end">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>

    </form>
</div>
@endsection