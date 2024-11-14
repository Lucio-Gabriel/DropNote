<?php

test('the route / is using the welcome view')
    ->get('/')
    ->assertViewIs('welcome');

//test('the route dashboard is using dashboard view')
//    ->get('/dashboard')
//    ->assertViewIs('dashboard');
