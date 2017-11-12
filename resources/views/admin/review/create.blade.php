@extends('layouts.admin')
@section('review')
    <div class="container">

        <div class="row">

            <h1>Написать отзыв</h1>
            {!!Form::open(['route' => 'review.store'])!!}

            {!! csrf_field() !!}

            <h2> Ваше имя</h2> <input type="text" placeholder="Ваше имя" name="name">
            <h2>Номер телефона</h2> <input type="text" placeholder="Номер телефона" name="phone">
            <h2>Текст отзыва</h2> <input type="text" placeholder="Отзыв" name="text">
            <button class="btn btn-primary" type="submit">отзыв</button>

        </div>
    </div>

@stop