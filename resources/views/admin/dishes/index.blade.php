@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-3 fw-bold">My tickets:</h1>

    <div class="d-flex justify-content-end">
        <a href="{{ route('dashboard.tickets.create') }}" class="btn btn-primary">&plus;</a>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">categoria</th>
                {{-- <th scope="col">Operator</th> --}}
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tickets as $item)
            <tr>
                <th>{{ $item->id }}</th>
                <td><a href="{{ route('dashboard.tickets.show', ['ticket' => $item['id']]) }}" class="d-inline-block text-truncate link-opacity-50-hover" style="max-width: 300px;">{{ $item->title }}</a>
                </td>
                <td>
                    <span class="d-inline-block text-truncate" style="max-width: 300px;">{{ $item->description }}</span>
                </td>
                <td class="text-secondary-emphasis">{{$item->category->label}}</td>
                {{-- <td>{{$item->operators->name}}</td> --}}
                {{-- <td>operator</td> --}}
                <td>

                    <span class="fw-bold badge rounded-pill @if ($item->status == 'ASSEGNATO') bg-success @elseif($item->status == 'IN LAVORAZIONE')
                        bg-warning text-dark @elseif($item->status == 'CHIUSO')
                        bg-danger @endif">
                        {{ $item->status }}
                    </span>
                </td>
            </tr>
            @endforeach



        </tbody>
    </table>
</div>
@endsection
