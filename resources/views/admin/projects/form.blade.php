<div class="form-group{{ $errors->has('portfolio_category_id') ? 'has-error' : ''}}">
    {!! Form::label('portfolio_category_id', 'Category', ['class' => 'control-label']) !!}
    <select name="portfolio_category_id" id="" class="form-control">
        @foreach ($categories as $category)
            <option @isset($project)
                @if($category->id==$project->portfolio_category_id) selected @endif
            @endisset  value="{{ $category->id }}">{{ $category['name_'.\App::getLocale()] }}</option>
        @endforeach
    </select>
    {!! $errors->first('portfolio_category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('author') ? 'has-error' : ''}}">
    {!! Form::label('author', 'Author', ['class' => 'control-label']) !!}
    {!! Form::text('author', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('author', '<p class="help-block">:message</p>') !!}
</div>
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
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    {!! Form::label('title_ru', 'Title Ru', ['class' => 'control-label']) !!}
    {!! Form::text('title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('desc_ru') ? 'has-error' : ''}}">
    {!! Form::label('desc_ru', 'Description Ru', ['class' => 'control-label']) !!}
    {!! Form::textarea('desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control',  'rows'=>5]) !!}
    {!! $errors->first('desc_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    {!! Form::label('title_en', 'Title En', ['class' => 'control-label']) !!}
    {!! Form::text('title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('desc_en') ? 'has-error' : ''}}">
    {!! Form::label('desc_en', 'Description En', ['class' => 'control-label']) !!}
    {!! Form::textarea('desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control',  'rows'=>5]) !!}
    {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('seo_desc') ? 'has-error' : ''}}">
    {!! Form::label('seo_desc', 'Seo Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('seo_desc', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control',  'rows'=>5]) !!}
    {!! $errors->first('seo_desc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('seo_keyword') ? 'has-error' : ''}}">
    {!! Form::label('seo_keyword', 'Seo Keyword', ['class' => 'control-label']) !!}
    {!! Form::text('seo_keyword', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('seo_keyword', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
