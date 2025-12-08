<?php
//---------------Webs------------------//
it('Home Working', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
it('Gallery Working', function () {
    $response = $this->get('/gallery');
    $response->assertStatus(200);
});
it('Contact Working', function () {
    $response = $this->get('/contact');
    $response->assertStatus(200);
});
//---------------Views-------------------//
it('Home View',function(){
    $response = $this->get('/');
    $response->assertViewIs('home');
});
it('Gallery View',function(){
    $response = $this->get('/gallery');
    $response->assertViewIs('gallery');
});
it('Contact View',function(){
    $response = $this->get('/contact');
    $response->assertViewIs('contact');
});
//-------------Controllers---------------//
it('Home Controller',function(){
    $this->get(route('home'))
        ->assertOk();
});
it('Gallery Controller',function(){
    $this->get(route('gallery'))
        ->assertOk();
});

