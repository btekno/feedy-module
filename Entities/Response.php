<?php

namespace Modules\Feedy\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Response extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fd_responses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'campaign_id', 
        'name', 
        'email', 
        'message', 
        'rate', 
        'ip'
    ];

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campaign() 
    {
        return $this->belongsTo('Modules\Feedy\Entities\Campaign', 'campaign_id');
    }
}
