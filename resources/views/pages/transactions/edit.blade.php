@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Edit Transaksi</strong>
        <small>{{ $items->uuid }}</small>
    </div>
    <div class="card-body card-blok">
        <form action="{{route('transactions.update',$items->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Pemesan</label>
                <input type="text" name="name" value="{{ old('name') ? old('name') : $items->name }}"
                    class="form-control @error('name') is-invalid @enderror">
                @error('name')<div class="text-muted">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input email="text" name="email" value="{{ old('email') ? old('email') : $items->email}}"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')<div class="text-muted">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="number" class="form-control-label">Nomor HP</label>
                <input type="text" name="number" value="{{ old('number') ? old('number') : $items->number}}"
                    class="form-control @error('number') is-invalid @enderror">
                @error('number')<div class="text-muted">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="address" class="form-control-label">Alamat Pemesan</label>
                <input type="text" name="address" value="{{ old('address') ? old('address') : $items->address}}"
                    class="form-control @error('address') is-invalid @enderror">
                @error('address')<div class="text-muted">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block mt-3" type="submit">Update Transaksi</button>
            </div>

        </form>
    </div>
</div>

@endsection
