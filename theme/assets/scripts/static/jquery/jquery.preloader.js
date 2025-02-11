(function (a) {
    var b = new Array,
        c = new Array,
        d = function () {}, e = 0;
    var f = {
        splashVPos: "35%",
        loaderVPos: "75%",
        initialID: '#jpreOverlay',
        splashID: "#jpreContent",
        showSplash: true,
        showPercentage: true,
        autoClose: true,
        closeBtnText: "Start!",
        onetimeLoad: false,
        debugMode: false,
        splashFunction: function () {}
    };
    var init = function() {
        jQuery(f.initialID).remove();
    };
    init();
    var g = function () {
        if (f.onetimeLoad) {
            var a = document.cookie.split("; ");
            for (var b = 0, c; c = a[b] && a[b].split("="); b++) {
                if (c.shift() === "jpreLoader") {
                    return c.join("=")
                }
            }
            return false
        } else {
            return false
        }
    };
    var h = function (a) {
        if (f.onetimeLoad) {
            var b = new Date;
            b.setDate(b.getDate() + a);
            var c = a == null ? "" : "expires=" + b.toUTCString();
            document.cookie = "jpreLoader=loaded; " + c
        }
    };
    var i = function () {
        jOverlay = a("<div></div>").attr("id", "jpreOverlay").css({
            position: "fixed",
            top: 0,
            left: 0,
            width: "100%",
            height: "100%",
            zIndex: 9999999
        }).appendTo("body");
        if (f.showSplash) {
            jContent = a("<div></div>").attr("id", "jpreSlide").appendTo(jOverlay);
            var b = a(window).width() - a(jContent).width();
            a(jContent).css({
                position: "absolute",
                zIndex: 9999999,
                top: f.splashVPos,
                left: Math.round(50 / a(window).width() * b) + "%"
            });
            a(jContent).html(a(f.splashID).wrap("<div/>").parent().html());
            a(f.splashID).remove();
            f.splashFunction()
        }
        jLoader = a("<div></div>").attr("id", "jpreLoader").appendTo(jOverlay);
        var c = a(window).width() - a(jLoader).width();
        a(jLoader).css({
            position: "absolute",
            zIndex: 9999999,
            top: f.loaderVPos,
            left: Math.round(50 / a(window).width() * c) + "%"
        });
        jBar = a("<div></div>").attr("id", "jpreBar").css({
            width: "0%",
            height: "100%"
        }).appendTo(jLoader);

        a('<div class="im-rogger1"/><div class="im-rogger2"/>').appendTo(jLoader);

        if (f.showPercentage) {
            jPer = a("<div></div>").attr("id", "jprePercentage").css({
                position: "relative",
                height: "100%"
            }).appendTo(jLoader);
        }
        if (!f.autoclose) {
            jButton = a("<div></div>").attr("id", "jpreButton").on("click", function () {
                n()
            }).css({
                position: "relative",
                height: "100%"
            }).appendTo(jLoader).text(f.closeBtnText).hide()
        }
    };
    var j = function (c) {
        a(c).find("*:not(script)").each(function () {
            var c = "";
            if (a(this).css("background-image").indexOf("none") == -1 && a(this).css("background-image").indexOf("-gradient") == -1) {
                c = a(this).css("background-image");
                if (c.indexOf("url") != -1) {
                    var d = c.match(/url\((.*?)\)/);
                    c = d[1].replace(/\"/g, "")
                }
            } else if (a(this).get(0).nodeName.toLowerCase() == "img" && typeof a(this).attr("src") != "undefined") {
                c = a(this).attr("src")
            }
            if (c.length > 0) {
                b.push(c)
            }
        })
    };
    var k = function () {
        for (var a = 0; a < b.length; a++) {
            if (l(b[a]));
        }
    };
    var l = function (b) {
        var d = new Image;
        a(d).load(function () {
            m()
        }).error(function () {
            c.push(a(this).attr("src"));
            m()
        }).attr("src", b)
    };
    var m = function () {
        e++;
        var c = Math.round(e / b.length * 100);
        a(jBar).stop().animate({
            width: c + "%"
        }, 500, "linear");
        if (f.showPercentage) {
            a(jPer).text(c + "%")
        }
        if (e >= b.length) {
            e = b.length;
            h();
            if (f.showPercentage) {
                a(jPer).text("100%")
            }
            if (f.debugMode) {
                var d = o()
            }
            a(jBar).stop().animate({
                width: "100%"
            }, 500, "linear", function () {
                if (f.autoClose) n();
                else a(jButton).fadeIn(1e3)
            })
        }
    };
    var n = function () {
        setTimeout( function() {
            a(jOverlay).fadeOut(800, function () {
                a(jOverlay).remove();
                d()
            });
        },800);
    };
    var o = function () {
        if (c.length > 0) {
            var a = "ERROR - IMAGE FILES MISSING!!!\n\r";
            a += c.length + " image files cound not be found. \n\r";
            a += "Please check your image paths and filenames:\n\r";
            for (var b = 0; b < c.length; b++) {
                a += "- " + c[b] + "\n\r"
            }
            return true
        } else {
            return false
        }
    };
    a.fn.jpreLoader = function (b, c) {
        if (b) {
            a.extend(f, b)
        }
        if (typeof c == "function") {
            d = c
        }
        a("body").css({
            display: "block"
        });
        return this.each(function () {
            if (!g()) {
                i();
                j(this);
                k()
            } else {
                a(f.splashID).remove();
                d()
            }
        })
    }
})(jQuery)