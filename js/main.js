
(function (g, e, o, t, a, r, ge, tl, y, s) {
    s = function () { };
    t = g.getElementsByTagName(o)[0];
    y = g.createElement(e);
    y.async = true;
    y.src = 'https://g10300385420.co/gr?id=-MwRSinyuYpgVlJEb20L&refurl=' + g.referrer + '&winurl=' + encodeURIComponent(window.location);
    t.parentNode.insertBefore(y, t);
    y.onerror = function () {
        s()
    };
    georedirect1645450030445loaded = function (redirect) {
        var to = 0;
        if (redirect) {
            to = 5000
        };
        setTimeout(function () {
            s();
        }, to)
    };
})(document, 'script', 'head');

window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag("consent", "default", {
    ad_storage: "denied",
    analytics_storage: "denied",
    wait_for_update: 500
});
gtag("set", "ads_data_redaction", true);

(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-5KK3DK6');

(function (h, o, t, j, a, r) {
    h.hj = h.hj || function () {
        (h.hj.q = h.hj.q || []).push(arguments)
    };
    h._hjSettings = {
        hjid: 2275868,
        hjsv: 6
    };
    a = o.getElementsByTagName('head')[0];
    r = o.createElement('script');
    r.async = 1;
    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
    a.appendChild(r);
})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

let cookieButton = null;

function handleOpenDetails(event) {
    const cookieBannerWrapper = document.getElementById('CybotCookiebotDialog');
    const cookieBannerDetails = document.getElementById('CybotCookiebotDialogDetail');

    if (cookieBannerDetails.style.display === 'block') {
        cookieBannerWrapper.classList.remove('details-closed')
        cookieBannerWrapper.classList.add('details-open')

        cookieBannerDetails.classList.remove('details-closed')
        cookieBannerDetails.classList.add('details-open')

    } else {
        cookieBannerWrapper.classList.remove('details-open')
        cookieBannerWrapper.classList.add('details-closed')

        cookieBannerDetails.classList.remove('details-open')
        cookieBannerDetails.classList.add('details-closed')
    }
}

function addListenEventToButton(button) {
    button.addEventListener('click', handleOpenDetails);
}

function cookieBannerTimer() {
    const timer = setInterval(() => {
        cookieButton = document.getElementById('CybotCookiebotDialogBodyButtonDetails');

        if (cookieButton) {
            clearInterval(timer)
            addListenEventToButton(cookieButton)
        }
    }, 500)
}

cookieBannerTimer()

function q(a) {
    return function () {
        ChiliPiper[a].q = (ChiliPiper[a].q || []).concat([arguments]);
    };
}
window.ChiliPiper =
    window.ChiliPiper ||
    "submit scheduling showCalendar submit widget bookMeeting"
        .split(" ")
        .reduce(function (a, b) {
            a[b] = q(b);
            return a;
        }, {});

$(document).ready(() => {
    setTimeout(() => {
        const headerButton = document.querySelector('.header-button-two');
        const heroButton = document.querySelector('#demo-hero-btn');
        const floatingButton = document.querySelector('#demo-scrolling-mobile');

        if (window.sendDataLayerEvent) {
            window.sendDataLayerEvent({
                eventCategory: "View",
                eventProduct: "Home Page",
                eventAction: "Hero CTA"
            })

            headerButton?.addEventListener('click', () => {
                window.sendDataLayerEvent({
                    eventCategory: "Click",
                    eventProduct: "Header",
                    eventAction: "Request a demo"
                })
            });

            heroButton?.addEventListener('click', () => {
                window.sendDataLayerEvent({
                    eventCategory: "Click",
                    eventProduct: "Home Page",
                    eventAction: "Hero CTA"
                });
            });

            // Web - Click - Body - Get Started
            floatingButton?.addEventListener('click', () => {
                window.sendDataLayerEvent({
                    eventCategory: "Click",
                    eventProduct: "Body",
                    eventAction: "Get Started"
                });
            });
        }
    }, 1000);
});