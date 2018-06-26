<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $fillable = ['document_type_id', 'details'];

    public function documentType () {
        return $this->hasOne(DocumentType::class, 'document_type_id', 'id');
    }
}
