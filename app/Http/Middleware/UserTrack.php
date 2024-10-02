<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\UserTracking;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTrack
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = auth()->check() ? auth()->user()->id : 0;
        $sessionId = session()->getId();
        $requestUrl = $request->fullUrl();
        $dateTime = Carbon::now();
        $clientIp = $request->ip();
        $userAgent = $request->header('User-Agent');
        $referer = $request->header('referer') == null ?  $requestUrl  : $request->header('referer') ;
        $data = [
            'login_user_id' => $userId,
            'session_id' => $sessionId,
            'requested_url' => $requestUrl,
            'date_time' => $dateTime,
            'user_ip' => $clientIp,
            'user_device' => $userAgent,
            'referer_page' => $referer,
        ];

        UserTracking::create($data);

        return $next($request);

    }
}
