
@extends('layout')
@section('content')
<div class="page__wrapper_left">
  <div class="this-one">
    <p class="this-one__subtitle">{{ $subtitle }}</p>
    <p class="this-one__technologies"><strong class="this-one__strong">Used technologies: </strong>{{ $technologies }}</p>
    <div class="this-one__description">
      <p class="this-one__p">{{ $description }}<br/></p>
      <p class="this-one__p">@foreach ($github as $git)        <a href="{{ $git }}" class="this-one__a">{{ $git }}</a><br/>@endforeach          </p>@if ($local != 'none')
      <p class="this-one__p"><a href="{{ $local }}" class="this-one__a">{{ $local }}</a><br/></p>@endif          
      <p class="this-one__p">@foreach ($image_src as $src)<img src="/images/projects/{{ $src }}" alt="{{ $subtitle }}" class="this-one__img"/>@endforeach</p>
    </div>
  </div>
</div>@endsection