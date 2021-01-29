@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
   
    <x-slot name="active">
        @lang('messages.aboutUs')
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
    @include('sections.about', ['class'=>'about-page'])
    @include('sections.team')
    @include('sections.form2')
</main>
@endsection