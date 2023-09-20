<?php

use Laravel\Scout\Searchable;

class SearchableConnection extends Model
{
    use Searchable;

    protected $fillable = ['name', 'unique_name'];

    public function toSearchableArray()
    {
        return $this->toArray();
    }
}
