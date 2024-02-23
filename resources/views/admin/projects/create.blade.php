@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">

                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf

                    <div class="text-center mb-3">
                        <h3>Add new Project:</h3>
                    </div>

                    <div class="form-group">
                        <label for="name" class=" form-label ">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-label ">Description:</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="supervisors" class=" form-label ">Supervisors:</label>
                        <input type="text" name="supervisors" class="form-control" id="supervisors"
                            value="{{ old('supervisors') }}">
                    </div>
                    <div class="form-group">
                        <label for="framework" class=" form-label ">Framework:</label>
                        <input type="text" name="framework" class="form-control" id="framework"
                            value="{{ old('framework') }}">
                    </div>
                    <div class="form-group">
                        <label for="assignment_date" class=" form-label ">Assignment Date:</label>
                        <input type="date" name="assignment_date" class="form-control" id="assignment_date"
                            value="{{ old('assignment_date') }}">
                    </div>

                    <div class="form-group mt-3 text-center">
                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
