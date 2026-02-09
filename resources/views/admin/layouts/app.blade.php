@extends('admin.layouts.app')

@section('title', 'Dashboard | FameOceans')

@section('content')
<div class="container-fluid">

    {{-- Page Header --}}
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="m-0 font-weight-bold">FameOceans Dashboard</h1>
            <p class="text-muted mb-0">Overview of platform activity & content performance</p>
        </div>
    </div>

    {{-- KPI CARDS --}}
    <div class="row">

        {{-- Total Users --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalUsers ?? 0 }}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="/admin/users" class="small-box-footer">
                    Manage Users <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        {{-- Total Posts --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalPosts ?? 0 }}</h3>
                    <p>Total Posts</p>
                </div>
                <div class="icon">
                    <i class="fas fa-pen-nib"></i>
                </div>
                <a href="/admin/posts" class="small-box-footer">
                    View Posts <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        {{-- Pending Reviews --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $pendingPosts ?? 0 }}</h3>
                    <p>Pending Reviews</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hourglass-half"></i>
                </div>
                <a href="/admin/posts?status=pending" class="small-box-footer">
                    Review Content <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        {{-- Reports --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $reports ?? 0 }}</h3>
                    <p>User Reports</p>
                </div>
                <div class="icon">
                    <i class="fas fa-flag"></i>
                </div>
                <a href="/admin/reports" class="small-box-footer">
                    View Reports <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>

    {{-- CHARTS --}}
    <div class="row">

        {{-- Engagement Chart --}}
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-line mr-1"></i>
                        Monthly Engagement
                    </h3>
                </div>
                <div class="card-body">
                    <canvas id="engagementChart" height="120"></canvas>
                </div>
            </div>
        </div>

        {{-- Content Status --}}
        <div class="col-md-4">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Content Status
                    </h3>
                </div>
                <div class="card-body">
                    <canvas id="contentChart"></canvas>
                </div>
            </div>
        </div>

    </div>

    {{-- QUICK ACTIONS --}}
    <div class="row">

        <div class="col-md-12">
            <div class="card card-outline card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bolt mr-1"></i>
                        Quick Actions
                    </h3>
                </div>

                <div class="card-body">

                    <a href="/admin/posts/create" class="btn btn-app bg-info">
                        <i class="fas fa-plus"></i> New Post
                    </a>

                    <a href="/admin/posts?status=pending" class="btn btn-app bg-warning">
                        <i class="fas fa-hourglass-half"></i> Review Posts
                    </a>

                    <a href="/admin/users" class="btn btn-app bg-primary">
                        <i class="fas fa-users"></i> Users
                    </a>

                    <a href="/admin/roles-and-permissions" class="btn btn-app bg-success">
                        <i class="fas fa-user-shield"></i> Roles
                    </a>

                    <a href="/admin/settings" class="btn btn-app bg-danger">
                        <i class="fas fa-cog"></i> Settings
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection