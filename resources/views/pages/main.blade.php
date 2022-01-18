@extends('layouts.admin_layout')

@section('title', 'Dashboard')

@section('content')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Main</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main</li>
                </ol>

                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h4>Background Image</h4>
                        <img style="height:30vh" src="{{ asset('assets/img/header-bg.jpg') }}" class="img-thumbnail" >
                        <input class="mt-3" type="file" id="bg_img" name="bg_img">
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-4">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title">
                        </div>
                        <div>
                            <h4>Upload Resume</h4>
                            <input class="mt-2" type="file" id="resume" name="resume">
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection              