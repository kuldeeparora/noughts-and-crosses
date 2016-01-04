<!DOCTYPE html>
<html xmlns:ng="http://angularjs.org" id="ng-app" ng-app="tva">
<!--[if lt IE 8 ]>
<html class="no-js lt-ie8" lang="en" xmlns:ng="http://angularjs.org" id="ng-app" ng-app="tva"><![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en" xmlns:ng="http://angularjs.org" id="ng-app" ng-app="tva">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html class="no-js" lang="en" xmlns:ng="http://angularjs.org" id="ng-app" ng-app="tva">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta property="dataurl" content="{{ dataurl }}" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Visit the new Virgin TV Anywhere service from Virgin Media. Watch up to 45 Live TV channels and 4000 hours of On Demand shows and Movies online. Virgin Media TiVo customers can also manage their set-top box from anywhere to set recordings, edit series links and delete shows from the box." />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="Virgin Media, TV Anywhere, Virgin, Live Channels, Live TV, TV listings, TV guide, On Demand, Watch Movies Online, Watch TV Online, Watch Shows Online, watch, online, remote record, series links, recordings, planning, entertainment, tv, shows, movies, kids, sports, catch-up tv, Premier League, Champions League, Football, ESPN, Sky Movies, Sky Sports, TiVo, listings, services, help, support, official, customer, subscription, site"/>
    <meta property="og:title" content="Watch Live TV & On Demand - Virgin TV Anywhere from Virgin Media"/>
    <meta property="og:description" content="Watch over 100 live TV channels and 1000s of hours of On Demand shows and movies on your computer with Virgin TV Anywhere from Virgin Media. Virgin Media TiVo customers can also manage their set-top box from anywhere to set recordings, edit series links, cancel recordings, delete recorded shows, and manage your WishLists & Thumbs."/>


    <link rel="shortcut icon" href="/bundles/appplayer/assets/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="/bundles/appplayer/assets/img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/bundles/appplayer/assets/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/bundles/appplayer/assets/img/icons/apple-touch-icon-114x114.png">


    <title>{% block title %}Welcome{% endblock %} - Virgin TV Anywhere - Virgin Media</title>
    <link rel="icon" type="image/ico" href="{{ asset('favicon.ico') }}">

    <!-- Version: {{ build_version }} -->

    {% block css %}
    <link rel="stylesheet" href="{{ asset('/build/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/css/logos-sprite.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/css/logos-sprite-onnow.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/css/logos-sprite-search.css') }}">
    {% endblock %}

    <script src="{{ asset('js/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/libs/modernizr.min.js') }}"></script>
    <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>
    <script src="{{ path('fos_js_routing_js', {callback: 'fos.Router.setData'}) }}"></script>
    <script type="text/javascript">
        {#
           This replaces VirginMedia.application.utils.replaceImgOnError as the VirginMedia Namespace is not registered
            when the image triggers the on error event
        #}
        (function ($) {
            replaceImgOnError = function (image, element, classAttr) {
                var replacement = '<' + element + ' class="' + classAttr + '">No Image Available</' + element + '>';
                image.onerror = "";
                $(image).replaceWith(replacement);
                return true;
            }
        })(jQuery);
    </script>
    <script type="text/javascript" src="http://assets.virginmedia.com/resources/js/data-layer.js"></script>
    <!-- start Tealium -->
    <script type="text/javascript">
        var host = document.location.host;
        var liveDomain = 'anywhere.virginmedia.com';
        var env = ((host == liveDomain) ? 'prod' : 'dev');
        document.write("<scr" + "ipt type='text/javascript' src='" + "//tags.tiqcdn.com/utag/lgi/vm-uk/" + env + "/utag.sync.js'></scr" + "ipt>");
    </script>
    <!-- end Tealium -->

</head>

<body>
<!-- start Tealium -->
<script type="text/javascript">
    (function(a,b,c,d){
        a='//tags.tiqcdn.com/utag/lgi/vm-uk/' + env + '/utag.js';
        b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
        a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
    })();
</script>
<!-- end Tealium -->

<div class="outer-wrapper" ng-cloak>
    <div id="page">
        {{ render_esi(controller('AppPlayerBundle:Index:header', {'active': main_nav_active})) }}
        <div id="page-content" tabindex="-1">
            {% block content %}{% endblock %}
        </div>
    </div>
    <div class="push"></div>
</div>

{{ include('AppPlayerBundle:Index:footer.html.twig') }}
{{ render(controller('AppPlayerBundle:Notification:popup')) }}

<script type="text/javascript">
    var searchChannels = {{ getAllChannels() | json_encode | raw }};
</script>

<script src="{{ asset('build/js/main_libs.js') }}"></script>
<script src="{{ asset('build/js/main_app.js') }}"></script>

{{ render(controller('AppPlayerBundle:Index:search')) }}

{% block additional_javascripts %}{% endblock %}

<script src="{{ asset('bundles/appplayer/assets/js/application/commonModule.js') }}"></script>

{{ render_esi(controller('AppPlayerBundle:Index:dax', {uri: app.request.pathInfo })) }}
{{ render_esi(controller('AppPlayerBundle:Index:quantcast', {uri: app.request.pathInfo })) }}

</body>
</html>
