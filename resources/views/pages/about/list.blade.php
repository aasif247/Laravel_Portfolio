@extends('layouts.admin_layout')

@section('title', 'Dashboard')

@section('content')
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">List Of Services</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">List Of Services</li>
                </ol>

                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title 1</th>
                        <th scope="col">Title 2</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @if (count($abouts) > 0)
                            @foreach ($abouts as $about)
                            <tr>
                                <th scope="row">{{ $about->id }}</th>
                                <td>{{ $about->title1 }}</td>
                                <td>{{ $about->title2 }}</td>
                                <td>{{Str::limit(strip_tags($about->description),40)  }}</td>
                                <td> 
                                    <img style="height:20vh" src="{{url($about->image)}}" alt="image">
                                </td>

                                <td>
                                    <div class="row">
                                        <div>
                                            <a href="{{ route('admin.about.edit',$about->id)}}" type="button" class="btn btn-primary m-2">Edit</a>
                                        </div>

                                        <div>
                                            <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            @endforeach
                            @elseif (count($abouts) == 0) 
                                <tr>
                                    <th class="col-xl-4 text-center" colspan="6">
                                        <p>There is no about for this portfolio</p>
                                    </th>
                                </tr>
                            @endif
        
                    </tbody>
                </table>
        </main>
@endsection              