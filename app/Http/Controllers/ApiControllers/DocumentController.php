<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\DocumentType;

class DocumentController extends Controller
{
    public function saveDocument ($document_type, Request $request) {
        $docType = DocumentType::where('name', $document_type)->first();

        if ($docType) {
            $this->validate($request, [
                'details' => 'array|nullable'
            ]);

            return Document::create([
                'document_type_id' => $docType->id,
                'details' => json_encode($request->details)
            ]);
        }

        abort(404);
    }
}