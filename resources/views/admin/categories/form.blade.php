@csrf

<div class="form-group mb-3">
    <label>Name *</label>
    <input type="text" name="name" class="form-control"
           value="{{ old('name', $category->name ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control"
           value="{{ old('slug', $category->slug ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control" rows="3">{{ old('description', $category->description ?? '') }}</textarea>
</div>

<hr>

<h6 class="text-muted">SEO Settings</h6>

<div class="form-group mb-3">
    <label>Meta Title</label>
    <input type="text" name="meta_title" class="form-control"
           value="{{ old('meta_title', $category->meta_title ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Meta Description</label>
    <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $category->meta_description ?? '') }}</textarea>
</div>

<button class="btn btn-success">
    Save Category
</button>