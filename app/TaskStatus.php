<?php

namespace App;

use Filament\Support\Contracts\HasLabel;

enum TaskStatus:string implements HasLabel
{
    case ToDo = 'todo';
    case Inprogress = 'inprogress';
    case Done = 'done';
    case Rejected = 'rejected';

    public function getLabel(): ?string
    {
        return $this->name;
    }

}
