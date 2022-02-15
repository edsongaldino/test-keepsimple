<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
</div>
<select class="form-control" name="model" id="model" required>
    @foreach ($models as $model)
    <option value="{{ $model->id }}">{{ $model->name }}</option>
    @endforeach
</select>