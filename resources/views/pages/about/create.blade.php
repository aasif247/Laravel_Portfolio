@extends('layouts.admin_layout')

@section('title', 'Dashboard')

@section('content')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Create</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>

                <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                    
                <div class="row">
                    
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title1"><h4>Title 1</h4></label>
                            <input type="text"  id="title1" name="title1"
                            class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="title2"><h4>Title 2</h4></label>
                            <input type="text" id="title2" name="title2"
                            class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="description"><h4>Description</h4></label>
                            <textarea type="text" id="description" name="description"
                            class="form-control"> </textarea>
                        </div>

                    </div>

                    <div class="form-group col-md-3 mt-3">
                        <h4>Image</h4>
                        <img style="height:30vh" src="{{ asset('assets/img/about.png') }}" class="img-thumbnail" >
                        <input class="mt-3" type="file" id="image" name="image">
                    </div>

                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </div>
        </form>
        </main>
@endsection              