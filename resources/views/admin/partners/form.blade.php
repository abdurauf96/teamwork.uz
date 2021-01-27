<div class="form-group{{ $errors->has('logo') ? 'has-error' : ''}}">
    {!! Form::label('logo', 'Logo', ['class' => 'control-label']) !!}
    {!! Form::file('logo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    @isset($partner) <img src="/admin/images/{{ $partner->logo }}" width="80" alt=""> @endisset 
    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}
    {!! Form::text('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('seo_desc') ? 'has-error' : ''}}">
    {!! Form::label('seo_desc', 'Seo Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('seo_desc', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('seo_desc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('seo_keyword') ? 'has-error' : ''}}">
    {!! Form::label('seo_keyword', 'Seo Keywords', ['class' => 'control-label']) !!}
    {!! Form::textarea('seo_keyword', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('seo_keyword', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
