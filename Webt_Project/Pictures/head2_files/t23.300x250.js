/* TUNNEL23.COM - 2020-04 - Gregor Gullberg*/
function enablerInitHandler(){new T23Dynamic("#T23Dynamic")}document.addEventListener("DOMContentLoaded",function(){"undefined"==typeof Enabler?enablerInitHandler():Enabler.addEventListener(studio.events.StudioEvent.INIT,enablerInitHandler)},!1),function(){function e(){this.creative.style.display="block",this.bannerLoop&&(setTimeout(function(){this.creative.style.display="none",s(this.bg,"out"),s(this.headline_produkt,"in"),s(this.headline_gigakraft,"in"),s(this.subline,"in"),s(this.cta,"in"),s(this.cta,"animate"),s(this.subline,"out"),s(this.headline_intro,"in"),s(this.headline_intro,"out"),e.call(this)}.bind(this),15e3),this.bannerLoop=!1),this.hasVideoBg?(this.bg.querySelector("video").play(),setTimeout(function(){r(this.bg,"out")}.bind(this),3e3),setTimeout(function(){r(this.headline_intro,"in")}.bind(this),3200),setTimeout(function(){r(this.headline_intro,"out"),r(this.headline_produkt,"in"),r(this.headline_gigakraft,"in"),r(this.subline,"in"),r(this.cta,"in"),setTimeout(function(){r(this.headline_intro,"out")}.bind(this),3e3),setTimeout(function(){r(this.cta,"animate")}.bind(this),7e3)}.bind(this),5200)):setTimeout(function(){r(this.headline_intro,"out"),r(this.bg,"out"),r(this.headline_produkt,"in"),r(this.headline_gigakraft,"in"),r(this.subline,"in"),r(this.cta,"in"),setTimeout(function(){r(this.cta,"animate")}.bind(this),7e3)}.bind(this),2200)}function t(e){return e.preventDefault(),Enabler.exitOverride("clicktag",this.href),!1}function n(){this.preloadImages.length==this.imagesLoaded_done&&this.preloadVideos.length==this.videosLoaded_done&&e.call(this)}function o(){var e=this.content.Subline;e=e.split("\n");for(var t=0;t<e.length;t++){var i=document.createElement("span"),s=document.createElement("span");i.setAttribute("class","sub-line"),s.setAttribute("class","sub-bg"),s.innerText=e[t],i.appendChild(s),this.subline.appendChild(i)}}function i(e){void 0!==e&&e.preventDefault(),function(e,t){e.classList.contains(t)?s(e,t):r(e,t)}(this.settings.rechtstext,"opened")}function s(e,t){t=" "+(t=t.trim()),e.className=e.className.replace(t,"")}function r(e,t){t=" "+(t=t.trim()),e.className.includes(t)||(e.className=e.className+t)}this.T23Dynamic=function(){this.settings={},this.settings.rechtstext=".rechtstext",this.settings.feed="Magenta_dynamic_Creatives__AlwaysOn_2020_NAE",this.settings.feed_numbers=1,this.content="undefined"!=typeof dynamicContent?dynamicContent[this.settings.feed]:devDynamicContent[this.settings.feed],this.preloadImages=[],this.preloadVideos=[],this.imagesLoaded=0,this.videosLoaded=0,this.imagesLoaded_done=0,this.videosLoaded_done=0,this.bannerLoop=!0,this.creative=document.querySelector(arguments[0]),function(){this.clicktag=this.creative.querySelector(".clicktag"),this.bg=this.creative.querySelector(".bg"),this.bg_still=this.creative.querySelector(".bg-still"),this.cta=this.creative.querySelector(".cta"),this.rechtstext_text=this.creative.querySelector(".rtxt"),this.headline_intro=this.creative.querySelector(".headline-intro"),this.headline_produkt=this.creative.querySelector(".headline-produkt"),this.headline_gigakraft=this.creative.querySelector(".headline-gigakraft"),this.subline=this.creative.querySelector(".subline"),this.stoerer_angebot=this.creative.querySelector(".stoerer-angebot"),this.stoerer_info=this.creative.querySelector(".stoerer-info"),0!=this.settings.rechtstext&&(this.settings.rechtstext=this.creative.querySelector(this.settings.rechtstext),this.settings.rechtstext.querySelector(".btn-info-open").addEventListener("click",i.bind(this),!1),this.settings.rechtstext.querySelector(".btn-info-close").addEventListener("click",i.bind(this),!1),this.settings.rechtstext.querySelector(".rtxt").addEventListener("click",i.bind(this),!1));"undefined"!=typeof Enabler&&(this.clicktag=this.creative.querySelector("#clicktag"),this.clicktag.addEventListener("click",t));"undefined"!=typeof dynamicContent||"undefined"!=typeof devDynamicContent?function(){for(var e=0;e<this.settings.feed_numbers;e++){this.content=this.content[e],this.clicktag.setAttribute("href",this.content.Clicktag.Url),this.cta.innerText=this.content.CTA;var t=this.content.Hintergrund.Progressive_Url;t.endsWith("mp4")?(this.bg.innerHTML='<video class="bg-video" muted playsinline src=""></video>',this.video=this.bg.querySelector("video"),this.preloadVideos.push({domElement:this.bg.querySelector(".bg-video"),src:t,complete:!1}),this.preloadImages.push({domElement:this.bg_still,src:this.content.Hintergrund__Still.Url,complete:!1}),this.hasVideoBg=!0):(this.bg.innerHTML='<img class="bg-image" src="">',this.preloadImages.push({domElement:this.bg.querySelector(".bg-image"),src:t,complete:!1}),this.preloadImages.push({domElement:this.bg_still,src:this.content.Hintergrund__Still.Url,complete:!1}),this.hasVideoBg=!1);var i=this.content.Rechtstext;i=i.replace(/\n/g,"<br>"),this.rechtstext_text.innerHTML=i;var s=this.content.Headline_Intro;s=s.replace(/\n/g,"<br>"),this.headline_intro.innerHTML=s,this.preloadImages.push({domElement:this.headline_produkt,src:this.content.Headline_Produkt.Url,complete:!1}),this.preloadImages.push({domElement:this.headline_gigakraft,src:this.content.Headline_Gigakraft.Url,complete:!1}),o.call(this)}}.call(this):console.error("error: no content source");0<this.preloadImages.length||0<this.preloadVideos.length?function(){0<this.preloadImages.length&&function e(){var t=this;var i=this.preloadImages[this.imagesLoaded].src;var s=new Image;s.onload=function(){t.preloadImages[t.imagesLoaded].domElement.src=i,t.imagesLoaded++,t.imagesLoaded_done++,t.preloadImages.length==t.imagesLoaded?n.call(t):e.call(t)};s.src=i}.call(this);0<this.preloadVideos.length&&function(){for(this.videosLoaded;this.videosLoaded<this.preloadVideos.length;this.videosLoaded++){var e=this.preloadVideos[this.videosLoaded].domElement;e.addEventListener("canplay",function(){this.videosLoaded_done++,n.call(this)}.bind(this)),e.src=this.preloadVideos[this.videosLoaded].src}}.call(this)}.call(this):e.call(this)}.call(this)},String.prototype.endsWith||(String.prototype.endsWith=function(e,t){return(void 0===t||t>this.length)&&(t=this.length),this.substring(t-e.length,t)===e}),String.prototype.includes||(String.prototype.includes=function(e,t){"use strict";if(e instanceof RegExp)throw TypeError("first argument must not be a RegExp");return void 0===t&&(t=0),-1!==this.indexOf(e,t)})}();