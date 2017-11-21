@extends('admin.admin-index')
@section('title','добавить продукты')

@section('content')
    {!! Form::open(['route' => 'dmin-lte.store ']) !!}
    <div class="col-md-9">

        {{ Form::label('title', 'Название продуктов') }}
        {{Form::text('title',null, ['class' => 'form-control'])}}
    </div>

    <div class="col-md-9">
        {{ Form::label('description', 'Описание') }}
        <input type="text" class="form-control" name="description" value="<?= $product['description'] ?>" required>
    </div>
    <div class="form-group">
        <label for="price">Цена</label>
        <input type="text" class="form-control" name="price" value="<?= $product['price'] ?>" required>
    </div>
    {!! Form::close() !!}
@stop