@extends('layouts.admin')
@section('content')
<div class="container">

    <div class="row">

        Создать товар
    <form action="{{ route('product.store') }}" method="post">

        {{ csrf_field()  }}

        Название <input type="text" placeholder="Название" name="title">
        Описание <input type="text" placeholder="Описание" name="description">
        Цена <input type="text" placeholder="Цена" name="price">
        <button type="submit">Создать</button>

    </form>



    </div>

</div>

@stop