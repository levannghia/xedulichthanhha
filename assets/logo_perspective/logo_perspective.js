/*
 * Perspective Logo Showcase v1.0
 *
 * Copyright 2013 LambertGroup
 * 
 */
(function(d) {
    function A(b, a, c) {
        c = a.elementsHorizontalSpacing / a.contentHolderUnitOrigWidth * c.aspectOrig;
        var d = b * a.contentHolderUnitOrigHeight / (a.origWidth / a.width);
        a = 2 * a.elementsVerticalSpacing / (a.origWidth / a.width);
        var f = 0;
        for (i = 1; i <= b; i++) f += i;
        return c * (d - a * f)
    }

    function w(b, a, c, u, f, n, l) {
        var s, g, h, k;
        d(u[c.current_img_no]).removeClass("bottomNavButtonON");
        c.current_img_no = B(c.current_img_no, b, l);
        d(u[c.current_img_no]).addClass("bottomNavButtonON");
        c.currentZ_index = 100;
        c.currentImg = d("#contentHolderUnit_" + c.current_img_no, n);
        s = a.contentHolderUnitOrigWidth / (a.origWidth / a.width);
        g = a.contentHolderUnitOrigHeight / (a.origWidth / a.width);
        h = parseInt((a.width - a.contentHolderUnitOrigWidth / (a.origWidth / a.width)) / 2, 10);
        k = parseInt(a.height - a.contentHolderUnitOrigHeight / (a.origWidth / a.width), 10) - a.verticalAdjustment / (a.origWidth / a.width);
        x(c.currentImg, h, k, s, g, 1, !1, b, c, a, f, l, u, n);
        q = c.current_img_no;
        for (m = 1; m <= Math.floor(a.numberOfVisibleItems / 2); m++) c.currentZ_index--, q = B(q, -1, l), c.currentImg = d("#contentHolderUnit_" + q, n), c.currentImg.css("z-index", c.currentZ_index), m == Math.floor(a.numberOfVisibleItems / 2) && (1 === b ? (last_aux_img_no = B(q, -1, l), last_currentImg = d("#contentHolderUnit_" + last_aux_img_no, n), g = a.contentHolderUnitOrigHeight / (a.origWidth / a.width) - 2 * (m + 1) * a.elementsVerticalSpacing / (a.origWidth / a.width), s = parseInt(g * c.aspectOrig, 10), h = parseInt((a.width - a.contentHolderUnitOrigWidth / (a.origWidth / a.width)) / 2, 10) - A(m + 1, a, c), k = parseInt(a.height - a.contentHolderUnitOrigHeight / (a.origWidth / a.width), 10) - a.verticalAdjustment / (a.origWidth / a.width) + (m + 1) * a.elementsVerticalSpacing / (a.origWidth / a.width), x(last_currentImg, h, k, s, g, 0, !1, b, c, a, f, l, u, n)) : (g = a.contentHolderUnitOrigHeight / (a.origWidth / a.width) - 2 * (m + 1) * a.elementsVerticalSpacing / (a.origWidth / a.width), parseInt(g * c.aspectOrig, 10), D(c.currentImg, m + 1, a, c), h = parseInt((a.width - a.contentHolderUnitOrigWidth / (a.origWidth / a.width)) / 2, 10) - A(m + 1, a, c), k = parseInt(a.height - a.contentHolderUnitOrigHeight / (a.origWidth / a.width), 10) - a.verticalAdjustment / (a.origWidth / a.width) + (m + 1) * a.elementsVerticalSpacing / (a.origWidth / a.width), c.currentImg.css({
            left: h + "px",
            top: k + "px",
            opacity: 0
        }))), c.currentImg.css("display", "block"), g = a.contentHolderUnitOrigHeight / (a.origWidth / a.width) - 2 * m * a.elementsVerticalSpacing / (a.origWidth / a.width), s = parseInt(g * c.aspectOrig, 10), h = parseInt((a.width - a.contentHolderUnitOrigWidth / (a.origWidth / a.width)) / 2, 10) - A(m, a, c), k = parseInt(a.height - a.contentHolderUnitOrigHeight / (a.origWidth / a.width), 10) - a.verticalAdjustment / (a.origWidth / a.width) + m * a.elementsVerticalSpacing / (a.origWidth / a.width), x(c.currentImg, h, k, s, g, 1, !1, b, c, a, f, l, u, n);
        var q = c.current_img_no;
        for (m = 1; m <= Math.floor(a.numberOfVisibleItems / 2); m++) c.currentZ_index--, q = B(q, 1, l), c.currentImg = d("#contentHolderUnit_" + q, n), c.currentImg.css("z-index", c.currentZ_index), m == Math.floor(a.numberOfVisibleItems / 2) && (1 === b ? (D(c.currentImg, m + 1, a, c), c.currentImg.css({
            left: parseInt((a.width - a.contentHolderUnitOrigWidth / (a.origWidth / a.width)) / 2, 10) + (a.contentHolderUnitOrigWidth / (a.origWidth / a.width) + A(m + 1, a, c) - c.currentImg.width()) + "px",
            top: parseInt(a.height - a.contentHolderUnitOrigHeight / (a.origWidth / a.width), 10) - a.verticalAdjustment / (a.origWidth / a.width) + (m + 1) * a.elementsVerticalSpacing / (a.origWidth / a.width) + "px",
            opacity: 0
        })) : (last_aux_img_no = B(q, 1, l), last_currentImg = d("#contentHolderUnit_" + last_aux_img_no, n), g = a.contentHolderUnitOrigHeight / (a.origWidth / a.width) - 2 * (m + 1) * a.elementsVerticalSpacing / (a.origWidth / a.width), s = parseInt(g * c.aspectOrig, 10), h = parseInt((a.width - a.contentHolderUnitOrigWidth / (a.origWidth / a.width)) / 2, 10) + (a.contentHolderUnitOrigWidth / (a.origWidth / a.width) + A(m + 1, a, c) - s), k = parseInt(a.height - a.contentHolderUnitOrigHeight / (a.origWidth / a.width), 10) - a.verticalAdjustment / (a.origWidth / a.width) + (m + 1) * a.elementsVerticalSpacing / (a.origWidth / a.width), x(last_currentImg, h, k, s, g, 0, !1, b, c, a, f, l, u, n))), c.currentImg.css("display", "block"), g = a.contentHolderUnitOrigHeight / (a.origWidth / a.width) - 2 * m * a.elementsVerticalSpacing / (a.origWidth / a.width), s = parseInt(g * c.aspectOrig, 10), h = parseInt((a.width - a.contentHolderUnitOrigWidth / (a.origWidth / a.width)) / 2, 10) + (a.contentHolderUnitOrigWidth / (a.origWidth / a.width) + A(m, a, c) - s), k = parseInt(a.height - a.contentHolderUnitOrigHeight / (a.origWidth / a.width), 10) - a.verticalAdjustment / (a.origWidth / a.width) + m * a.elementsVerticalSpacing / (a.origWidth / a.width), m == Math.floor(a.numberOfVisibleItems / 2) ? x(c.currentImg, h, k, s, g, 1, !0, b, c, a, f, l, u, n) : x(c.currentImg, h, k, s, g, 1, !1, b, c, a, f, l, u, n)
    }

    function D(b, a, c, d) {
        a = c.contentHolderUnitOrigHeight / (c.origWidth / c.width) - c.elementsVerticalSpacing / (c.origWidth / c.width) * a * 2;
        d = parseInt(a * d.aspectOrig, 10);
        b.css({
            height: a + "px",
            width: d + "px"
        });
        c.resizeImages && (imgInside = b.find("img:first"), imgInside.is("img") && imgInside.css({
            height: a + "px",
            width: d + "px"
        }))
		
		$("#about .items_room").hide();
		$("#about "+b.selector+"_detail").show(500);

    }

    function x(b, a, c, d, f, n, l, s, g, h, k, q, z, p) {
        g.slideIsRunning = !0;
        0 === n ? b.css("z-index", g.currentZ_index - 1) : b.css("z-index", g.currentZ_index);
        b.css("display", "block");
        b.animate({
            left: a + "px",
            top: c + "px",
            width: d + "px",
            height: f + "px",
            opacity: n
        }, 1E3 * h.animationTime, h.easing, function() {
            if (l) {
                g.slideIsRunning = !1;
                g.arcInitialTime = (new Date).getTime();
                g.timeElapsed = 0;
                if (0 < h.autoPlay && 1 < q && !g.mouseOverBanner && !g.fastForwardRunning || g.current_img_no != g.img_no_where_to_stop && g.fastForwardRunning) clearTimeout(g.timeoutID), g.timeoutID = setTimeout(function() {
                    w(s, h, g, z, k, p, q)
                }, 1E3 * h.autoPlay);
                g.current_img_no == g.img_no_where_to_stop && g.fastForwardRunning && (g.fastForwardRunning = !1, h.animationTime = g.animationTimeOrig, h.autoPlay = g.autoPlayOrig)
            }
        });
        h.resizeImages && (imgInside = b.find("img:first"), imgInside.is("img") && imgInside.animate({
            width: d + "px",
            height: f + "px"
        }, 1E3 * h.animationTime, h.easing, function() {}))
		
    }

    function B(b, a, c) {
        return b + a >= c ? 0 : 0 > b + a ? c - 1 : b + a
    }

    function F(b, a, c, d, f, n, l) {
        -1 === c.current_img_no - b ? w(1, a, c, d, f, n, l) : 1 === c.current_img_no - b ? w(-1, a, c, d, f, n, l) : (c.fastForwardRunning = !0, a.animationTime = 0.4, a.autoPlay = 0.1, c.img_no_where_to_stop = b, c.current_img_no < b ? b - c.current_img_no < l - b + c.current_img_no ? w(1, a, c, d, f, n, l) : w(-1, a, c, d, f, n, l) : c.current_img_no > b && (c.current_img_no - b < l - c.current_img_no + b ? w(-1, a, c, d, f, n, l) : w(1, a, c, d, f, n, l)))
    }

    function H(b, a, c, u, f, n, l, s, g, h, k, q, z, p, e) {
        responsiveWidth = a.enableTouchScreen ? f.parent().parent().parent().width() : f.parent().parent().width();
        a.responsiveRelativeToBrowser && (responsiveWidth = d(window).width());
        a.width100Proc && (a.width = responsiveWidth);
        if (a.origWidth != responsiveWidth || a.width100Proc) a.origWidth > responsiveWidth || a.width100Proc ? a.width = responsiveWidth : a.width100Proc || (a.width = a.origWidth), a.height = a.width / b.bannerRatio, a.width = parseInt(a.width, 10), a.height = parseInt(a.height, 10), a.enableTouchScreen && a.responsive && (a.width -= 1), l.width(a.width), l.height(a.height), p.width(a.width), p.height(a.height), a.enableTouchScreen && (l.parent().width(a.width + 1), l.parent().height(a.height)), n.css("margin-top", parseInt((a.height - s.height()) / 2, 10) + a.nextPrevMarginTop / (a.origWidth / a.width) + "px"), g.css("left", parseInt((l.width() - g.width()) / 2, 10) + "px"), h.css("left", parseInt(g.css("left").substring(0, g.css("left").length - 2), 10) - h.width() + "px"), k.css("left", parseInt(g.css("left").substring(0, g.css("left").length - 2), 10) + g.width() + parseInt(q.css("padding-left").substring(0, q.css("padding-left").length - 2), 10) + "px"), clearTimeout(b.timeoutID), clearInterval(b.intervalID), b.timeoutID = setTimeout(function() {
            w(1, a, b, z, u, l, c)
        }, 0.1)
    }

    function G() {
        var b = -1;
        "Microsoft Internet Explorer" == navigator.appName && null != /MSIE ([0-9]{1,}[.0-9]{0,})/.exec(navigator.userAgent) && (b = parseFloat(RegExp.$1));
        return parseInt(b, 10)
    }

    function I(b, a) {
        b.showTooltip && (a.addClass("lbg_perspective_tooltip"), d(".lbg_perspective_tooltip").tooltip({
            content: function() {
                return d(this).attr("title")
            },
            position: {
                my: "center bottom-20",
                at: "center top",
                using: function(a, b) {
                    d(this).css(a);
                    d("<div>").addClass("lbg_perspective_arrow").addClass(b.vertical).addClass(b.horizontal).appendTo(this)
                }
            }
        }))
    }
    var C = !1;
    d.logo_perspective = {
        version: "1.0"
    };
    d.fn.logo_perspective = function(b) {
        b = d.extend({}, d.fn.logo_perspective.defaults, b);
        return this.each(function() {
            var a = d(this);
            responsiveWidth = a.parent().width();
            b.responsiveRelativeToBrowser && (responsiveWidth = d(window).width());
            b.origWidth = b.width;
            b.width100Proc && (b.width = responsiveWidth);
            b.height = b.imageHeight;
            b.origHeight = b.height;
            b.responsive && (b.origWidth != responsiveWidth || b.width100Proc) && (b.width = b.origWidth > responsiveWidth || b.width100Proc ? responsiveWidth : b.origWidth, b.height = b.width / (b.origWidth / b.origHeight));
            b.width = parseInt(b.width, 10);
            b.height = parseInt(b.height, 10);
            b.enableTouchScreen && b.responsive && (b.width -= 1);
            var c = d("<div></div>").addClass("logo_perspective").addClass(b.skin),
                u = d('<div class="bannerControls"> <div class="leftNav"></div> <div class="rightNav"></div> </div> <div class="contentHolder"></div>');
            a.wrap(c);
            a.after(u);
            var f = a.parent(".logo_perspective"),
                u = d(".bannerControls", f),
                n = d(".contentHolder", f),
                c = d('<div class="bottomNavLeft"></div>'),
                l = d('<div class="bottomNav"></div>'),
                s = d('<div class="bottomNavRight"></div>');
            a.after(c);
            a.after(l);
            a.after(s);
            b.showAllControllers || u.css("display", "none");
            var g = d(".leftNav", f),
                h = d(".rightNav", f);
            g.css("display", "none");
            h.css("display", "none");
            b.showNavArrows && b.showOnInitNavArrows && (g.css("display", "block"), h.css("display", "block"));
            var k = d(".bottomNav", f),
                q = d(".bottomNavLeft", f),
                z = d(".bottomNavRight", f);
            k.css("display", "block");
            q.css("display", "block");
            z.css("display", "block");
            k.css({
                bottom: b.bottomNavMarginBottom + "px",
                top: "auto"
            });
            q.css({
                bottom: b.bottomNavMarginBottom + "px",
                top: "auto"
            });
            z.css({
                bottom: b.bottomNavMarginBottom + "px",
                top: "auto"
            });
            b.showBottomNav || (k.css("display", "none"), q.css("display", "none"), z.css("display", "none"));
            b.showOnInitBottomNav || (k.css("left", "-5000px"), q.css("left", "-5000px"), z.css("left", "-5000px"));
            G();
            var p = 0,
                e = {
                    current_img_no: 0,
                    currentImg: 0,
                    currentZ_index: 101,
                    slideIsRunning: !1,
                    mouseOverBanner: !1,
                    fastForwardRunning: !1,
                    img_no_where_to_stop: 0,
                    aspectOrig: 0,
                    animationTimeOrig: b.animationTime,
                    autoPlayOrig: b.autoPlay,
                    timeoutID: "",
                    intervalID: "",
                    arcInitialTime: (new Date).getTime(),
                    timeElapsed: 0,
                    windowWidth: 0,
                    bannerRatio: b.origWidth / b.origHeight
                };
            f.width(b.width);
            f.height(b.height);
            n.width(b.width);
            n.height(b.height);
            u.css("margin-top", parseInt((b.height - g.height()) / 2, 10) + b.nextPrevMarginTop / (b.origWidth / b.width) + "px");
            var t = a.find("ul:first").children();
            b.numberOfVisibleItems > a.find("ul:first li").length && (b.numberOfVisibleItems = a.find("ul:first li").length);
            b.numberOfVisibleItems % 2 || b.numberOfVisibleItems--;
            var r, y, x = 0,
                B = 0;
            t.each(function() {
                e.currentImg = d(this);
                e.currentImg.is("li") || (e.currentImg = e.currentImg.find("li:first"));
                e.currentImg.is("li") && (p++, r = d('<div class="contentHolderUnit" rel="' + (p - 1) + '" id="contentHolderUnit_' + (p - 1) + '">' + e.currentImg.html() + "</div>"), n.append(r), r.css({
                    display: "none",
                    width: b.imageWidth + "px",
                    height: b.imageHeight + "px"
                }), b.grayscale && r.find("img:first").addClass("lbg_perspective_grayscale"), 0 < b.border && r.css({
                    "-webkit-box-sizing": "border-box",
                    "-moz-box-sizing": "border-box",
                    "box-sizing": "border-box"
                }), 0 === b.contentHolderUnitOrigWidth && (b.contentHolderUnitOrigWidth = r.width(), b.contentHolderUnitOrigHeight = r.height(), e.aspectOrig = b.contentHolderUnitOrigWidth / b.contentHolderUnitOrigHeight), D(r, 0, b, e), r.css({
                    left: parseInt((b.width - r.width()) / 2, 10) + "px",
                    top: parseInt(b.height - b.contentHolderUnitOrigHeight / (b.origWidth / b.width), 10) - b.verticalAdjustment / (b.origWidth / b.width),
                    "border-color": b.borderColorOFF,
                    "border-width": b.border
                }), 1 == p ? r.css({
                    left: parseInt((b.width - r.width()) / 2, 10) + "px",
                    top: parseInt(b.height - b.contentHolderUnitOrigHeight / (b.origWidth / b.width), 10) - b.verticalAdjustment / (b.origWidth / b.width),
                    "z-index": e.currentZ_index,
                    display: "block"
                }) : p <= Math.ceil(b.numberOfVisibleItems / 2) && (e.currentZ_index--, D(r, p - 1, b, e), r.css({
                    left: parseInt((b.width - b.contentHolderUnitOrigWidth / (b.origWidth / b.width)) / 2, 10) + (b.contentHolderUnitOrigWidth / (b.origWidth / b.width) + A(p - 1, b, e) - r.width()) + "px",
                    top: parseInt(b.height - b.contentHolderUnitOrigHeight / (b.origWidth / b.width), 10) - b.verticalAdjustment / (b.origWidth / b.width) + (p - 1) * b.elementsVerticalSpacing / (b.origWidth / b.width) + "px",
                    "z-index": e.currentZ_index,
                    display: "block"
                })), y = d('<div class="bottomNavButtonOFF" rel="' + (p - 1) + '"></div>'), k.append(y), x += parseInt(y.css("padding-left").substring(0, y.css("padding-left").length - 2), 10) + y.width(), B = parseInt((k.height() - parseInt(y.css("height").substring(0, y.css("height").length - 2))) / 2, 10), y.css("margin-top", B + "px"))
            });
            e.currentZ_index = 100;
            for (m = 1; m <= Math.floor(b.numberOfVisibleItems / 2); m++) e.currentZ_index--, D(d("#contentHolderUnit_" + (p - m), f), m, b, e), d("#contentHolderUnit_" + (p - m), f).css({
                left: parseInt((b.width - b.contentHolderUnitOrigWidth / (b.origWidth / b.width)) / 2 - A(m, b, e), 10) + "px",
                top: parseInt(b.height - b.contentHolderUnitOrigHeight / (b.origWidth / b.width), 10) - b.verticalAdjustment / (b.origWidth / b.width) + m * b.elementsVerticalSpacing / (b.origWidth / b.width) + "px",
                "z-index": e.currentZ_index,
                display: "block"
            });
            k.width(x);
            b.showOnInitBottomNav && (k.css("left", parseInt((f.width() - x) / 2, 10) + "px"), q.css("left", parseInt(k.css("left").substring(0, k.css("left").length - 2), 10) - q.width() + "px"), z.css("left", parseInt(k.css("left").substring(0, k.css("left").length - 2), 10) + k.width() + parseInt(y.css("padding-left").substring(0, y.css("padding-left").length - 2), 10) + "px"));
            e.current_img_no = 0;
            e.currentImg = d(t[e.current_img_no]);
            f.mouseenter(function() {
                e.mouseOverBanner = !0;
                clearTimeout(e.timeoutID);
                nowx = (new Date).getTime();
                e.timeElapsed += nowx - e.arcInitialTime;
                b.autoHideNavArrows && b.showNavArrows && (g.css("display", "block"), h.css("display", "block"))
            });
            f.mouseleave(function() {
                e.mouseOverBanner = !1;
                nowx = (new Date).getTime();
                b.autoHideNavArrows && b.showNavArrows && (g.css("display", "none"), h.css("display", "none"));
                if (0 < b.autoPlay && 1 < p && !e.fastForwardRunning) {
                    clearTimeout(e.timeoutID);
                    e.arcInitialTime = (new Date).getTime();
                    var a = parseInt(1E3 * b.autoPlay - (e.timeElapsed + nowx - e.arcInitialTime), 10);
                    e.timeoutID = setTimeout(function() {
                        w(1, b, e, v, t, f, p)
                    }, a)
                }
            });
            d.logo_perspective.continueAutoplay = function(a) {
                f.mouseleave()
            };
            r = d(".contentHolderUnit", f);
            I(b, r);
            r.click(function() {
                if (!e.slideIsRunning && !e.fastForwardRunning) {
                    var a = d(this).attr("rel");
                    if (a != e.current_img_no && 0 != b.elementsVerticalSpacing) d(v[e.current_img_no]).removeClass("bottomNavButtonON"), F(parseInt(a, 10), b, e, v, t, f, p);
                    else if (void 0 != d(t[a]).attr("data-link") && "" != d(t[a]).attr("data-link")) {
                        var c = b.target;
                        void 0 != d(t[a]).attr("data-target") && "" != d(t[a]).attr("data-target") && (c = d(t[a]).attr("data-target"));
                        "_blank" == c ? window.open(d(t[a]).attr("data-link")) : window.location = d(t[a]).attr("data-link")
                    }
                }
            });
            r.mouseover(function() {
                d(this).css({
                    "border-color": b.borderColorON
                });
                b.grayscale && d(this).find("img:first").addClass("disabled")
            });
            r.mouseout(function() {
                d(this).css({
                    "border-color": b.borderColorOFF
                });
                b.grayscale && d(this).find("img:first").removeClass("disabled")
            });
            g.mousedown(function() {
                C = !0;
                e.slideIsRunning || e.fastForwardRunning || (clearTimeout(e.timeoutID), w(-1, b, e, v, t, f, p))
            });
            g.mouseup(function() {
                C = !1
            });
            h.mousedown(function() {
                C = !0;
                e.slideIsRunning || e.fastForwardRunning || (clearTimeout(e.timeoutID), w(1, b, e, v, t, f, p))
            });
            h.mouseup(function() {
                C = !1
            });
            var v = d(".bottomNavButtonOFF", f);
            v.mousedown(function() {
                C = !0;
                if (!e.slideIsRunning && !e.fastForwardRunning) {
                    var a = d(this).attr("rel");
                    a != e.current_img_no && (d(v[e.current_img_no]).removeClass("bottomNavButtonON"), F(parseInt(a, 10), b, e, v, t, f, p))
                }
            });
            v.mouseup(function() {
                C = !1
            });
            v.mouseenter(function() {
                var a = d(this);
                a.attr("rel");
                a.addClass("bottomNavButtonON")
            });
            v.mouseleave(function() {
                var a = d(this),
                    b = a.attr("rel");
                e.current_img_no != b && a.removeClass("bottomNavButtonON")
            });
            b.enableTouchScreen && (c = Math.floor(1E5 * Math.random()), f.wrap('<div id="carouselParent_' + c + '" style="position:relative;" />'), d("#carouselParent_" + c).width(b.width + 1), d("#carouselParent_" + c).height(b.height), f.css({
                cursor: "url(" + b.absUrl + "skins/hand.cur),url(" + b.absUrl + "skins/hand.cur),move",
                left: "0px",
                position: "absolute"
            }), rightVal = parseInt(h.css("right").substring(0, h.css("right").length - 2), 10), f.mousedown(function() {
                rightVal = parseInt(h.css("right").substring(0, h.css("right").length - 2), 10);
                0 > rightVal && !C && (h.css({
                    visibility: "hidden",
                    right: "0"
                }), g.css("visibility", "hidden"))
            }), f.mouseup(function() {
                C = !1;
                0 > rightVal && (h.css({
                    right: rightVal + "px",
                    visibility: "visible"
                }), g.css("visibility", "visible"))
            }), f.draggable({
                axis: "x",
                containment: "parent",
                distance: 10,
                start: function(a, b) {
                    origLeft = d(this).css("left")
                },
                stop: function(a, c) {
                    e.effectIsRunning || (finalLeft = d(this).css("left"), direction = 1, origLeft < finalLeft && (direction = -1), w(direction, b, e, v, t, f, p));
                    0 > rightVal && (h.css({
                        right: rightVal + "px",
                        visibility: "visible"
                    }), g.css("visibility", "visible"));
                    d(this).css("left", "0px")
                }
            }));
            var E = !1;
            d(window).resize(function() {
                var c = String(navigator.userAgent).toLowerCase();
                if ("undefined" == String(d(t[e.current_img_no]).attr("data-video-selfhosted")) || -1 != c.indexOf("android") || -1 != c.indexOf("ipad") || -1 != c.indexOf("iphone") || -1 != c.indexOf("ipod") || -1 != c.indexOf("webos")) {
                    var h = G();
                    doResizeNow = !0; - 1 != h && 9 == h && 0 == e.windowWidth && (doResizeNow = !1);
                    e.windowWidth == d(window).width() ? (doResizeNow = !1, b.windowCurOrientation == window.orientation || -1 == c.indexOf("android") && -1 == c.indexOf("ipad") && -1 == c.indexOf("iphone") && -1 == c.indexOf("ipod") && -1 == c.indexOf("webos") || (b.windowCurOrientation = window.orientation, doResizeNow = !0)) : e.windowWidth = d(window).width();
                    b.responsive && doResizeNow && (!1 !== E && clearTimeout(E), E = setTimeout(function() {
                        H(e, b, p, t, a, u, f, g, k, q, z, y, v, n, r)
                    }, 300))
                }
            });
            d(v[e.current_img_no]).addClass("bottomNavButtonON");
            c = f.find("img:first");
            c[0].complete ? (d(".myloader", f).css("display", "none"), 0 < b.autoPlay && 1 < p && (e.timeoutID = setTimeout(function() {
                w(1, b, e, v, t, f, p)
            }, 1E3 * b.autoPlay))) : c.load(function() {
                d(".myloader", f).css("display", "none");
                0 < b.autoPlay && 1 < p && (e.timeoutID = setTimeout(function() {
                    w(1, b, e, v, t, f, p)
                }, 1E3 * b.autoPlay))
            })
        })
    };
    d.fn.logo_perspective.defaults = {
        skin: "black",
        width: 960,
        height: 200,
        width100Proc: !1,
        height100Proc: !1,
        autoPlay: 4,
        numberOfVisibleItems: 3,
        elementsHorizontalSpacing: 120,
        elementsVerticalSpacing: 20,
        verticalAdjustment: 0,
        animationTime: 0.8,
        easing: "easeOutQuad",
        resizeImages: !0,
        target: "_blank",
        showAllControllers: !0,
        showNavArrows: !0,
        showOnInitNavArrows: !0,
        autoHideNavArrows: !1,
        showBottomNav: !0,
        showOnInitBottomNav: !0,
        nextPrevMarginTop: 0,
        enableTouchScreen: !0,
        absUrl: "",
        showTooltip: !0,
        grayscale: !1,
        imageWidth: 155,
        imageHeight: 100,
        border: 0,
        borderColorOFF: "transparent",
        borderColorON: "#FF0000",
        responsive: !1,
        responsiveRelativeToBrowser: !1,
        bottomNavMarginBottom: -45,
        origWidth: 0,
        origHeight: 0,
        contentHolderUnitOrigWidth: 0,
        contentHolderUnitOrigHeight: 0,
        elementOrigTop: 0,
        origthumbsHolder_MarginTop: 0,
        windowOrientationScreenSize0: 0,
        windowOrientationScreenSize90: 0,
        windowOrientationScreenSize_90: 0,
        windowCurOrientation: 0
    }
})(jQuery);