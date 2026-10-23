@extends('layouts.app')

@section('title', 'Detail Sepeda | PEDALGO')

@section('content')
<main class="container py-5">
    <a href="{{ route('bikes.index') }}" class="btn btn-outline-success mb-4">
        &larr; Kembali ke Daftar Sepeda
    </a>

    <div class="row align-items-center g-4">
        <div class="col-md-6">
            <img
                src="{{ asset('assets/images/' . $bike->image) }}"
                alt="Sepeda {{ $bike->brand }}"
                class="img-fluid rounded shadow-sm"
            >
        </div>

        <div class="col-md-6">
            <p class="text-success fw-bold">DETAIL SEPEDA</p>

            <h1>{{ $bike->brand }}</h1>
            <h4>{{ $bike->type }}</h4>

            <p>
                Harga sewa:
                <strong>
                    Rp{{ number_format($bike->rent_price, 0, ',', '.') }}
                </strong>
                / hari
            </p>

            <p>Jumlah gear: {{ $bike->gear_count }}</p>

            <p>
                Status:
                @if ($bike->available)
                    <span class="badge bg-success">Tersedia</span>
                @else
                    <span class="badge bg-danger">Tidak tersedia</span>
                @endif
            </p>
        </div>
    </div>
</main>
@endsection
