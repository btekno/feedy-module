<?php

namespace Modules\Feedy\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Campaign extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fd_campaigns';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 
        'user_id', 
        'name', 
        'private', 
        'title', 
        'subtitle', 
        'confirm_title', 
        'confirm_subtitle', 
        'widget_color', 
        'widget_position', 
        'widget_type', 
        'widget_button', 
        'enable_email', 
        'enable_rating'
    ];

    /**
     * Boot function from Laravel.
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::uuid1()->toString();
        });
    }

    /**
     * A scope for UUID
     *
     * @var array
     */
    public function scopeUuid($query, $string) 
    {
        return $query->whereUuid($string);
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() 
    {
        return $this->hasMany('Modules\My\Entities\User', 'user_id');
    }


    /**
     * Define a one-to-many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responses() 
    {
        return $this->hasMany('Modules\Feedy\Entities\Response', 'campaign_id');
    }
}
