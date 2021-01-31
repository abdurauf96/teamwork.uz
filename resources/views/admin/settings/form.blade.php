<div class="form-group{{ $errors->has('value') ? 'has-error' : ''}}">
    {!! Form::label('value', 'Description', ['class' => 'control-label']) !!}
    {!! Form::text('description', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
@if($formMode != 'edit')
<div class="form-group{{ $errors->has('key') ? 'has-error' : ''}}">
    {!! Form::label('key', 'Key', ['class' => 'control-label']) !!}
    {!! Form::text('key', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('key', '<p class="help-block">:message</p>') !!}
</div>
@endif

<div class="form-group{{ $errors->has('value') ? 'has-error' : ''}}">
    {!! Form::label('value', 'Value', ['class' => 'control-label']) !!}
    {!! Form::text('value', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    <input type="file" name="image" class="form_image" >
    @isset ($setting)
        <img src="/admin/images/{{ $setting->value }}" width="100" alt="">
    @endisset
    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
