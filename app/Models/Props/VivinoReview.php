<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoReview
 *
 * @property int $id
 * @property int|null $vivino_id
 * @property string|null $rating
 * @property string|null $note
 * @property string|null $tagged_note
 * @property string|null $language
 * @property int $user
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereTaggedNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereVivinoId($value)
 * @mixin \Eloquent
 * @property int|null $vintage_id
 * @property int|null $wine_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereVintageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereWineId($value)
 * @property int|null $flavor_group
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereFlavorGroup($value)
 * @property string|null $note_ru
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoReview whereNoteRu($value)
 */
class VivinoReview extends Model
{
    protected $table = 'vivino_reviews';
    protected $fillable = ['vivino_id','vintage_id','wine_id','rating','note','note_ru','tagged_note','language','user','flavor_group'];


    public function userData(){
        return $this->hasOne(VivinoUser::class,'vivino_id','user');
    }
}

