<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSeo extends Model
{
    use HasFactory;

    protected $fillable = ['site_title', 'site_description', 'site_keywords', 'site_robots', 'site_sitemap','site_rss','site_google_verify'];
}
