<a href="#" class="btn btn-info lang_toogle" data-lang="uz">UZ</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="ru">RU</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="en">EN</a>
<div class="about_uz">
    <div class="form-group{{ $errors->has('main_title') ? 'has-error' : ''}}">
        {!! Form::label('main_title', 'Main Title UZ', ['class' => 'control-label']) !!}
        {!! Form::textarea('main_title_uz', null,  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('main_title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('main_desc') ? 'has-error' : ''}}">
        {!! Form::label('main_desc', 'Main Description UZ', ['class' => 'control-label']) !!}
        {!! Form::textarea('main_desc_uz',  null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('main_desc', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('second_title') ? 'has-error' : ''}}">
        {!! Form::label('second_title', 'Second Title UZ', ['class' => 'control-label']) !!}
        {!! Form::textarea('second_title_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('second_title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('second_desc') ? 'has-error' : ''}}">
        {!! Form::label('second_desc', 'Second Description UZ', ['class' => 'control-label']) !!}
        {!! Form::textarea('second_desc_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('second_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_ru hide">
    <div class="form-group{{ $errors->has('main_title') ? 'has-error' : ''}}">
        {!! Form::label('main_title', 'Main Title RU', ['class' => 'control-label']) !!}
        {!! Form::textarea('main_title_ru', null,  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('main_title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('main_desc') ? 'has-error' : ''}}">
        {!! Form::label('main_desc', 'Main Description RU', ['class' => 'control-label']) !!}
        {!! Form::textarea('main_desc_ru',  null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('main_desc', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('second_title') ? 'has-error' : ''}}">
        {!! Form::label('second_title', 'Second Title RU', ['class' => 'control-label']) !!}
        {!! Form::textarea('second_title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('second_title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('second_desc') ? 'has-error' : ''}}">
        {!! Form::label('second_desc', 'Second Description RU', ['class' => 'control-label']) !!}
        {!! Form::textarea('second_desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('second_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_en hide">
    <div class="form-group{{ $errors->has('main_title') ? 'has-error' : ''}}">
        {!! Form::label('main_title', 'Main Title EN', ['class' => 'control-label']) !!}
        {!! Form::textarea('main_title_en', null,  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('main_title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('main_desc') ? 'has-error' : ''}}">
        {!! Form::label('main_desc', 'Main Description EN', ['class' => 'control-label']) !!}
        {!! Form::textarea('main_desc_en',  null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('main_desc', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('second_title') ? 'has-error' : ''}}">
        {!! Form::label('second_title', 'Second Title EN', ['class' => 'control-label']) !!}
        {!! Form::textarea('second_title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('second_title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('second_desc') ? 'has-error' : ''}}">
        {!! Form::label('second_desc', 'Second Description EN', ['class' => 'control-label']) !!}
        {!! Form::textarea('second_desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('second_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    @isset($about)
        <img width="200" src="/admin/images/{{ $about->image }}" alt="">
    @endisset
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}
    {!! Form::text('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
