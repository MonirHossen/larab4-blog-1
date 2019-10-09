<div class="form-group">
    <label for="name">Name</label>
    <input value="{{ old('name',isset($category->name) ? $category->name : null ) }}" name="name" type="text" class="form-control" id="name" placeholder="category name">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Category description">{{old('description',isset($category->description) ? $category->description : null }}</textarea>
</div>
