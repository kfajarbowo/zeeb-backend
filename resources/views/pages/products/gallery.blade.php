@extends('layouts.admin')

@section('content')
<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Foto Barang <small class="ml-3">"{{$product->name}}"</small></h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Barang</th>
                                    <th>Foto</th>
                                    <th>Default</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->product->name}}</td>
                                    <td><img src="{{url($item->photo)}}" alt=""></td>
                                    <td>{{$item->is_default ? 'Ya' : 'Tidak'}}</td>
                                    <td>
                                        {{-- <a href="{{route('product.gallery',$item->id)}}#"
                                        class="btn btn-info btn-sm">
                                        <i class="fa fa-picture-o"></i>
                                        </a> --}}
                                        {{-- <a href="{{route('products.edit',$item->id)}}" class="btn btn-info btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        </a> --}}
                                        <form action="{{route('product-galleries.destroy',$item->id)}}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                        Data tidak tersedia
                                    </td>
                                </tr>

                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
