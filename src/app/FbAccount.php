<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class FbAccount extends Model
{
    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fbAccount';

    /**
     * Get the user that owns the FbAccount.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'email');
    }
}
