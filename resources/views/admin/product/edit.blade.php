@extends('layouts.admin')
@section('content')
    <div class="container">

        <div class="row">

            <h1>Редактировать товар</h1>

            {!! Form::model($product, ['route' => ['product.update', $product->id], 'method'=> 'PUT']) !!}


            <h2> Название</h2> <input type="text" placeholder="Название" name="title">
            <h2>Описание</h2> <input type="text" placeholder="Описание" name="description">
            <h2>Цена</h2> <input type="text" placeholder="Цена" name="price">
            <button class="btn btn-primary" type="submit">Редактировать</button>

        </div>
    </div>

@stop