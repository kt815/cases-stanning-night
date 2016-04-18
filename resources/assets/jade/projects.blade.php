| @extends('layout')
| @section('content')
.row
    a.project__a.col-xs-12.col-sm-4(href='/projects/this-one')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/2016-04-18_8-56-45.jpg', alt='This One')
        .project__title
          | This One
    a.project__a.col-xs-12.col-sm-4(href='/projects/scanlibs-idea')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f7c1bf5b3cb.jpg', alt='Scanlibs Idea')
        .project__title
          | Scanlibs Idea
    a.project__a.col-xs-12.col-sm-4.col_ima(href='/projects/slim-scalling')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f80518a7cd3.jpg', alt='Slim Scalling')
        .project__title
          | Slim Scalling
    a.project_a.col-xs-12.col-sm-4(href='/projects/contats-us')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f9163df3fc3.jpg', alt='Contact Us')
        .project__title
          | Contact Us
    a.project__a.col-xs-12.col-sm-4(href='/projects/roundfollio')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f90dd5e7e03.jpg', alt='Rounfollio')
        .project__title
          | Rounfollio
    a.project__a.col-xs-12.col-sm-4(href='/projects/piatto.psd')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f90910de1d2.jpg', alt='Piatto Psd')
        .project__title
          | Piatto Psd 
.page__wrapper_left
  .projects
    .projects__more.col-xs-12
      .projects__date
        .projects__month April
        .projects__year 2016
      .projects__about
        .projects__title This One
        .projects__subtitle Portfollio Cases. No Database Laravel Solution.
      .projects__actions
        a.projects__btn.btn-sm.btn-ghost.btn-primary(href='/projects/this-one')
          i.fa.fa-info-circle
          | More info    
    .projects__more.project-modal.col-xs-12
      .projects__date
        .projects__month March
        .projects__year 2016
      .projects__about
        .projects__title Scanlibs Idea
        .projects__subtitle Parse scanlibs.com and interactive interpritation it in Slim + MySql + jQuery.
      .projects__actions
        a.projects__btn.btn-sm.btn-ghost.btn-primary(href='/projects/scanlibs-idea')
          i.fa.fa-info-circle
          | More info
    .projects__more.project-modal.col-xs-12
      .projects__date
        .projects__month February
        .projects__year 2016
      .projects__about
        .projects__title Slim Scalling
        .projects__subtitle Website Blog, Users Profile, Admin Panel on Slim Framework.
      .projects__actions
        a.projects__btn.btn-sm.btn-ghost.btn-primary(href='/projects/slim-scalling')
          i.fa.fa-info-circle
          | More info
    .projects__more.project-modal.col-xs-12
      .projects__date
        .projects__month January
        .projects__year 2016
      .projects__about
        .projects__title Contact Us
        .projects__subtitle Contact Form on Slim Framework + PSD to HTML.
      .projects__actions
        a.projects__btn.btn-sm.btn-ghost.btn-primary(href='/projects/contact-us')
          i.fa.fa-info-circle
          | More info
    .projects__more.project-modal.col-xs-12
      .projects__date
        .projects__month December
        .projects__year 2015
      .projects__about
        .projects__title Roundfollio
        .projects__subtitle HTML Theme to Drupal integration.
      .projects__actions
        a.projects__btn.btn-sm.btn-ghost.btn-primary(href='/projects/roundfollio')
          i.fa.fa-info-circle
          | More info
    .projects__more.project-modal.col-xs-12
      .projects__date
        .projects__month November
        .projects__year 2015
      .projects__about
        .projects__title Piatto PSD
        .projects__subtitle PSD to HTML coding.
      .projects__actions
        a.projects__btn.btn-sm.btn-ghost.btn-primary(href='/projects/piatto.psd')
          i.fa.fa-info-circle
          | More info
|@endsection

