<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

 
class Cliente extends Model
{
    

    use SoftDeletes;
    
    protected $fillable = ['username', 'dias_registrados'];
    
    public static function boot()
    {
        parent::boot();

       Cliente::observe(new \App\Observers\UserActionsObserver);
    }

   
    
}
