@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="col-12">
            <form action="{{ route('admin.project.store') }}" method="POST" id="creation_form">
                @method("POST")
                @csrf

                <div class="input-group-m container mb-5 w-50">
                    <label for="name"><strong>Name</strong></label>
                    <input type="text" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Project Name" id="name" name="name" value="{{ old('name') }}">

                    <label for="type_id"><strong>Type</strong></label>

                    <select class="form-select form-select-sm mb-2" aria-label="Type" id="type_id" name="type_id">
                        @foreach ($types as $type)

                        <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>

                    <label for="technology_id"><strong>Technology used</strong></label>
                    <div class="btn-group flex-wrap" role="group" aria-label="Basic checkbox toggle button group">
                        @foreach ($technologies as $technology)
                        <input name="technologies" type="checkbox" class="btn-check " id="technology-check-{{$technology->id}}" autocomplete="off" value="{{$technology->id}}">
                        <label class="btn btn-outline-primary m-1 btn-sm rounded mb-2 " for="technology-check-{{$technology->id}}">
                            {{$technology->name}}
                        </label>
                        @endforeach
                    </div>

                    <label for="url_repo"><strong>Url Repository</strong></label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Url Repository" id="url_repo" name="url_repo" value="{{ old('url_repo') }}">

                </div>
                <div class="col-12 d-flex justify-content-center mb-3">
                    <div class="input">
                        <input class="btn btn-success" type="submit" value="Create new project">
                        <input class="btn btn-secondary" type="reset" value="Reset">
                    </div>
                </div>
            </form>
            <div class="col-12 d-flex justify-content-center">
                <a href="{{route('admin.project.index') }}" class="btn btn-primary col-2  ">Back to do project list</a>
            </div>

        </div>

    </div>
</div>
@endsection
