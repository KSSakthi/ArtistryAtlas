<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonFields;

class CommonFieldsController extends Controller
{
  
    public function show(CommonFields $commonFields)
    {
        return view('common-fields.show', compact('commonFields'));
    }
}
