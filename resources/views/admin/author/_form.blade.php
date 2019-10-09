<div class="form-group">
    <label for="name">Name</label>
    <input value="{{ old('name',isset($author->name) ? $author->name : null ) }}" name="name" type="text" class="form-control" id="name" placeholder="author name">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input value="{{ old('email',isset($author->email) ? $author->email : null ) }}" name="email" type="email" class="form-control" id="name" placeholder="Author email">
</div>
<div class="form-group">
    <label for="about">About</label>
    <textarea name="about" class="form-control" id="about" placeholder="About author">{{ old('about',isset($author->about) ? $author->about : null ) }}</textarea>
</div>
