<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceTechnology extends Model
{
    use LogsActivity;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'service_technologies';

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
    protected $fillable = ['service_id', 'image'];

    public function service()
    {
        return $this->belongsTo(Service::class);
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
