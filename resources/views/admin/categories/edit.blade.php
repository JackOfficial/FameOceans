@extends('admin.layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.categories.update', $category) }}" method="POST" x-data="{ name: '{{ old('name', $category->name ?? '') }}', slug: '{{ old('slug', $category->slug ?? '') }}' }">
                @method('PUT')
                @include('admin.categories.form')
            </form>
        </div>
    </div>
</div>
@endsection