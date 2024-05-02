<?php

namespace kashifali\Sanctum\Contracts;

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
     * @return \kashifali\Sanctum\NewAccessToken
     */
    public function createToken(string $name, array $abilities = ['*'], DateTimeInterface $expiresAt = null);

    /**
     * Get the access token currently associated with the user.
     *
     * @return \kashifali\Sanctum\Contracts\HasAbilities
     */
    public function currentAccessToken();

    /**
     * Set the current access token for the user.
     *
     * @param  \kashifali\Sanctum\Contracts\HasAbilities  $accessToken
     * @return \kashifali\Sanctum\Contracts\HasApiTokens
     */
    public function withAccessToken($accessToken);
}
