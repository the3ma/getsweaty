<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Page extends Model
{
    public function blocks()
    {
        return $this->BelongsToMany('App\ContentBlocks', 'page_blocks', 'page_id', 'id');
    }
}
