@extends('layouts.admin')
@section('content')
    <div class="container">

        <div class="row">

            <h1>Создать товар</h1>
            {!!Form::open(['route' => 'product.store'])!!}
            {!! Form::model($product, ['route' => ['product.update', $product]]) !!}


            <h2> Название</h2> <input type="text" placeholder="Название" name="title">
            <h2>Описание</h2> <input type="text" placeholder="Описание" name="description">
            <h2>Цена</h2> <input type="text" placeholder="Цена" name="price">
            <button class="btn btn-primary" type="submit">Создать</button>

        </div>
    </div>

@stop