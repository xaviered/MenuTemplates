<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function preview(Request $request, string $slug)
    {
        $template = new \App\RestfulRecords\Template($slug);
        $categories = new \App\RestfulRecords\ProductCollection();
        $categories->loadData($request->get('menu'));
        $backgroundType = $request->get('backgroundType') ?? 'web';

        return view('template-preview', [
            'template' => $template,
            'categories' => $categories,
            'backgroundType' => $backgroundType,
        ]);
    }
}
