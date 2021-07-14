@extends('Manage.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="main-content" id="panel">
    @include('Manage.includes.header')
    <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><a
                                    href="{{ route('dashboard') }}">Attendance</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-book-open"></i></li>
                                    <li class="breadcrumb-item"><a href="{{ route('attendance.index') }}">Attendances</a>
                                    </li>
                                    <li class="breadcrumb-item">{{ $attendance->id }}</li>
                                    <li class="breadcrumb-item">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center bg-white-100 radius shadow-2xl">
                            <h2 class="mt-4">Attendance for : {{ $attendance->subject->name }} Course</h2>
                            <h3>Date: {{ $attendance->date->format('D d, m, Y') }}</h3>
                            <p class="text-bold"> {{ $attendance->students->count() }} <i
                                    class="fas fa-users-class text-blue"></i></p>
                            <hr>
                            <div class="text-left">
                                <h2 class="mb-3 text-bold">List of Students</h2>
                                <form action="{{ route('attendance.student.update', $attendance) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="table-responsive">
                                        <table class="table table-flush">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Name</th>
                                                <th scope="col" class="sort" data-sort="action">Attendant</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list">
                                            @foreach ($attendance->students as $student)
                                                <tr>
                                                    <td class="text-capitalize">
                                                        <input type="text" name="students[]" value="{{ $student->id }}"
                                                               hidden>
                                                        {{ $student->name }}
                                                    </td>
                                                    <td class="">
                                                        <div class="custom-control custom-radio d-inline mr-2">
                                                            <input type="radio" id="radio-{{ $student->id }}-on"
                                                                   name="status[{{ $student->id }}]" value="on"
                                                                   class="custom-control-input" {{ $student->pivot->status == 1 ? 'checked' : '' }}>
                                                            <label class="custom-control-label"
                                                                   for="radio-{{ $student->id }}-on">Present</label>
                                                        </div>
                                                        <div class="custom-control custom-radio d-inline">
                                                            <input type="radio" id="radio-{{ $student->id }}-off"
                                                                   name="status[{{ $student->id }}]" value="off"
                                                                   class="custom-control-input" {{ $student->pivot->status == 0 ? 'checked' : '' }}>
                                                            <label class="custom-control-label"
                                                                   for="radio-{{ $student->id }}-off">Absent</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary btn-block radius">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
