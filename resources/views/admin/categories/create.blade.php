@extends('admin.layouts.app')

@section('title', 'Create Category')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @include('admin.categories.form')
            </form>
        </div>
    </div>
</div>
@endsection