<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome to Pato Place</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('fronted') }}/{{asset('fronted')}}/images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/fonts/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/vendor/lightbox2/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fronted') }}/css/main.css">

    <script nonce="07432f69-7c54-493b-b8ef-3d5569a9a61c">
        (function(w, d) {
            ! function(bb, bc, bd, be) {
                bb[bd] = bb[bd] || {};
                bb[bd].executed = [];
                bb.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bb.zaraz.q = [];
                bb.zaraz._f = function(bf) {
                    return async function() {
                        var bg = Array.prototype.slice.call(arguments);
                        bb.zaraz.q.push({
                            m: bf,
                            a: bg
                        })
                    }
                };
                for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
                bb.zaraz.init = () => {
                    var bi = bc.getElementsByTagName(be)[0],
                        bj = bc.createElement(be),
                        bk = bc.getElementsByTagName("title")[0];
                    bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
                    bb[bd].x = Math.random();
                    bb[bd].w = bb.screen.width;
                    bb[bd].h = bb.screen.height;
                    bb[bd].j = bb.innerHeight;
                    bb[bd].e = bb.innerWidth;
                    bb[bd].l = bb.location.href;
                    bb[bd].r = bc.referrer;
                    bb[bd].k = bb.screen.colorDepth;
                    bb[bd].n = bc.characterSet;
                    bb[bd].o = (new Date).getTimezoneOffset();
                    if (bb.dataLayer)
                        for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({
                                ...bp[1],
                                ...bq[1]
                            })), {}))) zaraz.set(bo[0], bo[1], {
                            scope: "page"
                        });
                    bb[bd].q = [];
                    for (; bb.zaraz.q.length;) {
                        const br = bb.zaraz.q.shift();
                        bb[bd].q.push(br)
                    }
                    bj.defer = !0;
                    for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu
                        .startsWith("_zaraz_"))).forEach((bt => {
                        try {
                            bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
                        } catch {
                            bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
                        }
                    }));
                    bj.referrerPolicy = "origin";
                    bj.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[bd])));
                    bi.parentNode.insertBefore(bj, bi)
                };
                ["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>