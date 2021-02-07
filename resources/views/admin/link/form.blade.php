<a href="#" class="btn btn-info lang_toogle" data-lang="uz">UZ</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="ru">RU</a>
<a href="#" class="btn btn-info lang_toogle" data-lang="en">EN</a>
<div class="about_uz">
    <div class="form-group{{ $errors->has('about_title_uz') ? 'has-error' : ''}}">
        {!! Form::label('about_title_uz', 'Footer block title Uz', ['class' => 'control-label']) !!}
        {!! Form::text('about_title_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('about_title_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('about_desc_uz') ? 'has-error' : ''}}">
        {!! Form::label('about_desc_uz', 'Footer block Description Uz', ['class' => 'control-label']) !!}
        {!! Form::textarea('about_desc_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('about_desc_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('contact_title_uz') ? 'has-error' : ''}}">
        {!! Form::label('contact_title_uz', 'Biz bilan bog`lanish Title Uz', ['class' => 'control-label']) !!}
        {!! Form::text('contact_title_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('contact_title_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('contact_desc_uz') ? 'has-error' : ''}}">
        {!! Form::label('contact_desc_uz', 'Biz bilan bog`lanish Description Uz', ['class' => 'control-label']) !!}
        {!! Form::textarea('contact_desc_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('contact_desc_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('addres_uz') ? 'has-error' : ''}}">
        {!! Form::label('addres_uz', 'Addres Uz', ['class' => 'control-label']) !!}
        {!! Form::text('addres_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('addres_uz', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('footer_uz') ? 'has-error' : ''}}">
        {!! Form::label('footer_uz', 'Footer Text (eng pastki qism) Uz', ['class' => 'control-label']) !!}
        {!! Form::text('footer_uz', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('footer_uz', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="about_ru hide">
    <div class="form-group{{ $errors->has('about_title_ru') ? 'has-error' : ''}}">
        {!! Form::label('about_title_ru', 'Footer block Title Ru', ['class' => 'control-label']) !!}
        {!! Form::text('about_title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('about_title_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('about_desc_ru') ? 'has-error' : ''}}">
        {!! Form::label('about_desc_ru', 'Footer block Desc Ru', ['class' => 'control-label']) !!}
        {!! Form::textarea('about_desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('about_desc_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('contact_title_ru') ? 'has-error' : ''}}">
        {!! Form::label('contact_title_ru', 'Biz bilan bog`lanish  Title Ru', ['class' => 'control-label']) !!}
        {!! Form::text('contact_title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('contact_title_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('contact_desc_ru') ? 'has-error' : ''}}">
        {!! Form::label('contact_desc_ru', 'Biz bilan bog`lanish Desc Ru', ['class' => 'control-label']) !!}
        {!! Form::textarea('contact_desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('contact_desc_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('addres_ru') ? 'has-error' : ''}}">
        {!! Form::label('addres_ru', 'Addres Ru', ['class' => 'control-label']) !!}
        {!! Form::text('addres_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('addres_ru', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('footer_ru') ? 'has-error' : ''}}">
        {!! Form::label('footer_ru', 'Footer Text (eng pastki qism) Ru', ['class' => 'control-label']) !!}
        {!! Form::text('footer_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('footer_ru', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="about_en hide">
    <div class="form-group{{ $errors->has('about_title_en') ? 'has-error' : ''}}">
        {!! Form::label('about_title_en', 'Footer block Title En', ['class' => 'control-label']) !!}
        {!! Form::text('about_title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('about_title_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('about_desc_en') ? 'has-error' : ''}}">
        {!! Form::label('about_desc_en', 'Footer block Description En', ['class' => 'control-label']) !!}
        {!! Form::textarea('about_desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('about_desc_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('contact_title_en') ? 'has-error' : ''}}">
        {!! Form::label('contact_title_en', 'Biz bilan bog`lanish Title En', ['class' => 'control-label']) !!}
        {!! Form::text('contact_title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('contact_title_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('contact_desc_en') ? 'has-error' : ''}}">
        {!! Form::label('contact_desc_en', 'Biz bilan bog`lanish Desc En', ['class' => 'control-label']) !!}
        {!! Form::textarea('contact_desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'rows'=>5]) !!}
        {!! $errors->first('contact_desc_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('addres_en') ? 'has-error' : ''}}">
        {!! Form::label('addres_en', 'Addres En', ['class' => 'control-label']) !!}
        {!! Form::text('addres_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('addres_en', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ $errors->has('footer_en') ? 'has-error' : ''}}">
        {!! Form::label('footer_en', 'Footer Text (eng pastki qism) En', ['class' => 'control-label']) !!}
        {!! Form::text('footer_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('footer_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('project_name') ? 'has-error' : ''}}">
    {!! Form::label('project_name', 'Project name', ['class' => 'control-label']) !!}
    {!! Form::text('project_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('project_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone1') ? 'has-error' : ''}}">
    {!! Form::label('project_logo', 'Project logo', ['class' => 'control-label']) !!}
    {!! Form::file('project_logo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('project_logo', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('phone1') ? 'has-error' : ''}}">
    {!! Form::label('phone1', 'Phone1', ['class' => 'control-label']) !!}
    {!! Form::text('phone1', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('phone1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone2') ? 'has-error' : ''}}">
    {!! Form::label('phone2', 'Phone2', ['class' => 'control-label']) !!}
    {!! Form::text('phone2', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('phone2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<hr>
<h4>Ijtimoiy tarmoq uchun manzillar</h4>
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
<div class="form-group{{ $errors->has('youtube') ? 'has-error' : ''}}">
    {!! Form::label('youtube', 'Youtube', ['class' => 'control-label']) !!}
    {!! Form::text('youtube', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('youtube', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tiktok') ? 'has-error' : ''}}">
    {!! Form::label('tiktok', 'Tiktok', ['class' => 'control-label']) !!}
    {!! Form::text('tiktok', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tiktok', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('wk') ? 'has-error' : ''}}">
    {!! Form::label('wk', 'Wk', ['class' => 'control-label']) !!}
    {!! Form::text('wk', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('wk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
