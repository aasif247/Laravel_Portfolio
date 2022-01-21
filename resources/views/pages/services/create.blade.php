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

                <form action="{{route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    
                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-4">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" id="sub_title" name="sub_title" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="icon"><h4>Font Awesome Icon</h4></label>
                            <input type="text"  id="icon" name="icon" class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="name"><h4>Name</h4></label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="description"><h4>Desctiption</h4></label>
                            <textarea type="text" id="description" name="description"
                            class="form-control"> </textarea>
                        </div>

                    </div>
                </div>

                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </div>
        </form>
        </main>
@endsection              