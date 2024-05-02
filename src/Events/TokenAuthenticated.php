<?php

namespace kashifali\Sanctum\Events;

class TokenAuthenticated
{
    /**
     * The personal access token that was authenticated.
     *
     * @var \kashifali\Sanctum\PersonalAccessToken
     */
    public $token;

    /**
     * Create a new event instance.
     *
     * @param  \kashifali\Sanctum\PersonalAccessToken  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
}
