<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', '/');
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', '/about');
});

// Home > Metrics
Breadcrumbs::register('metrics', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Metrics', '/metrics');
});

// Home > Metrics > BMI 
Breadcrumbs::register('bmi', function($breadcrumbs)
{
    $breadcrumbs->parent('metrics');
    $breadcrumbs->push('Bmi', '/metrics/bmi');
});

// Home > Metrics > BMR 
Breadcrumbs::register('bmr', function($breadcrumbs)
{
    $breadcrumbs->parent('metrics');
    $breadcrumbs->push('Bmr', '/metrics/bmr');
});

// Home > Metrics > Water 
Breadcrumbs::register('water', function($breadcrumbs)
{
    $breadcrumbs->parent('metrics');
    $breadcrumbs->push('Water', '/metrics/water');
});

// Home > Workout
Breadcrumbs::register('workout', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Workout', '/workout');
});
