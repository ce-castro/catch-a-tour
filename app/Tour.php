<?php

namespace App;

class Tour extends Model
{
    //protected $fillable = ['category_id', 'name', 'url', 'sku', 'description', 'runs', 'duration', 'departs', 'includes', 'kids_age', 'dont_forget', 'orden', 'status', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }

//    public function price(){
//        return $this->hasMany(TourPrice::class);
//    }
//    public function schedulde(){
//        return $this->hasMany(TourSchedule::class);
//    }

    public function pdfconfirmation(){
        return $this->hasMany(PdfConfirmation::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
