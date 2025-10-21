@extends('dashboard.index')

@section('content')
<div class="container">
    @php
    function sortYears($years) {
        return $years->sortBy('name');
    }
    @endphp

    <h1>Results</h1>

    <!-- Filter Form -->
    <form method="GET" action="{{ route('result.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="department_id" class="form-label">Department:</label>
                <select name="department_id" id="department_id" class="form-control">
                    <option value="">All</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="year_id" class="form-label">Academic Year:</label>
                <select name="year_id" id="year_id" class="form-control">
                    <option value="">All</option>
                    @foreach(sortYears($years) as $year)
                        <option value="{{ $year->id }}">{{ $year->name }} - {{ $year->semester }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 mb-3 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <!-- Alerts -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
            {{ session('success') }}
        </div>
    @endif

    @if(session('update'))
        <div class="alert alert-primary alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
            {{ session('update') }}
        </div>
    @endif

    @if(session('delete'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
            {{ session('delete') }}
        </div>
    @endif

    <!-- Result Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Academic Year</th>
                    <th>Semester</th>
                    <th>Result</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{{ $result->department->name }}</td>
                        <td>{{ $result->year->name }}</td>
                        <td>{{ $result->year->semester }}</td>
                        <td>
                            @foreach ($result->resultFiles as $file)
                                <div class="file-item mb-2">
                                    <p class="text-primary d-inline">{{ $file->file_name }}</p>

                                    {{-- ✅ Role 0, 2, 3 လုံး download ရမယ် --}}
                                    @if(in_array(auth()->user()->role, [0, 2, 3]))
                                        <a href="{{ asset('storage/' . $file->file_path) }}"
                                           class="btn btn-sm btn-outline-success"
                                           download="{{ $file->file_name }}">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        </td>

                        <td>
                            {{-- Only Admin(0) & Teacher(3) can Edit/Delete --}}
                            @if(auth()->user()->role == '0' || auth()->user()->role == '3')
                                <a href="{{ route('result.edit', $result->id) }}" class="btn btn-outline-warning">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            @endif

                            {{-- Everyone (Admin/Teacher/Student) can View --}}
                            <a href="{{ route('result.show', $result->id) }}" class="btn btn-outline-primary">
                                <i class="fas fa-info"></i>
                            </a>

                            @if(auth()->user()->role == '0' || auth()->user()->role == '3')
                                <form method="post" action="{{ route('result.destroy', $result->id) }}" class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $results->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

    <!-- Create New Result Link (Admin & Teacher only) -->
    @if(auth()->user()->role == '0' || auth()->user()->role == '3')
        <a href="{{ route('result.create') }}" class="btn btn-primary">Create New Result File</a>
    @endif
</div>
@endsection
