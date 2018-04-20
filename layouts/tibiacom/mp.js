/* MercadoPago Checkout Render */

/* @version 0.5.1 */
function $MPC() {
    $MPC.__doRender()
}

function $MPCSSOBJ(e) {
    this.dependency = e,
        this.attributes = {}
}

function $MPCSSATTR(e, t) {
    this.name = e,
        this.value = t
}

function $MPVG(e, t) {
    this.groupType = e,
        this.elements = t
}

"undefined" != typeof $MPCDEV || ($MPCDEV = {}),
    $MPC.version = "0.5.1",
    $MPC.sessionId = String(Math.ceil(1e7 * Math.random())) + String((new Date).getTime()),
    $MPC.conf = {
        protocol: document.location.protocol.indexOf("https:") >= 0 ? "https:" : "http:",
        quirksMode: "BackCompat" == document.compatMode,
        imageBasePath: $MPCDEV.imageBasePath || document.location.protocol + "//secure.mlstatic.com/mptools/assets/",
        messageOrigin: ".*(" + $MPCDEV.messageOrigin + "|mercadopago.com|accountrecovery.mercadolibre.com).*",
        messagingEnabled: null != $MPCDEV.messagingEnabled ? $MPCDEV.messagingEnabled : "undefined" != typeof window.postMessage,
        resizeDuration: 400
    },
    $MPC.__temp = {},
    $MPC.__doRender = function () {
        var e = (new Date).getTime();
        null == window.mp_checkout_triggers && (window.mp_checkout_triggers = []);
        var t = [].concat(Array.fromCollection(document.getElementsByName("MP-payButton")), Array.fromCollection(document.getElementsByName("MP-Checkout")));
        if (t.length <= 0 && 1 != window.mp_renderLoaded)
            return void (window.mp_renderLoaded = $MPC.__event.add(window, "load", $MPC.__doRender));
        for (var i = 0; i < t.length; i++)
            t[i].processed !== !0 && (t[i].processed = !1,
                t[i].cssProcessed = !1,
                window.mp_checkout_triggers.push(t[i]));
        try {
            $MPC.__doVisual()
        } catch (n) {
            $MPC.__track("ERROR", "DO_VISUAL", {
                exception: n.message
            })
        }
        try {
            $MPC.__doBehavior()
        } catch (n) {
            $MPC.__track("ERROR", "DO_BEHAVIOR", {
                exception: n.message
            })
        }
        window.$MPC_executed !== !0 && $MPC.__track("INFO", "LOAD"),
            window.$MPC_executed = !0,
            window.mp_buttons = window.mp_checkout_triggers;
        var o = (new Date).getTime();
        $MPC.__track("TIMER", "DO_RENDER", {
            elapsed: o - e
        })
    }
    ,
    $MPC.__doVisual = function (e, t) {
        var i = !1;
        null == window.mp_stylesLoaded && (window.mp_stylesLoaded = []),
            null == e ? e = window.mp_checkout_triggers : (null == e.length && (e = [e]),
                i = !0);
        for (var n = 0; n < e.length; n++)
            if (i && (e[n].cssProcessed = !1,
                e[n].styleDefinition = null),
                !e[n].cssProcessed) {
                var o = "";
                if (i ? o = null != t ? t : e[n].srcClassName : (o = e[n].className,
                    e[n].srcClassName = o),
                "" != o)
                    if (/^(-?\w+)+-?$/.test(o)) {
                        for (var a in $MPC.vGroups) {
                            var r = $MPC.vGroups[a]
                                , d = r.getData(o);
                            null != $MPC.styles[a] && null != $MPC.styles[a][d] && (null == e[n].styleDefinition && (e[n].styleDefinition = {
                                all: {},
                                base: {}
                            },
                                e[n].styleDefinition.all[$MPC.styles.dflt] = "common",
                                e[n].styleDefinition.base[$MPC.styles.dflt] = "common"),
                            null == e[n].styleDefinition[r.groupType] && (e[n].styleDefinition[r.groupType] = {}),
                                e[n].styleDefinition.all[a] = d,
                                e[n].styleDefinition[r.groupType][a] = d)
                        }
                        null != e[n].styleDefinition ? (e[n].className = "",
                            $MPC.__processBase(e[n]),
                            $MPC.__processStyle(e[n]),
                            $MPC.__processExtra(e[n])) : e[n].className = e[n].srcClassName,
                            e[n].cssProcessed = !0
                    } else
                        e[n].cssProcessed = !0;
                else
                    e[n].cssProcessed = !0
            }
    }
    ,
    $MPC.__processBase = function (e) {
        if (null != e.styleDefinition.base) {
            var t = $MPC.__processCSS(e, "base");
            e.className += "" == e.className ? t : " " + t
        }
    }
    ,
    $MPC.__processStyle = function (e) {
        if (null != e.styleDefinition.style) {
            var t = $MPC.__processCSS(e, "style");
            e.className += "" == e.className ? t : " " + t
        }
    }
    ,
    $MPC.__processExtra = function (e) {
        if (null != e.extraElement) {
            try {
                delete e.parentNode.removeChild(e.extraElement)
            } catch (t) {
            }
            try {
                delete e.extraElement
            } catch (t) {
            }
        }
        if (null != e.styleDefinition.extra) {
            null == e.extraContainer && (e.extraContainer = document.createElement("div"),
                e.extraContainer.style.textAlign = "center",
                e.extraContainer.style.display = "inline-block",
                e.parentNode.replaceChild(e.extraContainer, e),
                e.extraContainer.appendChild(e)),
                e.extraElement = document.createElement("span");
            var i = $MPC.__processCSS(e, "extra");
            e.extraElement.className = i,
                null != e.nextSibling ? e.parentNode.insertBefore(e.extraElement, e.nextSibling) : e.parentNode.appendChild(e.extraElement)
        }
    }
    ,
    $MPC.__processCSS = function (e, t) {
        var i = [];
        for (var n in e.styleDefinition[t])
            i.push(e.styleDefinition[t][n]);
        var o = "MP-" + i.sort().join("-")
            , a = {}
            , r = "";
        for (var n in e.styleDefinition[t]) {
            var d = $MPC.styles[n][e.styleDefinition[t][n]].dependency;
            if (d = e.styleDefinition.all[d],
            null != d && (o += "-D" + d),
            "base" != n && null != $MPC.styles[n].common) {
                var s = $MPC.styles[n].common.dependency;
                s = e.styleDefinition.all[s],
                null != s && (o += "-CD" + s);
                for (var l in $MPC.styles[n].common.attributes)
                    null == a[l] && (a[l] = ""),
                        a[l] += $MPC.styles[n].common.getCSS(l, s)
            }
            for (var l in $MPC.styles[n][e.styleDefinition[t][n]].attributes)
                null == a[l] && (a[l] = ""),
                    a[l] += $MPC.styles[n][e.styleDefinition[t][n]].getCSS(l, d)
        }
        for (var l in a)
            r = "normal" == l ? o : o + ":" + l,
            window.mp_stylesLoaded.indexOf(r) >= 0 || ($MPC.__addCSS(t, r, a[l]),
                window.mp_stylesLoaded.push(r));
        return o
    }
    ,
    $MPC.__doBehavior = function (e) {
        if (null != e) {
            if (null == $MPC.__integrations && ($MPC.__integrations = {
                link: [],
                form: [],
                iframe: []
            }),
            e.processed !== !0) {
                var t = !1;
                e.data = {},
                    "iframe" == e.tagName.toLowerCase() ? (e.integrationType = "IFRAME",
                        $MPC.__integrations.iframe.push(e),
                        $MPC.__event.add(window, "message", $MPC.__msgReceiver)) : "button" != e.tagName.toLowerCase() && "input" != e.tagName.toLowerCase() || "submit" != e.type.toLowerCase() ? (e.integrationType = "LINK",
                        $MPC.__integrations.link.push(e),
                    null == e.getAttribute("href") || new RegExp("^(" + document.location.href + ")?#").test(e.getAttribute("href")) || (/^(javascript:)/.test(e.getAttribute("href").trim()) ? e.data.js = e.getAttribute("href") : e.data.url = e.getAttribute("href"),
                        e.href = "javascript:void(0)",
                        t = !0)) : (e.integrationType = "FORM",
                        $MPC.__integrations.form.push(e),
                    null != e.form && e.form.action.trim().indexOf(e.form.action.trim() + "#") < 0 && (/^(javascript:)/.test(e.form.action.trim()) ? e.data.js = e.form.action : e.data.url = e.form.action,
                        e.form.onsubmit = function () {
                            return !1
                        }
                        ,
                        t = !0)),
                    e.data.size = {
                        width: e.getAttribute("width") || (e.form ? e.form.getAttribute("width") : null),
                        height: e.getAttribute("height") || (e.form ? e.form.getAttribute("height") : null)
                    };
                var i = e.getAttribute("mp-mode") || (e.form ? e.form.getAttribute("mp-mode") || "dflt" : "dflt");
                if (null != i && "" != i.trim()) {
                    var n = i.toLowerCase().split("-");
                    e.data.mode = n[0],
                        e.data.modeData = n[1]
                } else
                    e.data.target = e.getAttribute("target") || (e.form ? e.form.getAttribute("target") : null);
                e.setAttribute("target", ""),
                e.form && e.form.setAttribute("target", "");
                var o = e.getElementsByTagName("img");
                if (o.length <= 0)
                    t && $MPC.__event.add(e, "click", $MPC.fire);
                else
                    for (var a = 0; a < o.length; a++)
                        o[a].data = e.data,
                        t && $MPC.__event.add(o[a], "click", $MPC.fire);
                e.onerror = "FORM" == e.integrationType ? e.getAttribute("onerror") || e.form.getAttribute("onerror") : e.getAttribute("onerror"),
                e.onerror && "function" == typeof window[e.onerror] && (e.onerror = window[e.onerror]),
                    e.onreturn = "FORM" == e.integrationType ? e.getAttribute("onreturn") || e.getAttribute("callback") || e.form.getAttribute("onreturn") || e.form.getAttribute("callback") : e.getAttribute("onreturn") || e.getAttribute("callback"),
                    e.openMPCheckout = function (e) {
                        e && (this.data.url = e),
                            $MPC.openCheckout(this)
                    }
                    ,
                "FORM" == e.integrationType && (e.form.mpButton = e,
                        e.form.openMPCheckout = function (e) {
                            this.mpButton.openMPCheckout(e)
                        }
                ),
                    e.processed = !0
            }
        } else {
            if (null == window.mp_checkout_triggers)
                return;
            for (var r = 0; r < window.mp_checkout_triggers.length; r++)
                $MPC.__doBehavior(window.mp_checkout_triggers[r])
        }
    }
    ,
    $MPC.fire = function (event) {
        if (null == event)
            return !1;
        var trigger = event.srcElement || event.target;
        try {
            null != trigger && null != trigger.data && (null != trigger.data.js && "" != trigger.data.js.trim() ? eval(trigger.data.js) : (null != trigger.data.url || "" != trigger.data.url.trim()) && $MPC.openCheckout(trigger))
        } catch (e) {
            $MPC.__track("ERROR", "CLICK", {
                exception: e.message,
                trigger_url: trigger.data.url
            })
        }
    }
    ,
    $MPC.openCheckout = function (e) {
        var t = e ? e.data || e : null;
        if (null != t && null != t.url && "" != t.url.trim()) {
            e.data = t;
            try {
                $MPC.__track("INFO", "OPEN_MODE", {
                    mode: e.data.mode,
                    trigger_url: e.data.url
                }),
                    "function" == typeof $MPC.openCheckout[e.data.mode] ? $MPC.openCheckout[e.data.mode](e) : $MPC.openCheckout.dflt(e)
            } catch (i) {
                $MPC.__track("ERROR", "OPEN", {
                    exception: i.message,
                    trigger_url: e.data.url
                })
            }
        }
    }
    ,
    $MPC.openCheckout.size = {
        dflt: {
            width: 815,
            height: 550
        },
        lite: {
            width: 815,
            height: 550
        }
    },
    $MPC.openCheckout.size.get = function (e) {
        return null == e || null == $MPC.openCheckout.size[e] ? $MPC.openCheckout.size.dflt : $MPC.openCheckout.size[e]
    }
    ,
    $MPC.openCheckout.dflt = function (e) {
        $MPC.openCheckout.modal(e)
    }
    ,
    $MPC.openCheckout.blank = function (e) {
        "FORM" == e.integrationType ? ($MPC.checkout = window.open("", e.data.target || "MercadoPago"),
            e.form.setAttribute("target", e.data.target || "MercadoPago"),
            e.form.submit()) : $MPC.checkout = window.open(e.data.url, e.data.target || "MercadoPago")
    }
    ,
    $MPC.openCheckout.redirect = function (e) {
        "FORM" == e.integrationType ? (e.form.setAttribute("target", "_self"),
            e.form.submit()) : document.location.href = e.data.url
    }
    ,
    $MPC.openCheckout.popup = function (e) {
        var t = $MPC.openCheckout.size.get(e.data.modeData)
            , i = (screen.width - t.width) / 2
            , n = (screen.height - t.height) / 2 - 50;
        $MPC.checkout = window.open("", "MPCheckout", "width=" + t.width + ",height=" + t.height + ",scrollbars=1,location=0,menubar=0,resizable=1,titlebar=0,toolbar=0,status=0,left=" + i + ",top=" + n),
            "FORM" == e.integrationType ? (e.form.setAttribute("target", e.data.target || "MercadoPago"),
                e.form.submit()) : $MPC.checkout.location.href = e.data.url,
            $MPC.checkout.focus()
    }
    ,
    $MPC.openCheckout.modal = function (e) {
        var t = $MPC.openCheckout.size.get(e.data.modeData);
        $MPC.__openingStart = (new Date).getTime(),
            $MPC.__actions.open({
                trigger: e,
                width: t.width,
                height: t.height
            }, e)
    }
    ,
    $MPC.__msgReceiver = function (e) {
        if (null == e && (e = window.event),
        null != e) {
            var regex = new RegExp($MPC.conf.messageOrigin)
                , match = regex.exec(e.origin);
            if (!(null == match || match.length <= 0)) {
                var trigger = $MPC.__getTrigger(e.source)
                    , message = null;
                try {
                    eval("message = " + e.data)
                } catch (e) {
                    return
                }
                "function" == typeof $MPC.__actions[message.action] && $MPC.__actions[message.action](message.data, trigger, !0)
            }
        }
    }
    ,
    $MPC.__getTrigger = function (e) {
        if ($MPC.Modal.__built && $MPC.Modal.__dialog.__container.contentWindow === e)
            return $MPC.Modal.__caller;
        for (var t = 0; t < $MPC.__integrations.iframe.length; t++)
            if ($MPC.__integrations.iframe[t].contentWindow === e)
                return $MPC.__integrations.iframe[t]
    }
    ,
    $MPC.__actions = {},
    $MPC.__actions.finalize = function (e, t, i) {
        $MPC.__actions.close(t),
        null != e && $MPC.__actions.complete(e, t, i)
    }
    ,
    $MPC.__actions.complete = function (e, t) {
        console.log(t)
        var i = "function" == typeof t.onreturn ? t.onreturn : "function" == typeof window[t.onreturn] ? window[t.onreturn] : null;
        if (i)
            try {
                i(e)
            } catch (n) {
                $MPC.__track("ERROR", "ON_RETURN", {
                    exception: n.message,
                    trigger_url: t.data.url,
                    data: e
                })
            }
        else
            t.onreturn && $MPC.__track("WARNING", "ON_RETURN_NOT_FOUND", {
                onreturn: t.onreturn,
                trigger_url: t.data.url
            })
    }
    ,
    $MPC.__actions.resize = function (e, t, i) {
        if (t && ($MPC.__temp.resizedElement = "IFRAME" == t.integrationType ? t : $MPC.Modal,
            "IFRAME" == t.integrationType ? $MPC.__temp.resizedElement.__size = {} : null == $MPC.__temp.resizedElement.__size && ($MPC.__temp.resizedElement.__size = {}),
            e)) {
            var n = null;
            if (null != $MPC.openCheckout.size[e])
                n = $MPC.openCheckout.size[e];
            else if (null != e.width && null != e.height)
                n = e;
            else {
                var o = (e + "").split(/[Xx,|;]/);
                2 == o.length && (n = {
                    width: o[0],
                    height: o[1],
                    force: "true" === o[2]
                })
            }
            if (n.width = parseInt((n.force ? n.width : t.data.size.width || n.width) + "", 10),
                n.height = parseInt((n.force ? n.height : t.data.size.height || n.height) + "", 10),
            null == n || isNaN(n.width) || isNaN(n.height))
                return void ($MPC.__temp.resizedElement.__size.transition = null);
            i && "Modal" == $MPC.__temp.resizedElement.type && $MPC.__actions.ready(t),
                $MPC.__temp.resizedElement.__size.requested = {
                    width: n.width,
                    height: n.height
                },
            n.height + 2 * $MPC.__temp.resizedElement.__size.margin > window.size().height && (n.height = Math.max($MPC.__temp.resizedElement.__size.minHeight, window.size().height - 2 * $MPC.__temp.resizedElement.__size.margin)),
            n.width + 2 * $MPC.__temp.resizedElement.__size.margin > window.size().width && (n.width = Math.max($MPC.__temp.resizedElement.__size.minWidth, window.size().width - 2 * $MPC.__temp.resizedElement.__size.margin));
            var a = "Modal" == $MPC.__temp.resizedElement.type ? null != $MPC.Modal.__size.width && null != $MPC.Modal.__size.height ? $MPC.Modal.__size : null : {
                width: $MPC.__temp.resizedElement.clientWidth || $MPC.__temp.resizedElement.offsetWidth,
                height: $MPC.__temp.resizedElement.clientHeight || $MPC.__temp.resizedElement.offsetHeight
            };
            if (null == a || "Modal" == $MPC.__temp.resizedElement.type && !$MPC.Modal.__opened)
                return $MPC.__temp.resizedElement.__size.transition = null,
                    $MPC.__actions.resize.setWidth(n.width),
                    void $MPC.__actions.resize.setHeight(n.height);
            if (null != $MPC.__temp.resizedElement.__size.transition)
                return;
            $MPC.__temp.resizedElement.__size.transition = {
                start: a,
                current: a,
                end: n,
                timeStart: (new Date).getTime(),
                timeEnd: this.timeStart + $MPC.conf.resizeDuration
            },
            (null == t.data.size.width || "Modal" == $MPC.__temp.resizedElement.type) && requestAnimationFrame(this.resize.setWidth),
            (null == t.data.size.height || "Modal" == $MPC.__temp.resizedElement.type) && requestAnimationFrame(this.resize.setHeight)
        }
    }
    ,
    $MPC.__actions.resize.setWidth = function (e) {
        if (null != $MPC.__temp.resizedElement.__size.transition) {
            if ($MPC.__temp.resizedElement.__size.transition.current.width == $MPC.__temp.resizedElement.__size.transition.end.width)
                return void ($MPC.__temp.resizedElement.__size.transition.heightFinished === !0 ? $MPC.__temp.resizedElement.__size.transition = null : $MPC.__temp.resizedElement.__size.transition.widthFinished = !0);
            var t = null == e || e <= $MPC.__temp.resizedElement.__size.transition.timeStart ? (new Date).getTime() : e
                , i = (t - $MPC.__temp.resizedElement.__size.transition.timeStart) / $MPC.conf.resizeDuration
                ,
                n = $MPC.__temp.resizedElement.__size.transition.end.width - $MPC.__temp.resizedElement.__size.transition.start.width
                , o = 0 > n ? -1 : 1
                , a = n * i;
            e = $MPC.__temp.resizedElement.__size.transition.current.width + a,
            e * o > $MPC.__temp.resizedElement.__size.transition.end.width * o && (e = $MPC.__temp.resizedElement.__size.transition.current.width = $MPC.__temp.resizedElement.__size.transition.end.width)
        } else if (null == e)
            return;
        $MPC.__temp.resizedElement.__size.width = e,
            "Modal" == $MPC.__temp.resizedElement.type ? ($MPC.__temp.resizedElement.__size.dialogWidth = $MPC.__temp.resizedElement.__size.width + 2 * $MPC.__temp.resizedElement.__size.padding,
                $MPC.__temp.resizedElement.__dialog.style.width = $MPC.__temp.resizedElement.__size.dialogWidth + "px",
                $MPC.__temp.resizedElement.__dialog.__container.style.width = $MPC.__temp.resizedElement.__size.width - ($MPC.__getIEVersion() >= 0 && $MPC.conf.quirksMode ? 2 * $MPC.__temp.resizedElement.__size.border : 0) + "px") : $MPC.__temp.resizedElement.style.width = $MPC.__temp.resizedElement.__size.width + "px",
            $MPC.__actions.center($MPC.__temp.resizedElement),
        null != $MPC.__temp.resizedElement.__size.transition && requestAnimationFrame($MPC.__actions.resize.setWidth)
    }
    ,
    $MPC.__actions.resize.setHeight = function (e) {
        if (null != $MPC.__temp.resizedElement.__size.transition) {
            if ($MPC.__temp.resizedElement.__size.transition.current.height == $MPC.__temp.resizedElement.__size.transition.end.height)
                return void ($MPC.__temp.resizedElement.__size.transition.widthFinished === !0 ? $MPC.__temp.resizedElement.__size.transition = null : $MPC.__temp.resizedElement.__size.transition.heightFinished = !0);
            var t = null == e || e <= $MPC.__temp.resizedElement.__size.transition.timeStart ? (new Date).getTime() : e
                , i = (t - $MPC.__temp.resizedElement.__size.transition.timeStart) / $MPC.conf.resizeDuration
                ,
                n = $MPC.__temp.resizedElement.__size.transition.end.height - $MPC.__temp.resizedElement.__size.transition.start.height
                , o = 0 > n ? -1 : 1
                , a = n * i;
            e = $MPC.__temp.resizedElement.__size.transition.current.height + a,
            e * o > $MPC.__temp.resizedElement.__size.transition.end.height * o && (e = $MPC.__temp.resizedElement.__size.transition.current.height = $MPC.__temp.resizedElement.__size.transition.end.height)
        } else if (null == e)
            return;
        $MPC.__temp.resizedElement.__size.height = e,
            "Modal" == $MPC.__temp.resizedElement.type ? ($MPC.__temp.resizedElement.__size.dialogHeight = $MPC.__temp.resizedElement.__size.height + 2 * $MPC.__temp.resizedElement.__size.padding,
                $MPC.__temp.resizedElement.__dialog.style.height = $MPC.__temp.resizedElement.__size.dialogHeight + "px",
                $MPC.__temp.resizedElement.__dialog.__container.style.height = $MPC.__temp.resizedElement.__size.height - ($MPC.__getIEVersion() >= 0 && $MPC.conf.quirksMode ? 2 * $MPC.__temp.resizedElement.__size.border : 0) + "px") : $MPC.__temp.resizedElement.style.height = $MPC.__temp.resizedElement.__size.height + "px",
            $MPC.__actions.center($MPC.__temp.resizedElement),
        null != $MPC.__temp.resizedElement.__size.transition && requestAnimationFrame($MPC.__actions.resize.setHeight)
    }
    ,
    $MPC.__actions.resize.checkSize = function () {
        $MPC.Modal.__opened && $MPC.Modal.__size.requested.height > $MPC.Modal.__size.height && $MPC.__actions.resize($MPC.Modal.__size.requested)
    }
    ,
    $MPC.__actions.center = function () {
        if ($MPC.Modal.__opened || $MPC.Modal.__isLoading) {
            var e = 6 == $MPC.__getIEVersion()
                , t = window.center({
                width: $MPC.Modal.__size.dialogWidth,
                height: $MPC.Modal.__size.dialogHeight
            }, e)
                , i = t.y >= $MPC.Modal.__size.margin ? t.y : $MPC.Modal.__size.margin
                , n = t.x >= $MPC.Modal.__size.margin ? t.x : $MPC.Modal.__size.margin;
            $MPC.Modal.__dialog.style.top = i + "px",
                $MPC.Modal.__dialog.style.left = n + "px"
        }
    }
    ,
    $MPC.__actions.requestClose = function () {
        !$MPC.Modal.__opened || $MPC.Modal.__isLoading || $MPC.Modal.__closeRequested || null != $MPC.Modal.__dialog.__container.contentWindow.postMessage && ($MPC.Modal.__dialog.__container.contentWindow.postMessage({
            action: "requestClose"
        }, "*"),
            $MPC.Modal.__closeRequested = !0,
            $MPC.Modal.__closeTimeout = setTimeout(function () {
                $MPC.__actions.close(),
                    $MPC.__track("WARNING", "TIMEOUT_CLOSE", {
                        trigger_url: $MPC.Modal.__caller.data.url
                    })
            }, 2e3))
    }
    ,
    $MPC.__actions.close = function () {
        $MPC.Modal.__opened || $MPC.Modal.__isLoading ? (null != $MPC.Modal.__dimmer && $MPC.Modal.__dimmer.hide(),
        null != $MPC.Modal.__dialog && ($MPC.Modal.__dialog.hide(),
            $MPC.Modal.__assets.closeButton.hide(),
            $MPC.Modal.__assets.loading.hide(),
            $MPC.Modal.__dialog.__container.src = "",
            $MPC.Modal.__opened = !1,
            $MPC.Modal.__isLoading = !1),
            clearTimeout($MPC.Modal.__closeTimeout),
            $MPC.Modal.__closeRequested = !1) : null != $MPC.checkout && ($MPC.checkout.close(),
            $MPC.checkout = null)
    }
    ,
    $MPC.__actions.ready = function (e, t) {
        try {
            t === !0 && $MPC.__actions.resize($MPC.Modal.__size.opening, e, t),
                $MPC.Modal.__assets.loading.hide(),
                $MPC.Modal.__assets.closeButton.show(),
                $MPC.Modal.__dialog.__container.show(),
            $MPC.__openingStart && ($MPC.__openingEnd = (new Date).getTime(),
                $MPC.__track("TIMER", "OPEN_CHECKOUT", {
                    elapsed: $MPC.__openingEnd - $MPC.__openingStart,
                    trigger_url: e.data.url,
                    track_id: $MPC.Modal.__trackId
                }),
                $MPC.__openingStart = $MPC.__openingEnd = null),
            $MPC.isVisible($MPC.Modal.__dialog.__container) || $MPC.__track("ERROR", "MODAL_NOT_VISIBLE", {
                trigger_url: e.data.url,
                track_id: $MPC.Modal.__trackId
            })
        } catch (i) {
            $MPC.__track("ERROR", "MODAL_READY", {
                exception: i.message,
                trigger_url: e.data.url,
                track_id: $MPC.Modal.__trackId
            })
        }
    }
    ,
    $MPC.Modal = {
        type: "Modal",
        __built: !1,
        __opened: !1,
        __size: {
            border: 5,
            padding: 0,
            margin: 20,
            minHeight: 350,
            minWidth: 350,
            controlSize: 16
        }
    },
    $MPC.Modal.__assets = {
        loading: function () {
            var e = document.createElement("div");
            e.style.textAlign = "center",
                e.size = {
                    width: 300,
                    height: 150
                };
            var t = "loading.gif";
            return e.img = document.createElement("img"),
                e.appendChild(e.img),
                e.img.src = $MPC.conf.imageBasePath + t,
                e.img.size = {
                    width: 44,
                    height: 44
                },
                e.img.width = e.img.size.width,
                e.img.height = e.img.size.height,
                e.img.style.margin = "30px auto 20px",
                e.img.style.display = "block",
                e.welcome = document.createElement("p"),
                e.appendChild(e.welcome),
                e.welcome.style.fontFamily = "Arial",
                e.welcome.style.fontSize = "13px",
                e.welcome.style.color = "333",
                e.cancel = document.createElement("a"),
                e.appendChild(e.cancel),
                e.cancel.style.fontFamily = "Arial",
                e.cancel.style.fontSize = "12px",
                e.cancel.style.color = "#00f",
                e.cancel.style.textDecoration = "underline",
                e.cancel.style.cursor = "pointer",
                e.cancel.style.visibility = "hidden",
                e.cancel.show = function () {
                    this.style.visibility = ""
                }
                ,
                e.cancel.hide = function () {
                    this.style.visibility = "hidden"
                }
                ,
                e.show = function () {
                    this.init(),
                        this.style.display = "",
                        this.cancelTimer = setTimeout("$MPC.Modal.__assets.loading.cancel.show()", 5e3)
                }
                ,
                e.hide = function () {
                    $MPC.Modal.__isLoading = !1,
                        this.style.display = "none",
                        this.cancel.hide(),
                        clearTimeout(this.cancelTimer)
                }
                ,
                e.init = function () {
                    this.initialized || (this.welcome.appendChild(document.createTextNode($MPC._txt.get("starting"))),
                        this.cancel.appendChild(document.createTextNode($MPC._txt.get("cancel"))),
                        $MPC.__event.add(this.cancel, "click", function () {
                            $MPC.__openingStart && ($MPC.__openingEnd = (new Date).getTime(),
                                $MPC.__track("TIMER", "CANCEL_LOADING", {
                                    elapsed: $MPC.__openingEnd - $MPC.__openingStart,
                                    trigger_url: $MPC.Modal.__caller.data.url,
                                    track_id: $MPC.Modal.__trackId
                                }),
                                $MPC.__openingStart = $MPC.__openingEnd = null),
                                $MPC.__track("WARNING", "CANCEL_LOADING", {
                                    trigger_url: $MPC.Modal.__caller.data.url,
                                    track_id: $MPC.Modal.__trackId
                                }),
                                $MPC.__actions.close()
                        }),
                        this.initialized = !0)
                }
                ,
                e
        }(),
        closeButton: function () {
            var e = document.createElement("div");
            return e.show = function () {
                this.init(),
                    this.style.display = ""
            }
                ,
                e.hide = function () {
                    this.style.display = "none"
                }
                ,
                e.style.width = $MPC.Modal.__size.controlSize + "px",
                e.style.height = $MPC.Modal.__size.controlSize + "px",
                e.style.fontSize = "0px",
                e.style.backgroundColor = "transparent",
                e.style.backgroundImage = "url(" + $MPC.conf.imageBasePath + "close.png)",
                e.style.backgroundPosition = "0 0",
                e.style.position = "absolute",
                e.style.right = "7px",
                e.style.top = "7px",
                e.style.cursor = "pointer",
                e.style.zIndex = "250",
                e.innerHTML = "",
                e.mouseOver = function (e) {
                    if (null == e && (e = event),
                    null != e) {
                        var t = e.srcElement || e.target;
                        t.style.backgroundPosition = "0 -16px"
                    }
                }
                ,
                e.mouseOut = function (e) {
                    if (null == e && (e = event),
                    null != e) {
                        var t = e.srcElement || e.target;
                        t.style.backgroundPosition = "0 0"
                    }
                }
                ,
                e.init = function () {
                    this.initialized || (!$MPC.conf.messagingEnabled || $MPC.__getIEVersion() >= 0 && $MPC.conf.quirksMode ? $MPC.__event.add(this, "click", $MPC.__actions.close) : $MPC.__event.add(this, "click", $MPC.__actions.requestClose),
                        $MPC.__event.add(this, "mouseover", this.mouseOver),
                        $MPC.__event.add(this, "mouseout", this.mouseOut),
                        this.initialized = !0)
                }
                ,
                e.initialized = !1,
                e
        }()
    },
    $MPC.Modal.__build = function () {
        return null == $MPC.Modal.__dimmer && ($MPC.Modal.__dimmer = $MPC.__components.dimmer()),
        null == $MPC.Modal.__dialog && ($MPC.Modal.__dialog = $MPC.__components.dialog()),
            $MPC.Modal.__built = !0,
            $MPC.Modal
    }
    ,
    $MPC.__components = {
        iframe: function (e) {
            var t = document.createElement("iframe");
            return t.id = "MP-Checkout-IFrame",
                t.setAttribute("name", e || "MP-Checkout-IFrame"),
                t.frameBorder = "0",
                t.show = function () {
                    this.style.display = ""
                }
                ,
                t.hide = function () {
                    this.style.display = "none"
                }
                ,
                t
        },
        dialog: function () {
            var e = document.createElement("div");
            return e.id = "MP-Checkout-dialog",
                e.setAttribute("name", "MP-Checkout-dialog"),
                e.show = function () {
                    this.style.display = "block"
                }
                ,
                e.hide = function () {
                    this.style.display = "none"
                }
                ,
                document.getElementsByTagName("body")[0].appendChild(e),
                e.style.backgroundColor = "#fff",
                e.style.border = $MPC.Modal.__size.border + "px solid #CCCCCC",
                e.style.MozBorderRadius = "5px 5px 5px 5px",
                e.style.webkitBorderRadius = "5px 5px 5px 5px",
                e.style.borderRadius = "5px 5px 5px 5px",
                e.style.display = "none",
                6 == $MPC.__getIEVersion() || $MPC.conf.quirksMode ? (e.style.position = "absolute",
                    $MPC.__event.add(window, "scroll", $MPC.__actions.center)) : e.style.position = "fixed",
                $MPC.__event.add(window, "resize", $MPC.__actions.resize.checkSize),
                $MPC.__event.add(window, "resize", $MPC.__actions.center),
                $MPC.__event.add(window, "message", $MPC.__msgReceiver),
                e.style.zIndex = "200",
                e.appendChild($MPC.Modal.__assets.closeButton),
            !$MPC.conf.messagingEnabled || $MPC.__getIEVersion() >= 0 && $MPC.conf.quirksMode || $MPC.Modal.__assets.closeButton.hide(),
                e.__container = $MPC.__components.iframe(),
                e.appendChild(e.__container),
                e.__container.style.position = "absolute",
                e.__container.style.left = $MPC.Modal.__size.padding + "px",
                e.__container.style.bottom = $MPC.Modal.__size.padding + "px",
            !$MPC.conf.messagingEnabled || $MPC.__getIEVersion() >= 0 && $MPC.conf.quirksMode || e.appendChild($MPC.Modal.__assets.loading),
                e
        },
        dimmer: function () {
            var e = document.createElement("div");
            return e.show = function () {
                this.style.display = "block"
            }
                ,
                e.hide = function () {
                    this.style.display = "none"
                }
                ,
                document.getElementsByTagName("body")[0].appendChild(e),
                $MPC.__getIEVersion() >= 0 ? (e.style.backgroundColor = "#000000",
                    e.style.filter = "alpha(opacity=50) !important",
                (6 == $MPC.__getIEVersion() || $MPC.conf.quirksMode) && (e.style.width = window.size().width + "px",
                    e.style.height = window.size().height + 12 + "px",
                    e.style.position = "absolute",
                    e.style.left = window.center(window.size(), !0).x + "px",
                    e.style.top = window.center(window.size(), !0).y + "px",
                    $MPC.__event.add(window, "scroll", function () {
                        e.style.left = window.center(window.size(), !0).x + "px",
                            e.style.top = window.center(window.size(), !0).y + "px"
                    }),
                    $MPC.__event.add(window, "resize", function () {
                        e.style.width = window.size().width + "px",
                            e.style.height = window.size().height + 12 + "px",
                            e.style.left = window.center(window.size(), !0).x + "px",
                            e.style.top = window.center(window.size(), !0).y + "px"
                    }))) : e.style.backgroundColor = "rgba(0,0,0,.5)",
                e.style.display = "none",
            6 == $MPC.__getIEVersion() || $MPC.__getIEVersion() >= 0 && $MPC.conf.quirksMode || (e.style.width = "100%",
                e.style.height = "100%",
                e.style.left = "0",
                e.style.top = "0",
                e.style.position = "fixed"),
                e.style.zIndex = "150",
                e
        }
    },
    $MPC.__actions.open = function (e, t) {
        if ($MPC.Modal.__caller = null,
        null != e && (null == e.trigger && (e.trigger = t),
        null != e.trigger || null != e.url)) {
            t.data.size || (t.data.size = $MPC.openCheckout.size.dflt);
            var i = null == e.width || isNaN(parseInt(e.width, 10)) ? $MPC.openCheckout.size.dflt.width : parseInt(e.width, 10)
                ,
                n = null == e.height || isNaN(parseInt(e.height, 10)) ? $MPC.openCheckout.size.dflt.height : parseInt(e.height, 10)
                , o = e.url;
            null != e.trigger && null != e.trigger.data && null != e.trigger.data.url && (o = e.trigger.data.url),
                $MPC.Modal.__caller = e.trigger,
                $MPC.Modal.__trackId = String(Math.ceil(1e7 * Math.random())) + String((new Date).getTime()),
                o += (o.indexOf("?") > 0 ? "&" : "?") + "openMode=modal&trackId=" + $MPC.Modal.__trackId,
            $MPC.Modal.__caller.onreturn && "function" == typeof window[$MPC.Modal.__caller.onreturn] && (o += (o.indexOf("?") > 0 ? "&" : "?") + "useCallback=true"),
                $MPC.Modal.__build(),
                !$MPC.conf.messagingEnabled || $MPC.__getIEVersion() >= 0 && $MPC.conf.quirksMode ? ($MPC.__actions.resize({
                    width: i,
                    height: n
                }, t),
                    $MPC.Modal.__dimmer.show(),
                    $MPC.Modal.__dialog.show()) : $MPC.__actions.loading({
                    width: i,
                    height: n
                }, t),
                "FORM" == $MPC.Modal.__caller.integrationType ? ($MPC.Modal.__caller.form.setAttribute("target", $MPC.Modal.__dialog.__container.getAttribute("name")),
                    $MPC.Modal.__caller.form.submit()) : $MPC.Modal.__dialog.__container.src = o,
                $MPC.Modal.__opened = !0
        }
    }
    ,
    $MPC.__actions.loading = function (e, t) {
        $MPC.Modal.__isLoading || ($MPC.__actions.close(t),
            $MPC.Modal.__size.opening = e,
            $MPC.Modal.__build(),
            $MPC.Modal.__dialog.__container.hide(),
            $MPC.Modal.__assets.loading.show(),
            $MPC.__actions.resize({
                width: $MPC.Modal.__assets.loading.size.width,
                height: $MPC.Modal.__assets.loading.size.height,
                force: !0
            }, t),
            $MPC.Modal.__isLoading = !0,
            $MPC.Modal.__dimmer.show(),
            $MPC.Modal.__dialog.show(),
            $MPC.__actions.center())
    }
    ,
    window.requestAnimationFrame = function () {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (e) {
            window.setTimeout(e, 1e3 / 60)
        }
    }(),
    $MPC.__event = {
        add: function (e, t, i) {
            if (e.addEventListener)
                e.addEventListener(t, i, !1);
            else {
                if (!e.attachEvent)
                    return !1;
                e.attachEvent("on" + t, i)
            }
            return !0
        },
        remove: function (e, t, i) {
            if (e.removeEventListener)
                e.removeEventListener(t, i, !1);
            else {
                if (!e.detachEvent)
                    return !1;
                e.detachEvent("on" + t, i)
            }
            return !0
        }
    },
    $MPC.isVisible = function (e) {
        if (e == document)
            return !0;
        if (!e)
            return !1;
        if (!e.parentNode)
            return !1;
        if (e.style) {
            if ("none" == e.style.display)
                return !1;
            if ("hidden" == e.style.visibility)
                return !1
        }
        if (window.getComputedStyle) {
            var t = window.getComputedStyle(e, "");
            if ("none" == t.display)
                return !1;
            if ("hidden" == t.visibility)
                return !1
        }
        var t = e.currentStyle;
        if (t) {
            if ("none" == t.display)
                return !1;
            if ("hidden" == t.visibility)
                return !1
        }
        return $MPC.isVisible(e.parentNode)
    }
    ,
    String.prototype.trim = function () {
        return this.replace(/^\s+|\s+$/, "")
    }
    ,
    Array.prototype.indexOf = function (e) {
        for (var t = -1, i = 0; i < this.length; i++)
            if (this[i] == e) {
                t = i;
                break
            }
        return t
    }
    ,
    Array.fromCollection = function (e) {
        if ("undefined" == typeof e.length)
            return null;
        for (var t = [], i = 0; i < e.length; i++)
            t.push(e[i]);
        return t
    }
    ,
    window.size = function () {
        var e = 0
            , t = 0;
        return window.innerWidth ? (e = window.innerWidth,
            t = window.innerHeight) : 0 != document.documentElement.clientWidth ? (e = document.documentElement.clientWidth,
            t = document.documentElement.clientHeight) : (e = document.body.clientWidth,
            t = document.body.clientHeight),
            {
                width: e,
                height: t
            }
    }
    ,
    window.center = function (e, t) {
        t = t === !0,
        (null == e || null == e.width || null == e.height) && (e = {
            width: 0,
            height: 0
        });
        var i = 0
            , n = 0
            , o = 0
            , a = 0;
        return t && (window.pageYOffset ? (o = window.pageXOffset,
            a = window.pageYOffset) : 0 != document.documentElement.scrollTop ? (a = document.documentElement.scrollTop,
            o = document.documentElement.scrollLeft) : (a = document.body.scrollTop,
            o = document.body.scrollLeft)),
            i = (this.size().width - e.width) / 2 + o,
            n = (this.size().height - e.height) / 2 + a,
            {
                x: i,
                y: n
            }
    }
    ,
    $MPC.__getIEVersion = function () {
        if (null == $MPC.IEVersion) {
            var e = -1;
            if ("Microsoft Internet Explorer" == navigator.appName) {
                var t = navigator.userAgent
                    , i = new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})");
                null != i.exec(t) && (e = parseFloat(RegExp.$1))
            }
            $MPC.IEVersion = e
        }
        return $MPC.IEVersion
    }
    ,
    $MPC.__getLocale = function () {
        if (null == $MPC.locale) {
            var e = null;
            if (navigator) {
                e = navigator.language ? navigator.language : navigator.browserLanguage ? navigator.browserLanguage : navigator.systemLanguage ? navigator.systemLanguage : navigator.userLanguage ? navigator.userLanguage : "es-AR";
                var t = e.split("-");
                e = {
                    lang: t[0],
                    country: t.length > 1 ? t[1] : t[0].toUpperCase()
                }
            }
            $MPC.locale = e
        }
        return $MPC.locale
    }
    ,
    $MPCSSOBJ.prototype.type = "$MPCSSOBJ",
    $MPCSSOBJ.prototype.getCSS = function (e, t) {
        null == e && (e = "normal");
        var i = "";
        if (null != this.attributes[e])
            for (var n = 0; n < this.attributes[e].length; n++) {
                var o = this.attributes[e][n].name
                    , a = this.attributes[e][n].value;
                if (null != this.dependency && null != $MPC.styles[this.dependency]) {
                    null == $MPC.styles[this.dependency][t] && (t = "DEF");
                    var r = a.split(/[,;]/);
                    if (r.length > 1)
                        for (var d = 0; d < r.length; d++) {
                            var s = r[d].split("=");
                            if (2 == s.length && s[0].trim().toLowerCase() == t.toLowerCase()) {
                                a = s[1];
                                break
                            }
                        }
                }
                i += o + ": " + a + ";"
            }
        return i
    }
    ,
    $MPCSSOBJ.prototype.add = function () {
        var e = null
            , t = null
            , i = null;
        return arguments.length < 2 || arguments.length > 3 ? void 0 : (2 == arguments.length && (e = arguments[0],
            i = arguments[1]),
        3 == arguments.length && (e = arguments[0],
            t = arguments[1].replace(":", ""),
            i = arguments[2]),
        null == t && (t = "normal"),
        null == this.attributes[t] && (this.attributes[t] = []),
            this.attributes[t].push(new $MPCSSATTR(e, i)),
            this)
    }
    ,
    $MPCSSATTR.prototype.type = "$MPCSSATTR",
    $MPC.__addCSS = function (e, t, i) {
        if (null != document.styleSheets) {
            if (null == $MPC.__styleSheets && ($MPC.__styleSheets = {}),
            null == $MPC.__styleSheets[e]) {
                var n = document.createElement("style");
                n.type = "text/css",
                    document.getElementsByTagName("head")[0].appendChild(n),
                    $MPC.__styleSheets[e] = n.sheet || n.styleSheet
            }
            $MPC.__styleSheets[e].addRule ? $MPC.__styleSheets[e].addRule("." + t, i) : $MPC.__styleSheets[e].insertRule("." + t + " {" + i + "} ", $MPC.__styleSheets[e].cssRules.length)
        }
    }
    ,
    $MPVG.prototype.getData = function (e) {
        if (null == this.elements || this.elements.length <= 0)
            return "";
        var t = new RegExp("-(" + this.elements.join("|") + ")-", "g")
            , i = t.exec("-" + e.toLowerCase() + "-");
        return null != i && i.length > 0 ? i[1] : ""
    }
    ,
    $MPC.vGroups = {
        color: new $MPVG("base", ["blue", "orange", "red", "green", "lightblue", "grey"]),
        size: new $MPVG("style", ["l", "m", "s"]),
        font: new $MPVG("style", ["ar", "ge", "tr"]),
        shape: new $MPVG("style", ["sq", "rn", "ov"]),
        logo: new $MPVG("extra", ["arall", "aron", "brall", "bron", "mxall", "mxon", "veall", "veon", "coall", "coon", "clall", "clon"])
    },
    $MPC.styles = {
        base: {},
        color: {},
        size: {},
        font: {},
        shape: {},
        logo: {},
        dflt: "base"
    },
    $MPC.styles.base.common = (new $MPCSSOBJ).add("cursor", "pointer").add("display", "inline-block").add("margin", "10px").add("font-weight", "normal").add("text-decoration", "none").add("text-decoration", ":hover", "none").add("font-size", "20px").add("line-height", "40px").add("padding", "0px 20px"),
    $MPC.styles.color.common = new $MPCSSOBJ("size").add("color", ":link", "#fff").add("background-repeat", "repeat-x").add("background-position", "0 0").add("background-position", ":hover", "S=0 -470px,M=0 -300px,L=0 -80px,DEF=0 -80px").add("background-position", ":active", "S=0 -520px,M=0 -360px,L=0 -160px,DEF=0 -120px"),
    $MPC.styles.color.blue = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-blue.png)").add("background-color", "#28536F").add("background-color", ":hover", "#2F719D").add("background-color", ":active", "#326689").add("color", "#fff").add("color", ":visited", "#fff").add("color", ":hover", "#fff").add("color", ":active", "#fff").add("border", "1px solid #293E75").add("text-shadow", "1px 1px #293E75"),
    $MPC.styles.color.orange = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-orange.png)").add("background-color", "#F27126").add("color", "#fff").add("color", ":visited", "#fff").add("color", ":hover", "#fff").add("color", ":active", "#fff").add("border", "1px solid #F67C41").add("text-shadow", "1px 1px #F67C41"),
    $MPC.styles.color.red = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-red.png)").add("background-color", "#C12020").add("color", "#fff").add("color", ":hover", "#fff").add("color", ":visited", "#fff").add("color", ":active", "#fff").add("border", "1px solid #CC1B17").add("text-shadow", "1px 1px #CC1B17"),
    $MPC.styles.color.green = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-green.png)").add("background-color", "#077574").add("color", "#fff").add("color", ":visited", "#fff").add("color", ":hover", "#fff").add("color", ":active", "#fff").add("border", "1px solid #0B898B").add("text-shadow", "1px 1px #0B898B"),
    $MPC.styles.color.lightblue = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-lightblue.png)").add("background-color", "#B8D2EB").add("background-color", ":hover", "#D9E7F4").add("background-color", ":active", "#E8F8FD").add("color", "#215181").add("color", ":link", "#215181").add("color", ":visited", "#215181").add("color", ":hover", "#215181").add("color", ":active", "#215181").add("border", "1px solid #8DB7E9"),
    $MPC.styles.color.grey = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-grey.png)").add("background-color", "#C5C5C5").add("color", "#333333").add("color", ":link", "#333333").add("color", ":visited", "#333333").add("color", ":hover", "#333333").add("color", ":active", "#333333").add("border", "1px solid #ADADAD"),
    $MPC.styles.size.l = (new $MPCSSOBJ).add("font-size", "20px").add("line-height", "40px").add("padding", "0px 20px"),
    $MPC.styles.size.m = (new $MPCSSOBJ).add("font-size", "17px").add("line-height", "30px").add("padding", "0px 17px"),
    $MPC.styles.size.s = (new $MPCSSOBJ).add("font-size", "14px").add("line-height", "25px").add("padding", "0px 14px"),
    $MPC.styles.font.ar = (new $MPCSSOBJ).add("font-family", "Arial"),
    $MPC.styles.font.tr = (new $MPCSSOBJ).add("font-family", "Trebuchet MS"),
    $MPC.styles.font.ge = (new $MPCSSOBJ).add("font-family", "Georgia"),
    $MPC.styles.shape.sq = (new $MPCSSOBJ).add("border-radius", "0px").add("-moz-border-radius", "0px").add("-webkit-border-radius", "0px"),
    $MPC.styles.shape.rn = new $MPCSSOBJ("size").add("border-radius", "S=3px,M=5px,L=7px,DEF=7px").add("-moz-border-radius", "S=3px,M=5px,L=7px,DEF=7px").add("-webkit-border-radius", "S=3px,M=5px,L=7px,DEF=7px"),
    $MPC.styles.shape.ov = new $MPCSSOBJ("size").add("border-radius", "S=12px,M=15px,L=20px,DEF=7px").add("-moz-border-radius", "S=13px,M=15px,L=20px,DEF=7px").add("-webkit-border-radius", "S=13px,M=15px,L=20px,DEF=7px"),
    $MPC.styles.logo.common = (new $MPCSSOBJ).add("margin", "-10px auto 0").add("display", "block"),
    $MPC.styles.logo.arall = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos.png)").add("background-position", "0 -29px").add("width", "165px").add("height", "23px"),
    $MPC.styles.logo.aron = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos.png)").add("background-position", "0 -3px").add("width", "133px").add("height", "23px"),
    $MPC.styles.logo.brall = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-br.png)").add("background-position", "0 -29px").add("width", "165px").add("height", "23px"),
    $MPC.styles.logo.bron = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-br.png)").add("background-position", "0 -3px").add("width", "125px").add("height", "23px"),
    $MPC.styles.logo.mxall = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-mex.png)").add("background-position", "0 -29px").add("width", "178px").add("height", "23px"),
    $MPC.styles.logo.mxon = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-mex.png)").add("background-position", "0 -3px").add("width", "114px").add("height", "23px"),
    $MPC.styles.logo.veall = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-ven.png)").add("background-position", "0 -29px").add("width", "156px").add("height", "23px"),
    $MPC.styles.logo.veon = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-ven.png)").add("background-position", "0 -3px").add("width", "98px").add("height", "23px"),
    $MPC.styles.logo.coall = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-co.png)").add("background-position", "0 -29px").add("width", "134px").add("height", "23px"),
    $MPC.styles.logo.coon = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-co.png)").add("background-position", "0 -3px").add("width", "114px").add("height", "23px"),
    $MPC.styles.logo.clall = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-cl.png)").add("background-position", "0 -29px").add("width", "114px").add("height", "23px"),
    $MPC.styles.logo.clon = (new $MPCSSOBJ).add("background", "url(" + $MPC.conf.imageBasePath + "MP-payButton-logos-cl.png)").add("background-position", "0 -3px").add("width", "275px").add("height", "23px"),
    $MPC._txt = {
        dflt: {
            starting: "Iniciando pago con MercadoPago",
            cancel: "Cancelar"
        },
        es: {
            starting: "Iniciando pago con MercadoPago"
        },
        pt: {
            starting: "Inicializando o pagamento com MercadoPago"
        }
    },
    $MPC._txt.get = function (e, t) {
        return t = null == t ? $MPC.__getLocale().lang : t,
            null != this[t] && null != this[t][e] ? this[t][e] : null != this.dflt[e] ? this.dflt[e] : ""
    }
    ,
    $MPC.__track = function () {
    }
    ,
    $MPC(),
    $MPBR = $MPC,
    $MPBR.doVisual = $MPC.__doVisual;
