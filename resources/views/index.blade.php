@extends('layout.app')

@section('content')
    <form class="d-flex" action="{{ route('getProductsByDate', $date) }}" method="POST">
        @csrf
        <div class="col-2 me-2">
            <input class="form-control" type="date" value="{{ $date }}" aria-label="Выберите дату"/>
        </div>
        <button class="btn btn-primary col-1" type="submit">Поиск</button>
    </form>

    <div class=" py-3">
            <div class="col-12 col-md-6 bg-white rounded-3 p-4">
                <div class="row border-bottom">
                    <div class="col-2">id</div>
                    <div class="col-3">name</div>
                    <div class="col-3">amount</div>
                    <div class="col-4">current price</div>
                </div>
                @foreach($products as $product)
                    <div class="row">
                        <div class="col-2">
                            {{ $product->id }}
                        </div>
                        <div class="col-3">
                            {{ $product->name }}
                        </div>
                        <div class="col-3">
                            {{ $product->amount }}
                        </div>
                        <div class="col-4">
                            {{ $product->current_price }}
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

@endsection
