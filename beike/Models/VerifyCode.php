<?php
/**
 * VerifyCode.php
 *
 * 
 * @created    2022-07-07 15:22:18
 * @modified   2022-07-07 15:22:18
 */

namespace Beike\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class VerifyCode extends Base
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['account', 'code'];
}
