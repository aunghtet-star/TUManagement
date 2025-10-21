@extends('dashboard.index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-dark">Department Detail</h3>

                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="card-body">
                            {{-- <h5 class="card-title text-dark">ID : {{ $department->id }}</h5> <br> --}}
                            <h4 class="text-dark">Department Name : <b>{{ $department->name }}</b></h4>
                            <h4 class="text-dark">Description : </h4>
                            <p class="card-text">{{ $department->description }}</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('department.index') }}" class="btn btn-outline-dark">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
