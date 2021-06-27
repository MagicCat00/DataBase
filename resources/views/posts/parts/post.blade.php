<div class="form-group">
    <input type="text" class="form-control" name="title" required value="{{ old('title') ?? $post->title ?? '' }}">
    <!-- /.form-control -->
</div>
<!-- /.form-group -->
<div class="form-group">
    <textarea name="desc" rows="10" class="form-control" required>{{ old('desc') ?? $post->desc ?? ''}}</textarea>
    <!-- /.form-control -->
</div>
<!-- /.form-group -->
<div class="form-group">
    <input name="img" type="file">
</div>
<!-- /.form-group -->
