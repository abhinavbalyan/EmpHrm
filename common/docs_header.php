<!doctype html>
<html lang="en-US" class="no-js" itemtype="https://schema.org/Blog" itemscope>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='max-image-preview:large' />

    <title>EmpHrm Docs</title>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://icehrm.com/explore/docs/installation/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Installation - IceHrm" />
    <meta property="og:description" content="If you are using icehrm cloud please skip this. Getting IceHrm installed only takes a few minutes. If it ever becomes a problem, please file an issue describing the issue you encountered and how we might make the process easier. Software Requirements Before installing IceHrm please make sure your system supports the following requirements. Optional..." />
    <meta property="og:url" content="https://icehrm.com/explore/docs/installation/" />
    <meta property="og:site_name" content="IceHrm" />
    <meta property="article:modified_time" content="2023-01-25T11:37:47+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="2 minutes">
    <?php
    include('../Constant.php');
    ?>
    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebSite",
                "@id": "https://icehrm.com/explore/#website",
                "url": "https://icehrm.com/explore/",
                "name": "IceHrm",
                "description": "IceHrm Marketplace",
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": "https://icehrm.com/explore/?s={search_term_string}",
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "en-US"
            }, {
                "@type": "WebPage",
                "@id": "https://icehrm.com/explore/docs/installation/#webpage",
                "url": "https://icehrm.com/explore/docs/installation/",
                "name": "Installation - IceHrm",
                "isPartOf": {
                    "@id": "https://icehrm.com/explore/#website"
                },
                "datePublished": "2021-10-31T08:01:41+00:00",
                "dateModified": "2023-01-25T11:37:47+00:00",
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://icehrm.com/explore/docs/installation/"]
                }]
            }]
        }
    </script>

    <link rel='dns-prefetch' href='//icehrm.com' />
    <link rel="alternate" type="application/rss+xml" title="IceHrm &raquo; Feed" href="https://icehrm.com/explore/feed/" />
    <link rel="alternate" type="application/rss+xml" title="IceHrm &raquo; Comments Feed" href="https://icehrm.com/explore/comments/feed/" />
    <script>
        document.documentElement.classList.remove('no-js');
    </script>
    <link rel="alternate" type="application/rss+xml" title="IceHrm &raquo; Installation Comments Feed" href="https://icehrm.com/explore/docs/installation/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/icehrm.com\/explore\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo Constant::$base_url ?>css/block-library.css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='<?php echo Constant::$base_url ?>css/blocks-vendors-style.css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='<?php echo Constant::$base_url ?>css/wc-blocks-style.css' media='all' />
    <link rel='stylesheet' id='coblocks-frontend-css' href='<?php echo Constant::$base_url ?>css/coblocks-style.css' media='all' />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--theme-palette-1: #4285f4;
            --wp--preset--color--theme-palette-2: #185abc;
            --wp--preset--color--theme-palette-3: #000000;
            --wp--preset--color--theme-palette-4: #2d3e50;
            --wp--preset--color--theme-palette-5: #414141;
            --wp--preset--color--theme-palette-6: #656565;
            --wp--preset--color--theme-palette-7: #f2eee2;
            --wp--preset--color--theme-palette-8: #f7fafc;
            --wp--preset--color--theme-palette-9: #ffffff;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 14px;
            --wp--preset--font-size--medium: 24px;
            --wp--preset--font-size--large: 32px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--larger: 40px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='betterdocs-css' href="<?php echo Constant::$base_url ?>css/betterdocs-public.css" media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <style id='kadence-global-inline-css'>
        /* Kadence Base CSS */
        :root {
            --global-palette1: #4285f4;
            --global-palette2: #185abc;
            --global-palette3: #000000;
            --global-palette4: #2d3e50;
            --global-palette5: #414141;
            --global-palette6: #656565;
            --global-palette7: #f2eee2;
            --global-palette8: #f7fafc;
            --global-palette9: #ffffff;
            --global-palette9rgb: 255, 255, 255;
            --global-palette-highlight: var(--global-palette1);
            --global-palette-highlight-alt: var(--global-palette2);
            --global-palette-highlight-alt2: var(--global-palette9);
            --global-palette-btn-bg: var(--global-palette1);
            --global-palette-btn-bg-hover: var(--global-palette2);
            --global-palette-btn: var(--global-palette9);
            --global-palette-btn-hover: var(--global-palette9);
            --global-body-font-family: 'Open Sans', var(--global-fallback-font);
            --global-heading-font-family: Montserrat, var(--global-fallback-font);
            --global-primary-nav-font-family: inherit;
            --global-fallback-font: sans-serif;
            --global-display-fallback-font: sans-serif;
            --global-content-width: 1290px;
        }

        :root .has-theme-palette-1-background-color {
            background-color: var(--global-palette1);
        }

        :root .has-theme-palette-1-color {
            color: var(--global-palette1);
        }

        :root .has-theme-palette-2-background-color {
            background-color: var(--global-palette2);
        }

        :root .has-theme-palette-2-color {
            color: var(--global-palette2);
        }

        :root .has-theme-palette-3-background-color {
            background-color: var(--global-palette3);
        }

        :root .has-theme-palette-3-color {
            color: var(--global-palette3);
        }

        :root .has-theme-palette-4-background-color {
            background-color: var(--global-palette4);
        }

        :root .has-theme-palette-4-color {
            color: var(--global-palette4);
        }

        :root .has-theme-palette-5-background-color {
            background-color: var(--global-palette5);
        }

        :root .has-theme-palette-5-color {
            color: var(--global-palette5);
        }

        :root .has-theme-palette-6-background-color {
            background-color: var(--global-palette6);
        }

        :root .has-theme-palette-6-color {
            color: var(--global-palette6);
        }

        :root .has-theme-palette-7-background-color {
            background-color: var(--global-palette7);
        }

        :root .has-theme-palette-7-color {
            color: var(--global-palette7);
        }

        :root .has-theme-palette-8-background-color {
            background-color: var(--global-palette8);
        }

        :root .has-theme-palette-8-color {
            color: var(--global-palette8);
        }

        :root .has-theme-palette-9-background-color {
            background-color: var(--global-palette9);
        }

        :root .has-theme-palette-9-color {
            color: var(--global-palette9);
        }

        :root .has-theme-palette1-background-color {
            background-color: var(--global-palette1);
        }

        :root .has-theme-palette1-color {
            color: var(--global-palette1);
        }

        :root .has-theme-palette2-background-color {
            background-color: var(--global-palette2);
        }

        :root .has-theme-palette2-color {
            color: var(--global-palette2);
        }

        :root .has-theme-palette3-background-color {
            background-color: var(--global-palette3);
        }

        :root .has-theme-palette3-color {
            color: var(--global-palette3);
        }

        :root .has-theme-palette4-background-color {
            background-color: var(--global-palette4);
        }

        :root .has-theme-palette4-color {
            color: var(--global-palette4);
        }

        :root .has-theme-palette5-background-color {
            background-color: var(--global-palette5);
        }

        :root .has-theme-palette5-color {
            color: var(--global-palette5);
        }

        :root .has-theme-palette6-background-color {
            background-color: var(--global-palette6);
        }

        :root .has-theme-palette6-color {
            color: var(--global-palette6);
        }

        :root .has-theme-palette7-background-color {
            background-color: var(--global-palette7);
        }

        :root .has-theme-palette7-color {
            color: var(--global-palette7);
        }

        :root .has-theme-palette8-background-color {
            background-color: var(--global-palette8);
        }

        :root .has-theme-palette8-color {
            color: var(--global-palette8);
        }

        :root .has-theme-palette9-background-color {
            background-color: var(--global-palette9);
        }

        :root .has-theme-palette9-color {
            color: var(--global-palette9);
        }

        body {
            background: var(--global-palette8);
        }

        body,
        input,
        select,
        optgroup,
        textarea {
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 2;
            font-family: var(--global-body-font-family);
            color: var(--global-palette5);
        }

        .content-bg,
        body.content-style-unboxed .site {
            background: var(--global-palette9);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--global-heading-font-family);
        }

        h1 {
            font-weight: 700;
            font-size: 32px;
            line-height: 1.5;
            color: var(--global-palette3);
        }

        h2 {
            font-weight: 700;
            font-size: 28px;
            line-height: 1.5;
            color: var(--global-palette3);
        }

        h3 {
            font-weight: 700;
            font-size: 24px;
            line-height: 1.5;
            color: var(--global-palette3);
        }

        h4 {
            font-weight: 700;
            font-size: 22px;
            line-height: 1.5;
            color: var(--global-palette4);
        }

        h5 {
            font-weight: 700;
            font-size: 20px;
            line-height: 1.5;
            color: var(--global-palette4);
        }

        h6 {
            font-weight: 700;
            font-size: 18px;
            line-height: 1.5;
            color: var(--global-palette5);
        }

        .site-container,
        .site-header-row-layout-contained,
        .site-footer-row-layout-contained,
        .entry-hero-layout-contained,
        .comments-area,
        .alignfull>.wp-block-cover__inner-container,
        .alignwide>.wp-block-cover__inner-container {
            max-width: 1290px;
        }

        .content-width-narrow .content-container.site-container,
        .content-width-narrow .hero-container.site-container {
            max-width: 842px;
        }

        @media all and (min-width: 1520px) {
            .site .content-container .alignwide {
                margin-left: -115px;
                margin-right: -115px;
                width: unset;
                max-width: unset;
            }
        }

        @media all and (min-width: 1102px) {
            .content-width-narrow .site .content-container .alignwide {
                margin-left: -130px;
                margin-right: -130px;
                width: unset;
                max-width: unset;
            }
        }

        .content-style-boxed .site .entry-content .alignwide {
            margin-left: -2rem;
            margin-right: -2rem;
        }

        @media all and (max-width: 1024px) {
            .content-style-boxed .site .entry-content .alignwide {
                margin-left: -2rem;
                margin-right: -2rem;
            }
        }

        @media all and (max-width: 767px) {
            .content-style-boxed .site .entry-content .alignwide {
                margin-left: -1.5rem;
                margin-right: -1.5rem;
            }
        }

        .content-area {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        @media all and (max-width: 1024px) {
            .content-area {
                margin-top: 3rem;
                margin-bottom: 3rem;
            }
        }

        @media all and (max-width: 767px) {
            .content-area {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
        }

        .entry-content-wrap {
            padding: 2rem;
        }

        @media all and (max-width: 1024px) {
            .entry-content-wrap {
                padding: 2rem;
            }
        }

        @media all and (max-width: 767px) {
            .entry-content-wrap {
                padding: 1.5rem;
            }
        }

        .entry.single-entry {
            box-shadow: 0px 15px 15px -10px rgba(0, 0, 0, 0.05);
        }

        .entry.loop-entry {
            box-shadow: 0px 15px 15px -10px rgba(0, 0, 0, 0.05);
        }

        .loop-entry .entry-content-wrap {
            padding: 2rem;
        }

        @media all and (max-width: 1024px) {
            .loop-entry .entry-content-wrap {
                padding: 2rem;
            }
        }

        @media all and (max-width: 767px) {
            .loop-entry .entry-content-wrap {
                padding: 1.5rem;
            }
        }

        .primary-sidebar.widget-area .widget {
            margin-bottom: 1.5em;
            color: var(--global-palette4);
        }

        .primary-sidebar.widget-area .widget-title {
            font-weight: 700;
            font-size: 20px;
            line-height: 1.5;
            color: var(--global-palette3);
        }

        button,
        .button,
        .wp-block-button__link,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .fl-button,
        .elementor-button-wrapper .elementor-button {
            box-shadow: 0px 0px 0px -7px rgba(0, 0, 0, 0);
        }

        button:hover,
        button:focus,
        button:active,
        .button:hover,
        .button:focus,
        .button:active,
        .wp-block-button__link:hover,
        .wp-block-button__link:focus,
        .wp-block-button__link:active,
        input[type="button"]:hover,
        input[type="button"]:focus,
        input[type="button"]:active,
        input[type="reset"]:hover,
        input[type="reset"]:focus,
        input[type="reset"]:active,
        input[type="submit"]:hover,
        input[type="submit"]:focus,
        input[type="submit"]:active,
        .elementor-button-wrapper .elementor-button:hover,
        .elementor-button-wrapper .elementor-button:focus,
        .elementor-button-wrapper .elementor-button:active {
            box-shadow: 0px 15px 25px -7px rgba(0, 0, 0, 0.1);
        }

        @media all and (min-width: 1025px) {
            .transparent-header .entry-hero .entry-hero-container-inner {
                padding-top: 80px;
            }
        }

        @media all and (max-width: 1024px) {
            .mobile-transparent-header .entry-hero .entry-hero-container-inner {
                padding-top: 80px;
            }
        }

        @media all and (max-width: 767px) {
            .mobile-transparent-header .entry-hero .entry-hero-container-inner {
                padding-top: 80px;
            }
        }

        .site-middle-footer-inner-wrap {
            padding-top: 30px;
            padding-bottom: 30px;
            grid-column-gap: 30px;
            grid-row-gap: 30px;
        }

        .site-middle-footer-inner-wrap .widget {
            margin-bottom: 30px;
        }

        .site-middle-footer-inner-wrap .site-footer-section:not(:last-child):after {
            right: calc(-30px / 2);
        }

        .site-top-footer-inner-wrap {
            padding-top: 30px;
            padding-bottom: 30px;
            grid-column-gap: 30px;
            grid-row-gap: 30px;
        }

        .site-top-footer-inner-wrap .widget {
            margin-bottom: 30px;
        }

        .site-top-footer-inner-wrap .site-footer-section:not(:last-child):after {
            right: calc(-30px / 2);
        }

        .site-bottom-footer-inner-wrap {
            padding-top: 30px;
            padding-bottom: 30px;
            grid-column-gap: 30px;
        }

        .site-bottom-footer-inner-wrap .widget {
            margin-bottom: 30px;
        }

        .site-bottom-footer-inner-wrap .site-footer-section:not(:last-child):after {
            right: calc(-30px / 2);
        }

        .footer-social-inner-wrap {
            font-size: 1em;
            margin-top: -0.3em;
            margin-left: calc(-0.3em / 2);
            margin-right: calc(-0.3em / 2);
        }

        .site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .social-button {
            margin-top: 0.3em;
            margin-left: calc(0.3em / 2);
            margin-right: calc(0.3em / 2);
            border: 2px none transparent;
            border-radius: 3px;
        }

        #colophon .footer-navigation .footer-menu-container>ul>li>a {
            padding-left: calc(1.2em / 2);
            padding-right: calc(1.2em / 2);
            color: var(--global-palette5);
        }

        #colophon .footer-navigation .footer-menu-container>ul li a:hover {
            color: var(--global-palette-highlight);
        }

        #colophon .footer-navigation .footer-menu-container>ul li.current-menu-item>a {
            color: var(--global-palette3);
        }

        .entry-hero.page-hero-section .entry-header {
            min-height: 200px;
        }

        .entry-hero.product-hero-section .entry-header {
            min-height: 200px;
        }

        .product-title .single-category {
            font-weight: 700;
            font-size: 32px;
            line-height: 1.5;
            color: var(--global-palette3);
        }

        .site .product-hero-section .extra-title {
            font-weight: 700;
            font-size: 32px;
            line-height: 1.5;
        }

        .woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button,
        .wc-block-grid__product.woo-archive-btn-button .product-details .wc-block-grid__product-add-to-cart .wp-block-button__link {
            border: 2px none transparent;
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.0);
        }

        .woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button:hover,
        .wc-block-grid__product.woo-archive-btn-button .product-details .wc-block-grid__product-add-to-cart .wp-block-button__link:hover {
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
        }

        /* Kadence Header CSS */
        .site-branding {
            padding: 0px 0px 0px 0px;
        }

        .site-branding .site-title {
            font-weight: 700;
            font-size: 26px;
            line-height: 1.2;
            color: var(--global-palette3);
        }

        #masthead,
        #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start):not(.site-header-row-container),
        #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start)>.site-header-row-container-inner {
            background: #ffffff;
        }

        .site-main-header-inner-wrap {
            min-height: 80px;
        }

        .site-top-header-inner-wrap {
            min-height: 0px;
        }

        .site-bottom-header-inner-wrap {
            min-height: 0px;
        }

        .header-navigation[class*="header-navigation-style-underline"] .header-menu-container.primary-menu-container>ul>li>a:after {
            width: calc(100% - 1.2em);
        }

        .main-navigation .primary-menu-container>ul>li.menu-item>a {
            padding-left: calc(1.2em / 2);
            padding-right: calc(1.2em / 2);
            padding-top: 0.6em;
            padding-bottom: 0.6em;
            color: var(--global-palette5);
        }

        .main-navigation .primary-menu-container>ul>li.menu-item>a:hover {
            color: var(--global-palette-highlight);
        }

        .main-navigation .primary-menu-container>ul>li.menu-item.current-menu-item>a {
            color: var(--global-palette3);
        }

        .header-navigation[class*="header-navigation-style-underline"] .header-menu-container.secondary-menu-container>ul>li>a:after {
            width: calc(100% - 1.2em);
        }

        .secondary-navigation .secondary-menu-container>ul>li.menu-item>a {
            padding-left: calc(1.2em / 2);
            padding-right: calc(1.2em / 2);
            padding-top: 0.6em;
            padding-bottom: 0.6em;
            color: var(--global-palette5);
        }

        .secondary-navigation .secondary-menu-container>ul>li.menu-item>a:hover {
            color: var(--global-palette-highlight);
        }

        .secondary-navigation .secondary-menu-container>ul>li.menu-item.current-menu-item>a {
            color: var(--global-palette3);
        }

        .header-navigation .header-menu-container ul ul.sub-menu,
        .header-navigation .header-menu-container ul ul.submenu {
            background: var(--global-palette3);
            box-shadow: 0px 2px 13px 0px rgba(0, 0, 0, 0.1);
        }

        .header-navigation .header-menu-container ul ul li.menu-item,
        .header-menu-container ul.menu>li.kadence-menu-mega-enabled>ul>li.menu-item>a {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .header-navigation .header-menu-container ul ul li.menu-item>a {
            width: 200px;
            padding-top: 1em;
            padding-bottom: 1em;
            color: var(--global-palette8);
            font-size: 12px;
        }

        .header-navigation .header-menu-container ul ul li.menu-item>a:hover {
            color: var(--global-palette9);
            background: var(--global-palette4);
        }

        .header-navigation .header-menu-container ul ul li.menu-item.current-menu-item>a {
            color: var(--global-palette9);
            background: var(--global-palette4);
        }

        .mobile-toggle-open-container .menu-toggle-open {
            color: var(--global-palette5);
            padding: 0.4em 0.6em 0.4em 0.6em;
            font-size: 14px;
        }

        .mobile-toggle-open-container .menu-toggle-open.menu-toggle-style-bordered {
            border: 1px solid currentColor;
        }

        .mobile-toggle-open-container .menu-toggle-open .menu-toggle-icon {
            font-size: 20px;
        }

        .mobile-toggle-open-container .menu-toggle-open:hover,
        .mobile-toggle-open-container .menu-toggle-open:focus {
            color: var(--global-palette-highlight);
        }

        .mobile-navigation ul li {
            font-size: 14px;
        }

        .mobile-navigation ul li a {
            padding-top: 1em;
            padding-bottom: 1em;
        }

        .mobile-navigation ul li>a,
        .mobile-navigation ul li.menu-item-has-children>.drawer-nav-drop-wrap {
            color: var(--global-palette8);
        }

        .mobile-navigation ul li.current-menu-item>a,
        .mobile-navigation ul li.current-menu-item.menu-item-has-children>.drawer-nav-drop-wrap {
            color: var(--global-palette-highlight);
        }

        .mobile-navigation ul li.menu-item-has-children .drawer-nav-drop-wrap,
        .mobile-navigation ul li:not(.menu-item-has-children) a {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-navigation:not(.drawer-navigation-parent-toggle-true) ul li.menu-item-has-children .drawer-nav-drop-wrap button {
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }

        #mobile-drawer .drawer-header .drawer-toggle {
            padding: 0.6em 0.15em 0.6em 0.15em;
            font-size: 24px;
        }

        #main-header .header-button {
            border: 2px none transparent;
            box-shadow: 0px 0px 0px -7px rgba(0, 0, 0, 0);
        }

        #main-header .header-button:hover {
            box-shadow: 0px 15px 25px -7px rgba(0, 0, 0, 0.1);
        }

        .header-social-inner-wrap {
            font-size: 1em;
            margin-top: -0.3em;
            margin-left: calc(-0.3em / 2);
            margin-right: calc(-0.3em / 2);
        }

        .header-social-wrap .header-social-inner-wrap .social-button {
            margin-top: 0.3em;
            margin-left: calc(0.3em / 2);
            margin-right: calc(0.3em / 2);
            border: 2px none transparent;
            border-radius: 3px;
        }

        .header-mobile-social-inner-wrap {
            font-size: 1em;
            margin-top: -0.3em;
            margin-left: calc(-0.3em / 2);
            margin-right: calc(-0.3em / 2);
        }

        .header-mobile-social-wrap .header-mobile-social-inner-wrap .social-button {
            margin-top: 0.3em;
            margin-left: calc(0.3em / 2);
            margin-right: calc(0.3em / 2);
            border: 2px none transparent;
            border-radius: 3px;
        }

        .search-toggle-open-container .search-toggle-open {
            color: var(--global-palette5);
        }

        .search-toggle-open-container .search-toggle-open.search-toggle-style-bordered {
            border: 1px solid currentColor;
        }

        .search-toggle-open-container .search-toggle-open:hover,
        .search-toggle-open-container .search-toggle-open:focus {
            color: var(--global-palette-highlight);
        }

        #search-drawer .drawer-inner {
            background: rgba(9, 12, 16, 0.97);
        }

        .mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button {
            border: 2px none transparent;
            box-shadow: 0px 0px 0px -7px rgba(0, 0, 0, 0);
        }

        .mobile-header-button-wrap .mobile-header-button:hover {
            box-shadow: 0px 15px 25px -7px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link rel='stylesheet' id='kadence-header-css' href='<?php echo Constant::$base_url ?>css/header.min.css' media='all' />
    <link rel='stylesheet' id='kadence-content-css' href='<?php echo Constant::$base_url ?>css/content.min.css' media='all' />
    <link rel='stylesheet' id='kadence-woocommerce-css' href='<?php echo Constant::$base_url ?>css/woocommerce.min.css' media='all' />
    <link rel='stylesheet' id='kadence-footer-css' href='<?php echo Constant::$base_url ?>css/kadence_footer.min.css' media='all' />
    <script src='<?php echo Constant::$base_url ?>js/wp-includes.min.js' id='jquery-core-js'></script>
    <script src='<?php echo Constant::$base_url ?>/js/jquery-migrate.min.js' id='jquery-migrate-js'></script>
    <!-- <link rel="https://api.w.org/" href="https://icehrm.com/explore/wp-json/" /> -->
    <!-- <link rel="alternate" type="application/json" href="https://icehrm.com/explore/wp-json/wp/v2/docs/5" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://icehrm.com/explore/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://icehrm.com/explore/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.1" />
    <meta name="generator" content="WooCommerce 7.3.0" />
    <link rel='shortlink' href='https://icehrm.com/explore/?p=5' />
    <link rel="alternate" type="application/json+oembed" href="https://icehrm.com/explore/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ficehrm.com%2Fexplore%2Fdocs%2Finstallation%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://icehrm.com/explore/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ficehrm.com%2Fexplore%2Fdocs%2Finstallation%2F&#038;format=xml" /> -->
    <style type="text/css">
        .betterdocs-wraper.betterdocs-main-wraper {
            background-color: #ffffff;
        }

        .betterdocs-archive-wrap.betterdocs-archive-main {
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 0px;
            padding-right: 0px;
        }

        .betterdocs-archive-wrap.betterdocs-archive-main {
            width: 100%;
            max-width: 1600px;
        }

        .betterdocs-categories-wrap.single-kb.layout-masonry .docs-single-cat-wrap {
            margin-bottom: 50px;
        }

        .betterdocs-categories-wrap.single-kb.layout-flex .docs-single-cat-wrap {
            margin: 50px;
        }

        .betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap {
            padding-top: 20px;
        }

        .betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap,
        .betterdocs-archive-main .docs-item-container {
            padding-right: 20px;
            padding-left: 20px;
        }

        .betterdocs-archive-main .docs-item-container {
            padding-bottom: 20px;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap,
        .betterdocs-categories-wrap.single-kb .docs-single-cat-wrap.docs-cat-list-2-box {
            padding-top: 20px;
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 20px;
        }

        .betterdocs-categories-wrap.betterdocs-category-box .docs-single-cat-wrap p {
            color: #566e8b;
        }

        .betterdocs-categories-wrap.single-kb .docs-single-cat-wrap,
        .betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .betterdocs-categories-wrap.single-kb .docs-single-cat-wrap,
        .betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-item-container {
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .betterdocs-category-list .betterdocs-categories-wrap .docs-single-cat-wrap,
        .betterdocs-category-box.white-bg .docs-single-cat-wrap,
        .betterdocs-categories-wrap.white-bg .docs-single-cat-wrap {
            background-color: #fff;
        }

        .betterdocs-category-box.single-kb.ash-bg .docs-single-cat-wrap {
            background-color: #f8f8fc;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap:hover,
        .betterdocs-categories-wrap.single-kb.white-bg .docs-single-cat-wrap.docs-cat-list-2-box:hover {
            background-color: #fff;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap img {
            margin-bottom: 20px;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
        .pro-layout-4.single-kb .docs-cat-list-2-box-content .docs-cat-title {
            margin-bottom: 15px;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap p {
            margin-bottom: 15px;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap span {}

        .docs-cat-title>img {
            height: 32px;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap img {
            height: 80px;
        }

        .single-kb .docs-cat-title-inner .docs-cat-heading,
        .betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
        .single-kb .docs-cat-list-2-box .docs-cat-title,
        .single-kb .docs-cat-list-2-items .docs-cat-title {
            font-size: 20px;
        }

        .single-kb .docs-cat-title-inner .docs-cat-heading {
            color: #528ffe;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
        .single-kb .docs-cat-list-2 .docs-cat-title {
            color: #333333;
        }

        .docs-cat-title-inner {
            border-color: #528ffe;
            padding-bottom: 20px;
        }

        .docs-cat-title-inner .docs-item-count span {
            color: #ffffff;
            font-size: 15px;
        }

        .betterdocs-category-box.single-kb .docs-single-cat-wrap span,
        .single-kb .docs-cat-list-2-box .title-count span {
            color: #707070;
            font-size: 15px;
        }

        .betterdocs-categories-wrap.single-kb .docs-cat-title-wrap .docs-item-count span {
            font-size: 15px;
        }

        .betterdocs-categories-wrap .docs-item-count {
            background-color: #528ffe;
        }

        .betterdocs-categories-wrap.single-kb .docs-cat-title-inner span {
            background-color: rgba(82, 143, 254, 0.44);
            border-color: #ffffff;
            border-style: none;
            width: 30px;
            height: 30px;
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container ul {
            background-color: rgba(255, 255, 255, 0);
            padding-top: 0px;
            padding-bottom: 0px;
            padding-right: 0px;
            padding-left: 0px;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container {
            background-color: #ffffff;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container li,
        .betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat-title {
            margin-top: 10px;
            margin-right: 10px;
            margin-left: 10px;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container li {
            margin-bottom: 10px;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container li svg {
            fill: #566e8b;
            font-size: 15px;
            min-width: 15px;
        }

        .betterdocs-categories-wrap.single-kb li a {
            color: #566e8b;
            font-size: 15px;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li a {
            color: #566e8b;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li a:hover {
            color: #566e8b;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li svg {
            fill: #566e8b;
        }

        .betterdocs-categories-wrap.single-kb li a:hover {
            color: #566e8b;
        }

        .betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat-title svg {
            fill: #566e8b;
            font-size: 15px;
        }

        .betterdocs-categories-wrap.single-kb .docs-sub-cat-title a {
            color: #566e8b;
            font-size: 17px;
        }

        .betterdocs-categories-wrap.single-kb .docs-sub-cat-title a:hover {
            color: #566e8b;
        }

        .docs-cat-link-btn,
        .docs-cat-link-btn:visited {
            background-color: #ffffff;
            font-size: 16px;
            color: #528ffe;
            border-color: #528ffe;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-bottom-left-radius: 50px;
            padding-top: 10px;
            padding-right: 20px;
            padding-bottom: 10px;
            padding-left: 20px;
            border-width: 1px;
        }

        .docs-cat-link-btn,
        .docs-cat-link-btn {
            border-width: 1px;
        }

        .docs-cat-link-btn:hover {
            background-color: #528ffe;
            color: #fff;
            border-color: #528ffe;
        }

        .docs-single-cat-wrap .docs-item-container .docs-cat-link-btn {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .betterdocs-single-bg .betterdocs-content-area,
        .betterdocs-single-bg .betterdocs-content-full {
            background-color: #ffffff;
        }

        .betterdocs-single-wraper .betterdocs-content-area {
            padding-top: 30px;
            padding-right: 25px;
            padding-bottom: 30px;
            padding-left: 25px;
        }

        .betterdocs-single-wraper .betterdocs-content-area .docs-single-main {
            padding-top: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
        }

        .betterdocs-single-layout2 .docs-content-full-main .doc-single-content-wrapper {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .betterdocs-single-layout3 .docs-content-full-main .doc-single-content-wrapper {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .docs-single-title .betterdocs-entry-title {
            font-size: 36px;
            color: #3f5876;
        }

        .betterdocs-breadcrumb .betterdocs-breadcrumb-item a {
            font-size: 16px;
            color: #566e8b;
        }

        .betterdocs-breadcrumb .betterdocs-breadcrumb-list .betterdocs-breadcrumb-item a:hover {
            color: #566e8b;
        }

        .betterdocs-breadcrumb .breadcrumb-delimiter {
            color: #566e8b;
        }

        .betterdocs-breadcrumb-item.current span {
            font-size: 16px;
            color: #528fff;
        }

        .betterdocs-toc {
            background-color: #fff;
            padding-top: 20px;
            padding-right: 25px;
            padding-bottom: 20px;
            padding-left: 20px;
        }

        .betterdocs-entry-content .betterdocs-toc {
            margin-bottom: 20px;
        }

        .sticky-toc-container {
            width: 272px;
        }

        .sticky-toc-container.toc-sticky {
            z-index: 2;
            margin-top: 0px;
        }

        .betterdocs-toc>.toc-title {
            color: #3f5876;
            font-size: 18px;
        }

        .betterdocs-entry-content .betterdocs-toc.collapsible-sm .angle-icon {
            color: #3f5876;
        }

        .betterdocs-toc>.toc-list a {
            color: #566e8b;
            font-size: 14px;
            margin-top: 5px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
        }

        .betterdocs-toc>.toc-list li a:before {
            font-size: 12px;
            color: #566e8b;
        }

        .betterdocs-toc>.toc-list li:before {
            padding-top: 5px;
        }

        .betterdocs-toc>.toc-list a:hover {
            color: #528fff;
        }

        .feedback-form-link .feedback-form-icon svg,
        .feedback-form-link .feedback-form-icon img {
            width: 26px;
        }

        .betterdocs-toc>.toc-list a.active {
            color: #528fff;
        }

        .betterdocs-content {
            color: #4d4d4d;
            font-size: 16px;
        }

        .betterdocs-social-share .betterdocs-social-share-heading h5 {
            color: #566e8b;
        }

        .betterdocs-entry-footer .feedback-form-link {
            color: #566e8b;
            font-size: 15px;
        }

        .betterdocs-entry-footer .feedback-update-form .feedback-form-link:hover {
            color: #566e8b;
        }

        .betterdocs-entry-footer .feedback-form .modal-content .feedback-form-title {
            color: #3f5876;
            font-size: 21px;
        }

        .docs-navigation a {
            color: #3f5876;
            font-size: 16px;
        }

        .docs-navigation a:hover {
            color: #3f5876;
        }

        .docs-navigation a svg {
            fill: #5edf8e;
            min-width: 16px;
            width: 16px;
        }

        .betterdocs-entry-footer .update-date {
            color: #566e8b;
            font-size: 14px;
        }

        .betterdocs-credit p {
            color: #201d3a;
            font-size: 14px;
        }

        .betterdocs-credit p a {
            color: #528fff;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap,
        .betterdocs-category-wraper .betterdocs-full-sidebar-left {
            background-color: #ffffff;
        }

        .betterdocs-single-layout1 .betterdocs-sidebar-content .betterdocs-categories-wrap {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .docs-cat-title-wrap {
            background-color: #ffffff;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title>img {
            height: 24px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .docs-cat-heading {
            color: #3f5876;
            font-size: 16px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .docs-cat-heading:hover {
            color: #3f5876 !important;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .cat-list-arrow-down {
            color: #3f5876;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .active-title .docs-cat-title-inner .docs-cat-heading,
        .betterdocs-sidebar-content.betterdocs-category-sidebar .active-title .docs-cat-title-inner .docs-cat-heading,
        .betterdocs-category-wraper .betterdocs-full-sidebar-left .docs-cat-title-wrap::after {
            color: #3f5876;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-count {
            background-color: #528ffe;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-count span {
            background-color: rgba(82, 143, 255, 0.2);
            color: #ffffff;
            font-size: 12px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-single-cat-wrap {
            margin-top: 5px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap,
        .betterdocs-full-sidebar-left .betterdocs-categories-wrap {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-single-cat-wrap .docs-cat-title-wrap {
            padding-top: 10px;
            padding-right: 15px;
            padding-bottom: 10px;
            padding-left: 15px;
        }

        .betterdocs-single-layout2 .betterdocs-full-sidebar-left .betterdocs-sidebar-content .betterdocs-categories-wrap .docs-cat-title-inner {
            background-color: #ffffff;
            padding-top: 10px;
            padding-right: 15px;
            padding-bottom: 10px;
            padding-left: 15px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-container {
            background-color: #ffffff;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .docs-cat-title-wrap.active-title {
            background-color: rgba(90, 148, 255, 0.1);
            border-color: #528fff;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-item-container li {
            padding-left: 0;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        .betterdocs-single-layout2 .betterdocs-sidebar-content .betterdocs-categories-wrap .docs-item-container li {
            margin-right: 0 !important;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li a {
            color: #566e8b;
            font-size: 14px;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li a:hover {
            color: #528fff;
        }

        .betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li svg {
            fill: #566e8b;
            font-size: 14px;
        }

        .betterdocs-sidebar-content .betterdocs-categories-wrap li a.active,
        .betterdocs-sidebar-content .betterdocs-categories-wrap li.sub-list a.active {
            color: #528fff;
        }

        .betterdocs-category-wraper.betterdocs-single-wraper {}

        .betterdocs-category-wraper.betterdocs-single-wraper .docs-listing-main .docs-category-listing {
            background-color: #ffffff;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            border-radius: 5px;
        }

        .betterdocs-category-wraper .docs-category-listing .docs-cat-title .docs-cat-heading {
            color: #566e8b;
            font-size: 20px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
        }

        .betterdocs-category-wraper .docs-category-listing .docs-cat-title p {
            color: #566e8b;
            font-size: 14px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li,
        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title {
            margin-top: 10px;
            margin-right: 0px;
            margin-bottom: 10px;
            margin-left: 0px;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li svg {
            fill: #566e8b;
            font-size: 16px;
            min-width: 16px;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li a {
            color: #566e8b;
            font-size: 14px;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li a:hover {
            color: #528ffe;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li a {
            color: #566e8b;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li a:hover {
            color: #566e8b;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li svg {
            fill: #566e8b;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title svg {
            fill: #566e8b;
            font-size: 15px;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title a {
            color: #566e8b;
            font-size: 17px;
        }

        .betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title a:hover {
            color: #566e8b;
        }

        .betterdocs-search-form-wrap {
            background-color: #f7f7f7;
            padding-top: 50px;
            padding-right: 20px;
            padding-bottom: 50px;
            padding-left: 20px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        .betterdocs-search-heading h2 {
            line-height: 1.2;
            font-size: 40px;
            color: #566e8b;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
        }

        .betterdocs-search-heading h3 {
            line-height: 1.2;
            font-size: 16px;
            color: #566e8b;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
        }

        .betterdocs-searchform {
            background-color: #ffffff;
            border-radius: 8px;
            padding-top: 22px;
            padding-right: 15px;
            padding-bottom: 22px;
            padding-left: 15px;
        }

        .betterdocs-searchform .betterdocs-search-field {
            font-size: 18px;
            color: #595959;
        }

        .betterdocs-searchform svg.docs-search-icon {
            fill: #444b54;
            height: 30px;
        }

        .docs-search-close path.close-line {
            fill: #ff697b;
        }

        .docs-search-close path.close-border {
            fill: #444b54;
        }

        .docs-search-loader {
            stroke: #444b54;
        }

        .betterdocs-searchform svg.docs-search-icon:hover {
            fill: #444b54;
        }

        .betterdocs-live-search .docs-search-result {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            border-color: #f1f1f1;
        }

        .betterdocs-search-result-wrap::before {
            border-color: transparent transparent #fff;
        }

        .betterdocs-live-search .docs-search-result li {
            border-color: #f5f5f5;
        }

        .betterdocs-live-search .docs-search-result li a {
            font-size: 16px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
        }

        .betterdocs-live-search .docs-search-result li a .betterdocs-search-title {
            color: #444444;
        }

        .betterdocs-live-search .docs-search-result li a .betterdocs-search-category {
            color: #444444;
        }

        .betterdocs-live-search .docs-search-result li:hover {
            background-color: #f5f5f5;
        }

        .betterdocs-live-search .docs-search-result li a:hover {
            color: #444444;
        }

        .betterdocs-category-box.pro-layout-3 .docs-single-cat-wrap img,
        .docs-cat-list-2-box img {
            margin-right: 20px;
        }

        .betterdocs-wraper .betterdocs-search-form-wrap.cat-layout-4 {
            padding-bottom: 130px;
        }
    </style>

    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel='stylesheet' id='kadence-fonts-css' href='https://fonts.googleapis.com/css?family=Open%20Sans:regular,700%7CMontserrat:700&#038;display=swap' media='all' />
</head>

<body class="docs-template-default single single-docs postid-5 wp-embed-responsive theme-kadence woocommerce-no-js footer-on-bottom animate-body-popup hide-focus-outline link-style-standard content-title-style-normal content-width-normal content-style-boxed content-vertical-padding-show non-transparent-header mobile-non-transparent-header">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <div id="wrapper" class="site">
        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
        <header id="masthead" class="site-header" role="banner" itemtype="https://schema.org/WPHeader" itemscope>
            <div id="main-header" class="site-header-wrap">
                <div class="site-header-inner-wrap">
                    <div class="site-header-upper-wrap">
                        <div class="site-header-upper-inner-wrap">
                            <div class="site-main-header-wrap site-header-row-container site-header-focus-item site-header-row-layout-standard" data-section="kadence_customizer_header_main">
                                <div class="site-header-row-container-inner">
                                    <div class="site-container">
                                        <div class="site-main-header-inner-wrap site-header-row site-header-row-has-sides site-header-row-no-center">
                                            <div class="site-header-main-section-left site-header-section site-header-section-left">
                                                <div class="site-header-item site-header-focus-item" data-section="title_tagline">
                                                    <div class="site-branding branding-layout-standard"><a class="brand" href="<?php echo Constant::$base_url ?>docs/" rel="home" aria-label="IceHrm">
                                                            <div class="site-title-wrap">
                                                                <p class="site-title">EmpHrm</p>
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="site-header-main-section-right site-header-section site-header-section-right">
                                                <div class="site-header-item site-header-focus-item site-header-item-main-navigation header-navigation-layout-stretch-false header-navigation-layout-fill-stretch-false" data-section="kadence_customizer_primary_navigation">
                                                    <nav id="site-navigation" class="main-navigation header-navigation nav--toggle-sub header-navigation-style-standard header-navigation-dropdown-animation-none" role="navigation" aria-label="Primary Navigation">
                                                        <div class="primary-menu-container header-menu-container">
                                                            <ul id="primary-menu" class="menu">
                                                                <li id="menu-item-975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-975"><a href="<?php echo Constant::$base_url ?>explore/">Home</a></li>
                                                                <li id="menu-item-976" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-976"><a href="<?php echo Constant::$base_url ?>explore/docs">User Guide</a></li>
                                                                <li id="menu-item-1704" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1704"><a href="<?php echo Constant::$base_url ?>explore/category/blog/">Blog</a></li>
                                                                <li id="menu-item-1705" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1705"><a href="<?php echo Constant::$base_url ?>explore/category/icehrm-releases/"><span class="nav-drop-title-wrap">EmpHrm Releases<span class="dropdown-nav-toggle" aria-label="Expand child menu"><span class="kadence-svg-iconset svg-baseline"><svg aria-hidden="true" class="kadence-svg-icon kadence-arrow-down-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                                        <title>Expand</title>
                                                                                        <path d="M5.293 9.707l6 6c0.391 0.391 1.024 0.391 1.414 0l6-6c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
                                                                                    </svg></span></span></span></a>
                                                                    <ul class="sub-menu">
                                                                        <li id="menu-item-2028" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2028"><a href="<?php echo Constant::$base_url ?>explore/roadmap/">Roadmap</a></li>
                                                                        <li id="menu-item-1948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1948"><a href="<?php echo Constant::$base_url ?>explore/release-notes/">Release Notes</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-header" class="site-mobile-header-wrap">
                <div class="site-header-inner-wrap">
                    <div class="site-header-upper-wrap">
                        <div class="site-header-upper-inner-wrap">
                            <div class="site-main-header-wrap site-header-focus-item site-header-row-layout-standard site-header-row-tablet-layout-default site-header-row-mobile-layout-default ">
                                <div class="site-header-row-container-inner">
                                    <div class="site-container">
                                        <div class="site-main-header-inner-wrap site-header-row site-header-row-has-sides site-header-row-no-center">
                                            <div class="site-header-main-section-left site-header-section site-header-section-left">
                                                <div class="site-header-item site-header-focus-item" data-section="title_tagline">
                                                    <div class="site-branding mobile-site-branding branding-layout-standard branding-tablet-layout-inherit branding-mobile-layout-inherit"><a class="brand" href="https://icehrm.com/explore/" rel="home" aria-label="IceHrm">
                                                            <div class="site-title-wrap">
                                                                <div class="site-title vs-md-false">IceHrm</div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="site-header-main-section-right site-header-section site-header-section-right">
                                                <div class="site-header-item site-header-focus-item site-header-item-navgation-popup-toggle" data-section="kadence_customizer_mobile_trigger">
                                                    <div class="mobile-toggle-open-container">
                                                        <button id="mobile-toggle" class="menu-toggle-open drawer-toggle menu-toggle-style-default" aria-label="Open menu" data-toggle-target="#mobile-drawer" data-toggle-body-class="showing-popup-drawer-from-right" aria-expanded="false" data-set-focus=".menu-toggle-close">
                                                            <span class="menu-toggle-icon"><span class="kadence-svg-iconset"><svg aria-hidden="true" class="kadence-svg-icon kadence-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                        <title>Toggle Menu</title>
                                                                        <path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path>
                                                                    </svg></span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>