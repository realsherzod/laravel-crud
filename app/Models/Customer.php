<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

class Customer extends Model
{
    use HasFactory, Uploadable;

    protected $table = 'customers';
    protected $guarded = ['id'];

    protected $uploadableImages = [
        'image' => ['thumb' => 150, 'medium' => 500, 'normal' => 700],
    ];

    protected $uploadableFiles = [
        'pdf'
    ];

    protected $imageResizeTypes = [
        'medium' => false,
    ];

    public $uploadFolderName = 'customers';

    public function getNormalImagePath()
    {
        return $this->getImagePath('image', 'normal');
    }

    public function getPdfPath()
    {
        return $this->getFilePath('pdf');
    }
}
