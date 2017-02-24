<?php

require __DIR__ . '/../../core/autoload.php';

$find = false;

$routes = file_to_array('routes');

if ($id = Input::get('id')) {
    $ids = array_filter($routes, function ($value) use ($id) {
        return $value['id'] == $id;
    });
    $video = current($ids);
    if ($video) {
        $title = $video['title'];
        $desc = $video['desc'];
        $lang = $video['lang'];
        $find = true;
    }
}

// busca por el slug despues de videos en la url
if (!$find) {
    $path = URL::current();
    $slug = str_replace('/videos/', '', $path);
    $slug = strtolower($slug);
    $video = array_get($routes, $slug);
    if ($video) {
        $title = $video['title'];
        $desc = $video['desc'];
        $lang = $video['lang'];
        $id = $video['id'];
        $find = true;
    }
}

if (!$find) {
    http_response_code(404);
    die('Not found...');
}


function file_to_array($route) {
    $content = File::get('./' . $route . '.json');
    return json_decode($content, true);
}
