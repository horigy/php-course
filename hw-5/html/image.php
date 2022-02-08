<?php

// include composer autoload
require '../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('155.jpg');

$img->resize(500, null, function (\Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});

$img->text('My watermark', $img->getWidth() - 10, $img->getHeight() - 10, function (\Intervention\Image\AbstractFont $font) {
    $font->size(24);
    $font->file('impact2.ttf');
    $font->color([2555, 255, 255, 0.3]);
    $font->align('right');
    $font->valign('bottom');
});

$img->save('test.jpg');

echo $img->response('jpg');