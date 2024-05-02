<?php

namespace KashifAliTZ\Sanctum\Contracts;

use DateTimeInterface;

interface HasApiTokens
{
    /**
     * Get the access tokens that belong to model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function tokens();

    /**
     * Determine if the current API token has a given scope.
     *
     * @param  string  $ability
     * @return bool
     */
    public function tokenCan(string $ability);

    /**
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array  $abilities
     * @param  \DateTimeInterface|null  $expiresAt
     * @return \KashifAliTZ\Sanctum\NewAccessToken
     */
    public function createToken(string $name, array $abilities = ['*'], DateTimeInterface $expiresAt = null);

    /**
     * Get the access token currently associated with the user.
     *
     * @return \KashifAliTZ\Sanctum\Contracts\HasAbilities
     */
    public function currentAccessToken();

    /**
     * Set the current access token for the user.
     *
     * @param  \KashifAliTZ\Sanctum\Contracts\HasAbilities  $accessToken
     * @return \KashifAliTZ\Sanctum\Contracts\HasApiTokens
     */
    public function withAccessToken($accessToken);
}
