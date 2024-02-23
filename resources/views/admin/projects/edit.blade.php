@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">

                <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="text-center mb-3">
                        <h3>Stai Modificando: {{ $project['name'] }}</h3>
                    </div>

                    <div class="form-group">
                        <label for="name" class=" form-label ">Name:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $project['name'] }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-label ">Description:</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $project['description'] }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="supervisors" class=" form-label ">Supervisors:</label>
                        <input type="text" name="supervisors" class="form-control" id="supervisors"
                            value="{{ $project['supervisors'] }}">
                    </div>
                    <div class="form-group">
                        <label for="framework" class=" form-label ">Framework:</label>
                        <input type="text" name="framework" class="form-control" id="framework"
                            value="{{ $project['framework'] }}">
                    </div>
                    <div class="form-group">
                        <label for="assignment_date" class=" form-label ">Assignment Date:</label>
                        <input type="date" name="assignment_date" class="form-control" id="assignment_date"
                            value="{{ $project['Assignment Date'] }}">
                    </div>

                    <div class="form-group mt-3 text-center">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
