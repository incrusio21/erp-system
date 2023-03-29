<?php

namespace Erp\Core\Controllers\App;

use Illuminate\Support\Collection;
use Erp\Modules\Document;

class Controller extends Document
{
    protected function setTable()
    {
        $this->table = config('erp.installed_app');
    }
}
