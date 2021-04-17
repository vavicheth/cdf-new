<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RichanFongdasen\EloquentBlameable\BlameableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use \DateTimeInterface;

class Document extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory,BlameableTrait;
    use Loggable;

    public $table = 'documents';

    protected $appends = [
        'document_file',
    ];

    protected $dates = [
        'dateline',
        'date_complete',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'letter_code',
        'code_in',
        'code_out',
        'document_code',
        'from_organisation',
        'category_id',
        'organisation_id',
        'description',
        'document_type_id',
        'dateline',
        'date_complete',
        'complete',
        'submit',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function setSubmitAttribute($value)
    {
        if ($value == 1) {
            $this->documentComments()->update(['submit'=>1]);
        }else{
            $this->documentComments()->update(['submit'=>0]);
        }
        $this->attributes['submit'] = $value;
    }

    public function documentComments()
    {
        return $this->hasMany(Comment::class, 'document_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['ordering']);
    }

    public function getDocumentFileAttribute()
    {
        return $this->getMedia('document_file');
    }

    public function document_type()
    {
        return $this->belongsTo(DocumentType::class, 'document_type_id');
    }

    public function getDatelineAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDatelineAttribute($value)
    {
        $this->attributes['dateline'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateCompleteAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateCompleteAttribute($value)
    {
        $this->attributes['date_complete'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getType()
    {
        return $this->document_type->value;
    }

    public function getHoursCreated()
    {
        $hours=Carbon::now()->diffInHours($this->attributes['created_at']);
        return $hours;
    }

    public function isEditOver($i = 0)
    {
        $hours=Carbon::now()->diffInHours($this->attributes['created_at']);
        if ($i ==0) {
            $i=(int)(AppSeeting::where('name','edit_hour')->value('value'));
        }

        if ($this->getHoursCreated() >= $i) {
            return true;
        }else{
            return false;
        }
    }

    public function isDatelineOver($i = 0)
    {
        if ($this->attributes['dateline'] == null) {
            return false;
        }else{
            $hours=Carbon::now()->diffInHours($this->attributes['dateline']);
            if ($i ==0) {
                $i=(int)(AppSeeting::where('name','dateline_warning')->value('value'));
            }
            if ($hours <= $i) {
                return true;
            }else{
                return false;
            }
        }
    }

}
