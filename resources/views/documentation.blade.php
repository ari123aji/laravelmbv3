@extends('template.main')

@section('container')
@if($orders->count())
<div class="card mb-3">
    <div style="max-height: 720px; overflow:hidden;">
        <center><video width="640" height="480" controls>
                <source src="{{ asset('storage/'.$orders[0]->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video></center>
    </div>
    <div class="card-body text-center">
        <h3 class="card-title"><a href="" class="text-decoration-none text-dark">{{ $orders[0]->judul_lagu }}</a></h3>
        <p>
            <small> Dipesan oleh : {{ $orders[0]->author->unit_mb }}</a>
                {{ $orders[0]->created_at->diffForHumans() }}
            </small>
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($orders->skip(1) as $order)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div style="max-height: 720px; overflow:hidden;">
                    <center><video width="640" height="480" controls>
                            <source src="{{ asset('storage/'.$order->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </center>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $order->judul_lagu }}</h5>
                    <p>
                        <small> Dipesan oleh : {{ $order->author->unit_mb }}</a>
                            {{ $order->created_at->diffForHumans() }}
                        </small>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">Belum ada pesanan</p>
@endif

<div class="d-flex justify-content-center">
    {{ $orders->links() }}
</div>
@endsection