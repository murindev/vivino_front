<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Parser\ParserLog
 *
 * @property int $id
 * @property string|null $url
 * @property string|null $node
 * @property string|null $code
 * @property string|null $message
 * @property int|null $ses_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereNode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereSesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereUrl($value)
 * @mixin \Eloquent
 * @property string|null $entity
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parser\ParserLog whereEntity($value)
 */
class ParserLog extends Model
{
    protected $table = 'parser_logs';
    protected $fillable = ['entity','url','node','code','message','ses_id'];
}




