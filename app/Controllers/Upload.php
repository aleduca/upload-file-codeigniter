<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Upload extends BaseController
{
  public function store()
  {

    $img = $this->request->getFile('userfile');

    if (!$this->validate([
      'userfile' => 'uploaded[userfile]|is_image[userfile]|ext_in[userfile,jpeg,png,jpg]|max_dims[userfile,1920, 1080]'
    ], [
      'userfile' => [
        'uploaded' => 'Escolha uma imagem',
        'is_image' => 'O que você escolheu não é uma imagem',
        'ext_in' => 'A extensão ' . $img->getExtension() . ' não é válida',
        'max_dims' => 'A imagem não pode ter mais que 1920x1080'
      ]
    ])) {
      session()->setFlashdata('errors', $this->validator->getErrors());
      return redirect()->route('home');
    }

    if (!$img->hasMoved()) {
      $img->store('../../public/assets/img', $img->getName());

      session()->setFlashdata('uploaded', 'Uploaded successfully');
      return redirect()->route('home');
    }
  }
}
