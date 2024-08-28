<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogPage;
use Carbon\Carbon;

class LogPageVisits
{
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();

        // Skip logging for URLs that start with "dashboard"
        if (strpos($path, 'dashboard') === 0) {
            return $next($request);
        }

        // Get user information
        $url = $request->fullUrl();
        $method = $request->method();
        $ip = $request->ip();
        $userAgent = $request->header('User-Agent');
        $referrer = $request->header('Referer');
        $locale = app()->getLocale();

        // Check if a log entry for the same URL exists within the last 20 minutes
        $lastLog = LogPage::where('url', $url)
            ->where('ip', $ip)
            ->where('user_agent', $userAgent)
            ->where('created_at', '>=', Carbon::now()->subMinutes(20))
            ->first();

        // Only create a new log entry if no recent entry exists
        if (!$lastLog) {
            LogPage::create([
                'url' => $url,
                'method' => $method,
                'ip' => $ip,
                'user_agent' => $userAgent,
                'referrer' => $referrer,
                'locale' => $locale,
            ]);
        }

        return $next($request);
    }
}
