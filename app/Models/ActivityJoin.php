<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityJoin extends Model {
    /**
     * [$guarded description]
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * [$guarded description]
     *
     * @var string
     */
    protected $table = "activity_join";

    protected $primaryKey = "join_id";
}
