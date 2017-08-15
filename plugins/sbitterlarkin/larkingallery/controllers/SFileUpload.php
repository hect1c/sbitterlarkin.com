<?php

namespace Sbitterlarkin\LarkinGallery\Controllers;

use Flash;
use BackendMenu;
use CMS\Classes\Controller;
// use Raviraj\Rjgallery\Models\Gallery as Galleries;

/**
 * Galleries Back-end Controller
 */
class SGallery extends FileUpload
{

    public function formExtendFields($form)
    {
        // var_dump($form);

        $form->addTabFields([
            'test'    => [
                'label'     => 'Field',
                'comment'   => 'description'
            ]]);
    }
}