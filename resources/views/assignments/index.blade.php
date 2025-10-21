@extends('dashboard.index')

@section('content')
<div class="container">

    <h1>Assignment & Pratical File Lists</h1>

    <!-- Filter Form -->


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
                    <th>Subject</th>
                    <th>Assigment</th>
                    @if(auth()->user()->role == '0' || auth()->user()->role == '3')
                        <th>Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($assignments as $assignment)
                    <tr>
                        <td>{{ $assignment->department->name }}</td>
                        <td>{{ $assignment->year->name }}</td>
                        <td>{{ $assignment->year->semester }}</td>
                        <td>
                            {{ $assignment->subject }}
                        </td>

                        <td>
                            @if($assignment->assigment_file)
                                <a href="{{ asset('storage/assigment_files/' . $assignment->assigment_file) }}"
                                class="btn btn-sm btn-outline-success"
                                download="{{ $assignment->assigment_file }}">
                                    <i class="fas fa-download"></i> Download
                                </a>
                            @else
                                <span class="text-muted">No File</span>
                            @endif

                        </td>

                        <td>
                            {{-- Only Admin(0) & Teacher(3) can Edit/Delete --}}
                            @if(auth()->user()->role == '0' || auth()->user()->role == '3')
                                <a href="{{ route('assignment.edit', $assignment->id) }}" class="btn btn-outline-warning">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            @endif

                            {{-- Everyone (Admin/Teacher/Student) can View --}}
                            {{-- <a href="{{ route('assignment.show', $assignment->id) }}" class="btn btn-outline-primary">
                                <i class="fas fa-info"></i>
                            </a> --}}

                            @if(auth()->user()->role == '0' || auth()->user()->role == '3')
                                <form method="post" action="{{ route('assignment.destroy', $assignment->id) }}" class="d-inline-block">
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
        {{-- <div class="d-flex justify-content-end">
            {{ $assignments->links('vendor.pagination.bootstrap-4') }}
        </div> --}}
    </div>

    <!-- Create New Result Link (Admin & Teacher only) -->
    @if(auth()->user()->role == '3')
        <a href="{{ route('assignment.create') }}" class="btn btn-primary">Create Assignment File</a>
    @endif
</div>
@endsection
