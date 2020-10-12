@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Foto Barang</strong>
    </div>
    <div class="card-body card-blok">
        <form action="{{route('product-galleries.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Barang</label>
                <select name="products_id" class="form-control @error('type') is-invalid @enderror">
                @foreach ($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>

                @endforeach
            </select>
                @error('products_id')<div class="text-muted">{{ $message }}</div>@enderror
            </div>



            <div class="form-group">
                <label for="photo" class="form-control-label">Foto Barang</label>
                <input type="file" name="photo" value="{{old('photo')}}" accept="image/*"
                    class="form-control @error('photo') is-invalid @enderror">
                @error('photo')<div class="text-muted">{{ $message }}</div>@enderror
            </div>



            <div class="form-group">
                <label for="price" class="form-control-label">Harga Barang</label>
                <input type="number" name="price" value="{{old('price')}}"
                    class="form-control @error('price') is-invalid @enderror">
                @error('price')<div class="text-muted">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="is_default" class="form-control-label">Jadikan Default</label>
                <br>
                <label>
                    <input type="radio" name="is_default" value="1"
                        class="form-control @error('is_default') is-invalid @enderror"> Ya
                </label>

                <label class="ml-3">
                    <input type="radio" name="is_default" value="0" style="width: 18px;"
                        class="form-control ml-2 @error('is_default') is-invalid @enderror"> Tidak
                </label>

                @error('is_default')<div class="text-muted">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block mt-3" type="submit">Tambah Foto Barang</button>
            </div>

        </form>
    </div>
</div>

@endsection
