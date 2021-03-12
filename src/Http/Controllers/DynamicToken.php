<?php

namespace Webographen\DynamicToken\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class DynamicToken extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Get refreshed CSRF token.
     *
     * @return string
     */
    public function getRefresh(Request $request)
    {
        // Determine if the request is actually coming from our own website on non local enviroments.
        if (config('app.env') != 'local')
        {
            $referer = request()->headers->get('referer');
            $contains = str_contains($referer, request()->getHttpHost());
            if (empty($referer) || !$contains) {
                abort(404);
            }
        }

        return response()->json([
            'csrf_token' => csrf_token()
        ]);
    }
}