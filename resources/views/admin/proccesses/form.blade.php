<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    {!! Form::label('title_uz', 'Title Uz', ['class' => 'control-label']) !!}
    {!! Form::textarea('title_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    {!! Form::label('title_ru', 'Title Ru', ['class' => 'control-label']) !!}
    {!! Form::textarea('title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    {!! Form::label('title_en', 'Title En', ['class' => 'control-label']) !!}
    {!! Form::textarea('title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    {!! Form::label('order', 'Order ', ['class' => 'control-label']) !!}
    {!! Form::number('order', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('gradient', 'Background-color', ['class' => 'control-label']) !!}
    <select name="color" class="form-control" id="">
        <option value="magenta">Magenta</option>
        <option value="grey">Gray</option>
        <option value="green">Green</option>
        <option value="yell">Yellow</option>
        <option value="blue">Blue</option>
        <option value="yell2">Orange</option>
    </select>
</div>
<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
