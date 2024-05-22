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
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Operator</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tickets as $item)
            <tr>
                <th>{{ $item->id }}</th>
                <td><a href="{{ route('dashboard.tickets.show', ['ticket' => $item['id']]) }}" class="text-truncate">{{ $item->title }}</a>
                </td>
                <td>
                    <span class="d-inline-block text-truncate" style="max-width: 400px;">{{ $item->description }}</span>
                </td>
                <!-- <td>{{$item->category}}</td> -->
                <td>Categoria</td>
                <td>Operatore</td>
                <td>

                    <span class="fw-bold badge rounded-pill @if ($item->status == 'ASSEGNATO') bg-success @elseif($item->status == 'IN LAVORAZIONE')
                        bg-warning @elseif($item->status == 'CHIUSO')
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