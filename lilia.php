<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "SITUS SLOT TERGACOR TERPERCAYA BOSKUUU 2024";
}

if (isset($_GET['sepeda'])) {
    $filename = "brandlist.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['sepeda']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'https';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

?>

<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US"  data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is Squarespace. --><!-- vibraphone-flamingo-y7kz -->
<base href="">
<meta charset="utf-8" />
<title> <?php echo $BRAND; ?> Selalu Dicari Pemain Slot Karena Scatter Hitamnya</title>
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" /><link rel="icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico"/>
<link rel="canonical" href="<?php echo $urlPath ?>"/>
<link rel="amphtml" href="https://nagawarnahijau.shop/amp/sepeda/?amp=<?php echo $BRAND; ?>">
<meta property="og:site_name" content="<?php echo $BRAND; ?>"/>
<meta property="og:title" content=" <?php echo $BRAND; ?> Selalu Dicari Pemain Slot Karena Scatter Hitamnya"/>
<meta property="og:url" content="<?php echo $urlPath ?>"/>
<meta property="og:type" content="product"/>
<meta property="og:description" content="diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah mendapatkan scatter hitam. Situs Gacor"/>
<meta property="og:image" content="http://static1.squarespace.com/static/665b22cbcc0df27471a18a26/665b244166b67800b9e765d6/665b244ee788e97c21c65607/1717251555720/bahaninibosterbaru3.jpg?format=1500w"/>
<meta property="og:image:width" content="720"/>
<meta property="og:image:height" content="720"/>
<meta property="product:price:amount" content="100000.00"/>
<meta property="product:price:currency" content="IDR"/>
<meta property="product:availability" content="instock"/>
<meta property="product:original_price:amount" content="250000.00"/>
<meta property="product:original_price:currency" content="IDR"/>
<meta property="product:sale_price:amount" content="100000.00"/>
<meta property="product:sale_price:currency" content="IDR"/>
<meta itemprop="name" content=" <?php echo $BRAND; ?> Selalu Dicari Pemain Slot Karena Scatter Hitamnya"/>
<meta itemprop="url" content="<?php echo $urlPath ?>"/>
<meta itemprop="description" content="diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah mendapatkan scatter hitam. Situs Gacor"/>
<meta itemprop="thumbnailUrl" content="http://static1.squarespace.com/static/665b22cbcc0df27471a18a26/665b244166b67800b9e765d6/665b244ee788e97c21c65607/1717251555720/bahaninibosterbaru3.jpg?format=1500w"/>
<link rel="image_src" href="http://static1.squarespace.com/static/665b22cbcc0df27471a18a26/665b244166b67800b9e765d6/665b244ee788e97c21c65607/1717251555720/bahaninibosterbaru3.jpg?format=1500w" />
<meta itemprop="image" content="http://static1.squarespace.com/static/665b22cbcc0df27471a18a26/665b244166b67800b9e765d6/665b244ee788e97c21c65607/1717251555720/bahaninibosterbaru3.jpg?format=1500w"/>
<meta name="twitter:title" content=" <?php echo $BRAND; ?> Selalu Dicari Pemain Slot Karena Scatter Hitamnya"/>
<meta name="twitter:image" content="http://static1.squarespace.com/static/665b22cbcc0df27471a18a26/665b244166b67800b9e765d6/665b244ee788e97c21c65607/1717251555720/bahaninibosterbaru3.jpg?format=1500w"/>
<meta name="twitter:url" content="https://vibraphone-flamingo-y7kz.squarespace.com/store/p/slot456-selalu-dicari-pemain-slot-karena-scatter-hitamnya"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah mendapatkan scatter hitam. Situs Gacor"/>
<meta name="description" content="diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali 
mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah 
mendapatkan scatter hitam. Situs Gacor" />
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" src="//use.typekit.net/ik/D5V3043BaFK_5GRxfXVmmQrxAE-VJLrQp7u3kxDEaNSfeTJgfFHN4UJLFRbh52jhWDjhFAJkwcFKjhw3ZejkFDbawAIU5eIkFyGMJ6NGjAUojW4qOAsTSagCjWqK21gkjAiljWsTjhIlihmKH6GJojtfIMMjMkMfH6qJR89bMs6fJMJ7fbKbmsMgeMw6MKG4fJUmIMIjgkMfH6qJRu9bMs6wJMJ7fbKFmsMgegI6MTMgDwWCC6j.js"></script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/user-account-core-d2cabf0c945e56bfefc1-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/user-account-core-d2cabf0c945e56bfefc1-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-cc9b242dbfe400640d87-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-2e2c8005e5a45144acfd-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-bb0683614c41f8a11085-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-420f173018820a5cd3fe-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-50d4e6e8bb6adc82d5d1-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-20b8d8fa4be258ba9b0a-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-7951ad0ad31911fbe348-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-4e7c3ca4b580e516b1ec-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-70059801aaf61e670f2d-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-765799fb933771f34c14-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-6a9efb08629e5032d297-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-13d171ce3b95d7f26b19-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-8ae795beeabf6845076c-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-64b8938cf9ce62400835-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-84d849c1eade7a08d59e-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-7673324a02479e417d94-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-af4ecbe1c6d52e056d58-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-99f68ab7c017f5842bc2-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-fc4cdbcf05cd6cd955d4-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-b9efee358f56ea8bf33b-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-c14aab6471cfad39d8f4-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-4b2da4198730ee7f8660-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-177101dab03c3e13f3eb-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-7e5e88a633a9dd74f90d-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-3379dcea85e3e37f623d-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-c722a9ad2cceaa887071-min.en-US.js"}},"pageType":50,"website":{"id":"665b22cbcc0df27471a18a26","identifier":"vibraphone-flamingo-y7kz","websiteType":1,"contentModifiedOn":1717251554119,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{"value":3,"expiration":1718458315036},"language":"en-US","timeZone":"Asia/Jakarta","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"WIB","siteTitle":"<?php echo $BRAND; ?>","fullSiteTitle":"Selalu Dicari Pemain Slot Karena Scatter Hitamnya \u2014 <?php echo $BRAND; ?>","siteDescription":{"html":"","raw":false},"shareButtonOptions":{"8":true,"7":true,"1":true,"3":true,"4":true,"6":true,"2":true},"authenticUrl":"https://vibraphone-flamingo-y7kz.squarespace.com","internalUrl":"https://vibraphone-flamingo-y7kz.squarespace.com","baseUrl":"https://vibraphone-flamingo-y7kz.squarespace.com","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1717248715197,"profileUrl":"https://instagram.com/squarespace","id":"665b22cbcc0df27471a18a3c","websiteId":"665b22cbcc0df27471a18a26","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"serviceName":"instagram-unauth","pushAvailable":true}],"createdOn":1717248715036,"templateId":"5c5a519771c10ba3470d8101","installationId":"665b22cbcc0df27471a18a2e","templateWebsiteId":"65c68b0da0fd06022768fe71","hasPassword":false,"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"revalidateBefore":1717249964568,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":true},"websiteSettings":{"id":"665b22cbcc0df27471a18a29","websiteId":"665b22cbcc0df27471a18a26","subjects":[],"country":"ID","state":"JK","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":{"raw":false},"termsOfService":{"raw":false},"privacyPolicy":{"raw":false},"storeMailingList":{"connected":false,"list":"","useSingleOptIn":false},"expressCheckout":false,"continueShoppingLinkUrl":"/","testModeOn":true,"useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"isApplePayEnabled":false,"isPaymentRequestEnabled":true,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"merchantLowStockAlertThreshold":5,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"IDR","value":"0.00"},"instagramShoppingLinkDestination":1,"storeMigratedToProductCollections2_0":false,"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":true,"signupAllowed":true}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":""},"websiteCloneable":false,"collection":{"title":"Store","id":"665b244166b67800b9e765d6","fullUrl":"/store","type":13,"permissionType":1},"item":{"title":"Slot123: Selalu Dicari Pemain Slot Karena Scatter Hitamnya","id":"665b244ee788e97c21c65607","fullUrl":"/store/p/slot456-selalu-dicari-pemain-slot-karena-scatter-hitamnya","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"true","header-logo-height":"20px","header-mobile-logo-max-height":"30px","header-vert-padding":"1vw","header-width":"Full","maxPageWidth":"3000px","pagePadding":"3vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"2","tweak-blog-basic-grid-image-aspect-ratio":"3:2 Standard","tweak-blog-basic-grid-image-spacing":"30px","tweak-blog-basic-grid-meta-spacing":"17px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"16px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"75","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Narrow","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"64px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"10px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"22px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"231px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.6s","tweak-global-animations-animation-duration":"0.90s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"fade","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"true","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"1:1 Square","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"53%","tweak-product-basic-item-hover-action":"Zoom","tweak-product-basic-item-image-spacing":"10vw","tweak-product-basic-item-image-zoom-factor":"1.5","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"4vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 Square","tweak-products-image-text-spacing":"2vw","tweak-products-mobile-columns":"1","tweak-products-text-alignment":"Middle","tweak-products-width":"Full","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["rte_refactor_release_a","campaigns_import_discounts","invoicing-on-personal-plans","commsplat_forms_visitor_profile","nested_categories_migration_enabled","template_translation_english_fallbacks","website_fonts","supports_versioned_template_assets","send_local_pickup_ready_email","google_consent_v2","campaigns_global_uc_ab","rte_text_highlights","i18n_beta_website_locales","summary_block_video_collections","commerce_etsy_product_import","fluid_engine_default_mobile_order","campaigns_thumbnail_layout","react_pages_panel","is_feature_gate_refresh_enabled","new_stacked_index","sticky_scroll","pages_panel_new_entry_point","digital_products_personal_plan_access","new_developer_flow","campaigns_discount_section_in_automations","hideable_header_footer_for_memberareas","rte_text_justify_align","commerce_paywall_renewal_notifications","commsplat_form_file_upload","customer_account_creation_recaptcha","content_ai_brand_identity","override_block_styles","fluid_engine_new_multiselect_actions","background_art_onboarding","link_editor_redesign","commerce_site_visitor_metrics","website_site_themes","unify_edit_mode_p1_70","website_form_improvements","pdp_subs_otp_buttons","pages_panel_v3_search_bar","crm_redesign_phase_1","campaigns_new_image_layout_picker","invoicing_landing_page","fluid_engine_clean_up_grid_contextual_change","fluid_engine","shape_block","nested_categories","toggle_preview_new_shortcut","collection_typename_switching","unify_edit_mode_p2","marketing_landing_page","commerce_subscription_renewal_notifications","unify_edit_mode_p1","hideable_header_footer","commerce_etsy_shipping_import","hide_header_footer_beta","visitor_react_forms","commerce_clearpay","enable_css_variable_tweaks","scripts_defer","seven_one_migration_updated_kb_links","crm_product_contacts_use_mfe","commerce_order_status_access","campaigns_discount_section_in_blasts","hideable_header_footer_for_videos","accounting_orders_sync","header_usability_improvements","member_areas_feature","hideable_header_footer_for_courses","customer_accounts_email_verification","pdp_subs_otp_visitor_site","seven_one_migration_cover_pages","website_form_effects","container_styles_improvements","themes"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"authenticatedAccount":{"id":"663b3b3ab32b2f765b63a22e","notificationsRead":{},"lastLoginOn":1715853087271,"displayName":"donjuan 1188","firstName":"donjuan","lastName":"1188","eligibleForMarketingDiscount":false,"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/663b3b3ab32b2f765b63a22e/a70dfdee-ff7a-49e1-9c93-e09a2ed88316/thirdPartyMemberAvatar-663b3b3ab32b2f765b63a22e-51d4e40c-d444-4938-94fe-0112b1027da3?format=300w","bio":"","roles":{},"email":"donjuan11.88.88@gmail.com","createdOn":1715157818309,"marketingId":"afe23f6e-5701-481b-9ffa-65f989299a8f","avatarAssetUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/663b3b3ab32b2f765b63a22e/a70dfdee-ff7a-49e1-9c93-e09a2ed88316/thirdPartyMemberAvatar-663b3b3ab32b2f765b63a22e-51d4e40c-d444-4938-94fe-0112b1027da3?format=300w","pseudonymAccount":false,"preferredLocale":"en-US"},"authenticatedAccountWebsiteSettings":{"id":"665b22cfa3dabf6d8a5c60b8"},"permissions":{"permissions":{"1":true}},"websiteRoles":{"1":true},"accessPermissions":[1225,1223,1419,1413,1220,1215,1517,1221,1212,1210,1310,1213,1921,1218,1217,1610,1516,1111,14,1810,1411,1422,1216,1311,1510,1912,1110,1228,1932,1420,1700,1112,1211,11,2066,1414,1135,1214,1423,1513,12,1230,13,1416,1512,1410,1930,1,1421,1219,1412,1511,1415,1701,18,1911,1229,1910,1233,1931,1224,1234,1612,1920,1226,0,1418,1611,15,1515,1417,1514],"memberAccountNames":{"663b3b3ab32b2f765b63a22e":{"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/663b3b3ab32b2f765b63a22e/a70dfdee-ff7a-49e1-9c93-e09a2ed88316/thirdPartyMemberAvatar-663b3b3ab32b2f765b63a22e-51d4e40c-d444-4938-94fe-0112b1027da3?format=300w","bio":"","displayName":"donjuan 1188"}},"impersonatedSession":false,"demoCollections":[{"collectionId":"65c68b1063bc2439a446960b","deleted":true},{"collectionId":"65d629f96ba4fe6a19bcd25b","deleted":false},{"collectionId":"65d62d27f0470326fa1b9c31","deleted":false},{"collectionId":"65d62d392e7bde1fca66f399","deleted":false},{"collectionId":"65d62d44dfba8a39705968fc","deleted":false}],"connectedAccounts":[{"serviceId":64,"addedOn":1717248715197,"profileUrl":"https://instagram.com/squarespace","id":"665b22cbcc0df27471a18a3c","websiteId":"665b22cbcc0df27471a18a26","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"serviceName":"instagram-unauth","pushAvailable":true}],"tzData":{"zones":[[420,null,"WIB",null]],"rules":{}},"product":{"variantAttributeNames":[],"variants":[{"id":"45868343-24b0-47e2-804b-5df6aa37da66","sku":"SQ4116527","price":{"currencyCode":"IDR","value":25000000,"decimalValue":"250000.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":10000000,"decimalValue":"100000.00","fractionalDigits":2},"onSale":true,"stock":{"unlimited":true},"attributes":{},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Jakarta","name":"Western Indonesia Time"}},"env":"PRODUCTION"};</script><script type="application/ld+json">{"url":"https://vibraphone-flamingo-y7kz.squarespace.com","name":"<?php echo $BRAND; ?>","description":"","@context":"http://schema.org","@type":"WebSite"}</script><script type="application/ld+json">{"name":"Selalu Dicari Pemain Slot Karena Scatter Hitamnya \u2014 <?php echo $BRAND; ?>","image":"http://static1.squarespace.com/static/665b22cbcc0df27471a18a26/665b244166b67800b9e765d6/665b244ee788e97c21c65607/1717251555720/bahaninibosterbaru3.jpg?format=1500w","description":"diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah mendapatkan scatter hitam. Situs Gacor","brand":"<?php echo $BRAND; ?>","offers":{"price":100000.00,"priceCurrency":"IDR","url":"https://vibraphone-flamingo-y7kz.squarespace.com/store/p/slot456-selalu-dicari-pemain-slot-karena-scatter-hitamnya","availability":"InStock","sku":"SQ4116527","@context":"http://schema.org","@type":"Offer"},"@context":"http://schema.org","@type":"Product"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/665b22cbcc0df27471a18a26/0/5c5a519771c10ba3470d8101/665b22cbcc0df27471a18a2e/1528/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
<!-- End of Squarespace Headers -->
    
      <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1716308142457-NTLQBPORVVYGYH5NWZVQ/static.css">
    
  </head>

  <body
    id="item-665b244ee788e97c21c65607"
    class="
      primary-button-style-solid primary-button-shape-rounded secondary-button-style-outline secondary-button-shape-underline tertiary-button-style-outline tertiary-button-shape-underline form-use-theme-colors form-field-style-outline form-field-shape-rounded form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-outline form-field-checkbox-color-inverted form-field-checkbox-shape-rounded form-field-checkbox-layout-fit form-field-radio-type-icon form-field-radio-fill-outline form-field-radio-color-inverted form-field-radio-shape-rounded form-field-radio-layout-fit form-field-survey-fill-outline form-field-survey-color-inverted form-field-survey-shape-rounded form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-left header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-product-subscription-display-radio tweak-product-basic-item-product-subscription-border-shape-square tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-11-square tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-description-position-below-price tweak-product-basic-item-description-position-mobile-below-add-to-cart-button tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-zoom tweak-product-basic-item-variant-picker-layout-dropdowns tweak-product-basic-item-add-to-cart-standalone tweak-product-basic-item-add-to-cart-mobile-standalone tweak-products-width-full tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-center image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-665b244166b67800b9e765d6 collection-type-products mobile-style-available sqs-seven-one
      
        show-pdp-subs-otp
      
      
        pdp_subs_otp_buttons_enabled
      
      
      
        
          
          
        
      
    "
    tabindex="-1"
  >
    <div
      id="siteWrapper"
      class="clearfix site-wrapper"
    >
      
        <div id="floatingCart" class="floating-cart hidden">
          <a href="/cart" class="icon icon--stroke icon--fill icon--cart sqs-custom-cart">
            <span class="Cart-inner">
              



  <svg class="icon icon--cart" viewBox="0 0 31 24">
  <g class="svg-icon cart-icon--odd">
    <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1"/>
    <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1"/>
    <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12"/>
  </g>
</svg>

              <div class="legacy-cart icon-cart-quantity">
                <span class="sqs-cart-quantity">0</span>
              </div>
            </span>
          </a>
        </div>
      

      

















  <header
    data-test="header"
    id="header"
    
    class="
      
        
          
        
      
      header theme-col--primary
    "
    data-section-theme=""
    data-controller="Header"
    data-current-styles="{
                                                                                                                                                                              &quot;layout&quot;: &quot;navRight&quot;,
                                                                                                                                                                              &quot;action&quot;: {
                                                                                                                                                                                &quot;href&quot;: &quot;/appointments&quot;,
                                                                                                                                                                                &quot;buttonText&quot;: &quot;Book appointment&quot;,
                                                                                                                                                                                &quot;newWindow&quot;: false
                                                                                                                                                                              },
                                                                                                                                                                              &quot;showSocial&quot;: false,
                                                                                                                                                                              &quot;socialOptions&quot;: {
                                                                                                                                                                                &quot;socialBorderShape&quot;: &quot;none&quot;,
                                                                                                                                                                                &quot;socialBorderStyle&quot;: &quot;outline&quot;,
                                                                                                                                                                                &quot;socialBorderThickness&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 1.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;sectionTheme&quot;: &quot;&quot;,
                                                                                                                                                                              &quot;menuOverlayTheme&quot;: &quot;light&quot;,
                                                                                                                                                                              &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
                                                                                                                                                                              &quot;cartStyle&quot;: &quot;text&quot;,
                                                                                                                                                                              &quot;cartText&quot;: &quot;Cart&quot;,
                                                                                                                                                                              &quot;showEmptyCartState&quot;: true,
                                                                                                                                                                              &quot;cartOptions&quot;: {
                                                                                                                                                                                &quot;iconType&quot;: &quot;stroke-1&quot;,
                                                                                                                                                                                &quot;cartBorderShape&quot;: &quot;none&quot;,
                                                                                                                                                                                &quot;cartBorderStyle&quot;: &quot;outline&quot;,
                                                                                                                                                                                &quot;cartBorderThickness&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 1.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;showButton&quot;: false,
                                                                                                                                                                              &quot;showCart&quot;: false,
                                                                                                                                                                              &quot;showAccountLogin&quot;: false,
                                                                                                                                                                              &quot;headerStyle&quot;: &quot;dynamic&quot;,
                                                                                                                                                                              &quot;languagePicker&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;iconEnabled&quot;: false,
                                                                                                                                                                                &quot;iconType&quot;: &quot;globe&quot;,
                                                                                                                                                                                &quot;flagShape&quot;: &quot;shiny&quot;,
                                                                                                                                                                                &quot;languageFlags&quot;: [ ]
                                                                                                                                                                              },
                                                                                                                                                                              &quot;mobileOptions&quot;: {
                                                                                                                                                                                &quot;layout&quot;: &quot;logoLeftNavRight&quot;,
                                                                                                                                                                                &quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
                                                                                                                                                                                &quot;menuIconOptions&quot;: {
                                                                                                                                                                                  &quot;style&quot;: &quot;doubleLineHamburger&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 2.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;dynamicOptions&quot;: {
                                                                                                                                                                                &quot;border&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 4.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;solidOptions&quot;: {
                                                                                                                                                                                &quot;headerOpacity&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                                                                                                                                  &quot;value&quot;: 100.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;border&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 4.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;dropShadow&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blur&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 30.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;spread&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;distance&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;blurBackground&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blurRadius&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 12.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;gradientOptions&quot;: {
                                                                                                                                                                                &quot;gradientType&quot;: &quot;faded&quot;,
                                                                                                                                                                                &quot;headerOpacity&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                                                                                                                                  &quot;value&quot;: 90.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;border&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 4.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;dropShadow&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blur&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 30.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;spread&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;distance&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;blurBackground&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blurRadius&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 12.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;dropShadowOptions&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;blur&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 12.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;spread&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 0.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;distance&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 12.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;borderOptions&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                &quot;thickness&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 4.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;showPromotedElement&quot;: false,
                                                                                                                                                                              &quot;buttonVariant&quot;: &quot;primary&quot;,
                                                                                                                                                                              &quot;blurBackground&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;blurRadius&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 12.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;headerOpacity&quot;: {
                                                                                                                                                                                &quot;unit&quot;: &quot;%&quot;,
                                                                                                                                                                                &quot;value&quot;: 100.0
                                                                                                                                                                              }
                                                                                                                                                                            }"
    data-section-id="header"
    data-header-style="dynamic"
    data-language-picker="{
                                                                                                                                                                              &quot;enabled&quot;: false,
                                                                                                                                                                              &quot;iconEnabled&quot;: false,
                                                                                                                                                                              &quot;iconType&quot;: &quot;globe&quot;,
                                                                                                                                                                              &quot;flagShape&quot;: &quot;shiny&quot;,
                                                                                                                                                                              &quot;languageFlags&quot;: [ ]
                                                                                                                                                                            }"
    
    data-first-focusable-element
    tabindex="-1"
    style="
      
        
        
      
      
      
      
      
    "
  >
    
<div class="sqs-announcement-bar-dropzone"></div>

    <div class="header-announcement-bar-wrapper">
      
      <a
        href="#page"
        class="header-skip-link sqs-button-element--primary"
      >
        Skip to Content
      </a>
      


<style>
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }
</style>
      <div
        class="header-border"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-border="false"
        data-test="header-border"
        style="






  
    border-width: 0px !important;
  



  



"
      ></div>
      <div
        class="header-dropshadow"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-dropshadow="false"
        data-test="header-dropshadow"
        style="


  
"
      ></div>
      
      

      <div class='header-inner container--fluid
        
        
        
         header-mobile-layout-logo-left-nav-right
        
        
        
        
        
        
         header-layout-nav-right
        
        
        
        
        
        
        
        
        '
        style="






  
    padding: 0;
  



"
        data-test="header-inner"
        >
        <!-- Background -->
        <div class="header-background theme-bg--primary"></div>

        <div class="header-display-desktop" data-content-field="site-title">
          

          

          

          

          

          
          
            
            <!-- Social -->
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRAND; ?></a>
                      </div>
                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a
        href="/store"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        Store
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
              
              

              

            
            

              
              <div class="showOnMobile">
                
              </div>

              
              <div class="showOnDesktop">
                
              </div>

              
            </div>
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

          
          
          
          
          

        </div>
        <div class="header-display-mobile" data-content-field="site-title">
          
            
            <!-- Social -->
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRAND; ?></a>
                      </div>
                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a
        href="/store"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        Store
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
              
              

              

            
            

              
              <div class="showOnMobile">
                
              </div>

              
              <div class="showOnDesktop">
                
              </div>

              
            </div>
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

          
          
          
          
          
        </div>
      </div>
    </div>
    <!-- (Mobile) Menu Navigation -->
    <div class="header-menu header-menu--folder-list
      light
      
      
      
      
      "
      data-section-theme="light"
      data-current-styles="{
                                                                                                                                                                              &quot;layout&quot;: &quot;navRight&quot;,
                                                                                                                                                                              &quot;action&quot;: {
                                                                                                                                                                                &quot;href&quot;: &quot;/appointments&quot;,
                                                                                                                                                                                &quot;buttonText&quot;: &quot;Book appointment&quot;,
                                                                                                                                                                                &quot;newWindow&quot;: false
                                                                                                                                                                              },
                                                                                                                                                                              &quot;showSocial&quot;: false,
                                                                                                                                                                              &quot;socialOptions&quot;: {
                                                                                                                                                                                &quot;socialBorderShape&quot;: &quot;none&quot;,
                                                                                                                                                                                &quot;socialBorderStyle&quot;: &quot;outline&quot;,
                                                                                                                                                                                &quot;socialBorderThickness&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 1.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;sectionTheme&quot;: &quot;&quot;,
                                                                                                                                                                              &quot;menuOverlayTheme&quot;: &quot;light&quot;,
                                                                                                                                                                              &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
                                                                                                                                                                              &quot;cartStyle&quot;: &quot;text&quot;,
                                                                                                                                                                              &quot;cartText&quot;: &quot;Cart&quot;,
                                                                                                                                                                              &quot;showEmptyCartState&quot;: true,
                                                                                                                                                                              &quot;cartOptions&quot;: {
                                                                                                                                                                                &quot;iconType&quot;: &quot;stroke-1&quot;,
                                                                                                                                                                                &quot;cartBorderShape&quot;: &quot;none&quot;,
                                                                                                                                                                                &quot;cartBorderStyle&quot;: &quot;outline&quot;,
                                                                                                                                                                                &quot;cartBorderThickness&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 1.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;showButton&quot;: false,
                                                                                                                                                                              &quot;showCart&quot;: false,
                                                                                                                                                                              &quot;showAccountLogin&quot;: false,
                                                                                                                                                                              &quot;headerStyle&quot;: &quot;dynamic&quot;,
                                                                                                                                                                              &quot;languagePicker&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;iconEnabled&quot;: false,
                                                                                                                                                                                &quot;iconType&quot;: &quot;globe&quot;,
                                                                                                                                                                                &quot;flagShape&quot;: &quot;shiny&quot;,
                                                                                                                                                                                &quot;languageFlags&quot;: [ ]
                                                                                                                                                                              },
                                                                                                                                                                              &quot;mobileOptions&quot;: {
                                                                                                                                                                                &quot;layout&quot;: &quot;logoLeftNavRight&quot;,
                                                                                                                                                                                &quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
                                                                                                                                                                                &quot;menuIconOptions&quot;: {
                                                                                                                                                                                  &quot;style&quot;: &quot;doubleLineHamburger&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 2.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;dynamicOptions&quot;: {
                                                                                                                                                                                &quot;border&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 4.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;solidOptions&quot;: {
                                                                                                                                                                                &quot;headerOpacity&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                                                                                                                                  &quot;value&quot;: 100.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;border&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 4.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;dropShadow&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blur&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 30.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;spread&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;distance&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;blurBackground&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blurRadius&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 12.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;gradientOptions&quot;: {
                                                                                                                                                                                &quot;gradientType&quot;: &quot;faded&quot;,
                                                                                                                                                                                &quot;headerOpacity&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                                                                                                                                  &quot;value&quot;: 90.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;border&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                  &quot;thickness&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 4.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;dropShadow&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blur&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 30.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;spread&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  },
                                                                                                                                                                                  &quot;distance&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 0.0
                                                                                                                                                                                  }
                                                                                                                                                                                },
                                                                                                                                                                                &quot;blurBackground&quot;: {
                                                                                                                                                                                  &quot;enabled&quot;: false,
                                                                                                                                                                                  &quot;blurRadius&quot;: {
                                                                                                                                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                    &quot;value&quot;: 12.0
                                                                                                                                                                                  }
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;dropShadowOptions&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;blur&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 12.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;spread&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 0.0
                                                                                                                                                                                },
                                                                                                                                                                                &quot;distance&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 12.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;borderOptions&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;position&quot;: &quot;allSides&quot;,
                                                                                                                                                                                &quot;thickness&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 4.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;showPromotedElement&quot;: false,
                                                                                                                                                                              &quot;buttonVariant&quot;: &quot;primary&quot;,
                                                                                                                                                                              &quot;blurBackground&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false,
                                                                                                                                                                                &quot;blurRadius&quot;: {
                                                                                                                                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                                                                                                                                  &quot;value&quot;: 12.0
                                                                                                                                                                                }
                                                                                                                                                                              },
                                                                                                                                                                              &quot;headerOpacity&quot;: {
                                                                                                                                                                                &quot;unit&quot;: &quot;%&quot;,
                                                                                                                                                                                &quot;value&quot;: 100.0
                                                                                                                                                                              }
                                                                                                                                                                            }"
      data-section-id="overlay-nav"
      data-show-account-login="false"
      data-test="header-menu">
      <div class="header-menu-bg theme-bg--primary"></div>
      <div class="header-menu-nav">
        <nav class="header-menu-nav-list">
          <div data-folder="root" class="header-menu-nav-folder">
            <div class="header-menu-nav-folder-content">
              <!-- Menu Navigation -->
<div class="header-menu-nav-wrapper">
  
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
              <a
                href="/store"
                
                  aria-current="page"
                
              >
                <div class="header-menu-nav-item-content">
                  Store
                </div>
              </a>
            </div>
          
        
      
    
  
</div>

              
                
              
            </div>
            
            
            
          </div>
        </nav>
      </div>
    </div>
  </header>




      <main id="page" class="container" role="main">
        
          
<article class="sections" id="sections" data-page-sections="665b244166b67800b9e765d7">
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme=""
  class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    '
  
  data-section-id="665b2e1638b6726fd5d865ac"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
                                                                                                                                                                              &quot;imageOverlayOpacity&quot;: 0.15,
                                                                                                                                                                              &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
                                                                                                                                                                              &quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
                                                                                                                                                                              &quot;customSectionHeight&quot;: 10,
                                                                                                                                                                              &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
                                                                                                                                                                              &quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
                                                                                                                                                                              &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
                                                                                                                                                                              &quot;customContentWidth&quot;: 50,
                                                                                                                                                                              &quot;backgroundColor&quot;: &quot;&quot;,
                                                                                                                                                                              &quot;sectionTheme&quot;: &quot;&quot;,
                                                                                                                                                                              &quot;sectionAnimation&quot;: &quot;none&quot;,
                                                                                                                                                                              &quot;backgroundMode&quot;: &quot;image&quot;
                                                                                                                                                                            }"
  data-current-context="{
                                                                                                                                                                              &quot;video&quot;: null,
                                                                                                                                                                              &quot;backgroundImageId&quot;: null,
                                                                                                                                                                              &quot;backgroundMediaEffect&quot;: null,
                                                                                                                                                                              &quot;divider&quot;: null,
                                                                                                                                                                              &quot;typeName&quot;: &quot;products&quot;
                                                                                                                                                                            }"
  data-animation="none"
  
   
  
    
  
  
>
  <div
    class="section-border"
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      
<section 
  id="pdp"
  class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  "
>
	



  
  
  

  <article class="ProductItem hentry author-donjuan-1188 post-type-store-item on-sale" data-item-id="665b244ee788e97c21c65607">

    <nav class="ProductItem-nav">
  <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
    <a href="/store" class="ProductItem-nav-breadcrumb-link">Store</a>
    <span class="ProductItem-nav-breadcrumb-separator"></span>
    <a href="/store/p/slot456-selalu-dicari-pemain-slot-karena-scatter-hitamnya" class="ProductItem-nav-breadcrumb-link">Slot123: Selalu Dicari Pemain Slot Karena Scatter Hitamnya</a>
  </div>
  
  
  
</nav>


    <section class="ProductItem-summary" data-controller="ProductGallery">
      <section
  aria-label="Gallery"
  class="ProductItem-gallery"
  data-product-gallery="container"
>
  
  
    <div
      class="ProductItem-gallery-slides"
      data-animation-role="image"
      data-product-gallery="slides"
    >
      
      
        
          <div
            class="ProductItem-gallery-slides-item"
            data-slide-index="1"
            data-image-id=665b265b35ba9e22f520d222
            data-controller="ImageZoom"
            data-slide-url="u6qq62r327bon0zbftmsnm6tgm0e15"
            data-product-gallery="slides-item"
            data-test="pdp-gallery-slide"
          >
            <img
              aria-describedby="ProductItem-gallery-slides-item-1-index-665b265b35ba9e22f520d222"
              class="ProductItem-gallery-slides-item-image"
              data-load="false"
              data-src="https://images.squarespace-cdn.com/content/v1/665b22cbcc0df27471a18a26/1717249627520-HXZ0CVKU97HNUV9WDS7E/bahaninibosterbaru3.jpg" data-image="https://images.squarespace-cdn.com/content/v1/665b22cbcc0df27471a18a26/1717249627520-HXZ0CVKU97HNUV9WDS7E/bahaninibosterbaru3.jpg" data-image-dimensions="720x720" data-image-focal-point="0.5,0.5" alt="bahaninibosterbaru3.jpg" 
              elementtiming="nbf-products-gallery"
            />
            <span
              id="ProductItem-gallery-slides-item-1-index-665b265b35ba9e22f520d222"
              style="display: none;"
            >
              Image 1 of 
            </span>
            <div class="product-image-zoom-duplicate" aria-hidden="true">
              <img data-load="false" data-src="https://images.squarespace-cdn.com/content/v1/665b22cbcc0df27471a18a26/1717249627520-HXZ0CVKU97HNUV9WDS7E/bahaninibosterbaru3.jpg" data-image="https://images.squarespace-cdn.com/content/v1/665b22cbcc0df27471a18a26/1717249627520-HXZ0CVKU97HNUV9WDS7E/bahaninibosterbaru3.jpg" data-image-dimensions="720x720" data-image-focal-point="0.5,0.5" alt="bahaninibosterbaru3.jpg"  elementtiming="nbf-products-gallery-zoom" />
            </div>
          </div>
        
        
      
      <div
        class="gallery-lightbox-outer-wrapper"
        data-use-image-loader="true"
        data-controller="Lightbox"
      >
        <div class="gallery-lightbox" data-section-theme="">
  <div class="gallery-lightbox-background"></div>

<div class="gallery-lightbox-header">
  <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
    <div class="gallery-lightbox-close-btn-icon">
      <svg viewBox="0 0 40 40">
        <path d="M4.3,35.7L35.7,4.3"/>
        <path d="M4.3,4.3l31.4,31.4"/>
      </svg>
    </div>
  </button>
</div>


  <div class="gallery-lightbox-wrapper">
    <div class="gallery-lightbox-list">
      
      <figure class="gallery-lightbox-item" data-slide-url="u6qq62r327bon0zbftmsnm6tgm0e15">
        <div class="gallery-lightbox-item-wrapper">
          <div class="gallery-lightbox-item-src">
            <div class="gallery-lightbox-item-img content-fit">
              <img data-src="https://images.squarespace-cdn.com/content/v1/665b22cbcc0df27471a18a26/1717249627520-HXZ0CVKU97HNUV9WDS7E/bahaninibosterbaru3.jpg" data-image="https://images.squarespace-cdn.com/content/v1/665b22cbcc0df27471a18a26/1717249627520-HXZ0CVKU97HNUV9WDS7E/bahaninibosterbaru3.jpg" data-image-dimensions="720x720" data-image-focal-point="0.5,0.5" alt="bahaninibosterbaru3.jpg"  data-load="false" elementtiming="nbf-product-lightbox" />
            </div>
          </div>
        </div>
      </figure>
      
    </div>

    <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 "/>
        </svg>
      </div>
    </button>
  </div>
  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 "/>
        </svg>
      </div>
    </button>
  </div>
</div>

  </div>
</div>
      </div>
    </div>
  
</section>

      




<section
  class="
    product-details
    ProductItem-details
  "
  data-test="pdp-details"
  data-current-context='{
      "isSubscription": "false",
      "subscriptionType": ""
  }'
>
  <h1
    class="ProductItem-details-title"
    data-content-field="title"
    data-test="pdp-title"
  >
    Slot123: Selalu Dicari Pemain Slot Karena Scatter Hitamnya
  </h1>
  <div
    data-controller="ProductItemVariants,ProductCartButton" 
    class="ProductItem-details-checkout"
  >
    
    <div
      class="ProductItem-product-price"
      data-animation-role="content"
    >
      


<div class="product-price">
<span class="visually-hidden v6-visually-hidden">Sale Price:</span>IDR 100,000.00 <span class="visually-hidden v6-visually-hidden">Original Price:</span><span class="original-price">IDR 250,000.00</span>

</div>

      
        
<div data-afterpay="true" data-current-context="{
                                                                                                                                                                              &quot;665b244ee788e97c21c65607&quot;: {
                                                                                                                                                                                &quot;scarcityEnabled&quot;: false,
                                                                                                                                                                                &quot;scarcityShownByDefault&quot;: false,
                                                                                                                                                                                &quot;afterPayAvailable&quot;: false,
                                                                                                                                                                                &quot;klarnaAvailable&quot;: false,
                                                                                                                                                                                &quot;shopperLanguage&quot;: &quot;en&quot;,
                                                                                                                                                                                &quot;afterPayMin&quot;: 0,
                                                                                                                                                                                &quot;afterPayMax&quot;: 0,
                                                                                                                                                                                &quot;klarnaMin&quot;: 0,
                                                                                                                                                                                &quot;klarnaMax&quot;: 0,
                                                                                                                                                                                &quot;mailingListSignUpEnabled&quot;: false,
                                                                                                                                                                                &quot;mailingListOptInByDefault&quot;: false
                                                                                                                                                                              }
                                                                                                                                                                            }"></div>
<div class="pdp-overlay"></div>
      

      
      <div class="product-mark sale">sale</div>
    </div>
    
      <div
        class="ProductItem-details-excerpt ProductItem-details-excerpt-below-price"
        data-content-field="excerpt"
      >
        <p class="" style="white-space:pre-wrap;">Slot123: diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah mendapatkan scatter hitam. Situs Gacor</p>
      </div>
    
    
    










    <div
      class="ProductItem-quantity-add-to-cart"
    >
      


<div class="product-quantity-input" data-item-id="665b244ee788e97c21c65607" data-animation-role="content">
  <div class="quantity-label">Quantity:</div>
  <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
</div>
      






      












<div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
  <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="665b244166b67800b9e765d6" data-item-id="665b244ee788e97c21c65607" data-product-type="1" data-use-custom-label="true" data-original-label="Daftar Dong Bossku" >
    <div class="sqs-add-to-cart-button-inner">Daftar Dong Bossku</div>
  </div>
</div>
    </div>
    
      <div
        class="ProductItem-details-excerpt-below-add-to-cart"
        data-content-field="excerpt"
      >
        <p class="" style="white-space:pre-wrap;">Slot123: diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah mendapatkan scatter hitam. Situs Gacor</p>
      </div>
       
    
    
      <div
        class="ProductItem-details-excerpt-below-add-ons"
        data-content-field="excerpt"
      >
        <p class="" style="white-space:pre-wrap;">Slot123: diminati dan selalu dicari para penggemar pemainan slot karena mudah sekali mendapatkan scatter hitam. Kalau main di tempat lain tidak mudah mendapatkan scatter hitam. Situs Gacor</p>
      </div>
    
  </div>
</section>

    </section>

    

    
    

    

  </article>



</section>
    </div>
  
  </div>
  
</section>

  
</article>


          

          
          
        
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>

      
        <footer class="sections" id="footer-sections" data-footer-sections>
  
  
  
  
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="black"
  class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      
        section-height--custom
      
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    black'
  
  data-section-id="665b22cbcc0df27471a18a43"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
                                                                                                                                                                              &quot;imageOverlayOpacity&quot;: 0.15,
                                                                                                                                                                              &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
                                                                                                                                                                              &quot;sectionHeight&quot;: &quot;section-height--custom&quot;,
                                                                                                                                                                              &quot;customSectionHeight&quot;: 0,
                                                                                                                                                                              &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
                                                                                                                                                                              &quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
                                                                                                                                                                              &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
                                                                                                                                                                              &quot;customContentWidth&quot;: 50,
                                                                                                                                                                              &quot;sectionTheme&quot;: &quot;black&quot;,
                                                                                                                                                                              &quot;sectionAnimation&quot;: &quot;none&quot;,
                                                                                                                                                                              &quot;backgroundMode&quot;: &quot;image&quot;
                                                                                                                                                                            }"
  data-current-context="{
                                                                                                                                                                              &quot;video&quot;: {
                                                                                                                                                                                &quot;playbackSpeed&quot;: 0.5,
                                                                                                                                                                                &quot;filter&quot;: 1,
                                                                                                                                                                                &quot;filterStrength&quot;: 0,
                                                                                                                                                                                &quot;zoom&quot;: 0,
                                                                                                                                                                                &quot;videoSourceProvider&quot;: &quot;none&quot;
                                                                                                                                                                              },
                                                                                                                                                                              &quot;backgroundImageId&quot;: null,
                                                                                                                                                                              &quot;backgroundMediaEffect&quot;: {
                                                                                                                                                                                &quot;type&quot;: &quot;none&quot;
                                                                                                                                                                              },
                                                                                                                                                                              &quot;divider&quot;: {
                                                                                                                                                                                &quot;enabled&quot;: false
                                                                                                                                                                              },
                                                                                                                                                                              &quot;typeName&quot;: &quot;products&quot;
                                                                                                                                                                            }"
  data-animation="none"
  data-fluid-engine-section
   
  
  
>
  <div
    class="section-border"
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
        
          
          
          padding-top: calc(0vmax / 10); padding-bottom: calc(0vmax / 10);
        
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      <div data-fluid-engine="true"><style>

.fe-665b22cbcc0df27471a18a42 {
  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 13.0px);
  --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (13.0px * (8 - 1)) ) / 8 );

  display: grid;
  position: relative;
  grid-area: 1/1/-1/-1;
  grid-template-rows: repeat(16,minmax(24px, auto));
  grid-template-columns:
    minmax(var(--grid-gutter), 1fr)
    repeat(8, minmax(0, var(--cell-max-width)))
    minmax(var(--grid-gutter), 1fr);
  row-gap: 6.0px;
  column-gap: 13.0px;
}

@media (min-width: 768px) {
  .background-width--inset .fe-665b22cbcc0df27471a18a42 {
    --inset-padding: calc(var(--sqs-site-gutter) * 2);
  }

  .fe-665b22cbcc0df27471a18a42 {
    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 13.0px);
    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (13.0px * (24 - 1)) ) / 24 );
    --inset-padding: 0vw;

    --row-height-scaling-factor: 0.0215;
    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));

    grid-template-rows: repeat(19,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
    grid-template-columns:
      minmax(var(--grid-gutter), 1fr)
      repeat(24, minmax(0, var(--cell-max-width)))
      minmax(var(--grid-gutter), 1fr);
  }
}


  .fe-block-f760396ac9f12dd3a64d {
    grid-area: 2/2/4/6;
    z-index: 4;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-f760396ac9f12dd3a64d .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-f760396ac9f12dd3a64d .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-f760396ac9f12dd3a64d {
      grid-area: 2/2/4/8;
      z-index: 4;

      
        
      
    }

    .fe-block-f760396ac9f12dd3a64d .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-f760396ac9f12dd3a64d .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-c3b0b15202b145c39f73 {
    grid-area: 2/6/4/10;
    z-index: 5;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-c3b0b15202b145c39f73 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-c3b0b15202b145c39f73 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-c3b0b15202b145c39f73 {
      grid-area: 2/12/4/18;
      z-index: 5;

      
        
      
    }

    .fe-block-c3b0b15202b145c39f73 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-c3b0b15202b145c39f73 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-ae5a4546966e5fcd5baa {
    grid-area: 11/2/17/10;
    z-index: 6;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-ae5a4546966e5fcd5baa .sqs-block {
    justify-content: center;
  }

  .fe-block-ae5a4546966e5fcd5baa .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-ae5a4546966e5fcd5baa {
      grid-area: 12/2/20/17;
      z-index: 6;

      
        
      
    }

    .fe-block-ae5a4546966e5fcd5baa .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-ae5a4546966e5fcd5baa .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

</style><div class="fluid-engine fe-665b22cbcc0df27471a18a42"><div class="fe-block fe-block-f760396ac9f12dd3a64d"><div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-f760396ac9f12dd3a64d"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p class="" style="white-space:pre-wrap;">Architecture &amp; <br>Spatial Design Services</p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-c3b0b15202b145c39f73"><div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-c3b0b15202b145c39f73"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p class="" style="white-space:pre-wrap;">email@example.com<br>(555)555-5555</p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-ae5a4546966e5fcd5baa"><div class="sqs-block image-block sqs-block-image sqs-stretched" data-block-type="5" id="block-ae5a4546966e5fcd5baa"><div class="sqs-block-content">










































  

    
  
    <div
      class="
        image-block-outer-wrapper
        layout-caption-below
        design-layout-fluid
        image-position-center
        combination-animation-site-default
        individual-animation-site-default
      "
      data-test="image-block-fluid-outer-wrapper"
    >
      <div
        class="fluid-image-animation-wrapper sqs-image sqs-block-alignment-wrapper"
        data-animation-role="image"
        
  

      >
        <div
          class="fluid-image-container sqs-image-content"
          
          style="overflow: hidden;-webkit-mask-image: -webkit-radial-gradient(white, black);position: relative;width: 100%;height: 100%;"
        >
          

          
          

          
            
              <div class="content-fit">
                
            
            
            
            
            
            
            <img data-stretch="false" data-src="https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png" data-image="https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png" data-image-dimensions="2855x744" data-image-focal-point="0.5,0.5" alt="" data-load="false" elementtiming="system-image-block" src="https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png" width="2855" height="744" alt="" sizes="(max-width: 640px) 100vw, (max-width: 767px) 100vw, 62.5vw" style="display:block;object-fit: contain; object-position: 50% 50%" srcset="https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png?format=100w 100w, https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png?format=300w 300w, https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png?format=500w 500w, https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png?format=750w 750w, https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png?format=1000w 1000w, https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png?format=1500w 1500w, https://images.squarespace-cdn.com/content/v1/65c68b0da0fd06022768fe71/ee3a993f-25dc-43df-a622-b428cc017c1d/Radian-logo.png?format=2500w 2500w" loading="lazy" decoding="async" data-loader="sqs">

            
              
            
            <div class="fluidImageOverlay"></div>
          
              </div>
            
          

        </div>
      </div>
    </div>
    <style>
      .sqs-block-image .sqs-block-content {
        height: 100%;
        width: 100%;
      }

      
        .fe-block-ae5a4546966e5fcd5baa .fluidImageOverlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          mix-blend-mode: normal;
          
            
            
          
          
            opacity: 0;
          
        }
      
    </style>
  


  


</div></div></div></div></div>
    </div>
  
  </div>
  
</section>

  
</footer>

      
    </div>

    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.fdb3342ec883d35bb41feb2170752cde.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol></svg>

  </body>
</html>
