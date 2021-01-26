<a href="#" class="btn btn-info lang_toogle" data-lang="uz">UZ</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="ru">RU</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="en">EN</a>

<div class="about_uz">
    <div class="form-group{{ $errors->has('name_uz') ? 'has-error' : ''}}">
        {!! Form::label('name_uz', 'Name Uz', ['class' => 'control-label']) !!}
        {!! Form::text('name_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('profession_uz') ? 'has-error' : ''}}">
        {!! Form::label('profession_uz', 'Profession Uz', ['class' => 'control-label']) !!}
        {!! Form::text('profession_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('profession_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('about_uz') ? 'has-error' : ''}}">
        {!! Form::label('about_uz', 'About Uz', ['class' => 'control-label']) !!}
        {!! Form::textarea('about_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('about_uz', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_ru hide">
    <div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
        {!! Form::label('name_ru', 'Name Ru', ['class' => 'control-label']) !!}
        {!! Form::text('name_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('profession_ru') ? 'has-error' : ''}}">
        {!! Form::label('profession_ru', 'Profession Ru', ['class' => 'control-label']) !!}
        {!! Form::text('profession_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('profession_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('about_ru') ? 'has-error' : ''}}">
        {!! Form::label('about_ru', 'About Ru', ['class' => 'control-label']) !!}
        {!! Form::textarea('about_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('about_ru', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_en hide">
    <div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
        {!! Form::label('name_en', 'Name En', ['class' => 'control-label']) !!}
        {!! Form::text('name_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('profession_en') ? 'has-error' : ''}}">
        {!! Form::label('profession_en', 'Profession En', ['class' => 'control-label']) !!}
        {!! Form::text('profession_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('profession_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('about_en') ? 'has-error' : ''}}">
        {!! Form::label('about_en', 'About En', ['class' => 'control-label']) !!}
        {!! Form::textarea('about_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('about_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    @isset($personal)
        <img src="/admin/images/{{ $personal->image }}" width="80" alt="">
    @endisset
</div>
<div class="form-group{{ $errors->has('tg') ? 'has-error' : ''}}">
    {!! Form::label('tg', 'Telegram', ['class' => 'control-label']) !!}
    {!! Form::text('tg', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('insta') ? 'has-error' : ''}}">
    {!! Form::label('insta', 'Instagram', ['class' => 'control-label']) !!}
    {!! Form::text('insta', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('insta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('fb') ? 'has-error' : ''}}">
    {!! Form::label('fb', 'Facebook', ['class' => 'control-label']) !!}
    {!! Form::text('fb', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fb', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
