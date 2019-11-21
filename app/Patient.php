<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Patient extends Model
{
    use Sortable;
    public $sortable = ['svnr', 'lastname','firstname', 'address', 'plz', 'city', 'country'];
    //
}
