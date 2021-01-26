<div class="form-group{{ $errors->has('service_id') ? 'has-error' : ''}}">
    {!! Form::label('service_id', 'Service', ['class' => 'control-label']) !!}
   <select name="service_id" id="" required class="form-control" >
    @foreach ($services as $service)
        <option @isset($servicetechnology)
            @if ($service->id==$servicetechnology->service_id)
                selected
            @endif
        @endisset value="{{ $service->id }}">{{ $service['name_'.\App::getLocale()] }}</option>
    @endforeach
   </select>
    {!! $errors->first('service_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    @if($formMode=='edit')
   
       <img src="/admin/images/{{ $servicetechnology->image}}" width="80" alt="">
      
       <input type="file" name="image" class="form-control">
    @else
        <input type="file" name="images[]" class="form-control" multiple id="images">
    @endif
    
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
