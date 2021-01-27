<a href="#" class="btn btn-info lang_toogle" data-lang="uz">UZ</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="ru">RU</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="en">EN</a>

<div class="form-group{{ $errors->has('service_id') ? 'has-error' : ''}}">
    {!! Form::label('service_id', 'Service', ['class' => 'control-label']) !!}
    <select name="service_id" id="" required class="form-control" >
        @foreach ($services as $service)
            <option @isset($serviceproject)
                @if ($service->id==$serviceproject->service_id)
                    selected
                @endif
            @endisset value="{{ $service->id }}">{{ $service['name_'.\App::getLocale()] }}</option>
        @endforeach
       </select>
</div>

<div class="about_uz">
    <div class="form-group{{ $errors->has('name_uz') ? 'has-error' : ''}}">
        {!! Form::label('name_uz', 'Project Name Uz', ['class' => 'control-label']) !!}
        {!! Form::text('name_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('desc_uz') ? 'has-error' : ''}}">
        {!! Form::label('desc_uz', 'Description Uz', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>4]) !!}
        {!! $errors->first('desc_uz', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_ru hide">
    <div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
        {!! Form::label('name_ru', 'Project Name Ru', ['class' => 'control-label']) !!}
        {!! Form::text('name_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('desc_ru') ? 'has-error' : ''}}">
        {!! Form::label('desc_ru', 'Description Ru', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>4]) !!}
        {!! $errors->first('desc_ru', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="about_en hide">
    <div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
        {!! Form::label('name_en', 'Project Name En', ['class' => 'control-label']) !!}
        {!! Form::text('name_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('desc_en') ? 'has-error' : ''}}">
        {!! Form::label('desc_en', 'Description En', ['class' => 'control-label']) !!}
        {!! Form::textarea('desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>4]) !!}
        {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    @isset($serviceproject)
        <img src="/admin/images/{{ $serviceproject->image }}" width="80" alt="">
    @endisset
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}
    {!! Form::textarea('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>2]) !!}
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
