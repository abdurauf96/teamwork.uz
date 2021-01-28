<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Service extends Model
{
    use LogsActivity;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_uz', 'name_ru', 'name_en', 'title_uz', 'title_ru', 'title_en', 'body_uz', 'body_ru', 'body_en', 'icon', 'seo_desc', 'seo_keyword', 'slug', 'footer'];

    public function types()
    {
        return $this->hasMany(ServiceType::class);
    }
    public function technologies()
    {
        return $this->hasMany(ServiceTechnology::class);
    }

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
