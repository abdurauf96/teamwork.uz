<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    {!! Form::label('title_uz', 'Title Uz', ['class' => 'control-label']) !!}
    {!! Form::text('title_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    {!! Form::label('title_ru', 'Title Ru', ['class' => 'control-label']) !!}
    {!! Form::text('title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    {!! Form::label('title_en', 'Title En', ['class' => 'control-label']) !!}
    {!! Form::text('title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}
    {!! Form::text('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order') ? 'has-error' : ''}}">
    {!! Form::label('order', 'Order', ['class' => 'control-label']) !!}
    {!! Form::number('order', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('order', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('main') ? 'has-error' : ''}}">
    {!! Form::label('main', 'Useful', ['class' => 'control-label']) !!}
    {!! Form::checkbox('footer', 1, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('main', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
