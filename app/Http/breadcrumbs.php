<?php
/**
 * Created by PhpStorm.
 * User: masterrace
 * Date: 08/07/16
 * Time: 14:06
 */

Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});
Breadcrumbs::register('about', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('about', route('page.about'));
});
Breadcrumbs::register('contact', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', 'asdasd');
});
Breadcrumbs::register('referenties', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Referenties', route('referenties'));
});
Breadcrumbs::register('referentie', function($breadcrumbs, $project) {
    $breadcrumbs->parent('referenties');
    $breadcrumbs->push($project->name, route('referenties.show', $project->name));
});
Breadcrumbs::register('algemene-voorwaarden', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Algemene voorwaarden', route('page.algvoorwaarden'));
});
Breadcrumbs::register('content-management', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Content Management', route('page.cms'));
});
Breadcrumbs::register('design', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Design', route('page.design'));
});
Breadcrumbs::register('hosting', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Hosting & Service', route('page.hosting'));
});
Breadcrumbs::register('laravel-websites', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Laravel Websites', route('page.laravel_websites'));
});
Breadcrumbs::register('laravel-webshop', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Laravel Webwinkel', route('page.laravel_webshop'));
});
Breadcrumbs::register('logo-illustraties', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push("Logo's & Illustratie's", route('page.logo_illustratie'));
});
Breadcrumbs::register('onderhoud', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Onderhoud', route('page.onderhoud'));
});
Breadcrumbs::register('over-ons', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Over Ons', route('page.about'));
});
Breadcrumbs::register('fotografie', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Fotografie', route('page.photography'));
});
Breadcrumbs::register('privacy', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Privacy Verklaring', route('page.priverklaring'));
});
Breadcrumbs::register('seo', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Search Engine Optimalisatie', route('page.seo'));
});
Breadcrumbs::register('sitemap', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Sitemap', route('page.sitemap'));
});
Breadcrumbs::register('vindbaarheid', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Vindbaar Op Google', route('page.vindbaarheid'));
});
Breadcrumbs::register('webshop', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Webwinkel', route('page.webshop'));
});
Breadcrumbs::register('websites', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Websites', route('page.websites'));
});

Breadcrumbs::register('zoekmachine', function($breadcrumbs) {
    $breadcrumbs->parent('services');
    $breadcrumbs->push('Zoekmachine Optimalisatie', route('page.internet_marketing'));
});

Breadcrumbs::register('services', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Diensten', route('page.diensten'));
});

//Breadcrumbs::register('', function($breadcrumbs) {
//    $breadcrumbs->parent('home');
//    $breadcrumbs->push('', route('page.'));
//});
//
//Breadcrumbs::register('', function($breadcrumbs) {
//    $breadcrumbs->parent('home');
//    $breadcrumbs->push('', route('page.'));
//});


//Admin panel

// Home
Breadcrumbs::register('panel', function($breadcrumbs) { $breadcrumbs->push('Panel', route('admin.index')); });
// Home > Reference
Breadcrumbs::register('reference', function($breadcrumbs) {
    $breadcrumbs->parent('panel');
    $breadcrumbs->push('Reference', route('admin.reference.index'));
});
Breadcrumbs::register('reference.create', function($breadcrumbs) {
    $breadcrumbs->parent('reference');
    $breadcrumbs->push('create', route('admin.reference.create'));
});
