<?php
/**
 * Page.php
 *
 * 
 * @created    2022-08-08 15:10:57
 * @modified   2022-08-08 15:10:57
 */

namespace Beike\Models;

class PageDescription extends Base
{
    protected $fillable = [
        'page_id', 'locale', 'title', 'content', 'summary', 'meta_title', 'meta_description', 'meta_keywords',
    ];
}
