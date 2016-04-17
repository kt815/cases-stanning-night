| @extends('layout')
| @section('content')
.row
    a.project__a.col-xs-12.col-sm-4(href='/projects/rocket-yourself')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f9114399e54.png', alt='Rocket Yourself')
        .project__title
          | Rocket Yourself
    a.project__a.col-xs-12.col-sm-4(href='/projects/scanlibs-idea')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f7c1bf5b3cb.jpg', alt='Partnerrs')
        .project__title
          | Scanlibs Idea
    a.project__a.col-xs-12.col-sm-4.col_ima(href='/projects/slim-scalling')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f80518a7cd3.jpg', alt='Yurka App')
        .project__title
          | Slim Scalling
    a.project_a.col-xs-12.col-sm-4(href='/projects/contats-us')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f9163df3fc3.jpg', alt='Rocket App')
        .project__title
          | Contact Us
    a.project__a.col-xs-12.col-sm-4(href='/projects/roundfollio')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f90dd5e7e03.jpg', alt='CheckThis')
        .project__title
          | Rounfollio
    a.project__a.col-xs-12.col-sm-4(href='/projects/piatto.psd')
      .row
        .project__img-gutter
          .zoom
            i.fa.fa-folder-open
          img.project__img(src='/images/56f90910de1d2.jpg', alt='LetsPost')
        .project__title
          | Piatto Psd 
.page__wrapper_left
  .projects
    .projects__more.col-xs-12
      .projects__date
        .projects__month April
        .projects__year 2016
      .projects__about
        .projects__title Help Center
        .projects__subtitle Open-source help app.
      .projects__actions
        a.projects__btn.btn-sm.btn-ghost.btn-primary(href='/projects/askme')
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

