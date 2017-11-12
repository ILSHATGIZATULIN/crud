@extends('layouts.admin')

@section('review')
    <div class="container">
        <div class="row">
            <h2>Отзывы</h2>

            @forelse($reviews as $review)
                <p>{{ $review->name }}</p>
                <p>{{ $review->phone }}</p>
                <p>{{ $review->text }}</p>
                <p>{{\Carbon\Carbon::parse($review->created_at)->format('d m Y')}}</p>
            @empty

                <p>Нет отзывов</p>

            @endforelse

        </div>
    </div>

@stop