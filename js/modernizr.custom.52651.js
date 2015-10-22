window.Modernizr=(function(A,c,g){var I="2.8.3",w={},y=true,L=c.documentElement,a="modernizr",H=c.createElement(a),E=H.style,K=c.createElement("input"),C=":)",b={}.toString,j=" -webkit- -moz- -o- -ms- ".split(" "),h="Webkit Moz O ms",F=h.split(" "),J=h.toLowerCase().split(" "),G={svg:"http://www.w3.org/2000/svg"},l={},p={},f={},e=[],k=e.slice,s,n=function(U,W,O,V){var N,T,Q,R,M=c.createElement("div"),S=c.body,P=S||c.createElement("body");if(parseInt(O,10)){while(O--){Q=c.createElement("div");Q.id=V?V[O]:a+(O+1);M.appendChild(Q)}}N=["&#173;",'<style id="s',a,'">',U,"</style>"].join("");M.id=a;(S?M:P).innerHTML+=N;P.appendChild(M);if(!S){P.style.background="";P.style.overflow="hidden";R=L.style.overflow;L.style.overflow="hidden";L.appendChild(P)}T=W(M,U);if(!S){P.parentNode.removeChild(P);L.style.overflow=R}else{M.parentNode.removeChild(M)}return !!T},o=(function(){var N={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};function M(O,Q){Q=Q||c.createElement(N[O]||"div");O="on"+O;var P=O in Q;if(!P){if(!Q.setAttribute){Q=c.createElement("div")}if(Q.setAttribute&&Q.removeAttribute){Q.setAttribute(O,"");P=r(Q[O],"function");if(!r(Q[O],"undefined")){Q[O]=g}Q.removeAttribute(O)}}Q=null;return P}return M})(),i=({}).hasOwnProperty,x;if(!r(i,"undefined")&&!r(i.call,"undefined")){x=function(M,N){return i.call(M,N)}}else{x=function(M,N){return((N in M)&&r(M.constructor.prototype[N],"undefined"))}}if(!Function.prototype.bind){Function.prototype.bind=function d(O){var P=this;if(typeof P!="function"){throw new TypeError()}var M=k.call(arguments,1),N=function(){if(this instanceof N){var S=function(){};S.prototype=P.prototype;var R=new S();var Q=P.apply(R,M.concat(k.call(arguments)));if(Object(Q)===Q){return Q}return R}else{return P.apply(O,M.concat(k.call(arguments)))}};return N}}function D(M){E.cssText=M}function u(N,M){return D(j.join(N+";")+(M||""))}function r(N,M){return typeof N===M}function t(N,M){return !!~(""+N).indexOf(M)}function z(O,M){for(var N in O){var P=O[N];if(!t(P,"-")&&E[P]!==g){return M=="pfx"?P:true}}return false}function q(N,Q,P){for(var M in N){var O=Q[N[M]];if(O!==g){if(P===false){return N[M]}if(r(O,"function")){return O.bind(P||Q)}return O}}return false}function m(Q,M,P){var N=Q.charAt(0).toUpperCase()+Q.slice(1),O=(Q+" "+F.join(N+" ")+N).split(" ");if(r(M,"string")||r(M,"undefined")){return z(O,M)}else{O=(Q+" "+(J).join(N+" ")+N).split(" ");return q(O,M,P)}}l.flexbox=function(){return m("flexWrap")};l.canvas=function(){var M=c.createElement("canvas");return !!(M.getContext&&M.getContext("2d"))};l.canvastext=function(){return !!(w.canvas&&r(c.createElement("canvas").getContext("2d").fillText,"function"))};l.webgl=function(){return !!A.WebGLRenderingContext};l.touch=function(){var M;if(("ontouchstart" in A)||A.DocumentTouch&&c instanceof DocumentTouch){M=true}else{n(["@media (",j.join("touch-enabled),("),a,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(N){M=N.offsetTop===9})}return M};l.geolocation=function(){return"geolocation" in navigator};l.postmessage=function(){return !!A.postMessage};l.websqldatabase=function(){return !!A.openDatabase};l.indexedDB=function(){return !!m("indexedDB",A)};l.hashchange=function(){return o("hashchange",A)&&(c.documentMode===g||c.documentMode>7)};l.history=function(){return !!(A.history&&history.pushState)};l.draganddrop=function(){var M=c.createElement("div");return("draggable" in M)||("ondragstart" in M&&"ondrop" in M)};l.websockets=function(){return"WebSocket" in A||"MozWebSocket" in A};l.rgba=function(){D("background-color:rgba(150,255,150,.5)");return t(E.backgroundColor,"rgba")};l.hsla=function(){D("background-color:hsla(120,40%,100%,.5)");return t(E.backgroundColor,"rgba")||t(E.backgroundColor,"hsla")};l.multiplebgs=function(){D("background:url(https://),url(https://),red url(https://)");return(/(url\s*\(.*?){3}/).test(E.background)};l.backgroundsize=function(){return m("backgroundSize")};l.borderimage=function(){return m("borderImage")};l.borderradius=function(){return m("borderRadius")};l.boxshadow=function(){return m("boxShadow")};l.textshadow=function(){return c.createElement("div").style.textShadow===""};l.opacity=function(){u("opacity:.55");return(/^0.55$/).test(E.opacity)};l.cssanimations=function(){return m("animationName")};l.csscolumns=function(){return m("columnCount")};l.cssgradients=function(){var O="background-image:",N="gradient(linear,left top,right bottom,from(#9f9),to(white));",M="linear-gradient(left top,#9f9, white);";D((O+"-webkit- ".split(" ").join(N+O)+j.join(M+O)).slice(0,-O.length));return t(E.backgroundImage,"gradient")};l.cssreflections=function(){return m("boxReflect")};l.csstransforms=function(){return !!m("transform")};l.csstransforms3d=function(){var M=!!m("perspective");if(M&&"webkitPerspective" in L.style){n("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(N,O){M=N.offsetLeft===9&&N.offsetHeight===3})}return M};l.csstransitions=function(){return m("transition")};l.fontface=function(){var M;n('@font-face {font-family:"font";src:url("https://")}',function(Q,R){var P=c.getElementById("smodernizr"),N=P.sheet||P.styleSheet,O=N?(N.cssRules&&N.cssRules[0]?N.cssRules[0].cssText:N.cssText||""):"";M=/src/i.test(O)&&O.indexOf(R.split(" ")[0])===0});return M};l.generatedcontent=function(){var M;n(["#",a,"{font:0/0 a}#",a,':after{content:"',C,'";visibility:hidden;font:3px/1 a}'].join(""),function(N){M=N.offsetHeight>=3});return M};l.video=function(){var N=c.createElement("video"),M=false;try{if(M=!!N.canPlayType){M=new Boolean(M);M.ogg=N.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,"");M.h264=N.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,"");M.webm=N.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,"")}}catch(O){}return M};l.audio=function(){var N=c.createElement("audio"),M=false;try{if(M=!!N.canPlayType){M=new Boolean(M);M.ogg=N.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,"");M.mp3=N.canPlayType("audio/mpeg;").replace(/^no$/,"");M.wav=N.canPlayType('audio/wav; codecs="1"').replace(/^no$/,"");M.m4a=(N.canPlayType("audio/x-m4a;")||N.canPlayType("audio/aac;")).replace(/^no$/,"")}}catch(O){}return M};l.localstorage=function(){try{localStorage.setItem(a,a);localStorage.removeItem(a);return true}catch(M){return false}};l.sessionstorage=function(){try{sessionStorage.setItem(a,a);sessionStorage.removeItem(a);return true}catch(M){return false}};l.webworkers=function(){return !!A.Worker};l.applicationcache=function(){return !!A.applicationCache};l.svg=function(){return !!c.createElementNS&&!!c.createElementNS(G.svg,"svg").createSVGRect};l.inlinesvg=function(){var M=c.createElement("div");M.innerHTML="<svg/>";return(M.firstChild&&M.firstChild.namespaceURI)==G.svg};l.smil=function(){return !!c.createElementNS&&/SVGAnimate/.test(b.call(c.createElementNS(G.svg,"animate")))};l.svgclippaths=function(){return !!c.createElementNS&&/SVGClipPath/.test(b.call(c.createElementNS(G.svg,"clipPath")))};function B(){w.input=(function(O){for(var N=0,M=O.length;N<M;N++){f[O[N]]=!!(O[N] in K)}if(f.list){f.list=!!(c.createElement("datalist")&&A.HTMLDataListElement)}return f})("autocomplete autofocus list placeholder max min multiple pattern required step".split(" "));w.inputtypes=(function(P){for(var O=0,N,R,Q,M=P.length;O<M;O++){K.setAttribute("type",R=P[O]);N=K.type!=="text";if(N){K.value=C;K.style.cssText="position:absolute;visibility:hidden;";if(/^range$/.test(R)&&K.style.WebkitAppearance!==g){L.appendChild(K);Q=c.defaultView;N=Q.getComputedStyle&&Q.getComputedStyle(K,null).WebkitAppearance!=="textfield"&&(K.offsetHeight!==0);L.removeChild(K)}else{if(/^(search|tel)$/.test(R)){}else{if(/^(url|email)$/.test(R)){N=K.checkValidity&&K.checkValidity()===false}else{N=K.value!=C}}}}p[P[O]]=!!N}return p})("search tel url email datetime date month week time datetime-local number range color".split(" "))}for(var v in l){if(x(l,v)){s=v.toLowerCase();w[s]=l[v]();e.push((w[s]?"":"no-")+s)}}w.input||B();w.addTest=function(N,O){if(typeof N=="object"){for(var M in N){if(x(N,M)){w.addTest(M,N[M])}}}else{N=N.toLowerCase();if(w[N]!==g){return w}O=typeof O=="function"?O():O;if(typeof y!=="undefined"&&y){L.className+=" "+(O?"":"no-")+N}w[N]=O}return w};D("");H=K=null;(function(W,Y){var S="3.7.0";var P=W.html5||{};var T=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i;var O=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i;var ac;var U="_html5shiv";var M=0;var aa={};var Q;(function(){try{var af=Y.createElement("a");af.innerHTML="<xyz></xyz>";ac=("hidden" in af);Q=af.childNodes.length==1||(function(){(Y.createElement)("a");var ah=Y.createDocumentFragment();return(typeof ah.cloneNode=="undefined"||typeof ah.createDocumentFragment=="undefined"||typeof ah.createElement=="undefined")}())}catch(ag){ac=true;Q=true}}());function R(af,ah){var ai=af.createElement("p"),ag=af.getElementsByTagName("head")[0]||af.documentElement;ai.innerHTML="x<style>"+ah+"</style>";return ag.insertBefore(ai.lastChild,ag.firstChild)}function X(){var af=V.elements;return typeof af=="string"?af.split(" "):af}function ab(af){var ag=aa[af[U]];if(!ag){ag={};M++;af[U]=M;aa[M]=ag}return ag}function Z(ai,af,ah){if(!af){af=Y}if(Q){return af.createElement(ai)}if(!ah){ah=ab(af)}var ag;if(ah.cache[ai]){ag=ah.cache[ai].cloneNode()}else{if(O.test(ai)){ag=(ah.cache[ai]=ah.createElem(ai)).cloneNode()}else{ag=ah.createElem(ai)}}return ag.canHaveChildren&&!T.test(ai)&&!ag.tagUrn?ah.frag.appendChild(ag):ag}function ad(ah,aj){if(!ah){ah=Y}if(Q){return ah.createDocumentFragment()}aj=aj||ab(ah);var ak=aj.frag.cloneNode(),ai=0,ag=X(),af=ag.length;for(;ai<af;ai++){ak.createElement(ag[ai])}return ak}function ae(af,ag){if(!ag.cache){ag.cache={};ag.createElem=af.createElement;ag.createFrag=af.createDocumentFragment;ag.frag=ag.createFrag()}af.createElement=function(ah){if(!V.shivMethods){return ag.createElem(ah)}return Z(ah,af,ag)};af.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+X().join().replace(/[\w\-]+/g,function(ah){ag.createElem(ah);ag.frag.createElement(ah);return'c("'+ah+'")'})+");return n}")(V,ag.frag)}function N(af){if(!af){af=Y}var ag=ab(af);if(V.shivCSS&&!ac&&!ag.hasCSS){ag.hasCSS=!!R(af,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")}if(!Q){ae(af,ag)}return af}var V={elements:P.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:S,shivCSS:(P.shivCSS!==false),supportsUnknownElements:Q,shivMethods:(P.shivMethods!==false),type:"default",shivDocument:N,createElement:Z,createDocumentFragment:ad};W.html5=V;N(Y)}(this,c));w._version=I;w._prefixes=j;w._domPrefixes=J;w._cssomPrefixes=F;w.hasEvent=o;w.testProp=function(M){return z([M])};w.testAllProps=m;w.testStyles=n;w.prefixed=function(O,N,M){if(!N){return m(O,"pfx")}else{return m(O,N,M)}};L.className=L.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(y?" js "+e.join(" "):"");return w})(this,this.document);(function(ad,ac,ab){function aa(b){return"[object Function]"==P.call(b)}function Z(b){return"string"==typeof b}function Y(){}function X(b){return !b||"loaded"==b||"complete"==b||"uninitialized"==b}function W(){var b=O.shift();M=1,b?b.t?R(function(){("c"==b.t?L.injectCss:L.injectJs)(b.s,0,b.a,b.x,b.e,1)},0):(b(),W()):M=0}function V(w,v,t,s,q,p,n){function m(a){if(!g&&X(h.readyState)&&(x.r=g=1,!M&&W(),h.onload=h.onreadystatechange=null,a)){"img"!=w&&R(function(){I.removeChild(h)},50);for(var c in D[v]){D[v].hasOwnProperty(c)&&D[v][c].onload()}}}var n=n||L.errorTimeout,h=ac.createElement(w),g=0,b=0,x={t:t,s:v,e:q,a:p,x:n};1===D[v]&&(b=1,D[v]=[]),"object"==w?h.data=v:(h.src=v,h.type=w),h.width=h.height="0",h.onerror=h.onload=h.onreadystatechange=function(){m.call(this,b)},O.splice(s,0,x),"img"!=w&&(b||2===D[v]?(I.insertBefore(h,J?null:Q),R(m,n)):D[v].push(h))}function U(g,e,j,i,h){return M=0,e=e||"j",Z(g)?V("c"==e?G:H,g,e,this.i++,j,i,h):(O.splice(this.i++,0,g),1==O.length&&W()),this}function T(){var b=L;return b.loader={load:U,i:0},b}var S=ac.documentElement,R=ad.setTimeout,Q=ac.getElementsByTagName("script")[0],P={}.toString,O=[],M=0,K="MozAppearance" in S.style,J=K&&!!ac.createRange().compareNode,I=J?S:Q.parentNode,S=ad.opera&&"[object Opera]"==P.call(ad.opera),S=!!ac.attachEvent&&!S,H=K?"object":S?"script":"img",G=S?"script":H,F=Array.isArray||function(b){return"[object Array]"==P.call(b)},E=[],D={},C={timeout:function(d,c){return c.length&&(d.timeout=c[0]),d}},N,L;L=function(e){function c(i){var i=i.split("!"),h=E.length,q=i.pop(),p=i.length,q={url:q,origUrl:q,prefixes:i},o,l,j;for(l=0;l<p;l++){j=i[l].split("="),(o=C[j.shift()])&&(q=o(q,j))}for(l=0;l<h;l++){q=E[l](q)}return q}function n(b,s,r,q,p){var o=c(b),l=o.autoCallback;o.url.split(".").pop().split("?").shift(),o.bypass||(s&&(s=aa(s)?s:s[b]||s[q]||s[b.split("/").pop().split("?")[0]]),o.instead?o.instead(b,s,r,q,p):(D[o.url]?o.noexec=!0:D[o.url]=1,r.load(o.url,o.forceCSS||!o.forceJS&&"css"==o.url.split(".").pop().split("?").shift()?"c":ab,o.noexec,o.attrs,o.timeout),(aa(s)||aa(l))&&r.load(function(){T(),s&&s(o.origUrl,p,q),l&&l(o.origUrl,p,q),D[o.url]=2})))}function m(w,v){function u(b,h){if(b){if(Z(b)){h||(r=function(){var i=[].slice.call(arguments);q.apply(this,i),p()}),n(b,r,v,0,t)}else{if(Object(b)===b){for(g in o=function(){var a=0,i;for(i in b){b.hasOwnProperty(i)&&a++}return a}(),b){b.hasOwnProperty(g)&&(!h&&!--o&&(aa(r)?r=function(){var i=[].slice.call(arguments);q.apply(this,i),p()}:r[g]=function(i){return function(){var a=[].slice.call(arguments);i&&i.apply(this,a),p()}}(q[g])),n(b[g],r,v,g,t))}}}}else{!h&&p()}}var t=!!w.test,s=w.load||w.both,r=w.callback||Y,q=r,p=w.complete||Y,o,g;u(t?w.yep:w.nope,!!s),s&&u(s)}var k,f,d=this.yepnope.loader;if(Z(e)){n(e,0,d,0)}else{if(F(e)){for(k=0;k<e.length;k++){f=e[k],Z(f)?n(f,0,d,0):F(f)?L(f):Object(f)===f&&m(f,d)}}else{Object(e)===e&&m(e,d)}}},L.addPrefix=function(d,c){C[d]=c},L.addFilter=function(b){E.push(b)},L.errorTimeout=10000,null==ac.readyState&&ac.addEventListener&&(ac.readyState="loading",ac.addEventListener("DOMContentLoaded",N=function(){ac.removeEventListener("DOMContentLoaded",N,0),ac.readyState="complete"},0)),ad.yepnope=T(),ad.yepnope.executeStack=W,ad.yepnope.injectJs=function(r,q,p,n,m,h){var g=ac.createElement("script"),f,b,n=n||L.errorTimeout;g.src=r;for(b in p){g.setAttribute(b,p[b])}q=h?W:q||Y,g.onreadystatechange=g.onload=function(){!f&&X(g.readyState)&&(f=1,q(),g.onload=g.onreadystatechange=null)},R(function(){f||(f=1,q(1))},n),m?g.onload():Q.parentNode.insertBefore(g,Q)},ad.yepnope.injectCss=function(b,n,m,l,k,h){var l=ac.createElement("link"),f,n=h?W:n||Y;l.href=b,l.rel="stylesheet",l.type="text/css";for(f in m){l.setAttribute(f,m[f])}k||(Q.parentNode.insertBefore(l,Q),R(n,0))}})(this,document);Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
