@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3 fw-bold">{{ $ticket->title }}</h1>

        <span
            class="fw-bold badge rounded-pill mb-3 @if ($ticket->status == 'ASSEGNATO') bg-success @elseif($ticket->status == 'IN LAVORAZIONE')
                        bg-warning @elseif($ticket->status == 'CHIUSO')
                        bg-danger @endif">
            {{ $ticket->status }}
        </span>

        <p>{{ $ticket->description }}</p>

    </div>
@endsection
