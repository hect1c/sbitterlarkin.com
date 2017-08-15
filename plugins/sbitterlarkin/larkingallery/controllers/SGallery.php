<?php

namespace Sbitterlarkin\LarkinGallery\Controllers;

use Flash;
use BackendMenu;
use CMS\Classes\Controller;
use Raviraj\Rjgallery\Models\Gallery as Galleries;
use Raviraj\Rjgallery\Components\Gallery as Gallery;


/**
 * Galleries Back-end Controller
 */
class SGallery extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public static function setGallery($id, $item_id){
        $obj = new Galleries;
        $gallery = $obj->where('id', '=', $id)->first();

        foreach( $gallery->images as $image ){
            // var_dump($image);
            if( $image->id == $item_id ){
                return $image;
            }
        }
    }
}