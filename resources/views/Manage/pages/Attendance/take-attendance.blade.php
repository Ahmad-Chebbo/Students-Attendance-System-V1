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
                            <h6 class="h2 text-white d-inline-block mb-0"> <a href="{{ route('dashboard') }}">Attendance</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-book-open"></i></li>
                                    <li class="breadcrumb-item"><a href="">Attendance</a></li>
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
                            <h2 class="mt-4">Attendance for : {{ $subject->name }} Course</h2>
                            <h3>Date: {{ $attendance->date->format('D d, m, Y') }}</h3>
                            <p class="text-bold"> {{ $subject->students->count() }} <i class="fas fa-users-class text-blue"></i> </p>
                            <hr>
                            <div class="text-left">
                                <h2 class="mb-3 text-bold">List of Students</h2>
                                <form action="{{ route('attendance.attach', $attendance) }}" method="post">
                                    @csrf
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Name</th>
                                            <th scope="col" class="sort" data-sort="action">Attendant</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list">
                                        @foreach ($subject->students as $student)
                                            <tr>
                                                <td class="text-capitalize">
                                                    {{ $student->name }}
                                                </td>
                                                <td class="">
                                                    <div class="custom-control custom-radio d-inline">
                                                        <input type="radio" id="radio-{{ $student->id }}-on" name="status[{{ $student->id }}]" value="on" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="radio-{{ $student->id }}-on">Present</label>
                                                    </div>
                                                    <div class="custom-control custom-radio d-inline">
                                                        <input type="radio" id="radio-{{ $student->id }}-off" name="status[{{ $student->id }}]" value="off" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="radio-{{ $student->id }}-off">Absent</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary btn-block radius">Submit</button>
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
