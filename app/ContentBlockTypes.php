<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentBlockTypes extends Model
{
    public function block()
    {
        return $this->belongsTo(ContentBlocks::class);
    }
}
