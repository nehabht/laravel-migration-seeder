@extends('layout.app')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-3">

                @foreach ($tours as $tour)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center my-4">{{ $tour->place}}</h5>
                                <p>
                                    <strong>Price: {{ $tour->price }}</strong>
                                </p>
                                <p>
                                    <small>
                                        <strong>Period:</strong> {{ $tour->period}}
                                    </small>
                                </p>
                                <small>
                                    {{ $tour->description }}
                                </small>


                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>





@endsection