<?php
/**
 * Created by PhpStorm.
 * User: masterrace
 * Date: 08/07/16
 * Time: 14:06
 */

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('about', route('about'));
});

// Home > Contact
Breadcrumbs::register('contact', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', 'asdasd');
});

// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Referenties
Breadcrumbs::register('referenties', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Referenties', route('referenties'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category) {
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page) {
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});


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
