<?php

namespace App\Http\Controllers;
use App\Http\Requests;


class ProjectsController extends Controller
{

    public function projects() {
        return view('projects');
    }

    public function project($slug) {

switch ($slug) {

    case 'scanlibs-idea':
        $subtitle = 'Laravel 5 Parser external website and Useful Interface.';
        $technologies = 'PHP, Laravel 5, jQuery Ajax, MySQL.';
        $description = 'Parse external website, MySQL ManyToMany implementation, Useful jQuery Interface.';    
        $github = array("https://github.com/kt815/scanlibs-clone-categories-relations");
        $local = "none";
        $image_src = array("2016-04-17_8-47-40.jpg", "2016-04-17_8-48-10.jpg");
        break;

	case 'slim-scalling':
    	$subtitle = 'Slim Framework Blog Example.';
    	$technologies = 'PHP, Slim Framework, jQuery Ajax, Markdown, Monolog.';
    	$description = 'Blog Example, User Account, Admin Panel, Routing Engine, Views and Templates, ORM Database, Image processor, REST etc.';	
    	$github = array("https://github.com/kt815/slim-scaling-couscous");
    	$local = "none";
    	$image_src = array("2016-04-17_8-54-21.jpg", "2016-04-17_8-54-56.jpg", "2016-04-17_8-55-03.jpg", "2016-04-17_8-55-46.jpg");
		break;

	case 'contats-us':
    	$subtitle = 'Slim Framework Contacts Form jQuery + PSD to HTML.';
    	$technologies = 'PHP, Slim Framework, jQuery Ajax, Photoshop.';
    	$description = 'Mobile First, Admin Panel, jQuery AJAX, ORM Database, CSRF Protection, Grid (12 column), Jade, Less, Npm, Bower, Grunt.';	
    	$github = array("https://github.com/kt815/slim-contacts-rotary", "https://github.com/kt815/contacts-psd-to-html-media-min");
    	$local = "none";
    	$image_src = array("2016-04-17_8-52-52.jpg", "2016-04-17_8-53-43.jpg");
		break;

	case 'roundfollio':
    	$subtitle = 'Drupal Theme "Roundfollio" integration.';
    	$technologies = 'PHP, Drupal 7 CMS, Views, jQuery.';
    	$description = 'Drupal Theme "Roundfollio" integration.';	
    	$github = array("https://github.com/kt815/drupal-rounfolio-free-bassoon");
    	$local = "http://kt815.esy.es/roundfolio";
    	$image_src = array("2016-04-17_8-38-38.jpg", "2016-04-17_8-38-03.jpg");
		break;

	case 'piatto.psd':
    	$subtitle = 'Landing PSD "Piatto" to HTML coding.';
    	$technologies = 'HTML5, CSS3, jQuery, Bootstap, Animate.css, Photoshop';
    	$description = 'BEM, Cross browser testing, Validation, Animation, SEO-friendly, CSS optimization, Image mininify etc.';	
    	$github = array("https://github.com/kt815/piatto-psd-to-html-animated");
    	$local = "none";
    	$image_src = array("2016-04-17_8-51-31.jpg", "2016-04-17_8-51-40.jpg");
		break;

	default:	
		break;}

        return view('project', [
    	'subtitle' => $subtitle,
    	'technologies' => $technologies,
    	'description' => $description,
    	'github' => $github,
    	'local' => $local,
    	'image_src' => $image_src
            ]);
    }    
}
