<a href="#" class="btn btn-info lang_toogle" data-lang="uz">UZ</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="ru">RU</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="en">EN</a>
<div class="about_uz">
    <div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
        {!! Form::label('title_uz', 'Title Uz', ['class' => 'control-label']) !!}
        {!! Form::text('title_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('desc_uz') ? 'has-error' : ''}}">
        {!! Form::label('desc_uz', 'Description Uz', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('desc_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
        {!! Form::label('body_uz', 'Body Uz', ['class' => 'control-label']) !!}
        {!! Form::textarea('body_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control crud-richtext']) !!}
        {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_ru hide">
    <div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
        {!! Form::label('title_ru', 'Title Ru', ['class' => 'control-label']) !!}
        {!! Form::text('title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('desc_ru') ? 'has-error' : ''}}">
        {!! Form::label('desc_ru', 'Description Ru', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('desc_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
        {!! Form::label('body_ru', 'Body Ru', ['class' => 'control-label']) !!}
        {!! Form::textarea('body_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control crud-richtext']) !!}
        {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_en hide">
    <div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
        {!! Form::label('title_en', 'Title En', ['class' => 'control-label']) !!}
        {!! Form::text('title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('desc_en') ? 'has-error' : ''}}">
        {!! Form::label('desc_en', 'Description En', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control ', 'rows'=>5]) !!}
        {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
        {!! Form::label('body_en', 'Body En', ['class' => 'control-label']) !!}
        {!! Form::textarea('body_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control crud-richtext']) !!}
        {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    {!! Form::label('title_en', 'Background', ['class' => 'control-label']) !!}
    <input type="color" name="color" > 
    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('icon') ? 'has-error' : ''}}">
    {!! Form::label('icon', 'Icon', ['class' => 'control-label']) !!}
    {!! Form::file('icon', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    
    @isset($feature)
    <img src="/admin/images/{{ $feature->icon }}" width="70" alt="">
    @endisset
    {!! $errors->first('icon', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
