Extensions.my_website_com
=========================

Simple TYPO3 Extension using Fluid as Site template

Usage:
------

1. Download/clone to *typo3conf/ext/my_website_com*
2. (optionally) rename **all** occurrences of *my_website_com* and *MyWebsiteCom* to *your_domain_tld* and *YourDomainTld*
2. Include Extension TypoScript in your site TypoScript Template
3. Open TypoScript Constant Editor and specify **Root PID** and **base URL** of this installation
4. Adjust *Configuration/RealUrl/Configuration.local.php* if you want to use RealUrl

Note:
-----

NOTE: In this example I have disabled the creation of TYPO3s header code by adding *config.disableAllHeaderCode = 1* to the TypoScript setup.
With this in place, Extensions can't register their custom styles / scripts anymore so this makes only sense, if you know what you're doing and if you want to take full control of the included assets.
A different solution would be to add required Stylesheets and JavaScripts via *includeCSS* and *includeJS* and put the head of your Fluid template in &lt;f:comment /&gt; or &lt;f:section /&gt; tags.