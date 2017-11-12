@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Товары</h1>

            @forelse($products as $product)
                <p>{{ $product->title }}</p>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
                <p>{{\Carbon\Carbon::parse($product->created_at)->format('d m Y')}}</p>
            @empty

                <p>Нет товаров</p>

            @endforelse
            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Редактировать</a>
        </div>
    </div>


@stop