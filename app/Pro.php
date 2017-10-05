<?php

namespace App;
use Matriphe\Imageupload\ImageuploadModel;
use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
     protected $fillable = ['name','type','image','subtype','price','deposit','detail','day','mulct'];
}
class Image extends ImageuploadModel
{
    protected $table = 'images';
}
