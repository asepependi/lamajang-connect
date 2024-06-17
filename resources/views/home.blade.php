@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row ml-5 justify-content-center">
        <!-- Budaya -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl h3 font-weight-bold text-primary text-uppercase mb-1">
                                Budaya</div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $budaya }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pariwisata -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl h3 font-weight-bold text-success text-uppercase mb-1">
                                Pariwisata</div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $pariwisata }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Penginapan -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl h3 font-weight-bold text-info text-uppercase mb-1">
                                Penginapan
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800">{{ $penginapan }}</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
