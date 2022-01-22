@extends('layouts.admin_layout')

@section('title', 'Dashboard')

@section('content')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Edit</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>

                <form action="{{ route('admin.service.update', $services->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="icon"><h4>Font Awesome Icon</h4></label>
                            <input type="text"  id="icon" name="icon" class="form-control"
                            value="{{ $services->icon }}">
                        </div>

                        <div class="mb-4">
                            <label for="name"><h4>Name</h4></label>
                            <input type="text" id="name" name="name" class="form-control"
                            value="{{ $services->name }}">
                        </div>

                        <div class="mb-4">
                            <label for="description"><h4>Desctiption</h4></label>
                            <textarea type="text" id="description" name="description"
                            class="form-control"> {{ $services->description }} </textarea>
                        </div>

                    </div>
                </div>

                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </div>
        </form>
        </main>
@endsection              