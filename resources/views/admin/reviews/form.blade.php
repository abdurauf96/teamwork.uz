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
    <div class="form-group{{ $errors->has('desc_uz') ? 'has-error' : ''}}">
        {!! Form::label('desc_uz', 'Description Uz', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('desc_uz', '<p class="help-block">:message</p>') !!}
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
    <div class="form-group{{ $errors->has('desc_ru') ? 'has-error' : ''}}">
        {!! Form::label('desc_ru', 'Description Ru', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('desc_ru', '<p class="help-block">:message</p>') !!}
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
    <div class="form-group{{ $errors->has('desc_en') ? 'has-error' : ''}}">
        {!! Form::label('desc_en', 'Description En', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    @isset($review)
        <img src="/admin/images/{{ $review->image }}" width="80" alt="">
    @endisset
</div>
<div class="form-group{{ $errors->has('star') ? 'has-error' : ''}}">
    {!! Form::label('star', 'Rating', ['class' => 'control-label']) !!}
    <input type="hidden" name='star' class="star_input" @isset ($review)
        value="{{ $review->star }}"
    @endisset>
    <div @isset ($review) data-score="{{ $review->star }}"  @endisset class="star"></div>
</div>
<div class="form-group{{ $errors->has('main') ? 'has-error' : ''}}">
    {!! Form::label('main', 'Main', ['class' => 'control-label']) !!}
    {!! Form::checkbox('main', 1, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('main', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}
    {!! Form::textarea('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>3]) !!}
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('seo_desc') ? 'has-error' : ''}}">
    {!! Form::label('seo_desc', 'Seo Desc', ['class' => 'control-label']) !!}
    {!! Form::textarea('seo_desc', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('seo_desc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('seo_keyword') ? 'has-error' : ''}}">
    {!! Form::label('seo_keyword', 'Seo Keyword', ['class' => 'control-label']) !!}
    {!! Form::textarea('seo_keyword', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('seo_keyword', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
