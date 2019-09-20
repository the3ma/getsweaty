<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ContentBlocks extends Model
{
    public function page()
    {
        return $this->BelongsToMany('App\Page', 'page_blocks', 'id', 'page_id');
    }
    public function type()
    {
        return $this->belongsTo('App\ContentBlockTypes');
    }
}
