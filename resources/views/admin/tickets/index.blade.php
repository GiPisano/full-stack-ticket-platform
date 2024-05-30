@extends('layouts.app')

@section('title', 'tickets')

@section('content')
    <div class="container mt-4">
        <a href="{{ route('home') }}" class="back-button"><i class="fa-solid fa-arrow-rotate-left"></i> Torna alla Home</a>
    </div>
    <section>
        <div class="container my-5">
            <div class="card-container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                    @foreach ($tickets as $ticket)
                        <div class="col">
                            <a href="{{ route('admin.tickets.show', $ticket) }}">
                                <div class="card h-100 ticket-card">
                                    <div class="card-top">
                                        <div class="badge-container">
                                            <p>{{ $ticket->title }}</p>
                                            <p><strong>Categoria:</strong> {{ $ticket->category->name }}</p>
                                            <p><strong>Operatore:</strong> {{ $ticket->operator->first_name }}
                                                {{ $ticket->operator->last_name }}</p>
                                            <p class="text-danger">{{ $ticket->priority->name }}</p>
                                            <p>{{ $ticket->date }}</p>
                                            <p>{{ $ticket->description }}</p>
                                            <p>{{ $ticket->notes }}</p>
                                            {{-- @foreach ($tickets as $ticket)
                                                <div class="badge bg-primary me-1">
                                                    {{ $ticket->name }}
                                                </div>
                                            @endforeach --}}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h2>{{ $ticket->name }}</h2>
                                        <p class="ticket-address">{{ $ticket->address }}</p>

                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>
            {{-- pagination --}}
            <div class="row mt-4">
                <div class="col w-100 text-end">
                    <div class="w-100"> {{ $tickets->links() }}</div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bg-card {
            background-color: #003559;
        }
    </style>
@endsection
