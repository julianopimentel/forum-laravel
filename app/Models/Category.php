<?php

namespace App\Models;

use App\Traits\HasTimestamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

class Category extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    use HasTimestamps;

    protected $fillable = ['name', 'slug'];

    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class);
    }
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }
}
