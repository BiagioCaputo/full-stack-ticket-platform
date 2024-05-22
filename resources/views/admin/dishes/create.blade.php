@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-2 fw-bold">Create a new ticket:</h1>

        <form action="{{ route('dashboard.tickets.store') }}" method="POST">

            @csrf

            <div class="my-3">
                <label for="title" class="form-label">Insert The Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="title" name="title"
                    value='{{ old('title') }}' required>
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

            <div class="mb-3">
                <label for="category" class="form-label">Insert The Category</label>
                <select name="category_id" id="category" class="form-select" required>
                    <option value="" disabled class="
                " selected>Select A Status</option>

                @foreach ( $categories as $item)
                    <option value="{{$item->id}}">{{$item->label}}</option>
                @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary d-block ms-auto">ADD</button>
        </form>

    </div>
@endsection
