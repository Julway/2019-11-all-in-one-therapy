<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Patient extends Model
{
    use Sortable;
    public $sortable = ['svnr','firstname', 'lastname', 'address', 'plz', 'city', 'country'];
    //
}
