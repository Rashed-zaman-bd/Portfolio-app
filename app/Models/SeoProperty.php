<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoProperty extends Model
{
    use HasFactory;

    // If your migration created "seoproperties" (no underscore), keep this.
    // If you migrated "seo_properties", you can remove or change this.
    protected $table = 'seoproperties';

    protected $fillable = [
        'pageName',
        'title',
        'keywords',
        'description',
        'ogSiteName',
        'ogUrl',
        'ogTitle',
        'ogDescription',
        'ogImage',
    ];
}
