@extends('layouts.app')
@section('title', 'Sepeda tidak ditemukan')
@section('content')
<div class="container py-5 text-center"><h1 class="display-5 fw-bold">Sepeda tidak ditemukan</h1><p class="text-secondary">Data sepeda yang dicari tidak tersedia.</p><a href="{{ route('bikes.index') }}" class="btn btn-pedal">Kembali ke daftar</a></div>
@endsection
