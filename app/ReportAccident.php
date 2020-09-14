<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class ReportAccident extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'report_accidents';

    protected $appends = [
        'accident_photos',
    ];

    protected $dates = [
        'date_of_accident',
        'estimate_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'location',
        'offender',
        'offender_id_number',
        'car_number',
        'issuer',
        'date_of_accident',
        'accident_time',
        'estimate_reference',
        'estimate_date',
        'damage_statement_1',
        'damage_value_1',
        'notes_1',
        'damage_statement_2',
        'damage_value_2',
        'notes_2',
        'damage_statement_3',
        'damage_value_3',
        'notes_3',
        'damage_statement_4',
        'damage_value_4',
        'notes_4',
        'damage_statement_5',
        'damage_value_5',
        'notes_5',
        'damage_statement_6',
        'damage_value_6',
        'notes_6',
        'damage_statement_7',
        'damage_value_7',
        'notes_7',
        'damage_statement_8',
        'damage_value_8',
        'notes_8',
        'damage_statement_9',
        'damage_value_9',
        'notes_9',
        'damage_statement_10',
        'damage_value_10',
        'notes_10',
        'name_1',
        'dep_mang_1',
        'name_2',
        'dep_mang_2',
        'name_3',
        'dep_mang_3',
        'name_4',
        'dep_mang_4',
        'confidence',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getDateOfAccidentAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfAccidentAttribute($value)
    {
        $this->attributes['date_of_accident'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEstimateDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEstimateDateAttribute($value)
    {
        $this->attributes['estimate_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getAccidentPhotosAttribute()
    {
        $files = $this->getMedia('accident_photos');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview   = $item->getUrl('preview');
        });

        return $files;
    }
}
