@extends('layouts.app')

@section('title', 'Beranda | PEDALGO Rental Sepeda')

@section('content')

<main class="hero-section">

    <div class="hero-content">

        <p class="hero-label">
            RENTAL SEPEDA PILIHAN
        </p>

        <h1 class="hero-title">
            Temukan sepeda.<br>
            Mulai petualangan.
        </h1>

        <p class="hero-description">
            Dari jalanan kota hingga jalur pegunungan,
            pilih sepeda yang cocok untuk perjalananmu.
            Nikmati pengalaman bersepeda yang nyaman
            bersama PEDALGO.
        </p>

        <div class="hero-actions">

            <a href="{{ route('bikes.index') }}"
               class="btn btn-success btn-lg hero-button">
                Jelajahi Sepeda
                <span aria-hidden="true">&rarr;</span>
            </a>

            <span class="hero-note">
                Pilihan fleksibel &middot; Harga transparan
            </span>

        </div>

    </div>
    </div>

</main>

@endsection
