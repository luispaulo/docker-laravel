<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StringService;

class StringController extends Controller
{
    protected $stringService;

    public function __construct(StringService $stringService)
    {
        $this->stringService = $stringService;
    }

    public function todasStringsMaisLongas(Request $request)
    {
        $request->validate([
            'inputArray' => 'required|array',
            'inputArray.*' => 'string|max:10',
        ]);

        $result = $this->stringService->todasStringsMaisLongas($request->input('inputArray'));

        return response()->json([
            'stringsMaisLongas' => $result
        ]);
    }
}
