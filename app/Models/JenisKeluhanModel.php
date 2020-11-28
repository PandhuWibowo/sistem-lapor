<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BagianModel;

class JenisKeluhanModel extends Model {
  protected $table = 'jenis_keluhan';
  protected $fillable = ['nm_keluhan', 'kd_bagian_fk'];
  protected $primaryKey = 'id_jenis_keluhan';
  public $incrementing = false;
  protected $keyType = 'string';

  /**
 * Get the jenis keluhan that owns the bagian.
 */
  public function bagian()
  {
    return $this->belongsTo(BagianModel::class, 'kd_bagian_fk', 'kd_bagian');
  }
}
