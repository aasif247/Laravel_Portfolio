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

                <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                    
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h4>Big Image</h4>
                        <img style="height:30vh" src="{{ asset('assets/img/big_image.jpg') }}" class="img-thumbnail" >
                        <input class="mt-3" type="file" id="big_image" name="big_image">
                    </div>

                    <div class="form-group col-md-3 mt-3">
                        <h4>Small Image</h4>
                        <img style="height:20vh" src="{{ asset('assets/img/small_image.jpg') }}" class="img-thumbnail" >
                        <input class="mt-3" type="file" id="small_image" name="small_image">
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text"  id="title" name="title"
                            class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" id="sub_title" name="sub_title"
                            class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="description"><h4>Description</h4></label>
                            <textarea type="text" id="description" name="description"
                            class="form-control"> </textarea>
                        </div>

                        <div class="mb-4">
                            <label for="client"><h4>Client</h4></label>
                            <input type="text" id="client" name="client"
                            class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="category"><h4>Category</h4></label>
                            <input type="text" id="category" name="category"
                            class="form-control">
                        </div>
                        
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </div>
        </form>
        </main>
@endsection              