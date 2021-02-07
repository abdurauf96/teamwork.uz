<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Link extends Model
{
    use LogsActivity;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'links';

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
    protected $fillable = ['about_title_uz', 'about_desc_uz', 'contact_title_uz', 'contact_desc_uz', 'addres_uz', 'footer_uz', 'about_title_ru', 'about_desc_ru', 'contact_title_ru', 'contact_desc_ru', 'addres_ru', 'footer_ru', 'about_title_en', 'about_desc_en', 'contact_title_en', 'contact_desc_en', 'addres_en', 'footer_en', 'project_name', 'project_logo', 'phone1', 'phone2', 'email', 'tg', 'insta', 'fb', 'youtube', 'tiktok', 'wk'];

    

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
