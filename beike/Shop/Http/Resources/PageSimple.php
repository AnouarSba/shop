<?php
/**
 * PageSimple.php
 *
 * @copyright  2024 beikeshop.com - All Rights Reserved
 * @link       https://beikeshop.com
 * @author     Edward Yang <yangjin@guangda.work>
 * @created    2024-03-01 09:48:23
 * @modified   2024-03-01 09:48:23
 */

namespace Beike\Shop\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageSimple extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    public function toArray($request): array
    {
        $description = $this->description;

        return [
            'id'             => $this->id,
            'image'          => $this->image ? image_origin($this->image) : '',
            'title'          => $description? $description->title : '',
            'title_format'   => sub_string($description? $description->title : '', 64),
            'summary'        => $description? $description->summary : '',
            'summary_format' => sub_string($description? $description->summary : '', 100),
            'url'            => $this->url,
        ];
    }
}
