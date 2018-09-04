<?php

namespace SocialiteProviders\InterNachi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class InterNachiExtendSocialite
{
    /**
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('internachi', __NAMESPACE__ . '\InterNachiProvider');
    }
}
