@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            Товары

            @forelse($products as $product)
                <p>{{ $product->title }}</p>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
                <p>{{\Carbon\Carbon::parse($product->created_at)->format('d m Y')}}</p>
            @empty

                <p>Нет товаров</p>

            @endforelse

        </div>
    </div>
    <a href="{{URL::to('admin/'. $product->id) . '/edit'}}" class="btn btn-primary">Редактировать</a>


@stop