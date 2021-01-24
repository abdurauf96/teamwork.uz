<div class="form-group{{ $errors->has('service_id') ? 'has-error' : ''}}">
    {!! Form::label('service_id', 'Service', ['class' => 'control-label']) !!}
    <select name="service_id" id="" class="form-control">
        @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service['name_'.\App::getLocale()] }}</option>
        @endforeach
    </select>
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
    {!! Form::textarea('desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
    {!! $errors->first('desc_ru', '<p class="help-block">:message</p>') !!}
</div>

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

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    @isset($servicetype)
        <img width="60" src="/admin/images/{{ $servicetype->image }}" alt="">
    @endisset
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
