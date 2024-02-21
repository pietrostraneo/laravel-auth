@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td><a
                                        href="{{ route('admin.projects.show', ['project' => $project['id']]) }}">{{ $project['name'] }}</a>
                                </td>
                                <td>{{ $project['assignment_date'] }}</td>
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
