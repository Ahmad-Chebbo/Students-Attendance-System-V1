<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property mixed name
 * @property mixed email
 * @property mixed phone
 * @property mixed attendances
 * @property mixed present_count
 * @method static create(array $validated)
 * @method static WhereNotIn(string $string, $pluck)
 * @method static find(int|string $key)
 * @method static findorfail(int|string $key)
 * @method static count()
 */
class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    /**
     * @return BelongsToMany
     */
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'subject_student', 'student_id', 'subject_id')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function attendances(): BelongsToMany
    {
        return $this->belongsToMany(Attendance::class)->withPivot('status');
    }

    /**
     * @return int
     */
    public function present_count(): int
    {
        return $this->belongsToMany(Attendance::class)->wherePivot('status', 1)->count();
    }

    /**
     * @return int
     */
    public function absent_count(): int
    {
        return $this->belongsToMany(Attendance::class)->wherePivot('status', 0)->count();
    }
}
