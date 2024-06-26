@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-2 fw-bold">Create a new ticket:</h1>

        <form action="{{ route('dashboard.tickets.store') }}" method="POST">

            @csrf

            <div class="my-3">
                <label for="title" class="form-label">Insert The Title</label>
                <input type="text" class="form-control" id="title"
                    aria-describedby="title" name="title" value='{{ old('title') }}' required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Insert The Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Insert The Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="" disabled class="
                " selected>Select A Status</option>
                    <option value="ASSEGNATO" class="">ASSEGNATO</option>
                    <option value="IN LAVORAZIONE" class="">IN LAVORAZIONE</option>
                    <option value="CHIUSO" class="">CHIUSO</option>
                </select>
            </div>

            {{-- lista operatori disponibili --}}
            <div class="mb-3">
                <label for="operators">Operatori Disponibili</label>
                <div class="form-check">
                    @foreach($available_operators as $operator)
                        <div>
                            <input class="form-check-input" type="checkbox" name="operators[]" id="operator-{{ $operator->id }}" value="{{ $operator->id }}">
                            <label class="form-check-label" for="operator-{{ $operator->id }}">
                                {{ $operator->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary d-block ms-auto">ADD</button>
        </form>

    </div>
@endsection
