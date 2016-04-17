| @extends('layout')
| @section('content')
.page__wrapper_left
    .this-one
      p.this-one__subtitle {{ $subtitle }}
      p.this-one__technologies
        strong.this-one__strong Used technologies: 
        | {{ $technologies }}
      .this-one__description
        p.this-one__p
          | {{ $description }}
          br
        p.this-one__p
          | @foreach ($github as $git)        
          a.this-one__a(href='{{ $git }}') {{ $git }}
          br
          | @endforeach          
        | @if ($local != 'none')
        p.this-one__p
          a.this-one__a(href='{{ $local }}') {{ $local }}
          br
        | @endif          
        p.this-one__p
          | @foreach ($image_src as $src)
          img.this-one__img(src='/images/projects/{{ $src }}', alt='{{ $subtitle }}')
          | @endforeach
| @endsection

