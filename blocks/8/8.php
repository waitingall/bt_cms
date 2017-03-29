<html class="js csscalc supports generatedcontent no-touchevents no-overflowscrolling csstransforms csstransforms3d" lang="en-US"><head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600%2C700%2C400%2C300%3Alatin%7CLibre+Baskerville%3Anormal%2Cbold%3A%7CVarela+Round%3Anormal%2Cbold%3A%7CHandlee%3Anormal%2Cbold%3A%7CKaushan+Script%3A400%3Alatin">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript" src="https://bam.nr-data.net/1/9700abca30?a=9339867&amp;v=1026.7a27a3e&amp;to=YFUHbUVUDBZZAkZZXFkfJFpDXA0LFxFTV1Y%3D&amp;rst=17203&amp;ref=https://vip-restaurant.vamtam.com/home-layouts/sushi-bar/&amp;ap=863&amp;be=2040&amp;fe=16734&amp;dc=14609&amp;perf=%7B%22timing%22:%7B%22of%22:1490770369893,%22n%22:0,%22f%22:0,%22dn%22:0,%22dne%22:0,%22c%22:0,%22ce%22:0,%22rq%22:0,%22rp%22:0,%22rpe%22:0,%22dl%22:1516,%22di%22:13187,%22ds%22:14578,%22de%22:16422,%22dc%22:16734,%22l%22:16734,%22le%22:16828%7D,%22navigation%22:%7B%7D%7D&amp;at=TBIEGw1OHxg%3D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-1026.min.js"></script><script src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/gsap/TweenLite.min.js"></script><script src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/gsap/TimelineLite.min.js"></script><script src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/gsap/plugins/CSSPlugin.min.js"></script><script src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/gsap/plugins/ScrollToPlugin.min.js"></script><script src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/gsap/easing/EasePack.min.js"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1026.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="https://vip-restaurant.vamtam.com/xmlrpc.php">
<title>Sushi Bar – Délicious</title>
<link rel="dns-prefetch" href="//ajax.googleapis.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="Délicious » Feed" href="https://vip-restaurant.vamtam.com/feed/">
<link rel="alternate" type="application/rss+xml" title="Délicious » Comments Feed" href="https://vip-restaurant.vamtam.com/comments/feed/">
<link rel="stylesheet" id="fp_res_jquery_ui_style-css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.min.css" type="text/css" media="all">
<link rel="stylesheet" id="sb_instagram_styles-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/instagram-feed/css/sb-instagram.min.css" type="text/css" media="all">
<link rel="stylesheet" id="rs-plugin-settings-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/revslider/public/assets/css/settings.css" type="text/css" media="all">
<style id="rs-plugin-settings-inline-css" type="text/css">#rs-demo-id{}</style>
<link rel="stylesheet" id="woocommerce-layout-css" href="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css" type="text/css" media="all">
<style id="woocommerce-layout-inline-css" type="text/css">ul.products li.product .wc-new-badge{font-size:.75em;text-transform:uppercase;color:white;background:#eb4649;padding:.2em .5em;display:inline-block;font-weight:700;border-radius:2px}ul.products li.product .stock{display:block;padding-top:.5em}ul.products li.product .stock.out-of-stock{color:#eb4649}ul.products li.product .stock.in-stock{color:#85ad74}ul.products li.product .categories{display:block;padding-top:.5em}ul.products li.product .categories a{display:inline}@media screen and (min-width: 768px) {.woocommerce.product-columns-2 ul.products li.product,.woocommerce-page.product-columns-2 ul.products li.product{width:48%;margin-right:3.8%;}.woocommerce.product-columns-2 ul.products li.product.last,.woocommerce-page.product-columns-2 ul.products li.product.last{margin-right:0;}.woocommerce.product-columns-3 ul.products li.product,.woocommerce-page.product-columns-3 ul.products li.product{width:30.75%;margin-right:3.8%;}.woocommerce.product-columns-3 ul.products li.product.last,.woocommerce-page.product-columns-3 ul.products li.product.last{margin-right:0;}.woocommerce.product-columns-4 ul.products li.product,.woocommerce-page.product-columns-4 ul.products li.product{width:22.05%;margin-right:3.8%;}.woocommerce.product-columns-4 ul.products li.product.last,.woocommerce-page.product-columns-4 ul.products li.product.last{margin-right:0;}.woocommerce.product-columns-5 ul.products li.product,.woocommerce-page.product-columns-5 ul.products li.product{width:16.9%;margin-right:3.8%;}.woocommerce.product-columns-5 ul.products li.product.last,.woocommerce-page.product-columns-5 ul.products li.product.last{margin-right:0;}.woocommerce.post-type-archive-product.wc-pac-hide-sale-flash .product .onsale,.woocommerce.post-type-archive-product.wc-pac-hide-product-count .woocommerce-result-count,.woocommerce.post-type-archive-product.wc-pac-hide-product-sorting .woocommerce-ordering,.woocommerce.post-type-archive-product.wc-pac-hide-add-to-cart .product .add_to_cart_button,.woocommerce.post-type-archive-product.wc-pac-hide-thumbnail .product .wp-post-image,.woocommerce.post-type-archive-product.wc-pac-hide-price .product .price,.woocommerce.post-type-archive-product.wc-pac-hide-rating .product .star-rating{display:none;}}</style>
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css" type="text/css" media="all">
<link rel="stylesheet" id="megamenu-css" href="https://vip-restaurant.vamtam.com/wp-content/uploads/maxmegamenu/style.css" type="text/css" media="all">
<link rel="stylesheet" id="dashicons-css" href="https://vip-restaurant.vamtam.com/wp-includes/css/dashicons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="vamtam-style-switcher-css" href="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/style_switcher/switcher.css" type="text/css" media="all">
<link rel="stylesheet" id="fp_font_icons-css" href="//vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/fonts/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" id="fp_fonts-css" href="//vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/fonts/fp_fonts.css" type="text/css" media="all">
<link rel="stylesheet" id="fp_default-css" href="//vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/css/foodpress_styles.css" type="text/css" media="all">
<link rel="stylesheet" id="foodpress_dynamic_styles-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/css/foodpress_dynamic_styles.css" type="text/css" media="all">
<link rel="stylesheet" id="fp_res_timepicker_style-css" href="//vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/css/jquery.timepicker.css" type="text/css" media="all">
<link rel="stylesheet" id="fp_res_intl_phone_input-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/css/intlTelInput.css" type="text/css" media="all">
<link rel="stylesheet" id="front-all-css" href="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/cache/all.css" type="text/css" media="all">
<style id="front-all-inline-css" type="text/css">@font-face{font-family:'icomoon';src:url(https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/fonts/icons/icons.ttf) format('truetype');font-weight:normal;font-style:normal;}@font-face{font-family:'theme';src:url(https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.ttf) format('truetype'),url(https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.woff) format('woff'),url(https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.svg#theme-icons) format('svg');font-weight:normal;font-style:normal;}</style>
<link rel="stylesheet" id="cubeportfolio-css" href="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/cubeportfolio/css/cubeportfolio.min.css" type="text/css" media="all">
<link rel="stylesheet" id="sharedaddy-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/modules/sharedaddy/sharing.css" type="text/css" media="all">
<link rel="stylesheet" id="social-logos-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/_inc/social-logos/social-logos.min.css" type="text/css" media="all">
<link rel="https://api.w.org/" href="https://vip-restaurant.vamtam.com/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://vip-restaurant.vamtam.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://vip-restaurant.vamtam.com/wp-includes/wlwmanifest.xml">
<link rel="canonical" href="https://vip-restaurant.vamtam.com/home-layouts/sushi-bar/">
<link rel="shortlink" href="https://vip-restaurant.vamtam.com/?p=11304">
<link rel="alternate" type="application/json+oembed" href="https://vip-restaurant.vamtam.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fvip-restaurant.vamtam.com%2Fhome-layouts%2Fsushi-bar%2F">
<link rel="alternate" type="text/xml+oembed" href="https://vip-restaurant.vamtam.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fvip-restaurant.vamtam.com%2Fhome-layouts%2Fsushi-bar%2F&amp;format=xml">
<style type="text/css">.recentcomments a{display:inline!important;padding:0!important;margin:0!important;}</style>
 
<meta property="og:type" content="article">
<meta property="og:title" content="Sushi Bar">
<meta property="og:url" content="https://vip-restaurant.vamtam.com/home-layouts/sushi-bar/">
<meta property="og:description" content="Visit the post for more.">
<meta property="article:published_time" content="2016-07-04T08:30:06+00:00">
<meta property="article:modified_time" content="2016-10-18T05:25:02+00:00">
<meta property="og:site_name" content="Délicious">
<meta property="og:image" content="https://vip-restaurant.vamtam.com/wp-content/uploads/2016/07/photo-sushi-7.jpg">
<meta property="og:locale" content="en_US">
<meta name="twitter:site" content="@vamtam">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Visit the post for more.">
<link rel="icon" href="https://vip-restaurant.vamtam.com/wp-content/uploads/2016/09/cropped-favicon-43x43.png" sizes="32x32">
<link rel="icon" href="https://vip-restaurant.vamtam.com/wp-content/uploads/2016/09/cropped-favicon-292x292.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="https://vip-restaurant.vamtam.com/wp-content/uploads/2016/09/cropped-favicon-292x292.png">
<meta name="msapplication-TileImage" content="https://vip-restaurant.vamtam.com/wp-content/uploads/2016/09/cropped-favicon-292x292.png">
<link rel="stylesheet" href="data:text/css,@import%20url%28%27%20https%3A//static.tacdn.com/css2/widget/cdswidget-ratingsonly-v21719610117a.css%20%27%29%3B"><script type="text/javascript" src="https://static.tacdn.com/js3/widget/cdswidgets_m-c-v2102084671a.js"></script><style type="text/css"></style></head>
<body class="page-template-default page page-id-11304 page-child parent-pageid-11 mega-menu-one-page-menu mega-menu-menu-header full header-layout-logo-menu pagination-load-more page-vertical-padding-none sticky-header-type-over no-page-header has-header-slider no-header-sidebars responsive-layout sticky-header sticky-footer layout-full vamtam-scrolled">
<span id="top"></span>
                            <div class="footer-wrapper">
                    <footer class="main-footer vamtam-hide-bg-lowres" style="background-color: rgb(35, 40, 47); background-image: none; bottom: 54px;">
                                                    <div class="footer-sidebars-wrapper limit-wrapper">
                                <div id="footer-sidebars" class="limit-wrapper">
    <div class="row">
                                                                <aside class="cell-1-1 fit" data-id="1">
                    <section id="text-18" class="widget widget_text">           <div class="textwidget"><p><span class="vamtam-blank-space  vamtam-hide-lowres" style="height:50px"></span></p>
<h2 style="color: #CB9252;">Délicious</h2>
</div>
        </section>              </aside>
                                                            </div><div class="row">             <aside class="cell-1-3 fit" data-id="2" style="min-height: 206px;">
                    <section id="text-15" class="widget widget_text"><h4 class="widget-title">About</h4>            <div class="textwidget"><p>Osteria Francescana is a restaurant owned and run by chef Massimo Bottura in Modena, Italy</p>
<p><a href="https://themeforest.net/item/restaurant-cafe-theme-for-restaurants-and-cafes/17965713?ref=vamtam" target="_self" style="font-size: 12px;" class="vamtam-button accent1  button-border hover-accent1 "><span class="btext" data-text="Buy this Delicious Theme" style="color:#ffffff">Buy this Delicious Theme</span></a></p>
</div>
        </section>              </aside>
                                                                            <aside class="cell-1-3 fit" data-id="3" style="min-height: 206px;">
                    <section id="text-22" class="widget widget_text"><h4 class="widget-title">Get news &amp; offers</h4>            <div class="textwidget"><script type="text/javascript">(function() {
    if (!window.mc4wp) {
        window.mc4wp = {
            listeners: [],
            forms    : {
                on: function (event, callback) {
                    window.mc4wp.listeners.push({
                        event   : event,
                        callback: callback
                    });
                }
            }
        }
    }
})();
</script><!-- MailChimp for WordPress v4.0.12 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-10372" method="post" data-id="10372" data-name="Subscribe for news"><div class="mc4wp-form-fields"><a href="/#email-offers-form" style="display:none" class="vamtam-animated-page-scroll" title=""></a>
<div class="email-offers" id="email-offers-form">
<input name="EMAIL" placeholder="Your email" required="" type="email"><input value="Subscrible" type="submit">
<p>* We never send you spam!</p>
</div>
<div style="display: none;"><input name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" type="text"></div><input name="_mc4wp_timestamp" value="1490763092" type="hidden"><input name="_mc4wp_form_id" value="10372" type="hidden"><input name="_mc4wp_form_element_id" value="mc4wp-form-1" type="hidden"></div><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin -->

<a href="#"><span class="icon shortcode theme  use-hover" style="color:#cb7152;font-size:22px !important;"></span></a> <a href="#"> <span class="icon shortcode   use-hover" style="color:#cb7152;font-size:18px !important;"></span></a>&nbsp; <a href="#"><span class="icon shortcode   use-hover" style="color:#cb7152;font-size:18px !important;"></span></a>&nbsp; <a href="#"><span class="icon shortcode   use-hover" style="color:#cb7152;font-size:18px !important;"></span></a>&nbsp; <a href="#"><span class="icon shortcode   use-hover" style="color:#cb7152;font-size:18px !important;"></span></a>

</div>
        </section>              </aside>
                                                                            <aside class="cell-1-3 fit" data-id="4" style="min-height: 206px;">
                    <section id="text-21" class="widget widget_text"><h4 class="widget-title">Contacts</h4>         <div class="textwidget"><p>Via Stella, 22<br>
Modena MO, Italy<br>
+390 59 223 912</p>
<p><a href="#">hello@yoursite.com</a></p>
</div>
        </section>              </aside>
                                                                                                                                                        </div>
</div>
                            </div>
                                            </footer>

                    
                        <div class="vamtam-subfooter copyrights vamtam-hide-bg-lowres" style="background-color:#ffffff;background-image:none;">
        <div class="limit-wrapper">
            <div class="row">
                                                    <div class="vamtam-grid grid-1-2">© 2016 <a href="#">Delicious Restaurant &amp; Café Theme</a> by <a href="https://vamtam.com" target="_blank">VamTam Themes</a></div>
                    <div class="vamtam-grid grid-1-2 textright">Proudly powered by <a href="https://wordpress.org/" target="_blank">WordPress</a></div>
                            </div>
        </div>
    </div>
                </div>
            
        </div><!-- / .pane-wrapper -->

    </div><!-- / .boxed-layout -->
</div><!-- / #page -->

<div id="vamtam-overlay-search">
    <button id="vamtam-overlay-search-close" style="display: none;"><span class="icon shortcode theme  use-hover" style=""></span></button>
    <form action="https://vip-restaurant.vamtam.com/" class="searchform" method="get" role="search" novalidate="" style="display: none;">
        <input required="required" placeholder="Search..." name="s" value="" type="search">
            </form>
</div>


    <div id="scroll-to-top" class="icon visible"></div>
<script>VAMTAM_HIDDEN_WIDGETS = [];</script><script type="text/javascript">(function() {function addEventListener(element,event,handler) {
    if(element.addEventListener) {
        element.addEventListener(event,handler, false);
    } else if(element.attachEvent){
        element.attachEvent('on'+event,handler);
    }
}function maybePrefixUrlField() {
    if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
        this.value = "http://" + this.value;
    }
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
    for( var j=0; j < urlFields.length; j++ ) {
        addEventListener(urlFields[j],'blur',maybePrefixUrlField);
    }
}/* test if browser supports date fields */
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {

    /* add placeholder & pattern to all date fields */
    var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
    for(var i=0; i<dateFields.length; i++) {
        if(!dateFields[i].placeholder) {
            dateFields[i].placeholder = 'YYYY-MM-DD';
        }
        if(!dateFields[i].pattern) {
            dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
        }
    }
}

})();</script>      <script type="text/javascript">
            function revslider_showDoubleJqueryError(sliderID) {
                var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
                    jQuery(sliderID).show().html(errorMessage);
            }
        </script>
        <link rel="stylesheet" id="jetpack-carousel-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/modules/carousel/jetpack-carousel.css" type="text/css" media="all">
<!--[if lte IE 8]>
<link rel='stylesheet' id='jetpack-carousel-ie8fix-css'  href='https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/modules/carousel/jetpack-carousel-ie8fix.css' type='text/css' media='all' />
<![endif]-->
<link rel="stylesheet" id="tiled-gallery-css" href="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/modules/tiled-gallery/tiled-gallery/tiled-gallery.css" type="text/css" media="all">
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/modernizr.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var sb_instagram_js_options = {"sb_instagram_at":"605502490.97584da.3f8e935048d744fcb46422b49602c3ef"};
/* ]]> */
</script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/instagram-feed/js/sb-instagram.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js" defer="defer"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js" defer="defer"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/home-layouts\/sushi-bar\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"https:\/\/vip-restaurant.vamtam.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js"></script>
<script type="text/javascript" src="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/home-layouts\/sushi-bar\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js"></script>
<script type="text/javascript" src="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/jquery/ui/core.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/jquery/ui/effect.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/jquery/ui/widget.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/underscore.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/jquery.matchheight.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var VAMTAM_FRONT = {"ajaxurl":"https:\/\/vip-restaurant.vamtam.com\/wp-admin\/admin-ajax.php","jspath":"https:\/\/vip-restaurant.vamtam.com\/wp-content\/themes\/vip-restaurant\/vamtam\/assets\/js\/"};
/* ]]> */
</script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/all.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/home-layouts\/sushi-bar\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type="text/javascript" src="//vip-restaurant.vamtam.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/jquery.easypiechart.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/responsive-elements.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/vamtam/assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var VAMTAMSS = {"uri":"https:\/\/vip-restaurant.vamtam.com\/wp-content\/themes\/vip-restaurant\/","config":{"groups":[{"name":"Styles","type":"buttons","action":"load_css","options":[{"color":"#CB7152","width":50,"height":50,"name":"Orange","url":"mock.php?skin=orange"},{"color":"#CD9B33","width":50,"height":50,"name":"Gold","url":"mock.php?skin=gold"},{"color":"#88B649","width":50,"height":50,"name":"Green","url":"mock.php?skin=green"},{"color":"#5FB1B2","width":50,"height":50,"name":"Blue","url":"mock.php?skin=blue"}]},{"name":"Layout","type":"select","action":"load_css","options":[{"name":"Full width","url":"#full-width","options":{"site-layout-type":"full"}},{"name":"Boxed","url":"boxed-layout.css","options":{"site-layout-type":"boxed"}}]},{"name":"Header Layout","type":"select","action":"load_css","options":[{"name":"Single Row","url":"header-single-row.css","options":{"header-height":80,"header-layout":"logo-menu","header-logo-type":"image","header-text-main":""}},{"name":"Logo - Left","url":"header-logo-text-menu.css","options":{"header-layout":"logo-text-menu","enable-header-search":true,"header-height":119}},{"name":"Logo - Centered","url":"header-standard.css","options":{"header-layout":"standard","header-logo-type":"image","header-text-main":"","enable-header-search":false}}]},{"name":"Top Bar","type":"select","action":"load_css","options":[{"name":"Off","url":"#top-bar-off","options":{"top-bar-layout":""}},{"name":"Menu, Social Icons","url":"#top-bar-menu-social","options":{"top-bar-layout":"menu-social"}},{"name":"Social Icons, Menu","url":"#top-bar-social-menu","options":{"top-bar-layout":"social-menu"}},{"name":"Social Icons, Text","url":"#top-bar-social-text","options":{"top-bar-layout":"social-text"}},{"name":"Text, Menu","url":"#top-bar-text-menu","options":{"top-bar-layout":"text-menu"}},{"name":"Menu, Text","url":"#top-bar-menu-text","options":{"top-bar-layout":"menu-text"}},{"name":"Text, Social Icons","url":"#top-bar-text-social","options":{"top-bar-layout":"text-social"}}]},{"name":"&nbsp;","type":"buttons","action":"load_css","options":[{"name":"Reset","url":"clear_css|Styles|Layout|Header Layout|Top Bar"}]}]}};
/* ]]> */
</script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/themes/vip-restaurant/style_switcher/style_switcher.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/jquery/ui/datepicker.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"d M, yy","firstDay":1,"isRTL":false});});
</script>
<script type="text/javascript" src="//vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/js/jquery.timepicker.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var fp_ajax_script = {"ajaxurl":"https:\/\/vip-restaurant.vamtam.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="//vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/js/foodpress_frontend.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/js/intlTelInput.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/foodpress/assets/js/intlTelInputUtils.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/hoverIntent.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var megamenu = {"timeout":"300","interval":"100"};
/* ]]> */
</script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/megamenu/js/maxmegamenu.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/wp-embed.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/_inc/spin.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/_inc/jquery.spin.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"en","ajaxurl":"https:\/\/vip-restaurant.vamtam.com\/wp-admin\/admin-ajax.php","nonce":"63d9d31568","display_exif":"0","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"white","comment":"Comment","post_comment":"Post Comment","write_comment":"Write a Comment...","loading_comments":"Loading Comments...","download_original":"View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"Please be sure to submit some text with your comment.","no_comment_email":"Please provide an email address to comment.","no_comment_author":"Please provide your name to comment.","comment_post_error":"Sorry, but there was an error posting your comment. Please try again later.","comment_approved":"Your comment was approved.","comment_unapproved":"Your comment is in moderation.","camera":"Camera","aperture":"Aperture","shutter_speed":"Shutter Speed","focal_length":"Focal Length","copyright":"Copyright","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/vip-restaurant.vamtam.com\/wp-login.php?redirect_to=https%3A%2F%2Fvip-restaurant.vamtam.com%2Fhome-layouts%2Fsushi-bar%2F","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<fieldset><label for=\"email\">Email (Required)<\/label> <input type=\"text\" name=\"email\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-email-field\" \/><\/fieldset><fieldset><label for=\"author\">Name (Required)<\/label> <input type=\"text\" name=\"author\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-author-field\" \/><\/fieldset><fieldset><label for=\"url\">Website<\/label> <input type=\"text\" name=\"url\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-url-field\" \/><\/fieldset>"};
/* ]]> */
</script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/modules/carousel/jetpack-carousel.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-includes/js/jquery/ui/tabs.min.js"></script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/jetpack/modules/tiled-gallery/tiled-gallery/tiled-gallery.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type="text/javascript" src="https://vip-restaurant.vamtam.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js"></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='https://vip-restaurant.vamtam.com/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js'></script>
<![endif]-->
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                if(htmlDiv) {
                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                }else{
                    var htmlDiv = document.createElement("div");
                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                }
            </script>
        <script type="text/javascript">
                        /******************************************
                -   PREPARE PLACEHOLDER FOR SLIDER  -
            ******************************************/

            var setREVStartSize=function(){
                try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                    e.c = jQuery('#rev_slider_36_1');
                    e.responsiveLevels = [1240,1240,1240,480];
                    e.gridwidth = [1240,1024,778,750];
                    e.gridheight = [600,768,960,700];
                    e.sliderLayout = "fullscreen";
                    e.fullScreenAutoWidth='off';
                    e.fullScreenAlignForce='off';
                    e.fullScreenOffsetContainer= '';
                    e.fullScreenOffset='';
                    if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})

                }catch(d){console.log("Failure at Presize of Slider:"+d)}
            };

            setREVStartSize();

                        var tpj=jQuery;
            
            var revapi36;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_36_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_36_1");
                }else{
                    revapi36 = tpj("#rev_slider_36_1").show().revolution({
                        sliderType:"standard",
jsFileLocation:"//vip-restaurant.vamtam.com/wp-content/plugins/revslider/public/assets/js/",
                        sliderLayout:"fullscreen",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                            onHoverStop:"off",
                        },
                        responsiveLevels:[1240,1240,1240,480],
                        visibilityLevels:[1240,1240,1240,480],
                        gridwidth:[1240,1024,778,750],
                        gridheight:[600,768,960,700],
                        lazyType:"none",
                        parallax: {
                            type:"mouse",
                            origo:"enterpoint",
                            speed:400,
                            levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                            type:"mouse",
                            disable_onmobile:"on"
                        },
                        shadow:0,
                        spinner:"off",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"off",
                        fullScreenAutoWidth:"off",
                        fullScreenAlignForce:"off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar:"on",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        panZoomDisableOnMobile:"on",
                        }
                    });
var api = revapi36;
 
/* only change slider layout if touch device is detected */
if('ontouchend' in document) {
 
    var screenSize = jQuery(window).width(),
        layout;
 
    /* desktop screen size */
    if(screenSize >= 1024) {
 
        /* layout options are "fullscreen", "fullwidth" and "auto" */
        layout = 'fullscreen';
 
    }
    /* mobile screen size */
    else {
 
        /* layout options are "fullscreen", "fullwidth" and "auto" */
        layout = 'fullwidth';
 
    }
 
    var sliderSettings = api.data('opt') || api[0].opt;
    /* console.log(sliderSettings); */
 
    sliderSettings.sliderLayout = layout;
 
}               }
            }); /*ready*/
        </script>
        <!-- W3TC-include-js-head -->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"9700abca30","applicationID":"9339867","transactionName":"YFUHbUVUDBZZAkZZXFkfJFpDXA0LFxFTV1Y=","queueTime":0,"applicationTime":863,"atts":"TBIEGw1OHxg=","errorBeacon":"bam.nr-data.net","agent":""}</script><script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>

<div id="style-switcher" style="left: -150px;"><section class="style-switcher-group clearfix buttons"><h4>Styles</h4><div class="section-contents"><a href="mock.php?skin=orange" name="Orange" class="active" style="background-color: rgb(203, 113, 82); width: 50px; height: 50px;"></a><a href="mock.php?skin=gold" name="Gold" style="background-color: rgb(205, 155, 51); width: 50px; height: 50px;"></a><a href="mock.php?skin=green" name="Green" style="background-color: rgb(136, 182, 73); width: 50px; height: 50px;"></a><a href="mock.php?skin=blue" name="Blue" style="background-color: rgb(95, 177, 178); width: 50px; height: 50px;"></a></div></section><section class="style-switcher-group clearfix select"><h4>Layout</h4><div class="section-contents"><div class="clearfix"><select><option value="#full-width">Full width</option><option value="boxed-layout.css">Boxed</option></select><div class="prev">&lt;</div><div class="next">&gt;</div></div></div></section><section class="style-switcher-group clearfix select"><h4>Header Layout</h4><div class="section-contents"><div class="clearfix"><select><option value="header-single-row.css">Single Row</option><option value="header-logo-text-menu.css">Logo - Left</option><option value="header-standard.css">Logo - Centered</option></select><div class="prev">&lt;</div><div class="next">&gt;</div></div></div></section><section class="style-switcher-group clearfix select"><h4>Top Bar</h4><div class="section-contents"><div class="clearfix"><select><option value="#top-bar-off">Off</option><option value="#top-bar-menu-social">Menu, Social Icons</option><option value="#top-bar-social-menu">Social Icons, Menu</option><option value="#top-bar-social-text">Social Icons, Text</option><option value="#top-bar-text-menu">Text, Menu</option><option value="#top-bar-menu-text">Menu, Text</option><option value="#top-bar-text-social">Text, Social Icons</option></select><div class="prev">&lt;</div><div class="next">&gt;</div></div></div></section><section class="style-switcher-group clearfix buttons"><div class="section-contents"><a href="clear_css|Styles|Layout|Header Layout|Top Bar" name="Reset">Reset</a></div></section><span id="toggle-style-switcher"></span></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>