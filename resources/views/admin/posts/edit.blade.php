@extends('admin.layouts.app')

@section('title', 'Edit Post')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @include('admin.posts.form', ['buttonText' => 'Update Post'])
                </form>
            </div>
        </div>
    </div>
</section>
@endsection