@extends('layouts.admin_layout')

@section('title', 'Dashboard')

@section('content')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Services</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>

                <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}    
                    
                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text"  id="title" name="title" value="{{ $service->title }}"
                            class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" id="sub_title" name="sub_title" value="{{ $service->sub_title }}"
                            class="form-control">  
                        </div>

                        <div class="form-group col-md-3 mt-3">
                            <h4>Logo</h4>
                            <img style="height:30vh" src="{{ url($service->service_logo) }}" class="img-thumbnail" >
                            <input class="mt-3" type="file" id="service_logo" name="service_logo">
                        </div>

                        <div class="mb-4">
                            <label for="name"><h4>Name</h4></label>
                            <input type="text" id="name" name="name" value="{{ $service->name }}"
                            class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="description"><h4>Desctiption</h4></label>
                            <input type="text" id="description" name="description" value="{{ $service->description }}"
                            class="form-control">
                        </div>

                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </div>
        </form>
        </main>
@endsection              