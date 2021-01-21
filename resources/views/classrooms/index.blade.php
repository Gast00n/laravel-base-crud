@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>OUR CLASSROOMS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td class="text-center" width="100px">
                            <a href="{{ route('classrooms.show', $classroom->id) }}" class="btn btn-success">
                                Show
                            </a>
                        </td>
                        <td class="text-center" width="100px">
                            <a href="#" class="btn btn-primary">
                                Edit
                            </a>
                        </td>
                        <td class="text-center" width="100px">
                            <a href="#" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
    </div>
@endsection