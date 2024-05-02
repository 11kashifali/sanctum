<?php

namespace KashifAliTZ\Sanctum;

use KashifAliTZ\Sanctum\Contracts\HasAbilities;

class TransientToken implements HasAbilities
{
    /**
     * Determine if the token has a given ability.
     *
     * @param  string  $ability
     * @return bool
     */
    public function can($ability)
    {
        return true;
    }

    /**
     * Determine if the token is missing a given ability.
     *
     * @param  string  $ability
     * @return bool
     */
    public function cant($ability)
    {
        return false;
    }
}
