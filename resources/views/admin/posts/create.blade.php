@extends('admin.layouts.app')

@section('title', 'Create Post')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.posts.form', ['buttonText' => 'Create Post'])
                </form>
            </div>
        </div>
    </div>
</section>
@endsection