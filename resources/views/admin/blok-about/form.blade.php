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
    <div class="form-group{{ $errors->has('result1_uz') ? 'has-error' : ''}}">
        {!! Form::label('result1_uz', 'Result1 Uz', ['class' => 'control-label']) !!}
        {!! Form::text('result1_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('result1_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('result2_uz') ? 'has-error' : ''}}">
        {!! Form::label('result2_uz', 'Result2 Uz', ['class' => 'control-label']) !!}
        {!! Form::text('result2_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('result2_uz', '<p class="help-block">:message</p>') !!}
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
    <div class="form-group{{ $errors->has('result1_ru') ? 'has-error' : ''}}">
        {!! Form::label('result1_ru', 'Result1 Ru', ['class' => 'control-label']) !!}
        {!! Form::text('result1_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('result1_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('result2_ru') ? 'has-error' : ''}}">
        {!! Form::label('result2_ru', 'Result2 Ru', ['class' => 'control-label']) !!}
        {!! Form::text('result2_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('result2_ru', '<p class="help-block">:message</p>') !!}
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
        {!! Form::textarea('desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('result1_en') ? 'has-error' : ''}}">
        {!! Form::label('result1_en', 'Result1 En', ['class' => 'control-label']) !!}
        {!! Form::text('result1_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('result1_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('result2_en') ? 'has-error' : ''}}">
        {!! Form::label('result2_en', 'Result2 En', ['class' => 'control-label']) !!}
        {!! Form::text('result2_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('result2_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('value1') ? 'has-error' : ''}}">
    {!! Form::label('value1', 'Value1', ['class' => 'control-label']) !!}
    {!! Form::text('value1', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('value1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('value2') ? 'has-error' : ''}}">
    {!! Form::label('value2', 'Value2', ['class' => 'control-label']) !!}
    {!! Form::text('value2', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('value2', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
