<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    const TITLE = 'title';

    public function addVideo(string $title, string $filename, string $format): bool
    {
        $this->title = $title;
        $this->filename = $filename;
        $this->format = $format;
        return $this->save();
    }
}
