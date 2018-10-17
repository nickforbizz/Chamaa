<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property int $category_id
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Category $category
 * @property Business $business
 */
class BusinessesCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'businesses_category';

    /**
     * @var array
     */
    protected $fillable = ['business_id', 'category_id', 'status', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function business()
    {
        return $this->belongsTo('App\Business');
    }
}
