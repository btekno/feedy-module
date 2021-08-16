<?php

namespace Modules\Feedy\Traits;

trait Feedy
{
	/**
     * Define a one-to-one relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fd() 
    {
        return $this->hasOne(\Modules\Feedy\Entities\User::class);
    }

	/**
     * Define a one-to-many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fd_campaigns() 
    {
        return $this->hasMany(\Modules\Feedy\Entities\Campaign::class);
    }
}