<?php
/**
 * AttributeValueDescription.php
 *
 
 * @created    2023-01-03 20:22:18
 * @modified   2023-01-03 20:22:18
 */

namespace Beike\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttributeValueDescription extends Base
{
    use HasFactory;

    protected $fillable = ['attribute_value_id', 'locale', 'name'];
}
