@extends('layouts.admin')

@section('content')
    <div class="container" style=" margin-top: -1.4% " class="align-content-center">

        <div class="jumbotron" style=" background-color: aliceblue">
            <table class="table">

                <thead>
                <tr>
                    <td>ID</td>

                    <td>Название товара</td>
                    <td>фото</td>
                    <td>Описание</td>
                    <td>Дата создания</td>
                    <td>Перейти</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody>
                <h1>Товары</h1>
                <div class="row">
                    <div style="margin-top: 20px">
                        <div class="col-md-12">

                            @forelse($products as $product)

                                <h4>{{ $product->title }}</h4>
                                <h4>{{ $product->description }}</h4>
                                <h4>{{ $product->price }}</h4>
                                <h4>{{\Carbon\Carbon::parse($product->created_at)->format('d m Y')}}</h4>

                            @empty
                                <p>Нет товаров</p>
                            @endforelse


                            {{--<a href="{{ route('product.edit', $product->id) }}"--}}
                               {{--class="btn btn-primary">Редактировать</a>--}}


                            {{--{{ Form::open(['method' => 'DELETE', 'route' => 'product.destroy', $product->id]) }}--}}
                            {{--{{ Form::submit('Удалить', ['class' => 'btn btn-danger']) }}--}}
                            {{--{{ Form::close() }}--}}

                        </div>
                    </div>
                </div>
                </tbody>
            </table>

        </div>
    </div>
    </div>
@stop
