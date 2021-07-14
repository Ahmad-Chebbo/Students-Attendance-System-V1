@extends('Admin.layouts.app')

@section('content')
    <div class="main-content" id="panel">
    @include('Admin.includes.header')
    <!-- Header -->
        <div class="header bg-primary">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"> <a href="{{ route('dashboard') }}">{{ $settings->Name }}</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-users"></i></li>
                                    <li class="breadcrumb-item active">Customers</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-neutral"><i class="fa fa-home" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <!-- Table -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">All Customers</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush datatable-buttons">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="customer">Name</th>
                                    <th scope="col" class="sort" data-sort="employee">Number</th>
                                    <th scope="col" class="sort" data-sort="service">Number of Orders</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $user->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $user->phone_number }}
                                        </td>
                                        <td class="text-md">
                                            {{ $user->orders->count() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Table -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
