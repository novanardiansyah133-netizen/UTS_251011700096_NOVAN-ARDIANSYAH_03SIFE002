
@extends('layouts.app')

@section('title', 'Daftar Sepeda | PEDALGO')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Daftar Sepeda</h1>

    <div class="row g-4">
        @forelse ($bikes as $bike)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img
                    src="{{ asset('assets/images/' . $bike->image) }}"
                    class="bike-image card-img-top"
                    alt="Sepeda {{ $bike->brand }}"
                     onerror="this.onerror=null; this.src='{{ asset('assets/images/sepeda-default.jpg') }}';"
                    >

                    <div class="card-body">
                        <h5>{{ $bike->brand }}</h5>
                        <p>{{ $bike->type }}</p>

                        <p>
                            Rp{{ number_format($bike->rent_price, 0, ',', '.') }}
                            / hari
                        </p>

                        <span class="badge {{ $bike->available ? 'bg-success' : 'bg-secondary' }}">
                            {{ $bike->available ? 'Tersedia' : 'Tidak Tersedia' }}
                        </span>

                        <a
                            href="{{ route('bikes.show', $bike->id) }}"
                            class="btn btn-success w-100 mt-3"
                        >
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>Belum ada data sepeda. Silakan periksa database dan seeder.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
