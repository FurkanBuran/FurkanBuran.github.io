(this["webpackJsonppyreact-downloader"] =
  this["webpackJsonppyreact-downloader"] || []).push([
  [0],
  {
    13: function (e, t, c) {},
    14: function (e, t, c) {
      "use strict";
      c.r(t);
      var n = c(0),
        i = c(1),
        s = c.n(i),
        r = c(6),
        a = c.n(r),
        l = (c(13), c(7)),
        o = c(3);
      var j = function (e) {
        var t = e.youtube,
          c = t.info,
          i = t.sources;
        return Object(n.jsxs)("div", {
          className: "result",
          children: [
            Object(n.jsxs)("div", {
              className: "video-item",
              children: [
                Object(n.jsx)("img", { src: c.thumbnail, alt: c.title }),
                Object(n.jsxs)("div", {
                  className: "video-details",
                  children: [
                    Object(n.jsx)("div", {
                      className: "title",
                      children: c.title
                    }),
                    Object(n.jsxs)("div", {
                      className: "author",
                      children: [
                        Object(n.jsx)("span", { children: "Y\xfckleyen" }),
                        " ",
                        c.author
                      ]
                    }),
                    Object(n.jsxs)("div", {
                      className: "length",
                      children: [
                        Object(n.jsx)("span", { children: "S\xfcre" }),
                        " ",
                        c.length
                      ]
                    }),
                    Object(n.jsxs)("div", {
                      className: "view",
                      children: [
                        Object(n.jsx)("span", {
                          children: "G\xf6r\xfcnt\xfclenme"
                        }),
                        " ",
                        c.views
                      ]
                    })
                  ]
                })
              ]
            }),
            Object(n.jsx)("ul", {
              children: i.map(function (e, t) {
                return Object(n.jsxs)(
                  "li",
                  {
                    children: [
                      Object(n.jsxs)("div", {
                        className: "quality",
                        children: [
                          Object(n.jsx)("span", { children: "Kalite" }),
                          e.quality
                        ]
                      }),
                      Object(n.jsxs)("div", {
                        className: "size",
                        children: [
                          Object(n.jsx)("span", { children: "Boyut" }),
                          e.size
                        ]
                      }),
                      Object(n.jsx)("a", {
                        href: e.url + "&title=" + c.title,
                        download: c.title,
                        target: "_blank",
                        children: "Download"
                      })
                    ]
                  },
                  t
                );
              })
            })
          ]
        });
      };
      var u = function (e) {
        var t = e.list,
          c = e.downloadAgain,
          i = e.clearHistory;
        return Object(n.jsxs)("div", {
          className: "search-history",
          children: [
            Object(n.jsxs)("h4", {
              children: [
                "Arama Ge\xe7mi\u015fi",
                Object(n.jsx)("button", {
                  onClick: i,
                  children: "Ge\xe7mi\u015fi temizle"
                })
              ]
            }),
            Object(n.jsx)("ul", {
              children: t.map(function (e, t) {
                return Object(n.jsx)(
                  "li",
                  {
                    onClick: function (t) {
                      return c(e.url);
                    },
                    children: e.title
                  },
                  t
                );
              })
            })
          ]
        });
      };
      var d = function () {
        var e = Object(i.useRef)(!1),
          t = Object(i.useState)(""),
          c = Object(o.a)(t, 2),
          s = c[0],
          r = c[1],
          a = Object(i.useState)(
            localStorage.getItem("history")
              ? JSON.parse(localStorage.getItem("history"))
              : []
          ),
          d = Object(o.a)(a, 2),
          b = d[0],
          h = d[1],
          O = Object(i.useState)(!1),
          f = Object(o.a)(O, 2),
          x = f[0],
          m = f[1],
          v = Object(i.useState)(!1),
          p = Object(o.a)(v, 2),
          y = p[0],
          g = p[1];
        Object(i.useEffect)(
          function () {
            !0 === e.current && N();
          },
          [s]
        ),
          Object(i.useEffect)(
            function () {
              if (
                x &&
                !b.find(function (e) {
                  return e.url === s;
                })
              ) {
                var e = { url: s, title: x.info.title };
                h([].concat(Object(l.a)(b), [e]));
              }
            },
            [x]
          ),
          Object(i.useEffect)(
            function () {
              localStorage.setItem("history", JSON.stringify(b));
            },
            [b]
          );
        var N = function () {
          s &&
            (g(!0),
            fetch(
              "https://prototurk.pythonanywhere.com/api/youtube?url=".concat(s)
            )
              .then(function (e) {
                return e.json();
              })
              .then(function (e) {
                g(!1), m(e);
              }));
        };
        return Object(n.jsxs)("div", {
          className: "App",
          children: [
            Object(n.jsxs)("form", {
              action: "",
              method: "post",
              onSubmit: function (e) {
                return e.preventDefault();
              },
              children: [
                Object(n.jsx)("img", { src: "youtube.svg", height: "100px" }),
                Object(n.jsx)("h3", { children: "Robojen Downloader" }),
                Object(n.jsxs)("div", {
                  className: "search",
                  children: [
                    Object(n.jsx)("input", {
                      type: "text",
                      onFocus: function () {
                        return (e.current = !1);
                      },
                      onChange: function (e) {
                        return r(e.target.value);
                      },
                      placeholder: "Youtube URL"
                    }),
                    Object(n.jsx)("button", {
                      type: "submit",
                      onClick: function () {
                        (e.current = !0), N();
                      },
                      children: "Download"
                    })
                  ]
                })
              ]
            }),
            y &&
              Object(n.jsx)("div", {
                className: "loader",
                children: "Y\xfckleniyor.."
              }),
            x && !1 === y && Object(n.jsx)(j, { youtube: x }),
            b.length > 0 &&
              Object(n.jsx)(u, {
                list: b,
                downloadAgain: function (t) {
                  (e.current = !0), r(t);
                },
                clearHistory: function () {
                  h([]);
                }
              })
          ]
        });
      };
      a.a.render(
        Object(n.jsx)(s.a.StrictMode, { children: Object(n.jsx)(d, {}) }),
        document.getElementById("root")
      );
    }
  },
  [[14, 1, 2]]
]);
//# sourceMappingURL=main.053ceb62.chunk.js.map
