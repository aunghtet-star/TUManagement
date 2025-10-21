@extends('dashboard.index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body shadow">
                    <h3 class="text-dark mb-3">User Detail</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">User Name:</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Email:</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Role:</th>
                                        <td>
                                            @if($user->role == "0")
                                                Admin
                                            @elseif($user->role == "1")
                                                Agent
                                            @elseif($user->role == "2")
                                                Student
                                            @elseif($user->role == "3")
                                                Teacher
                                            @endif
                                        </td>
                                    </tr>

                                    @if(!empty($user->roll_no))
                                        <tr>
                                            <th scope="row">Roll Number:</th>
                                            <td>{{ $user->roll_no }}</td>
                                        </tr>
                                    @endif

                                    @if(!empty($user->ph_no))
                                        <tr>
                                            <th scope="row">Ph Number:</th>
                                            <td>{{ $user->ph_no }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tbody>
                                    @if(!empty($user->address))
                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                    @endif

                                    @if(!empty($user->registration_no))
                                        <tr>
                                            <th scope="row">Registration Number:</th>
                                            <td>{{ $user->registration_no }}</td>
                                        </tr>
                                    @endif

                                    @if(!empty($user->position))
                                        <tr>
                                            <th scope="row">Position:</th>
                                            <td>{{ $user->position }}</td>
                                        </tr>
                                    @endif

                                    @if(!empty($user->department?->name))
                                        <tr>
                                            <th scope="row">Department:</th>
                                            <td>{{ $user->department->name }}</td>
                                        </tr>
                                    @endif

                                    @if(!empty($user->year?->name))
                                        <tr>
                                            <th scope="row">Academic Year:</th>
                                            <td>{{ $user->year->name }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mb-4">
                        <a href="{{ route('user.index') }}" class="btn btn-outline-dark">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
