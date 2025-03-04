@extends('layouts.layout')

@section('title', 'Admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-12 mb-3">
                @include('admin.shared.left-sidebar')
            </div>
            <div class="col-xl-9 col-12 mb-3">
                <h1>Admin Dashboard</h1>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        @include('shared.widget', [
                            'title' => 'Total Users',
                            'icon' => 'fas fa-users',
                            'data' => $totalUsers,
                        ])
                    </div>
                    <div class="col-sm-6 col-md-4">
                        @include('shared.widget', [
                            'title' => 'Total Ideas',
                            'icon' => 'fas fa-lightbulb',
                            'data' => $totalIdeas,
                        ])
                    </div>
                    <div class="col-sm-6 col-md-4">
                        @include('shared.widget', [
                            'title' => 'Total Comments',
                            'icon' => 'fas fa-comment',
                            'data' => $totalComments,
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection