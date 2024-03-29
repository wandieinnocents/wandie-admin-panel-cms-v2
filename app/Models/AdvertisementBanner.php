<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementBanner extends Model
{
    use HasFactory;
    protected $table = 'advertisement_banners';
    protected $fillable = [
        'photo',
        'link'];
}
