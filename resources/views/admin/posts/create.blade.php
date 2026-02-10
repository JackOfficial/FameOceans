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

<script src="https://cdn.tiny.cloud/1/akrlpx2p28jit8egdeyeyu4q0osghccndfvgksphc8hfni44/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('tinymceEditor', () => ({
        init(el, value = '') {
            tinymce.init({
                target: el,
                height: 400,
                plugins: 'lists link image table code wordcount',
                toolbar: 'undo redo | styles | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | indent outdent | bullist numlist | link image table | code',
                setup(editor) {
                    // Set initial value
                    editor.on('init', function() {
                        editor.setContent(value);
                    });
                    // Update Alpine when content changes
                    editor.on('Change KeyUp', function() {
                        el.value = editor.getContent();
                        el.dispatchEvent(new Event('input')); // Livewire reacts
                    });
                }
            });
        }
    }));
});
</script>

@endsection