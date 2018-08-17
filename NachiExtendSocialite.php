<?php

namespace SocialiteProviders\InterNachi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class NachiExtendSocialite
{
    /**
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('nachi', __NAMESPACE__ . '\Provider');
    }
}
