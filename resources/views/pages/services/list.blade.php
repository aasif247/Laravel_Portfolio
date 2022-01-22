@extends('layouts.admin_layout')

@section('title', 'Dashboard')

@section('content')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">List Of Services</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">List Of Services</li>
                </ol>

                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Font Awesome Icon</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>

                        @if (count($services) > 0)
                            @foreach ($services as $service)
                            <tr>
                                <th scope="row">{{ $service->id }}</th>
                                <td>{{ $service->icon }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                            </tr> 
                            @endforeach    
                        @endif
        
                    </tbody>
                  </table>
        </main>
@endsection              