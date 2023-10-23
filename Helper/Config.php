<?php
/**
 * Copyright 2023 Sanjeev Kumar
 * NOTICE OF LICENSE
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0

 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category  Sanjeev
 * @package   Sanjeev_Cookies3Pscripts
 * @copyright Copyright (c) 2023
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */

namespace Sanjeev\Cookies3Pscripts\Helper;

use Magento\Store\Model\ScopeInterface;

class Config
{
    const XML_COOKIE_BOT_CODE = 'web/3pscripts/cookiebot_cbid';

    const XML_COOKIE_BOT_ENABLE = 'web/3pscripts/cookiebot_active';

    const XML_COOKIE_YES_CODE = 'web/3pscripts/cookieyes_code';

    const XML_COOKIE_YES_ENABLE = 'web/3pscripts/cookieyes_active';

    const XML_COOKIE_FIRST_CODE = 'web/3pscripts/cookiefirst_code';

    const XML_COOKIE_FIRST_ENABLE = 'web/3pscripts/cookiefirst_active';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig

    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return bool
     */
    public function isCookiebotEnabled() 
    {
        return (bool) $this->scopeConfig->getValue(self::XML_COOKIE_BOT_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    
    /**
     * @return string
     */
    public function getCookiebotCode()
    {
        return (string) $this->scopeConfig->getValue(self::XML_COOKIE_BOT_CODE, ScopeInterface::SCOPE_WEBSITE);
    }


    /**
     * @return bool
     */
    public function isCookieYesEnabled() 
    {
        return (bool) $this->scopeConfig->getValue(self::XML_COOKIE_YES_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    
    /**
     * @return string
     */
    public function getCookieYesCode()
    {
        return (string) $this->scopeConfig->getValue(self::XML_COOKIE_YES_CODE, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return bool
     */
    public function isCookieFirstEnabled() 
    {
        return (bool) $this->scopeConfig->getValue(self::XML_COOKIE_FIRST_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    
    /**
     * @return string
     */
    public function getCookieFirstCode()
    {
        return (string) $this->scopeConfig->getValue(self::XML_COOKIE_FIRST_CODE, ScopeInterface::SCOPE_WEBSITE);
    }
 
}
