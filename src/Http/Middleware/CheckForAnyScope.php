<?php

namespace kashifali\Sanctum\Http\Middleware;

use kashifali\Sanctum\Exceptions\MissingScopeException;

/**
 * @deprecated
 * @see \kashifali\Sanctum\Http\Middleware\CheckForAnyAbility
 */
class CheckForAnyScope
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$scopes
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\AuthenticationException|\kashifali\Sanctum\Exceptions\MissingScopeException
     */
    public function handle($request, $next, ...$scopes)
    {
        try {
            return (new CheckForAnyAbility())->handle($request, $next, ...$scopes);
        } catch (\kashifali\Sanctum\Exceptions\MissingAbilityException $e) {
            throw new MissingScopeException($e->abilities());
        }
    }
}
