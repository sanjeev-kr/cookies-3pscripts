# Sanjeev_Cookies3Pscripts Magento 2 module

Sanjeev_Cookies3Pscripts is a module for Magento 2. This module helps to embed 3rd parties cookies banner script of CookiesBot, CookiesYes and CookiesFirst from store configurations.

## Install with Composer
```
composer require sanjeev-kr/cookies-3pscripts
php bin/magento module:enable Sanjeev_Cookies3Pscripts
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
```

## Install Manually
- Download zip and extract
- Create a new directory Sanjeev/Cookies3Pscripts in app/code directory and copy files from cookies-3pscripts folder and paste files in Sanjeev/Cookies3Pscripts directory.
- And run below commands

```
php bin/magento module:enable Sanjeev_Cookies3Pscripts
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
```
## How to enable Cookie banner
- In admin, Go to Stores -> Settings -> Configuration -> General.
- Click on Web under General tab.
- Now click on 3rd Parties Cookies Consent Scripts.
- Enable your desired cookie banner provider out of CookiesBot, CookiesYes and CookiesFirst by selecting Yes from dropdown.
- As soon as, your select Yes, a text box will appear for code. Add your code, obtained from provider and save configuration.
- After saving configuration, flush cache of magento.


