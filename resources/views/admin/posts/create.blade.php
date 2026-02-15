@extends('admin.layouts.app')

@section('title', 'Create Post')

@section('content')
<section class="content">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-3">
            <div class="col-sm-6">
                <h1>Create Post</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.posts.index') }}">Posts</a>
                    </li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card card-primary">
            <div class="card-body">

                <form action="{{ route('admin.posts.store') }}" 
                      method="POST" 
                      enctype="multipart/form-data">

                    @csrf

                    {{-- Title --}}
                    <div class="form-group mb-3">
                        <label>Title *</label>
                        <input type="text" 
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title') }}" 
                               required>

                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Category --}}
                    <div class="form-group mb-3">
                        <label>Category</label>
                        <select name="blog_category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('blog_category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Featured Image --}}
                    <div class="form-group mb-3">
                        <label>Featured Image</label>
                        <input type="file" name="featured_image" class="form-control-file">
                        @error('featured_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Content --}}
                    <div class="form-group mb-3">
                        <label>Content *</label>
                        <textarea id="editor"
                                  name="content"
                                  class="form-control @error('content') is-invalid @enderror"
                                  rows="8"
                                  required>{{ old('content') }}</textarea>

                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Create Post
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

{{-- TinyMCE --}}
<script src="https://cdn.tiny.cloud/1/akrlpx2p28jit8egdeyeyu4q0osghccndfvgksphc8hfni44/tinymce/8/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: '#editor',
    plugins: 'lists link image table code',
    toolbar: 'undo redo | bold italic | bullist numlist | link image | code'
});
</script>

@endsection