| @extends('layout')
| @section('content')
article.content__article
  p.content__article_p
    | Hello! My name is 
    span Sergey Buharow
    | .
  p.content__article_p
    | I have experience building dynamic and responsive websites using HTML, PHP, MySQL, CSS, jQuery, and AJAX
  p.content__article_p
    | My areas of expertise are in building web apps using PHP, MySQL, Laravel 4-5, and Bootstrap, Drupal.
.skills
  .skills__group
    span.skills__group_title Skills:
    span.skills__group_tag
      strong PHP
    span.skills__group_tag OOP-development
    span.skills__group_tag HTML5, CSS 3
    span.skills__group_tag Javascript
  .skills__group
    .skills__group_title Prefer:
    span.skills__group_tag
      a.skills__group_a(href='https://en.wikipedia.org/wiki/Don%27t_repeat_yourself', target='_blank') DRY development
      i.fa.fa-external-link
    span.skills__group_tag
      a.skills__group_a(href='https://en.wikipedia.org/wiki/KISS_principle', target='_blank') KISS principle
      i.fa.fa-external-link
    span.skills__group_tag
      a.skills__group_a(href='http://www.php-fig.org/psr/', target='_blank') PSR
      i.fa.fa-external-link
  .skills__group
    span.skills__group_title Frameworks:
    span.skills__group_tag
      strong Laravel 5
    span.skills__group_tag Slim Framework
    span.skills__group_tag Drupal
  .skills__group
    span.skills__group_title Front-end:
    span.skills__group_tag Less
    span.skills__group_tag Sass
    span.skills__group_tag Bootstrap
    span.skills__group_tag jQuery
  .skills__group
    span.skills__group_title Databases:
    span.skills__group_tag MySQL 5.5+
    span.skills__group_tag SQLite
    span.skills__group_tag MongoDB
  .skills__group
    span.skills__group_title Instruments:
    span.skills__group_tag Photoshop
    span.skills__group_tag Git
    span.skills__group_tag Grunt/Gulp
    span.skills__group_tag Ubuntu
  .skills__group
    span.skills__group_title Services:
    span.skills__group_tag GitHub
    span.skills__group_tag BitBucket
    span.skills__group_tag Jira
|@endsection

