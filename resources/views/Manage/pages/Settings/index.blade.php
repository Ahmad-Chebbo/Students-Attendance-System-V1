@extends('Manage.layouts.app')
@section('content')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Header -->
    @include('Manage.includes.header')
    <!--/ Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Settings</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="card radius">
            <div class="row card-body justify-content-center bg-gray-100 radius">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="general-tab" data-toggle="tab"
                                href="#general" role="tab" aria-controls="general"
                                aria-selected="true"><i class="ni ni-settings mr-2"></i>General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="site-logo-tab" data-toggle="tab"
                                href="#site-logo" role="tab" aria-controls="site-logo"
                                aria-selected="false"><i class="ni ni-image mr-2"></i>Site Logo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="footer-seo-tab" data-toggle="tab"
                                href="#footer-seo" role="tab" aria-controls="footer-seo"
                                aria-selected="false"><i class="ni ni-spaceship mr-2"></i>SEO</a>
                        </li>
                    </ul>
                </div>
                <br><br>
                <div class="col-md-12 card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel"
                                aria-labelledby="general-tab">
                                @include('Manage.pages.Settings.includes.general')
                            </div>
                            <div class="tab-pane fade" id="site-logo" role="tabpanel"
                                aria-labelledby="site-logo-tab">
                                @include('Manage.pages.Settings.includes.logo')
                            </div>
                            <div class="tab-pane fade" id="footer-seo" role="tabpanel"
                                aria-labelledby="footer-seo-tab">
                                @include('Manage.pages.Settings.includes.footer_seo')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
