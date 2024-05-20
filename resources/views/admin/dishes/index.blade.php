@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3 fw-bold">My tickets:</h1>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $tickets as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>
@endsection
