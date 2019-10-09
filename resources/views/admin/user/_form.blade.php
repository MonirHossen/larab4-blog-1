<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" value="{{ old('name',isset($user->name) ? $user->name : null ) }}" id="name" placeholder="User name">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email" value="{{ old('email',isset($user->email) ?  $user->email : null ) }}" placeholder="User email">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input name="password" value="{{old('password', isset($user->password) ? $user->password : null )}}" type="password" class="form-control" id="password" placeholder="User password">
</div>
