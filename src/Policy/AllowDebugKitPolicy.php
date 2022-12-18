<?php

declare(strict_types=1);

namespace App\Policy;

use Authorization\IdentityInterface;
use CakeDC\Auth\Policy\PolicyInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * AllowDebugKit policy
 */
class AllowDebugKitPolicy implements PolicyInterface
{
    /**
     * Check permission
     *
     * @param \Authorization\IdentityInterface|null $identity user identity
     * @param \Psr\Http\Message\ServerRequestInterface $resource server request
     * @return bool
     */
    public function canAccess(?IdentityInterface $identity, ServerRequestInterface $resource): bool
    {
        /**
         * @var ServerRequest $resource
         */
        //dd($resource->getParam('plugin'));
        return $resource->getParam('plugin') === 'DebugKit';
    }
}
