@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">

                <div class="d-flex justify-content-end mb-5">
                    <a href="{{ route('admin.projects.create') }}"><button class="btn btn-success">Add Project</button></a>
                </div>

                <table class="table justify-content-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td><a
                                        href="{{ route('admin.projects.show', ['project' => $project['id']]) }}">{{ $project['name'] }}</a>
                                </td>
                                <td>{{ $project['assignment_date'] }}</td>
                                <td>
                                    <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-auto">
                <a href="{{ route('admin.dashboard') }}"><button class="btn btn-primary">Torna alla
                        dashboard</button></a>
            </div>
        </div>
    </div>
@endsection
