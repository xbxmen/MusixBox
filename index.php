if(typeof MUSIC=="undefined"||!MUSIC)var MUSIC={version:"1.0",_QMFL:true,_debugMode:false};MUSIC.emptyFn=function(){};MUSIC.returnFn=function(v){return v};
(function(){var ua=MUSIC.userAgent={},agent=navigator.userAgent,nv=navigator.appVersion,r,m,optmz;ua.adjustBehaviors=MUSIC.emptyFn;if(window.ActiveXObject||window.msIsStaticHTML){ua.ie=6;(window.XMLHttpRequest||agent.indexOf("MSIE 7.0")>-1)&&(ua.ie=7);(window.XDomainRequest||agent.indexOf("Trident/4.0")>-1)&&(ua.ie=8);agent.indexOf("Trident/5.0")>-1&&(ua.ie=9);agent.indexOf("Trident/6.0")>-1&&(ua.ie=10);(agent.indexOf("Trident/7.0")>-1||"undefined"==typeof attachEvent)&&(ua.ie=11);ua.isBeta=navigator.appMinorVersion&&
navigator.appMinorVersion.toLowerCase().indexOf("beta")>-1;if(ua.ie<7)try{document.execCommand("BackgroundImageCache",false,true)}catch(ign){}MUSIC._doc=document;optmz=function(st){return function(fns,tm){var aargs;if(typeof fns=="string")return st(fns,tm);else{aargs=Array.prototype.slice.call(arguments,2);return st(function(){fns.apply(null,aargs)},tm)}}};MUSIC._setTimeout=optmz(window.setTimeout);MUSIC._setInterval=optmz(window.setInterval)}else if(document.getBoxObjectFor||typeof window.mozInnerScreenX!=
"undefined"){r=/(?:Firefox|GranParadiso|Iceweasel|Minefield).(\d+\.\d+)/i;ua.firefox=parseFloat((r.exec(agent)||r.exec("Firefox/3.3"))[1],10)}else if(!navigator.taintEnabled){m=/AppleWebKit.(\d+\.\d+)/i.exec(agent);ua.webkit=m?parseFloat(m[1],10):document.evaluate?document.querySelector?525:420:419;if((m=/Chrome.(\d+\.\d+)/i.exec(agent))||window.chrome)ua.chrome=m?parseFloat(m[1],10):"2.0";else if((m=/Version.(\d+\.\d+)/i.exec(agent))||window.safariHandler)ua.safari=m?parseFloat(m[1],10):"3.3";ua.air=
agent.indexOf("AdobeAIR")>-1?1:0;ua.isiPad=agent.indexOf("iPad")>-1;ua.isiPhone=agent.indexOf("iPhone")>-1}else if(window.opera)ua.opera=parseFloat(window.opera.version(),10);else ua.ie=6;if(!(ua.macs=agent.indexOf("Mac OS X")>-1)){ua.windows=(m=/Windows.+?(\d+\.\d+)/i.exec(agent),m&&parseFloat(m[1],10));ua.linux=agent.indexOf("Linux")>-1}})();if(MUSIC.userAgent.ie&&(MUSIC._setTimeout&&MUSIC._setInterval))eval((MUSIC.userAgent.ie<9?"var document = MUSIC._doc;":"")+"var setTimeout = MUSIC._setTimeout, setInterval = MUSIC._setInterval");
var ua=MUSIC.userAgent;
MUSIC.object={map:function(object,scope){return MUSIC.object.extend(scope||window,object)},extend:function(){var args=arguments,len=arguments.length,deep=false,i=1,target=args[0],opts,src,clone,copy;if(typeof target==="boolean"){deep=target;target=arguments[1]||{};i=2}if(typeof target!=="object"&&typeof target!=="function")target={};if(len===i){target=MUSIC;--i}for(;i<len;i++)if((opts=arguments[i])!=null)for(var name in opts){src=target[name];copy=opts[name];if(target===copy)continue;if(deep&&(copy&&
(typeof copy==="object"&&!copy.nodeType))){if(src)clone=src;else if(MUSIC.lang.isArray(copy))clone=[];else if(MUSIC.object.getType(copy)==="object")clone={};else clone=copy;target[name]=MUSIC.object.extend(deep,clone,copy)}else if(copy!==undefined)target[name]=copy}return target},each:function(obj,callback){var value,i=0,length=obj.length,isObj=length===undefined||typeof obj=="function";if(isObj)for(var name in obj){if(callback.call(obj[name],obj[name],name,obj)===false)break}else for(value=obj[0];i<
length&&false!==callback.call(value,value,i,obj);value=obj[++i]);return obj},getType:function(obj){return obj===null?"null":obj===undefined?"undefined":Object.prototype.toString.call(obj).slice(8,-1).toLowerCase()},routeRE:/([\d\w_]+)/g,route:function(obj,path){obj=obj||{};path=String(path);var r=MUSIC.object.routeRE,m;r.lastIndex=0;while((m=r.exec(path))!==null){obj=obj[m[0]];if(obj===undefined||obj===null)break}return obj},bind:function(obj,fn){var slice=Array.prototype.slice,args=slice.call(arguments,
2);return function(){obj=obj||this;fn=typeof fn=="string"?obj[fn]:fn;fn=typeof fn=="function"?fn:MUSIC.emptyFn;return fn.apply(obj,args.concat(slice.call(arguments,0)))}},ease:function(src,tar,rule){if(tar){if(typeof rule!="function")rule=MUSIC.object._eachFn;MUSIC.object.each(src,function(v,k){if(typeof v=="function")tar[rule(k)]=v})}},_easeFn:function(name){return"$"+name}};MUSIC.namespace=MUSIC.object;MUSIC.runTime={isDebugMode:false,error:MUSIC.emptyFn,warn:MUSIC.emptyFn};
MUSIC.console=function(expr){if(window.console)if(console.assert)console.assert.apply(null,arguments);else expr||console.log.apply(null,slice.call(arguments,1))};MUSIC.console.print=function(msg){window.console&&console.log(msg)};MUSIC.object.map(MUSIC.object,MUSIC);MUSIC.widget={};MUSIC.channel={};MUSIC.module={};
MUSIC.config={debugLevel:0,defaultDataCharacterSet:"GB2312",DCCookieDomain:"y.qq.com",domainPrefix:"qq.com",toolPath:"http://imgcache.qq.com/music/miniportal_v4/tool/",tipsPath:"http://y.qq.com/y/static/tips/",gbEncoderPath:"http://imgcache.qq.com/qzone/v5/toolpages/",FSHelperPage:"http://imgcache.qq.com/music/miniportal_v4/tool/html/fp_gbk.html",StorageHelperPage:"http://imgcache.qq.com/music/miniportal_v4/tool/html/storage_helper.html",defaultShareObject:"http://qzs.qq.com/qzone/v5/toolpages/getset.swf",
staticServer:"http://imgcache.qq.com/ac/qzone/qzfl/lc/"};
MUSIC.string={RegExps:{trim:/^\s+|\s+$/g,ltrim:/^\s+/,rtrim:/\s+$/,nl2br:/\n/g,s2nb:/[\x20]{2}/g,URIencode:/[\x09\x0A\x0D\x20\x21-\x29\x2B\x2C\x2F\x3A-\x3F\x5B-\x5E\x60\x7B-\x7E]/g,escHTML:{re_amp:/&/g,re_lt:/</g,re_gt:/>/g,re_apos:/\x27/g,re_quot:/\x22/g},escString:{bsls:/\\/g,nl:/\n/g,rt:/\r/g,tab:/\t/g},restXHTML:{re_amp:/&amp;/g,re_lt:/&lt;/g,re_gt:/&gt;/g,re_apos:/&(?:apos|#0?39);/g,re_quot:/&quot;/g},write:/\{(\d{1,2})(?:\:([xodQqb]))?\}/g,isURL:/^(?:ht|f)tp(?:s)?\:\/\/(?:[\w\-\.]+)\.\w+/i,
cut:/[\x00-\xFF]/,getRealLen:{r0:/[^\x00-\xFF]/g,r1:/[\x00-\xFF]/g},format:/\{([\d\w\.]+)\}/g},commonReplace:function(s,p,r){return s.replace(p,r)},listReplace:function(s,l){if(MUSIC.lang.isHashMap(l)){for(var i in l)s=MUSIC.string.commonReplace(s,l[i],i);return s}else return s+""},trim:function(str){return MUSIC.string.commonReplace(str+"",MUSIC.string.RegExps.trim,"")},ltrim:function(str){return MUSIC.string.commonReplace(str+"",MUSIC.string.RegExps.ltrim,"")},rtrim:function(str){return MUSIC.string.commonReplace(str+
"",MUSIC.string.RegExps.rtrim,"")},nl2br:function(str){return MUSIC.string.commonReplace(str+"",MUSIC.string.RegExps.nl2br,"<br />")},s2nb:function(str){return MUSIC.string.commonReplace(str+"",MUSIC.string.RegExps.s2nb,"&nbsp;&nbsp;")},URIencode:function(str){var cc,ccc;return(str+"").replace(MUSIC.string.RegExps.URIencode,function(a){if(a==" ")return"+";else if(a=="\r")return"";cc=a.charCodeAt(0);ccc=cc.toString(16);return"%"+(cc<16?"0"+ccc:ccc)})},replaceUrl:function(str){return str.replace(/%/g,
"%25").replace(/=/g,"%3D").replace(/&/g,"%26").replace(/\?/g,"%3F").replace(/#/g,"%23")},decodeURLSymbol:function(str){return str.replace(/%3d/g,"=").replace(/%3f/g,"?").replace(/%26/g,"&").replace(/%3c/g,"<").replace(/%3e/g,">").replace(/%22/g,'"').replace(/%27/g,"'").replace(/\+/g," ").replace(/%2f/ig,"/").replace(/%3a/g,":")},GbkUrlDecode:function(str,callback){var jsLoader=new MUSIC.JsLoader;jsLoader.onload=function(){callback(UrlDecode(str))};if(!!navigator&&("systemLanguage"in navigator&&navigator.systemLanguage!=
"zh-cn"))jsLoader.load(MUSIC.config.toolPath+"js/gbk_decode.js");else{var opts={type:"text/vbscript"};jsLoader.load("http://imgcache.qq.com/music/miniportal_v3/js/vburldecode.js",null,opts)}},escHTML:function(str){var t=MUSIC.string.RegExps.escHTML;return MUSIC.string.listReplace(str+"",{"&amp;":t.re_amp,"&lt;":t.re_lt,"&gt;":t.re_gt,"&#039;":t.re_apos,"&quot;":t.re_quot})},escString:function(str){var t=MUSIC.string.RegExps.escString,h=MUSIC.string.RegExps.escHTML;return MUSIC.string.listReplace(str+
"",{"\\\\":t.bsls,"\\n":t.nl,"":t.rt,"\\t":t.tab,"\\'":h.re_apos,'\\"':h.re_quot})},restHTML:function(str){if(!MUSIC.string.restHTML.__utilDiv)MUSIC.string.restHTML.__utilDiv=document.createElement("div");var t=MUSIC.string.restHTML.__utilDiv;t.innerHTML=str+"";if(typeof t.innerText!="undefined")return t.innerText;else if(typeof t.textContent!="undefined")return t.textContent;else if(typeof t.text!="undefined")return t.text;else return""},restXHTML:function(str){var t=MUSIC.string.RegExps.restXHTML;
return MUSIC.string.listReplace(str+"",{"<":t.re_lt,">":t.re_gt,"'":t.re_apos,'"':t.re_quot,"&":t.re_amp})},write:function(strFormat,someArgs){if(arguments.length<1||!MUSIC.lang.isString(strFormat))return"";var rArr=MUSIC.lang.arg2arr(arguments),result=rArr.shift(),tmp;return result.replace(MUSIC.string.RegExps.write,function(a,b,c){b=parseInt(b,10);if(b<0||typeof rArr[b]=="undefined")return"(n/a)";else if(!c)return rArr[b];else switch(c){case "x":return"0x"+rArr[b].toString(16);case "o":return"o"+
rArr[b].toString(8);case "d":return rArr[b].toString(10);case "Q":return'"'+rArr[b].toString(16)+'"';case "q":return"`"+rArr[b].toString(16)+"'";case "b":return"<"+!!rArr[b]+">"}})},isURL:function(s){return MUSIC.string.RegExps.isURL.test(s)},escapeURI:function(s){if(window.encodeURIComponent)return encodeURIComponent(s);if(window.escape)return escape(s);return""},fillLength:function(source,length,ch,isRight){if((source=String(source)).length<length){var ar=new Array(length-source.length);ar[isRight?
"unshift":"push"](source);source=ar.join(ch==undefined?"0":ch)}return source},getRealLen:function(s,isUTF8){if(typeof s!="string")return 0;if(!isUTF8)return s.replace(MUSIC.string.RegExps.getRealLen.r0,"**").length;else{var cc=s.replace(MUSIC.string.RegExps.getRealLen.r1,"");return s.length-cc.length+encodeURI(cc).length/3}},format:function(str){var args=Array.prototype.slice.call(arguments),v;str=args.shift()+"";if(args.length==1&&typeof args[0]=="object")args=args[0];MUSIC.string.RegExps.format.lastIndex=
0;return str.replace(MUSIC.string.RegExps.format,function(m,n){v=MUSIC.object.route(args,n);return v===undefined?m:v})},checkKoreaChar:function(str){for(i=0;i<str.length;i++)if(str.charCodeAt(i)>12592&&str.charCodeAt(i)<12687||str.charCodeAt(i)>=44032&&str.charCodeAt(i)<=55203)return true;return false},escapeKoreaChar:function(str){var dest=[];for(var i=0;i<str.length;i++)if(str.charCodeAt(i)>12592&&str.charCodeAt(i)<12687||str.charCodeAt(i)>=44032&&str.charCodeAt(i)<=55203)dest.push("&#"+str.charCodeAt(i)+
";");else dest.push(str.charAt(i));return dest.join("")},removeUbb:function(s){s=s.replace(/\[em\]e(\d{1,3})\[\/em\]/g,"");s=s.replace(/\[(img)\].*\[\/img\]/ig,"");s=s.replace(/\[(flash)\].*\[\/flash\]/ig,"");s=s.replace(/\[(video)\].*\[\/video\]/ig,"");s=s.replace(/\[(audio)\].*\[\/audio\]/ig,"");s=s.replace(/&nbsp;/g,"");s=s.replace(/\[\/?(b|url|img|flash|video|audio|ftc|ffg|fts|ft|email|center|u|i|marque|m|r|quote)[^\]]*\]/ig,"");return s}};
MUSIC.object.extend(String.prototype,{trim:function(){return this.replace(/(^\s*)|(\s*$)/g,"")},escapeHTML:function(){var div=document.createElement("div");var text=document.createTextNode(this);div.appendChild(text);return div.innerHTML},unescapeHTML:function(){var div=document.createElement("div");div.innerHTML=this;return div.innerText||(div.textNode||"")},cut:function(bitLen,tails){str=this;bitLen-=0;tails=tails||"...";if(isNaN(bitLen))return str;var len=str.length,i=Math.min(Math.floor(bitLen/
2),len),cnt=MUSIC.string.getRealLen(str.slice(0,i));for(;i<len&&cnt<bitLen;i++)cnt+=1+(str.charCodeAt(i)>255);return str.slice(0,cnt>bitLen?i-1:i)+(i<len?tails:"")},jstpl_format:function(ns){function fn(w,g){if(g in ns)return ns[g];return""}return this.replace(/%\(([A-Za-z0-9_|.]+)\)/g,fn)},entityReplace:function(){return this.replace(/&#38;?/g,"&amp;").replace(/&amp;/g,"&").replace(/&#(\d+);?/g,function(a,b){return String.fromCharCode(b)}).replace(/\u00b4/g,"'").replace(/&lt;/g,"<").replace(/&gt;/g,
">").replace(/&quot;/g,'"').replace(/&acute;/gi,"'").replace(/&nbsp;/g," ").replace(/&#13;/g,"\n").replace(/(&#10;)|(&#x\w*;)/g,"").replace(/&amp;/g,"&")},myEncode:function(){return this.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\\/,"\uff3c").replace(/\'/g,"\u2019").replace(/\"/g,"\u201c").replace(/&#39;/g,"\u2019").replace(/&quot;/g,"\u201c").replace(/&acute;/g,"\u2019").replace(/\%/g,"\uff05").replace(/\(/g,"\uff08").replace(/\)/g,"\uff09").replace(/\n/g,"")}});
function UrlDecode(str){var ret="";try{for(var i=0;i<str.length;i++){var chr=str.charAt(i);if(chr=="+")ret+=" ";else if(chr=="%"){var asc=str.substring(i+1,i+3);if(parseInt("0x"+asc)>127){var chr2=str.charAt(i+3);if(chr2=="%"){ret+=asc2str(parseInt("0x"+asc+str.substring(i+4,i+6)));i+=5}else{ret+=asc2str(parseInt("0x"+asc+str2asc(str.substring(i+3,i+4))));i+=3}}else{ret+=asc2str(parseInt("0x"+asc));i+=2}}else ret+=chr}}catch(e){return str}return ret}
(function doFireForxInnerText(){if(!ua.ie){HTMLElement.prototype.__defineGetter__("innerText",function(){var anyString="";var childS=this.childNodes;for(var i=0;i<childS.length;i++)if(childS[i].nodeType==1)anyString+=childS[i].tagName=="BR"?"\n":childS[i].innerText;else if(childS[i].nodeType==3)anyString+=childS[i].nodeValue;return anyString});HTMLElement.prototype.__defineSetter__("innerText",function(sText){this.textContent=sText})}})();
MUSIC.event={KEYS:{BACKSPACE:8,TAB:9,RETURN:13,ESC:27,SPACE:32,LEFT:37,UP:38,RIGHT:39,DOWN:40,DELETE:46},_eventListDictionary:{},_fnSeqUID:0,_objSeqUID:0,addEvent:function(obj,eventType,fn,argArray){var cfn,res=false,l;if(!obj)return res;if(!obj.eventsListUID)obj.eventsListUID="e"+ ++MUSIC.event._objSeqUID;if(!(l=MUSIC.event._eventListDictionary[obj.eventsListUID]))l=MUSIC.event._eventListDictionary[obj.eventsListUID]={};if(!fn.__elUID)fn.__elUID="e"+ ++MUSIC.event._fnSeqUID+obj.eventsListUID;if(!l[eventType])l[eventType]=
{};if(typeof l[eventType][fn.__elUID]=="function")return false;cfn=function(evt){return fn.apply(obj,!argArray?[MUSIC.event.getEvent(evt)]:[MUSIC.event.getEvent(evt)].concat(argArray))};function withinElement(handler){return function(e){var _p=e.relatedTarget;while(_p&&_p!=this)try{_p=_p.parentNode}catch(e){_p=this}if(_p!=this)handler.call(this,e)}}if(obj.addEventListener){if(eventType==="mouseenter")obj.addEventListener("mouseover",withinElement(cfn),false);else if(eventType==="mouseleave")obj.addEventListener("mouseout",
withinElement(cfn),false);else obj.addEventListener(eventType,cfn,false);res=true}else if(obj.attachEvent)res=obj.attachEvent("on"+eventType,cfn);else res=false;if(res)l[eventType][fn.__elUID]=cfn;return res},removeEvent:function(obj,eventType,fn){var cfn=fn,res=false,l=MUSIC.event._eventListDictionary,r;if(!obj)return res;if(!fn)return MUSIC.event.purgeEvent(obj,eventType);if(obj.eventsListUID&&l[obj.eventsListUID]){l=l[obj.eventsListUID][eventType];if(l&&l[fn.__elUID]){cfn=l[fn.__elUID];r=l}}if(obj.removeEventListener){obj.removeEventListener(eventType,
cfn,false);res=true}else if(obj.detachEvent){obj.detachEvent("on"+eventType,cfn);res=true}else return false;if(res&&(r&&r[fn.__elUID]))delete r[fn.__elUID];return res},purgeEvent:function(obj,type){var l;if(obj.eventsListUID&&((l=MUSIC.event._eventListDictionary[obj.eventsListUID])&&l[type]))for(var k in l[type])if(obj.removeEventListener)obj.removeEventListener(type,l[type][k],false);else if(obj.detachEvent)obj.detachEvent("on"+type,l[type][k]);if(obj["on"+type])obj["on"+type]=null;if(l){l[type]=
null;delete l[type]}return true},getEvent:function(evt){var evt=window.event||evt,c,cnt;if(!evt&&window.Event){c=arguments.callee;cnt=0;while(c){if((evt=c.arguments[0])&&typeof evt.srcElement!="undefined")break;else if(cnt>9)break;c=c.caller;++cnt}}return evt},getButton:function(evt){var e=MUSIC.event.getEvent(evt);if(!e)return-1;if(MUSIC.userAgent.ie)return e.button-Math.ceil(e.button/2);else return e.button},getTarget:function(evt){var e=MUSIC.event.getEvent(evt);if(e)return e.srcElement||e.target;
else return null},getCurrentTarget:function(evt){var e=MUSIC.event.getEvent(evt);if(e)return e.currentTarget||document.activeElement;else return null},cancelBubble:function(evt){evt=MUSIC.event.getEvent(evt);if(!evt)return false;if(evt.stopPropagation)evt.stopPropagation();else if(!evt.cancelBubble)evt.cancelBubble=true},preventDefault:function(evt){evt=MUSIC.event.getEvent(evt);if(!evt)return false;if(evt.preventDefault)evt.preventDefault();else evt.returnValue=false},mouseX:function(evt){evt=MUSIC.event.getEvent(evt);
return evt.pageX||evt.clientX+(document.documentElement.scrollLeft||document.body.scrollLeft)},mouseY:function(evt){evt=MUSIC.event.getEvent(evt);return evt.pageY||evt.clientY+(document.documentElement.scrollTop||document.body.scrollTop)},getRelatedTarget:function(ev){ev=MUSIC.event.getEvent(ev);var t=ev.relatedTarget;if(!t)if(ev.type=="mouseout")t=ev.toElement;else if(ev.type=="mouseover")t=ev.fromElement;else;return t},replaceAllEvent:function(container){container=container||document;function replaceElmEvent(elm,
index){if(!elm)return;MUSIC.object.each(["dblclick","mouseover","mouseout","mousemove","error","click"],function(event_type){var _event=elm.getAttribute("r_on"+event_type);if(_event){var event_handler=new Function(_event);elm.removeAttribute("r_on"+event_type);MUSIC.event.addEvent(elm,event_type,event_handler)}})}var _arr=container.getElementsByName("script_btn");for(var i=0,len=_arr.length;i<len;i++)replaceElmEvent(_arr[i],i)},onDomReady:function(fn){MUSIC.event.onDomReady._fn=function(){fn();MUSIC.event.onDomReady._fn=
null};if(document.addEventListener)if(MUSIC.userAgent.safari<4)var interval=setInterval(function(){if(/loaded|complete/.test(document.readyState)){MUSIC.event.onDomReady._fn();clearInterval(interval)}},50);else{if(/complete/.test(document.readyState))MUSIC.event.onDomReady._fn();document.addEventListener("DOMContentLoaded",MUSIC.event.onDomReady._fn,true)}else{var src=window.location.protocol=="https:"?"//:":"javascript:void(0)";document.write('<script onreadystatechange="if(this.readyState==\'complete\'){this.parentNode.removeChild(this);MUSIC.event.onDomReady._fn();}" defer="defer" src="'+
src+'">\x3c/script>')}}};MUSIC.event.on=MUSIC.event.addEvent;MUSIC.event.bind=MUSIC.object.bind;
MUSIC.lang={isString:function(o){return MUSIC.object.getType(o)=="string"},isArray:function(o){return MUSIC.object.getType(o)=="array"},isFunction:function(o){return MUSIC.object.getType(o)=="function"},isHashMap:function(o){return MUSIC.object.getType(o)=="object"},isNode:function(o){return typeof o.nodeName!="undefined"||typeof o.nodeType!="undefined"},isElement:function(o){return o&&o.nodeType==1},arg2arr:function(refArgs,start){if(typeof start=="undefined")start=0;return Array.prototype.slice.apply(refArgs,
[start,refArgs.length])},objectClone:function(obj,preventName){if(typeof obj=="object"){var res=MUSIC.lang.isArray(obj)||!!obj.sort?[]:{};for(var i in obj)if(i!=preventName)res[i]=MUSIC.lang.objectClone(obj[i],preventName);return res}else if(typeof obj=="function")return(new obj).constructor;return obj},propertieCopy:function(s,b,propertiSet){if(typeof propertiSet=="undefined")for(var p in b)s[p]=b[p];else for(var p in propertiSet)s[p]=b[p];return s},chain:function(u,v){var calls=[];for(var ii=0,
len=arguments.length;ii<len;ii++)calls.push(arguments[ii]);return function(){for(var ii=0,len=calls.length;ii<len;ii++)if(calls[ii]&&calls[ii].apply(null,arguments)===false)return false;return true}},obj2str:function(obj){var t,sw;if(typeof obj=="object"){if(obj===null)return"null";if(window.JSON&&window.JSON.stringify)return JSON.stringify(obj);sw=MUSIC.lang.isArray(obj);t=[];for(var i in obj)t.push((sw?"":'"'+MUSIC.string.escString(i)+'":')+MUSIC.lang.obj2str(obj[i]));t=t.join();return sw?"["+t+
"]":"{"+t+"}"}else if(typeof obj=="undefined")return"undefined";else if(typeof obj=="number"||typeof obj=="function")return obj.toString();return!obj?'""':'"'+MUSIC.string.escString(obj)+'"'},toArray:function(iterable){if(!iterable)return[];if(iterable.toArray)return iterable.toArray();else{var results=[];for(var i=0,length=iterable.length;i<length;i++)results.push(iterable[i]);return results}}};
Function.prototype.bind=function(){var __method=this,args=MUSIC.lang.arg2arr(arguments),object=args.shift();return function(){return __method.apply(object,args.concat(MUSIC.lang.arg2arr(arguments)))}};Function.prototype.bindAsEventListener=function(object){var __method=this,args=MUSIC.lang.arg2arr(arguments),object=args.shift();return function(event){return __method.apply(object,[event||window.event].concat(args).concat(MUSIC.lang.arg2arr(arguments)))}};
if(typeof Array.prototype.map!="function")Array.prototype.map=function(fn,context){var arr=[];if(typeof fn==="function")for(var k=0,length=this.length;k<length;k++)arr.push(fn.call(context,this[k],k,this));return arr};
MUSIC.dom={getById:function(id){return document.getElementById(id)},getByName:function(name,tagName){if(!tagName)return document.getElementsByName(name);var arr=[];var e=document.getElementsByTagName(tagName);for(var i=0;i<e.length;++i)if(!!e[i].getAttribute("name")&&e[i].getAttribute("name").toLowerCase()==name.toLowerCase())arr.push(e[i]);return arr},get:function(e){return typeof e=="string"?document.getElementById(e):e},getNode:function(e){return e&&(e.nodeType||e.item)?e:document.getElementById(e)},
removeElement:function(elem){if(elem=MUSIC.dom.get(elem)){if(MUSIC.userAgent.ie==9&&elem.tagName=="SCRIPT")elem.src="";elem.removeNode?elem.removeNode(true):elem.parentNode&&elem.parentNode.removeChild(elem)}return elem=null},searchChain:function(elem,prop,func){prop=prop||"parentNode";while(elem){if(!func||func.call(elem,elem))return elem;elem=elem[prop]}return null},searchElementByClassName:function(elem,className){elem=MUSIC.dom.get(elem);return MUSIC.dom.searchChain(elem,"parentNode",function(el){return MUSIC.css.hasClassName(el,
className)})},getElementsByClassName:function(className,tag,root){tag=tag||"*";root=root?MUSIC.dom.get(root):null||document;if(!root)return[];var nodes=[],elements=root.getElementsByTagName(tag),re=MUSIC.css.getClassRegEx(className);for(var i=0,len=elements.length;i<len;++i)if(re.test(elements[i].className))nodes[nodes.length]=elements[i];return nodes},isAncestor:function(a,b){return a&&(b&&(a!=b&&(typeof a.contains=="object"?a.contains(b):!!(a.compareDocumentPosition(b)&16))))},getAncestorBy:function(elem,
method){elem=MUSIC.dom.get(elem);return MUSIC.dom.searchChain(elem.parentNode,"parentNode",function(el){return el.nodeType==1&&(!method||method(el))})},getFirstChild:function(elem){elem=MUSIC.dom.get(elem);return elem.firstElementChild||MUSIC.dom.searchChain(elem&&elem.firstChild,"nextSibling",function(el){return el.nodeType==1})},getLastChild:function(elem){elem=MUSIC.dom.get(elem);return elem.lastElementChild||MUSIC.dom.searchChain(elem&&elem.lastChild,"previousSibling",function(el){return el.nodeType==
1})},getNextSibling:function(elem){elem=MUSIC.dom.get(elem);return elem.nextElementSibling||MUSIC.dom.searchChain(elem&&elem.nextSibling,"nextSibling",function(el){return el.nodeType==1})},getPreviousSibling:function(elem){elem=MUSIC.dom.get(elem);return elem.previousElementSibling||MUSIC.dom.searchChain(elem&&elem.previousSibling,"previousSibling",function(el){return el.nodeType==1})},swapNode:function(node1,node2){if(node1.swapNode)node1.swapNode(node2);else{var prt=node2.parentNode,next=node2.nextSibling;
if(next==node1)prt.insertBefore(node1,node2);else if(node2==node1.nextSibling)prt.insertBefore(node2,node1);else{node1.parentNode.replaceChild(node2,node1);prt.insertBefore(node1,next)}}},createElementIn:function(tagName,elem,insertFirst,attrs){var _e=(elem=MUSIC.dom.get(elem)||document.body).ownerDocument.createElement(tagName||"div"),k;if(attrs)for(k in attrs)if(k=="class")_e.className=attrs[k];else if(k=="style")_e.style.cssText=attrs[k];else _e[k]=attrs[k];insertFirst?elem.insertBefore(_e,elem.firstChild):
elem.appendChild(_e);return _e},getStyle:function(el,property){el=MUSIC.dom.get(el);if(!el||el.nodeType==9)return null;var w3cMode=document.defaultView&&document.defaultView.getComputedStyle,computed=!w3cMode?null:document.defaultView.getComputedStyle(el,""),value="";switch(property){case "float":property=w3cMode?"cssFloat":"styleFloat";break;case "opacity":if(!w3cMode){var val=100;try{val=el.filters["DXImageTransform.Microsoft.Alpha"].opacity}catch(e){try{val=el.filters("alpha").opacity}catch(e){}}return val/
100}else return parseFloat((computed||el.style)[property]);break;case "backgroundPositionX":if(w3cMode){property="backgroundPosition";return(computed||el.style)[property].split(" ")[0]}break;case "backgroundPositionY":if(w3cMode){property="backgroundPosition";return(computed||el.style)[property].split(" ")[1]}break}if(w3cMode)return(computed||el.style)[property];else return el.currentStyle[property]||el.style[property]},setStyle:function(el,properties,value){if(!(el=MUSIC.dom.get(el))||el.nodeType!=
1)return false;var tmp,bRtn=true,w3cMode=(tmp=document.defaultView)&&tmp.getComputedStyle,rexclude=/z-?index|font-?weight|opacity|zoom|line-?height/i;if(typeof properties=="string"){tmp=properties;properties={};properties[tmp]=value}for(var prop in properties){value=properties[prop];if(prop=="float")prop=w3cMode?"cssFloat":"styleFloat";else if(prop=="opacity"){if(!w3cMode){prop="filter";value=value>=1?"":"alpha(opacity="+Math.round(value*100)+")"}}else if(prop=="backgroundPositionX"||prop=="backgroundPositionY"){tmp=
prop.slice(-1)=="X"?"Y":"X";if(w3cMode){var v=MUSIC.dom.getStyle(el,"backgroundPosition"+tmp);prop="backgroundPosition";typeof value=="number"&&(value=value+"px");value=tmp=="Y"?value+" "+(v||"top"):(v||"left")+" "+value}}if(typeof el.style[prop]!="undefined"){el.style[prop]=value+(typeof value==="number"&&!rexclude.test(prop)?"px":"");bRtn=bRtn&&true}else bRtn=bRtn&&false}return bRtn},createNamedElement:function(type,name,doc){var _doc=doc||document,element;try{element=_doc.createElement("<"+type+
' name="'+name+'">')}catch(ign){}if(!element)element=_doc.createElement(type);if(!element.name)element.name=name;return element},getRect:function(elem){if(elem=MUSIC.dom.get(elem)){var box={};try{box=MUSIC.object.extend({},elem.getBoundingClientRect());if(typeof box.width=="undefined"){box.width=box.right-box.left;box.height=box.bottom-box.top}}catch(e){box={left:0,right:0,width:0,height:0,bottom:0,top:0}}return box}},getPosition:function(elem){var box,s,doc;if(box=MUSIC.dom.getRect(elem)){if(s=MUSIC.dom.getScrollLeft(doc=
elem.ownerDocument))box.left+=s,box.right+=s;if(s=MUSIC.dom.getScrollTop(doc))box.top+=s,box.bottom+=s;return box}},setPosition:function(el,pos){MUSIC.dom.setXY(el,pos["left"],pos["top"]);MUSIC.dom.setSize(el,pos["width"],pos["height"])},getXY:function(elem,doc){var box=MUSIC.dom.getPosition(elem)||{left:0,top:0};return[box.left,box.top]},getSize:function(elem){var box=MUSIC.dom.getPosition(elem)||{width:-1,height:-1};return[box.width,box.height]},setXY:function(elem,x,y){var _ml=parseInt(MUSIC.dom.getStyle(elem,
"marginLeft"))||0,_mt=parseInt(MUSIC.dom.getStyle(elem,"marginTop"))||0;MUSIC.dom.setStyle(elem,{left:(parseInt(x)||0)-_ml+"px",top:(parseInt(y)||0)-_mt+"px"})},getScrollLeft:function(doc){var _doc=doc||document;return Math.max(_doc.documentElement.scrollLeft,_doc.body.scrollLeft)},getScrollTop:function(doc){var _doc=doc||document;return Math.max(_doc.documentElement.scrollTop,_doc.body.scrollTop)},getScrollHeight:function(doc){var _doc=doc||document;return Math.max(_doc.documentElement.scrollHeight,
_doc.body.scrollHeight)},getScrollWidth:function(doc){var _doc=doc||document;return Math.max(_doc.documentElement.scrollWidth,_doc.body.scrollWidth)},setScrollLeft:function(value,doc){var _doc=doc||document;_doc[_doc.compatMode=="CSS1Compat"&&!MUSIC.userAgent.webkit?"documentElement":"body"].scrollLeft=value},setScrollTop:function(value,doc){var _doc=doc||document;_doc[_doc.compatMode=="CSS1Compat"&&!MUSIC.userAgent.webkit?"documentElement":"body"].scrollTop=value},getClientHeight:function(doc){var _doc=
doc||document;return _doc.compatMode=="CSS1Compat"?_doc.documentElement.clientHeight:_doc.body.clientHeight},getClientWidth:function(doc){var _doc=doc||document;return _doc.compatMode=="CSS1Compat"?_doc.documentElement.clientWidth:_doc.body.clientWidth},_SET_SIZE_RE:/^\d+(?:\.\d*)?(px|%|em|in|cm|mm|pc|pt)?$/,setSize:function(el,w,h){el=MUSIC.dom.get(el);var _r=MUSIC.dom._SET_SIZE_RE,m;MUSIC.dom.setStyle(el,"width",(m=_r.exec(w))?m[1]?w:parseInt(w,10)+"px":"auto");MUSIC.dom.setStyle(el,"height",(m=
_r.exec(h))?m[1]?h:parseInt(h,10)+"px":"auto")},getDocumentWindow:function(doc){var _doc=doc||document;return _doc.parentWindow||_doc.defaultView},getElementsByTagNameNS:function(node,ns,tgn){node=node||document;var res=[];if(node.getElementsByTagNameNS)return node.getElementsByTagName(ns+":"+tgn);else if(node.getElementsByTagName){var n=document.namespaces;if(n.length>0){var l=node.getElementsByTagName(tgn);for(var i=0,len=l.length;i<len;++i)if(l[i].scopeName==ns)res.push(l[i])}}return res},getElementByTagNameBubble:function(elem,
tn){if(!tn)return null;var maxLv=15;tn=String(tn).toUpperCase();if(tn=="BODY")return document.body;elem=MUSIC.dom.searchChain(elem=MUSIC.dom.get(elem),"parentNode",function(el){return el.tagName==tn||(el.tagName=="BODY"||--maxLv<0)});return!elem||maxLv<0?null:elem},insertAdjacent:function(elem,where,html,isText){var range,pos=["beforeBegin","afterBegin","beforeEnd","afterEnd"],doc;if(MUSIC.lang.isElement(elem)&&(pos[where]&&(MUSIC.lang.isString(html)||MUSIC.lang.isElement(html)))){if(elem.insertAdjacentHTML)elem["insertAdjacent"+
(typeof html=="object"?"Element":isText?"Text":"HTML")](pos[where],html);else{range=(doc=elem.ownerDocument).createRange();range[where==1||where==2?"selectNodeContents":"selectNode"](elem);range.collapse(where<2);range.insertNode(typeof html!="string"?html:isText?doc.createTextNode(html):range.createContextualFragment(html))}return true}return false}};
MUSIC.util={gLocation:"",buildUri:function(s){return new MUSIC.util.URI(s)},URI:function(s){if(!(MUSIC.object.getType(s)=="string"))return null;if(s.indexOf("://")<1)s=location.protocol+"//"+location.host+(s.indexOf("/")==0?"":location.pathname.substr(0,location.pathname.lastIndexOf("/")+1))+s;var depart=s.split("://");if(MUSIC.object.getType(depart)=="array"&&(depart.length>1&&/^[a-zA-Z]+$/.test(depart[0]))){this.protocol=depart[0].toLowerCase();var h=depart[1].split("/");if(MUSIC.object.getType(h)==
"array"){this.host=h[0];this.pathname="/"+h.slice(1).join("/").replace(/(\?|\#).+/i,"");this.href=s;var se=depart[1].lastIndexOf("?"),ha=depart[1].lastIndexOf("#");this.search=se>=0?depart[1].substring(se+1):"";this.hash=ha>=0?depart[1].substring(ha+1):"";if(this.search.length>0&&this.hash.length>0)if(ha<se)this.search="";else this.search=depart[1].substring(se,ha);return this}else return null}else return null},splitHttpParamString:function(s){return MUSIC.util.commonDictionarySplit(s,"&")},commonDictionarySplit:function(s,
esp,vq,eq){var res={};if(!s||typeof s!="string")return res;if(typeof esp!="string")esp="&";if(typeof vq!="string")vq="";if(typeof eq!="string")eq="=";var l=s.split(vq+esp),len=l.length,tmp,t=eq+vq,p;if(vq){tmp=l[len-1].split(vq);l[len-1]=tmp.slice(0,tmp.length-1).join(vq)}for(var i=0,len;i<len;i++){if(eq){tmp=l[i].split(t);if(tmp.length>1){res[tmp[0]]=tmp.slice(1).join(t);continue}}res[l[i]]=true}return res},getUrlParams:function(){var res={},uri=this.buildUri(window.location.href);MUSIC.object.extend(res,
this.splitHttpParamString(uri.hash));MUSIC.object.extend(res,this.splitHttpParamString(uri.search));return res},buildArgs:function(args){var buf=[];for(var key in args){var value=args[key];if(typeof value=="string")buf.push(key+"="+value)}return buf.join("&")},updateUrlHash:function(mapValue){var res={},uri=this.buildUri(window.location.href);MUSIC.object.extend(res,this.splitHttpParamString(uri.hash));MUSIC.object.extend(res,mapValue||{});setTimeout('window.location.hash = "'+this.buildArgs(mapValue).replace(/\"/g,
'\\"')+'"',0)},formatTime:function(iTime){var sDate="";try{iTime=parseInt(iTime)*1E3;var oDate=new Date(iTime);var oNow=new Date;var iDiff=Math.floor(oNow.valueOf()/864E5)-Math.floor(iTime/864E5);switch(iDiff){case 0:sDate="\u4eca\u5929";break;case 1:sDate="\u6628\u5929";break;case 2:sDate="\u524d\u5929";break;default:sDate=oDate.getMonth()+1+"\u6708"+oDate.getDate()+"\u65e5";break}var sHour=""+oDate.getHours();sHour=sHour.length==1?"0"+sHour:sHour;var sMin=""+oDate.getMinutes();sMin=sMin.length==
1?"0"+sMin:sMin;sDate+=" "+sHour+":"+sMin;return sDate}catch(e){sDate=""}}};
MUSIC.css={classNameCache:{},getClassRegEx:function(className){var o=MUSIC.css.classNameCache;return o[className]||(o[className]=new RegExp("(?:^|\\s+)"+className+"(?:\\s+|$)"))},convertHexColor:function(color){color=String(color||"");color.charAt(0)=="#"&&(color=color.substring(1));color.length==3&&(color=color.replace(/([0-9a-f])/ig,"$1$1"));return color.length==6?[parseInt(color.substr(0,2),16),parseInt(color.substr(2,2),16),parseInt(color.substr(4,2),16)]:[0,0,0]},styleSheets:{},getStyleSheetById:function(id){var s;
return(s=MUSIC.dom.get(id))&&s.sheet||(s=document.styleSheets)&&s[id]},getRulesBySheet:function(sheetId){var ss=typeof sheetId=="object"?sheetId:MUSIC.css.getStyleSheetById(sheetId),rs={},head,base;if(ss&&!(rs=ss.cssRules||ss.rules))if(head=document.getElementsByTagName("head")[0])if(base=head.getElementsByTagName("base")[0]){MUSIC.dom.removeElement(base);rs=ss.cssRules;head.appendChild(base)}return rs},getRuleBySelector:function(sheetId,selector){var _ss=this.getStyleSheetById(sheetId);if(!_ss.cacheSelector)_ss.cacheSelector=
{};if(_ss){var _rs=_ss.cssRules||_ss.rules;var re=new RegExp("^"+selector+"$","i");var _cs=_ss.cacheSelector[selector];if(_cs&&re.test(_rs[_cs].selectorText))return _rs[_cs];else{for(var i=0;i<_rs.length;i++)if(re.test(_rs[i].selectorText)){_ss.cacheSelector[selector]=i;return _rs[i]}return null}}else return null},insertCSSLink:function(url,opts,callback){var sid,doc,t,cssLink,head,docMode=document.documentMode;if(typeof opts=="string")sid=opts;opts=typeof opts=="object"?opts:{};sid=opts.linkID||
sid;doc=opts.doc||document;head=doc.getElementsByTagName("head")[0];cssLink=(t=doc.getElementById(sid))&&t.nodeName=="LINK"?t:null;if(!cssLink){cssLink=doc.createElement("link");sid&&(cssLink.id=sid);cssLink.rel=cssLink.rev="stylesheet";cssLink.type="text/css";cssLink.media=opts.media||"screen";head.appendChild(cssLink)}if(ua.ie||ua.opera){MUSIC.event.addEvent(cssLink,ua.ie&&ua.ie<9?"readystatechange":"load",function(){if(!cssLink||ua.ie&&(ua.ie<9&&!(cssLink.readyState=="loaded"||cssLink.readyState==
"complete")))return;if(callback)callback()});setTimeout(function(){url&&(cssLink.href=url)},0)}else if(ua.webkit){var cn=document.styleSheets.length;url&&(cssLink.href=url);var _times=10;var fi=setInterval(function(){if(document.styleSheets.length>cn){if(callback)callback();clearInterval(fi)}else{_times--;if(_times<0){if(callback)callback();clearInterval(fi)}}},50)}else if(ua.firefox){url&&(cssLink.href=url);var _times=10;var fi=setInterval(function(){try{cssLink.sheet.cssRules;if(callback)callback();
clearInterval(fi)}catch(e){_times--;if(_times<0){if(callback)callback();clearInterval(fi)}}},50)}else if(callback)callback();return MUSIC.userAgent.ie!=9&&cssLink.sheet||cssLink},insertStyleSheet:function(sheetId,rules){var node=document.createElement("style");node.type="text/css";sheetId&&(node.id=sheetId);document.getElementsByTagName("head")[0].appendChild(node);if(rules)if(node.styleSheet)node.styleSheet.cssText=rules;else node.appendChild(document.createTextNode(rules));return node.sheet||node},
removeStyleSheet:function(id){var _ss=MUSIC.css.getStyleSheetById(id);_ss&&MUSIC.dom.removeElement(_ss.owningElement||_ss.ownerNode)},updateClassName:function(elem,removeNames,addNames){if(!elem||elem.nodeType!=1)return"";var oriName=elem.className,ar,b;if(removeNames&&typeof removeNames=="string"||addNames&&typeof addNames=="string"){if(removeNames=="*")oriName="";else{ar=oriName.split(" ");var i=0,l=ar.length,n;oriName={};for(;i<l;++i)ar[i]&&(oriName[ar[i]]=true);if(addNames){ar=addNames.split(" ");
l=ar.length;for(i=0;i<l;++i)(n=ar[i])&&(!oriName[n]&&(b=oriName[n]=true))}if(removeNames){ar=removeNames.split(" ");l=ar.length;for(i=0;i<l;i++)(n=ar[i])&&(oriName[n]&&((b=true)&&delete oriName[n]))}}if(b){ar.length=0;for(var k in oriName)ar.push(k);oriName=ar.join(" ");elem.className=oriName}}return oriName},hasClassName:function(elem,name){return elem&&((elem=elem.className)&&(name&&(" "+elem+" ").indexOf(" "+name+" ")+1))},addClassName:function(elem,names){return MUSIC.css.updateClassName(elem,
null,names)},removeClassName:function(elem,names){return MUSIC.css.updateClassName(elem,names)},replaceClassName:function(elems,a,b){MUSIC.css.swapClassName(elems,a,b,true)},swapClassName:function(elems,a,b,_isRep){if(elems&&typeof elems=="object"){if(elems.length===undefined)elems=[elems];for(var elem,i=0,l=elems.length;i<l;++i)if((elem=elems[i])&&elem.nodeType==1)if(MUSIC.css.hasClassName(elem,a))MUSIC.css.updateClassName(elem,a,b);else if(!_isRep&&MUSIC.css.hasClassName(elem,b))MUSIC.css.updateClassName(elem,
b,a)}},toggleClassName:function(elem,name){if(!elem||elem.nodeType!=1)return;if(MUSIC.css.hasClassName(elem,name))MUSIC.css.updateClassName(elem,name);else MUSIC.css.updateClassName(elem,null,name)}};
MUSIC.debug={errorLogs:[],startDebug:function(){window.onerror=function(msg,url,line){var urls=(url||"").replace(/\\/g,"/").split("/");MUSIC.console.print(msg+"<br/>"+urls[urls.length-1]+" (line:"+line+")",1);MUSIC.debug.errorLogs.push(msg);return false}},stopDebug:function(){window.onerror=null},clearErrorLog:function(){this.errorLogs=[]},showLog:function(){var o=ENV.get("debug_out");if(!!o)o.innerHTML=MUSIC.string.nl2br(MUSIC.string.escHTML(this.errorLogs.join("\n")))},getLogString:function(){return this.errorLogs.join("\n")}};
MUSIC.runTime=function(){function isDebugMode(){return MUSIC.config.debugLevel>1}function log(msg,type){var info;if(isDebugMode())info=msg+"\n=STACK=\n"+stack();else if(type=="error")info=msg;else if(type=="warn");MUSIC.debug.errorLogs.push(info)}function warn(sf,args){log(MUSIC.string.write.apply(MUSIC.string,arguments),"warn")}function error(sf,args){log(MUSIC.string.write.apply(MUSIC.string,arguments),"error")}function stack(e,a){function genTrace(ee,aa){if(ee.stack)return ee.stack;else if(ee.message.indexOf("\nBacktrace:\n")>=
0){var cnt=0;return ee.message.split("\nBacktrace:\n")[1].replace(/\s*\n\s*/g,function(){cnt++;return cnt%2==0?"\n":" @ "})}else{var entry=aa.callee==stack?aa.callee.caller:aa.callee;var eas=entry.arguments;var r=[];for(var i=0,len=eas.length;i<len;i++)r.push(typeof eas[i]=="undefined"?"<u>":eas[i]===null?"<n>":eas[i]);var fnp=/function\s+([^\s\(]+)\(/;var fname=fnp.test(entry.toString())?fnp.exec(entry.toString())[1]:"<ANON>";return(fname+"("+r.join()+");").replace(/\n/g,"")}}var res;if(e instanceof
Error&&(typeof arguments=="object"&&!!arguments.callee))res=genTrace(e,a);else try{({}).sds()}catch(err){res=genTrace(err,arguments)}return res.replace(/\n/g," <= ")}return{stack:stack,warn:warn,error:error,isDebugMode:isDebugMode}}();if(typeof JSON!=="object")JSON={};
(function(){function f(n){return n<10?"0"+n:n}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(key){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(key){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;function quote(string){escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==="string"?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function str(key,holder){var i,k,v,
length,mind=gap,partial,value=holder[key];if(value&&(typeof value==="object"&&typeof value.toJSON==="function"))value=value.toJSON(key);if(typeof rep==="function")value=rep.call(holder,key,value);switch(typeof value){case "string":return quote(value);case "number":return isFinite(value)?String(value):"null";case "boolean":case "null":return String(value);case "object":if(!value)return"null";gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==="[object Array]"){length=value.length;for(i=
0;i<length;i+=1)partial[i]=str(i,value)||"null";v=partial.length===0?"[]":gap?"[\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"]":"["+partial.join(",")+"]";gap=mind;return v}if(rep&&typeof rep==="object"){length=rep.length;for(i=0;i<length;i+=1)if(typeof rep[i]==="string"){k=rep[i];v=str(k,value);if(v)partial.push(quote(k)+(gap?": ":":")+v)}}else for(k in value)if(Object.prototype.hasOwnProperty.call(value,k)){v=str(k,value);if(v)partial.push(quote(k)+(gap?": ":":")+v)}v=partial.length===0?"{}":gap?"{\n"+
gap+partial.join(",\n"+gap)+"\n"+mind+"}":"{"+partial.join(",")+"}";gap=mind;return v}}if(typeof JSON.stringify!=="function")JSON.stringify=function(value,replacer,space){var i;gap="";indent="";if(typeof space==="number")for(i=0;i<space;i+=1)indent+=" ";else if(typeof space==="string")indent=space;rep=replacer;if(replacer&&(typeof replacer!=="function"&&(typeof replacer!=="object"||typeof replacer.length!=="number")))throw new Error("JSON.stringify");return str("",{"":value})};if(typeof JSON.parse!==
"function")JSON.parse=function(text,reviver){var j;function walk(holder,key){var k,v,value=holder[key];if(value&&typeof value==="object")for(k in value)if(Object.prototype.hasOwnProperty.call(value,k)){v=walk(value,k);if(v!==undefined)value[k]=v;else delete value[k]}return reviver.call(holder,key,value)}text=String(text);cx.lastIndex=0;if(cx.test(text))text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)});if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,
"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse");}})();window.JSON=window.JSON||JSON;
MUSIC.enviroment=function(){var _p={},hookPool={};function envGet(kname){return _p[kname]}function envDel(kname){delete _p[kname];return true}function envSet(kname,value){if(typeof value=="undefined")if(typeof kname=="undefined")return false;else{if(!(_p[kname]===undefined))return false}else{_p[kname]=value;return true}}return{get:envGet,set:envSet,del:envDel,hookPool:hookPool}}();var ENV=MUSIC.enviroment;
MUSIC.pageEvents=function(){function _ihp(){var qs=location.search.substring(1),qh=location.hash.substring(1),s,h,n;ENV.set("_queryString",qs);ENV.set("_queryHash",qh);ENV.set("queryString",s=MUSIC.util.splitHttpParamString(qs));ENV.set("queryHash",h=MUSIC.util.splitHttpParamString(qh));if(s&&s.DEBUG){n=parseInt(s.DEBUG,10);if(!isNaN(n))MUSIC.config.debugLevel=n}}function _bootStrap(){if(document.addEventListener)if(MUSIC.userAgent.safari<4)var interval=setInterval(function(){if(/loaded|complete/.test(document.readyState)){_onloadHook();
clearInterval(interval)}},50);else document.addEventListener("DOMContentLoaded",_onloadHook,true);else{var src="javascript:void(0)";if(window.location.protocol=="https:")src="//:";document.write('<script onreadystatechange="if(this.readyState==\'complete\'){this.parentNode.removeChild(this);MUSIC.pageEvents._onloadHook();}" defer="defer" src="'+src+'">\
x3c / script > ')}window.onload=MUSIC.lang.chain(window.onload,function(){_onloadHook();_runHooks("onafterloadhooks")});window.onbeforeunload=function(){return _runHooks("onbeforeunloadhooks")};
window.onunload = MUSIC.lang.chain(window.onunload, function() {
	_runHooks("onunloadhooks")
})
}

function _onloadHook() {
	_runHooks("onloadhooks");
	MUSIC.enviroment.loaded = true
}

function _runHook(handler) {
	try {
		handler()
	} catch (ex) {}
}

function _runHooks(hooks) {
	var isbeforeunload = hooks == "onbeforeunloadhooks",
		warn = null,
		hc = window.ENV.hookPool;
	do {
		var h = hc[hooks];
		if (!isbeforeunload) hc[hooks] = null;
		if (!h) break;
		for (var ii = 0; ii < h.length; ii++)
			if (isbeforeunload) warn = warn || h[ii]();
			else h[ii]();
		if (isbeforeunload) break
	} while (hc[hooks]);
	if (isbeforeunload)
		if (warn) return warn;
		else MUSIC.enviroment.loaded = false
}

function _addHook(hooks, handler) {
	var c = window.ENV.hookPool;
	(c[hooks] ? c[hooks] : c[hooks] = []).push(handler)
}

function _insertHook(hooks, handler, position) {
	var c = window.ENV.hookPool;
	if (typeof position == "number" && position >= 0) {
		if (!c[hooks]) c[hooks] = [];
		c[hooks].splice(position, 0, handler)
	} else return false
}

function _lr(handler) {
	MUSIC.enviroment.loaded ? _runHook(handler) : _addHook("onloadhooks", handler)
}

function _bulr(handler) {
	_addHook("onbeforeunloadhooks",
		handler)
}

function _ulr(handler) {
	_addHook("onunloadhooks", handler)
}

function pinit() {
	_bootStrap();
	_ihp();
	var _dt;
	if (_dt = document.getElementById("__DEBUG_out")) ENV.set("dout", _dt);
	var __dalert;
	if (!ENV.get("alertConverted")) {
		__dalert = alert;
		eval("var alert=function(msg){if(msg!=undefined){__dalert(msg);return msg;}}");
		ENV.set("alertConverted", true)
	}
	var t = ENV.get("queryHash");
	if (t && t.DEBUG) MUSIC.config.debugLevel = 2
}
return {
	onloadRegister: _lr,
	onbeforeunloadRegister: _bulr,
	onunloadRegister: _ulr,
	initHttpParams: _ihp,
	bootstrapEventHandlers: _bootStrap,
	_onloadHook: _onloadHook,
	insertHooktoHooksQueue: _insertHook,
	pageBaseInit: pinit
}
}();
MUSIC.object.extend(MUSIC.console, {
	_inited: false,
	_html: '<h5 id="log_head" class="qzfl_log_head"><button id="log_close">x</button>console</h5><ul id="log_list"></ul><div class="qzfl_log_foot"><div class="log_console">&gt;<input id="log_console"/></div></div>',
	_opened: false,
	TYPE: {
		DEBUG: 0,
		ERROR: 1,
		WARNING: 2,
		INFO: 3,
		PROFILE: 4
	},
	_typeInfo: [
		["qzfl_log_debug", "\u221a"],
		["qzfl_log_error", "!"],
		["qzfl_log_warning", "-"],
		["qzfl_log_info", "i"],
		["qzfl_log_profile", "\u2514"]
	],
	show: function() {
		if (!this._inited) this._init();
		this._main.style.display = "block";
		this._opened = true
	},
	hide: function() {
		MUSIC.console._main.style.display = "none";
		MUSIC.console._opened = false
	},
	_init: function() {
		this._main = MUSIC.dom.createElementIn("div", document.body);
		this._main.className = "qzfl_log";
		this._main.innerHTML = this._html;
		this._input = MUSIC.dom.get("log_console");
		this._button = MUSIC.dom.get("log_close");
		this._list = MUSIC.dom.get("log_list");
		MUSIC.css.insertCSSLink("http://imgcache.qq.com/qzone/qzfl/console.css");
		if (MUSIC.dragdrop) MUSIC.dragdrop.registerDragdropHandler(MUSIC.dom.get("log_head"),
			this._main);
		MUSIC.event.addEvent(this._input, "keypress", this._execScript);
		MUSIC.event.addEvent(this._button, "click", this.hide);
		this._inited = true
	},
	print: function(msg, type) {
		if (!this._opened) this.show();
		var _item = MUSIC.dom.createElementIn("li", MUSIC.console._list);
		var _ti = MUSIC.console._typeInfo[type] || MUSIC.console._typeInfo[0];
		_item.className = _ti[0];
		_item.innerHTML = '<span class="log_icon">' + _ti[1] + "</span>" + msg;
		this._list.scrollTop = this._list.scrollHeight
	},
	clear: function() {
		MUSIC.console._list.innerHTML =
			""
	},
	_showHashmap: function(object) {
		var descString = [];
		var n = 20;
		for (var value in object) {
			try {
				descString.push(value + " ==> " + object[value])
			} catch (exception) {
				descString.push(value + " =!> " + exception.message)
			}
			if (!n--) {
				alert(descString.join("\n"));
				descString = [];
				n = 20
			}
		}
		if (descString.length > 0) alert(descString.join("\n"));
		else alert(object)
	},
	_execScript: function(e) {
		e = MUSIC.event.getEvent(e);
		if (e.keyCode != "13") return;
		switch (MUSIC.console._input.value) {
			case "help":
				var _rv = "Console Help<br/>help - console help<br/>clear - clear console list.<br/>hide - hide console";
				MUSIC.console.print(_rv, 3);
				break;
			case "clear":
				MUSIC.console.clear();
				break;
			case "hide":
				MUSIC.console.hide();
				break;
			default:
				var _rv = '<span style="color:#CCFF00">' + MUSIC.console._input.value + "</span><br/>";
				try {
					_rv += (eval(MUSIC.console._input.value) || "").toString().replace(/</g, "&lt;").replace(/>/g, "&gt;");
					MUSIC.console.print(_rv, 0)
				} catch (ex) {
					_rv += ex.description;
					MUSIC.console.print(_rv, 1)
				}
		}
		MUSIC.console._input.value = ""
	}
});
MUSIC.cookie = {
	set: function(name, value, domain, path, hour) {
		if (hour) {
			var expire = new Date;
			expire.setTime(expire.getTime() + 36E5 * hour)
		}
		document.cookie = name + "=" + escape(value) + "; " + (hour ? "expires=" + expire.toGMTString() + "; " : "") + (path ? "path=" + path + "; " : "path=/; ") + (domain ? "domain=" + domain + ";" : "domain=" + MUSIC.config.DCCookieDomain + ";");
		return true
	},
	get: function(name) {
		var r = new RegExp("(?:^|;+|\\s+)" + name + "=([^;]*)"),
			m = document.cookie.match(r);
		return !m ? "" : unescape(m[1])
	},
	del: function(name, domain, path) {
		document.cookie =
			name + "=; expires=Mon, 26 Jul 1997 05:00:00 GMT; " + (path ? "path=" + path + "; " : "path=/; ") + (domain ? "domain=" + domain + ";" : "domain=" + MUSIC.config.DCCookieDomain + ";")
	}
};
MUSIC.CookieSet = function() {
	var args = Array.prototype.slice.apply(arguments);
	var _key = "";
	var _uin = MUSIC.widget.user.getUin();
	return {
		delimeter: ",",
		basekey: "",
		check_func: null,
		need_attrs: [],
		key_need_uin: false,
		value_need_uin: true,
		key: function() {
			if (_key) return _key;
			if (!this.basekey) return null;
			var key = this.basekey;
			if (this.key_need_uin) {
				if (_uin <= 1E4) return null;
				key += uin
			}
			_key = key;
			return key
		},
		get: function() {
			var key = this.key();
			if (!key) return null;
			var cookie = getCookie(key);
			var parts = cookie.split(this.delimeter);
			var need_length = args.length + (this.value_need_uin ? 1 : 0);
			if (parts.length != need_length) {
				this.clear();
				return null
			}
			if (this.value_need_uin) {
				if (parseInt(parts[0]) != _uin) {
					this.clear();
					return null
				}
				parts.splice(0, 1)
			}
			var data = {};
			MUSIC.object.each(args, function(arg, idx) {
				var value = parts[idx];
				data[arg] = value
			});
			if (typeof this.check_func == "function")
				if (!this.check_func(data)) {
					this.clear();
					return null
				}
			return data
		},
		set: function(data) {
			var key = this.key();
			if (!key) return false;
			if (typeof this.check_func == "function")
				if (!this.check_func(data)) return false;
			var parts = [];
			if (this.value_need_uin) parts.push(_uin);
			MUSIC.object.each(args, function(arg) {
				var value = "" + data[arg];
				if (value.constructor != Function) parts.push(value.replace(/,/g, "%2c"))
			});
			setCookie(key, parts.join(this.delimeter));
			return true
		},
		clear: function() {
			var key = this.key();
			if (!key) return false;
			delCookie(key);
			return true
		}
	}
};
var getCookie = MUSIC.cookie.get;
var setCookie = MUSIC.cookie.set;
var delCookie = MUSIC.cookie.del;
(function(qdc) {
	var dataPool = {};
	qdc.get = qdc.load = function(key) {
		return dataPool[key]
	};
	qdc.del = function(key) {
		dataPool[key] = null;
		delete dataPool[key];
		return true
	};
	qdc.save = function saveData(key, value) {
		dataPool[key] = value;
		return true
	}
})(MUSIC.dataCenter = {});
MUSIC.XHR = function(actionURL, cname, method, data, isAsync, nocache, charset) {
	if (!cname) cname = "_xhrInstence_" + (MUSIC.XHR.counter + 1);
	var prot;
	if (MUSIC.XHR.instance[cname] instanceof MUSIC.XHR) prot = MUSIC.XHR.instance[cname];
	else {
		prot = MUSIC.XHR.instance[cname] = this;
		MUSIC.XHR.counter++
	}
	prot._name = cname;
	prot._nc = !!nocache;
	prot._method = MUSIC.object.getType(method) != "string" || method.toUpperCase() != "GET" ? "POST" : method = "GET";
	prot._isAsync = !(isAsync === false) ? true : isAsync;
	prot._uri = actionURL;
	prot._data = MUSIC.object.getType(data) ==
		"object" || MUSIC.object.getType(data) == "string" ? data : {};
	prot._sender = null;
	prot._isHeaderSetted = false;
	this.onSuccess = MUSIC.emptyFn;
	this.onError = MUSIC.emptyFn;
	if (!!charset) this.charset = charset;
	else this.charset = "gb2312";
	this.proxyPath = "";
	return prot
};
MUSIC.XHR.instance = {};
MUSIC.XHR.counter = 0;
MUSIC.XHR._errCodeMap = {
	400: {
		msg: "Bad Request"
	},
	401: {
		msg: "Unauthorized"
	},
	403: {
		msg: "Forbidden"
	},
	404: {
		msg: "Not Found"
	},
	999: {
		msg: "Proxy page error"
	},
	1E3: {
		msg: "Bad Response"
	},
	1001: {
		msg: "No Network"
	},
	1002: {
		msg: "No Data"
	},
	1003: {
		msg: "Eval Error"
	}
};
MUSIC.XHR.xsend = function(o, uri) {
	if (!(o instanceof MUSIC.XHR)) return false;
	if (MUSIC.userAgent.firefox && MUSIC.userAgent.firefox < 3) return false;

	function clear(obj) {
		try {
			obj._sender = obj._sender.callback = obj._sender.errorCallback = obj._sender.onreadystatechange = null
		} catch (ignore) {}
		if (MUSIC.userAgent.safari || MUSIC.userAgent.opera) setTimeout('MUSIC.dom.removeElement("_xsend_frm_' + obj._name + '")', 50);
		else MUSIC.dom.removeElement("_xsend_frm_" + obj._name)
	}
	if (o._sender === null || o._sender === void 0) {
		var sender = document.createElement("iframe");
		sender.id = "_xsend_frm_" + o._name;
		sender.style.width = sender.style.height = sender.style.borderWidth = "0";
		document.body.appendChild(sender);
		sender.callback = MUSIC.event.bind(o, function(data) {
			o.onSuccess(data);
			clear(o)
		});
		sender.errorCallback = MUSIC.event.bind(o, function(num) {
			o.onError(MUSIC.XHR._errCodeMap[num]);
			clear(o)
		});
		o._sender = sender
	}
	var tmp = MUSIC.config.gbEncoderPath;
	o.GBEncoderPath = tmp ? tmp : "";
	o._sender.src = uri.protocol + "://" + uri.host + (o.proxyPath ? o.proxyPath : o.charset == "gb2312" ? "/xhr_proxy_gbk.html" :
		"/xhr_proxy_utf8.html");
	return true
};
MUSIC.XHR.genHttpParamString = function(o, cs) {
	cs = (cs || "gb2312").toLowerCase();
	var r = [];
	for (var i in o) r.push(i + "=" + (cs == "utf-8" ? encodeURIComponent(o[i]) : MUSIC.string.URIencode(o[i])));
	return r.join("&")
};
MUSIC.XHR.prototype.send = function() {
	if (this._method == "POST" && this._data == null) return false;
	var u = new MUSIC.util.URI(this._uri);
	if (u == null) return false;
	this._uri = u.href;
	if (MUSIC.object.getType(this._data) == "object") this._data = MUSIC.XHR.genHttpParamString(this._data, this.charset);
	if (this._method == "GET" && this._data) this._uri += (this._uri.indexOf("?") < 0 ? "?" : "&") + this._data;
	if (u.host != location.host) return MUSIC.XHR.xsend(this, u);
	if (!this._sender) {
		var sender;
		if (window.XMLHttpRequest) sender = new XMLHttpRequest;
		else if (window.ActiveXObject) try {
			!(sender = new ActiveXObject("Msxml2.XMLHTTP")) && (sender = new ActiveXObject("Microsoft.XMLHTTP"))
		} catch (ign) {}
		if (!sender) return false;
		this._sender = sender
	}
	try {
		this._sender.open(this._method, this._uri, this._isAsync)
	} catch (err) {
		return false
	}
	if (this._method == "POST" && !this._isHeaderSetted) {
		this._sender.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		this._isHeaderSetted = true
	}
	if (this._nc) {
		this._sender.setRequestHeader("If-Modified-Since", "Thu, 1 Jan 1970 00:00:00 GMT");
		this._sender.setRequestHeader("Cache-Control", "no-cache")
	}
	this._sender.onreadystatechange = MUSIC.event.bind(this, function() {
		try {
			if (this._sender.readyState == 4) {
				if (this._sender.status >= 200 && this._sender.status < 300) this.onSuccess({
					text: this._sender.responseText,
					xmlDom: this._sender.responseXML
				});
				else if (MUSIC.userAgent.safari && MUSIC.object.getType(this._sender.status) == "undefined") this.onError(MUSIC.XHR._errCodeMap[1002]);
				else this.onError(MUSIC.XHR._errCodeMap[this._sender.status]);
				delete this._sender;
				this._sender = null
			}
		} catch (err) {}
	});
	this._sender.send(this._method == "POST" ? this._data : void 0);
	return true
};
MUSIC.XHR.prototype.destroy = function() {
	var n = this._name;
	delete MUSIC.XHR.instance[n]._sender;
	MUSIC.XHR.instance[n]._sender = null;
	delete MUSIC.XHR.instance[n];
	MUSIC.XHR.counter--;
	return null
};
MUSIC.media = {
	_flashVersion: null,
	adjustImageSize: function(objImage, url, maxwidth, maxheight, callback) {
		var image = new Image;
		image.onload = function(mainImg, tempImg, mw, mh) {
			return function() {
				tempImg.onload = null;
				var _w = tempImg.width,
					_h = tempImg.height;
				if (_w > mw || _h > mh) {
					var _tmp = Math.min(mw * _h, mh * _w);
					mainImg.style.width = parseInt(_tmp / _h);
					mainImg.style.height = parseInt(_tmp / _w)
				} else {
					mainImg.style.width = "";
					mainImg.style.height = ""
				}
				mainImg.src = tempImg.src;
				if (typeof callback == "function") callback(mainImg, mw, mh, tempImg,
					_w, _h);
				try {
					g_musicMain.resizePage()
				} catch (e) {}
			}
		}(objImage, image, maxwidth, maxheight);
		image.src = url
	},
	getFlashHtml: function(flashArguments, requiredVersion, flashPlayerCID) {
		var _attrs = new StringBuilder;
		var _params = new StringBuilder;
		if (typeof flashPlayerCID == "undefined") flashPlayerCID = "D27CDB6E-AE6D-11cf-96B8-444553540000";
		for (var k in flashArguments) switch (k) {
			case "movie":
				continue;
				break;
			case "id":
			case "name":
			case "width":
			case "height":
			case "style":
				_attrs.append(k + "='" + flashArguments[k] + "' ");
				break;
			default:
				_params.append("<param name='" +
					(k == "src" ? "movie" : k) + "' value='" + flashArguments[k] + "' />");
				_attrs.append(k + "='" + flashArguments[k] + "' ")
		}
		if (requiredVersion && requiredVersion instanceof MUSIC.media.SWFVersion) {
			if (requiredVersion.major == 9 && requiredVersion.rev == 16)(function() {
				__flash_unloadHandler = MUSIC.emptyFn;
				__flash_savedUnloadHandler = MUSIC.emptyFn
			})()
		} else requiredVersion = new MUSIC.media.SWFVersion(8, 0);
		_attrs.append("codeBase='http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab#version=" + requiredVersion + "' ");
		if (ua.ie) return "<object classid='clsid:" +
			flashPlayerCID + "' " + _attrs + ">" + _params + "</object>";
		else return "<embed " + _attrs + " pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash'></embed>"
	},
	getWMMHtml: function(wmpArguments, cid) {
		var params = new StringBuilder;
		var objArgm = new StringBuilder;
		if (typeof cid == "undefined") cid = "clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6";
		for (var k in wmpArguments) switch (k) {
			case "id":
			case "width":
			case "height":
			case "style":
				objArgm.append(k + '="' + wmpArguments[k] + '" ');
				break;
			case "src":
				objArgm.append(k +
					'="' + wmpArguments[k] + '" ');
				break;
			default:
				objArgm.append(k + '="' + wmpArguments[k] + '" ');
				params.append('<param name="' + k + '" value="' + wmpArguments[k] + '" />')
		}
		if (wmpArguments["src"]) params.append('<param name="URL" value="' + wmpArguments["src"] + '" />');
		if (ua.ie) return '<object classid="' + cid + '" ' + objArgm + ">" + params + "</object>";
		else return "<embed " + objArgm + "></embed>"
	}
};
MUSIC.media.SWFVersion = function() {
	var a;
	if (arguments.length > 1) a = arg2arr(arguments);
	else if (arguments.length == 1)
		if (typeof arguments[0] == "object") a = arguments[0];
		else if (typeof arguments[0] == "number") a = [arguments[0]];
	else a = [];
	else a = [];
	this.major = parseInt(a[0], 10) || 0;
	this.minor = parseInt(a[1], 10) || 0;
	this.rev = parseInt(a[2], 10) || 0;
	this.add = parseInt(a[3], 10) || 0
};
MUSIC.media.SWFVersion.prototype.toString = function(spliter) {
	return [this.major, this.minor, this.rev, this.add].join(typeof spliter == "undefined" ? "," : spliter)
};
MUSIC.media.SWFVersion.prototype.toNumber = function() {
	var se = 0.001;
	return this.major + this.minor * se + this.rev * se * se + this.add * se * se * se
};
MUSIC.media.getFlashVersion = function() {
	if (!MUSIC.media._flashVersion) {
		var resv = 0;
		if (navigator.plugins && navigator.mimeTypes.length) {
			var x = navigator.plugins["Shockwave Flash"];
			if (x && x.description) resv = x.description.replace(/(?:[a-z]|[A-Z]|\s)+/, "").replace(/(?:\s+r|\s+b[0-9]+)/, ".").split(".")
		} else {
			try {
				for (var i = resv = 6, axo = new Object; axo != null; ++i) {
					axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash." + i);
					resv = i
				}
			} catch (e) {
				resv = Math.max(resv - 1, 0)
			}
			try {
				resv = new MUSIC.media.SWFVersion(axo.GetVariable("$version").split(" ")[1].split(","))
			} catch (ignore) {}
		}
		if (!(resv instanceof MUSIC.media.SWFVersion)) resv = new MUSIC.media.SWFVersion(resv);
		if (resv.major < 3) resv.major = 0;
		MUSIC.media._flashVersion = resv
	}
	return MUSIC.media._flashVersion
};
var insertFlash = MUSIC.media.getFlashHtml;
MUSIC.FormSender = function(actionURL, method, data, charset) {
	this.name = "_fpInstence_" + MUSIC.FormSender.counter;
	MUSIC.FormSender.instance[this.name] = this;
	MUSIC.FormSender.counter++;
	this.method = method || "POST";
	this.uri = actionURL;
	var default_data = {
		loginUin: g_user.getUin() || 0,
		hostUin: 0,
		format: "fs",
		inCharset: "GB2312",
		outCharset: "GB2312",
		notice: 0,
		platform: "yqq",
		needNewCode: 0
	};
	if (typeof data == "object") MUSIC.object.extend(default_data, data || {});
	else if (typeof data == "string") {
		var map = {},
			arr = data.split("&");
		for (var i =
				0, l = arr.length; i < l; i++) {
			var kv = arr[i].split("=");
			map[kv[0]] = kv[1]
		}
		MUSIC.object.extend(default_data, map || {})
	}
	default_data.outCharset = typeof charset != "string" ? MUSIC.config.defaultDataCharacterSet : charset;
	default_data.g_tk = getACSRFToken();
	this.data = default_data;
	this.proxyURL = typeof charset == "string" && charset.toUpperCase() == "UTF-8" ? MUSIC.config.FSHelperPage.replace(/_gbk/, "_utf8") : MUSIC.config.FSHelperPage;
	this._sender = null;
	this.onSuccess = MUSIC.emptyFn;
	this.onError = MUSIC.emptyFn;
	this.startTime = +new Date
};
MUSIC.FormSender.instance = {};
MUSIC.FormSender.counter = 0;
MUSIC.FormSender._errCodeMap = {
	999: {
		msg: "Connection or Server error"
	}
};
MUSIC.FormSender.pluginsPool = {
	"formHandler": []
};
MUSIC.FormSender._pluginsRunner = function(pType, data) {
	var _s = MUSIC.FormSender,
		l = _s.pluginsPool[pType],
		t = data,
		len;
	if (l && (len = l.length))
		for (var i = 0; i < len; ++i)
			if (typeof l[i] == "function") t = l[i](t);
	return t
};
MUSIC.FormSender.prototype.send = function() {
	if (this.method == "POST" && this.data == null) return false;
	document.domain = "qq.com";
	this.setReportRate && this.setReportRate(1);

	function clear(o) {
		o._sender = o._sender.callback = o._sender.errorCallback = o._sender.onreadystatechange = null;
		if (MUSIC.userAgent.safari || MUSIC.userAgent.opera) setTimeout('MUSIC.dom.removeElement(document.getElementById("_fp_frm_' + o.name + '"))', 50);
		else MUSIC.dom.removeElement(document.getElementById("_fp_frm_" + o.name));
		o.endTime = +new Date;
		MUSIC.FormSender._pluginsRunner("onRequestComplete",
			o);
		o.instanceForm = null
	}
	if (this._sender === null || this._sender === void 0) {
		var sender = document.createElement("iframe");
		sender.id = "_fp_frm_" + this.name;
		sender.style.cssText = "width:0;height:0;border-width:0;display:none;";
		document.body.appendChild(sender);
		sender.callback = MUSIC.event.bind(this, function(o) {
			clearTimeout(timer);
			this.onSuccess(o);
			this.resultArgs = arguments;
			clear(this)
		});
		sender.errorCallback = MUSIC.event.bind(this, function(o) {
			clearTimeout(timer);
			this.onError(o);
			this.resultArgs = arguments;
			clear(this)
		});
		if (typeof sender.onreadystatechange != "undefined") sender.onreadystatechange = MUSIC.event.bind(this, function() {
			if (this._sender.readyState == "complete" && this._sender.submited) {
				clear(this);
				this.onError(MUSIC.FormSender._errCodeMap[999])
			}
		});
		else var timer = setTimeout(MUSIC.event.bind(this, function() {
				try {
					var _t = this._sender.contentWindow.location.href;
					if (_t.indexOf(this.uri) == 0) {
						clearTimeout(timer);
						clear(this);
						this.onError(MUSIC.FormSender._errCodeMap[999])
					}
				} catch (err) {
					clearTimeout(timer);
					clear(this);
					this.onError(MUSIC.FormSender._errCodeMap[999])
				}
			}),
			200);
		this._sender = sender
	}
	this._sender.src = this.proxyURL;
	return true
};
MUSIC.FormSender.prototype.destroy = function() {
	var n = this.name;
	delete MUSIC.FormSender.instance[n]._sender;
	MUSIC.FormSender.instance[n]._sender = null;
	delete MUSIC.FormSender.instance[n];
	MUSIC.FormSender.counter--;
	return null
};
MUSIC.JsLoader = function(isDebug) {
	this.debug = isDebug || MUSIC.config.debugLevel > 1;
	this.onload = MUSIC.emptyFn;
	this.onerror = MUSIC.emptyFn
};
MUSIC.JsLoader.prototype.load = function(src, doc, opt) {
	var opts = {},
		t = typeof opt,
		o = this;
	if (t == "string") opts.charset = opt;
	else if (t == "object") opts = opt;
	opts.charset = opts.charset || "gb2312";
	setTimeout(function() {
		o._load.apply(o, [src, doc || document, opts]);
		o = null
	}, 0)
};
MUSIC.JsLoader.count = 0;
MUSIC.JsLoader._idleInstancesIDQueue = [];
MUSIC.JsLoader.prototype._load = function(src, doc, opts) {
	var _ie = MUSIC.userAgent.ie,
		_doc = document,
		o = this,
		tmp, k, idp = MUSIC.JsLoader._idleInstancesIDQueue,
		_rm = MUSIC.dom.removeElement,
		_ae = MUSIC.event.addEvent,
		docMode = _doc.documentMode,
		_new = false,
		_js;
	if (!(_js = document.getElementById(idp.pop())) || MUSIC.userAgent.ie && MUSIC.userAgent.ie > 8) {
		_js = doc.createElement("script");
		_js.id = "_qz_jsloader_" + ++MUSIC.JsLoader.count;
		_new = true
	}
	_ae(_js, _ie && _ie < 10 ? "readystatechange" : "load", function() {
		if (!_js || _ie && (_ie < 10 && (typeof docMode ==
				"undefined" || docMode < 10 ? _js.readyState != "loaded" : _js.readyState != "complete"))) return;
		_ie && idp.push(_js.id);
		_js._inUse = false;
		o.onload();
		!_ie && _rm(_js);
		_js = _ae = o = null
	});
	if (!_ie) _ae(_js, "error", function() {
		_ie && idp.push(_js.id);
		_js._inUse = false;
		o.onerror();
		!_ie && _rm(_js);
		_js = _ae = o = null
	});
	for (k in opts)
		if (typeof(tmp = opts[k]) == "string" && k.toLowerCase() != "src") _js.setAttribute(k, tmp);
	_new && doc.getElementsByTagName("head")[0].appendChild(_js);
	_js._inUse = true;
	_js.src = src;
	opts = null
};
MUSIC["js" + "Loader"] = MUSIC.JsLoader;
MUSIC.JSONGetter = function(actionURL, cname, data, charset, junctionMode) {
	if (MUSIC.object.getType(cname) != "string") cname = "_jsonInstence_" + (MUSIC.JSONGetter.counter + 1);
	var prot = MUSIC.JSONGetter.instance[cname];
	if (prot instanceof MUSIC.JSONGetter);
	else {
		MUSIC.JSONGetter.instance[cname] = prot = this;
		MUSIC.JSONGetter.counter++;
		prot._name = cname;
		prot._sender = null;
		prot._timer = null;
		this.onSuccess = MUSIC.emptyFn;
		this.onError = MUSIC.emptyFn;
		this.onTimeout = MUSIC.emptyFn;
		this.timeout = 5E3;
		this.clear = MUSIC.emptyFn;
		this._baseClear =
			function() {
				this._waiting = false;
				this._squeue = [];
				this._equeue = [];
				this.onSuccess = this.onError = MUSIC.emptyFn;
				this.clear = null
			}
	}
	if (typeof actionURL == "string")
		if (actionURL.indexOf("g_tk=") < 0) {
			var jsRE = /\.(js|json)$/i;
			var sw, pn;
			pn = (sw = actionURL.indexOf("?") > -1) ? actionURL.split("?")[0] : actionURL;
			if (jsRE.lastIndex = 0, !jsRE.test(pn)) actionURL += (sw ? "&" : "?") + "g_tk=" + getACSRFToken()
		}
	prot._uri = actionURL;
	prot._charset = MUSIC.object.getType(charset) != "string" ? MUSIC.config.defaultDataCharacterSet : charset;
	var default_data = {
		loginUin: g_user.getUin() || 0,
		hostUin: 0,
		format: "jsonp",
		inCharset: "GB2312",
		outCharset: "GB2312",
		notice: 0,
		platform: "yqq",
		jsonpCallback: "MusicJsonCallback",
		needNewCode: 0
	};
	if (MUSIC.object.getType(data) == "object") MUSIC.object.extend(default_data, data || {});
	else if (MUSIC.object.getType(data) == "string") {
		var map = {},
			arr = data.split("&");
		for (var i = 0, l = arr.length; i < l; i++) {
			var kv = arr[i].split("=");
			map[kv[0]] = kv[1]
		}
		MUSIC.object.extend(default_data, map || {})
	}
	default_data.outCharset = prot._charset;
	prot._data = default_data;
	prot._jMode = !!junctionMode;
	return prot
};

function getACSRFToken() {
	function _DJB(str) {
		var hash = 5381;
		for (var i = 0, len = str.length; i < len; ++i) hash += (hash << 5) + str.charCodeAt(i);
		return hash & 2147483647
	}
	return _DJB(getCookie("skey") == "" ? getCookie("qqmusic_key") : getCookie("skey"))
}
MUSIC.JSONGetter.instance = {};
MUSIC.JSONGetter.counter = 0;
MUSIC.JSONGetter._errCodeMap = {
	999: {
		msg: "Connection or Server error."
	},
	998: {
		msg: "Connection to Server timeout."
	}
};
MUSIC.JSONGetter.genHttpParamString = function(o) {
	var r = [];
	for (var i in o) r.push(i + "=" + encodeURIComponent(o[i]));
	return r.join("&")
};
MUSIC.JSONGetter.prototype.addOnSuccess = function(f) {
	if (typeof f == "function") {
		if (this._squeue && this._squeue.push);
		else this._squeue = [];
		this._squeue.push(f)
	}
};
MUSIC.JSONGetter._runFnQueue = function(q, resultArgs, th) {
	var f;
	if (q && q.length)
		while (q.length > 0) {
			f = q.shift();
			if (typeof f == "function") f.apply(th ? th : null, resultArgs)
		}
	th.endTime = +new Date;
	th.resultArgs = resultArgs;
	MUSIC.JSONGetter._pluginsRunner("onRequestComplete", th)
};
MUSIC.JSONGetter.prototype.addOnError = function(f) {
	if (typeof f == "function") {
		if (this._equeue && this._equeue.push);
		else this._equeue = [];
		this._equeue.push(f)
	}
};
MUSIC.JSONGetter.pluginsPool = {
	"srcStringHandler": [],
	"onErrorHandler": [],
	"onRequestComplete": []
};
MUSIC.JSONGetter._pluginsRunner = function(pType, data) {
	var _s = MUSIC.JSONGetter,
		l = _s.pluginsPool[pType],
		t = data,
		len;
	if (l && (len = l.length))
		for (var i = 0; i < len; ++i)
			if (typeof l[i] == "function") t = l[i](t);
	return t
};
MUSIC.JSONGetter.prototype.send = function(callbackFnName) {
	if (this._waiting) return;
	var clear, cfn = MUSIC.object.getType(callbackFnName) != "string" ? "callback" : callbackFnName,
		da = this._uri;
	if (this._data) {
		this._data.jsonpCallback = cfn;
		da += (da.indexOf("?") < 0 ? "?" : "&") + (typeof this._data == "object" ? MUSIC.JSONGetter.genHttpParamString(this._data) : this._data)
	}
	da = MUSIC.JSONGetter._pluginsRunner("srcStringHandler", da);
	this.startTime = +new Date;
	this.setReportRate && this.setReportRate(1);
	if (this._jMode) {
		window[cfn] = this.onSuccess;
		var _sd = new MUSIC.JsLoader;
		_sd.onerror = this.onError;
		_sd.load(da, void 0, this._charset);
		return
	}
	this._timer = setTimeout(function(th) {
		return function() {
			th.onTimeout()
		}
	}(this), this.timeout);
	if (MUSIC.userAgent.ie && (MUSIC.userAgent.ie < 10 && !(MUSIC.userAgent.beta && navigator.appVersion.indexOf("Trident/4.0") > -1))) {
		var df = document.createDocumentFragment(),
			sender = (MUSIC.userAgent.ie > 8 ? document : df).createElement("script");
		sender.charset = this._charset;
		this._senderDoc = df;
		this._sender = sender;
		this.clear = clear = function(o) {
			clearTimeout(o._timer);
			if (o._sender) o._sender.onreadystatechange = null;
			df["callback"] = df["_Callback"] = df[cfn] = null;
			df = o._senderDoc = o._sender = null;
			o._baseClear()
		};
		df["callback"] = df["_Callback"] = df[cfn] = function(th) {
			return function() {
				th._waiting = false;
				th.onSuccess.apply(th, arguments);
				MUSIC.JSONGetter._runFnQueue(th._squeue, arguments, th);
				clear(th)
			}
		}(this);
		if (MUSIC.userAgent.ie < 9) sender.onreadystatechange = function(th) {
			return function() {
				if (th._sender && th._sender.readyState == "loaded") try {
					th._onError()
				} catch (ignore) {}
			}
		}(this);
		else sender.onerror = function(th) {
			return function() {
				try {
					th._onError()
				} catch (ignore) {}
			}
		}(this);
		this._waiting = true;
		df.appendChild(sender);
		this._sender.src = da
	} else {
		this.clear = clear = function(o) {
			clearTimeout(o._timer);
			o._baseClear()
		};
		window[cfn] = function() {
			MUSIC.JSONGetter.args = arguments
		};
		var callback = function(th) {
			return function() {
				th.onSuccess.apply(th, MUSIC.JSONGetter.args);
				MUSIC.JSONGetter._runFnQueue(th._squeue, MUSIC.JSONGetter.args, th);
				MUSIC.JSONGetter.args = [];
				clear(th)
			}
		}(this);
		var _ecb = function(th) {
			return function() {
				th._waiting =
					false;
				var _eo = MUSIC.JSONGetter._errCodeMap[999];
				th.onError(_eo);
				MUSIC.JSONGetter._runFnQueue(th._equeue, [_eo], th);
				clear(th)
			}
		}(this);
		var h = document.getElementsByTagName("head"),
			node;
		h = h && h[0] || document.body;
		if (!h) return;
		var baseElement = h.getElementsByTagName("base")[0];
		node = document.createElement("script");
		node.charset = this._charset || "utf-8";
		node.onload = function() {
			this.onload = null;
			if (node.parentNode) h.removeChild(node);
			callback();
			node = void 0
		};
		node.onerror = function() {
			this.onerror = null;
			_ecb()
		};
		node.src =
			da;
		baseElement ? h.insertBefore(node, baseElement) : h.appendChild(node)
	}
};
MUSIC.JSONGetter.prototype.destroy = function() {
	var n = this._name;
	delete MUSIC.JSONGetter.instance[n]._sender;
	MUSIC.JSONGetter.instance[n]._sender = null;
	delete MUSIC.JSONGetter.instance[n];
	MUSIC.JSONGetter.counter--;
	return null
};

function JsonLoadData(url, callback, errcallback, callbackFunctionName, charset) {
	var j = new MUSIC.JSONGetter(url, callbackFunctionName, null, charset, !(ua.ie >= 9));
	j.onSuccess = callback;
	j.onError = errcallback;
	j.onTimeout = errcallback;
	j.send(callbackFunctionName)
}
MUSIC.lazyLoad = function() {
	var _timer = null,
		_elems = [],
		_count = 0,
		_options = {
			container: document,
			binder: null,
			windowElem: document.documentElement,
			frame: null,
			srcname: "_src",
			funcname: "_func",
			threshold: 0,
			delay: 100,
			defaultImg: "http://imgcache.qq.com/music/musicbox_v3/img/pics/default.gif",
			errImg: "http://imgcache.qq.com/mediastyle/y/img/cover_mine_130.jpg",
			tagNames: ["img", "iframe"],
			name: "btnlazyload"
		},
		$ = MUSIC,
		$C = $.css,
		$D = $.dom,
		$E = $.event;

	function _setOptions(options) {
		$.object.extend(_options, options || {})
	}

	function _onChange() {
		if (_timer !=
			null) return;
		_timer = setTimeout(_load, _options.delay)
	}

	function _isVisible(range, e) {
		var b = $D.getPosition(e);
		if (range.left <= b.right && (b.left <= range.right && (range.top <= b.bottom && b.top <= range.bottom))) return true;
		return false
	}

	function _load() {
		if (_count < 1) {
			_dispose();
			return
		}
		var _thres = _options.threshold;
		var _ch = $D.getClientHeight(_options.windowElem),
			_cw = $D.getClientWidth(_options.windowElem),
			_sl = $D.getScrollLeft(_options.windowElem),
			_st = $D.getScrollTop(_options.windowElem),
			range = {
				left: _sl - _thres,
				right: _sl +
					_cw + _thres,
				top: _st - _thres,
				bottom: _st + _ch + _thres
			};
		for (var i = 0, j = _elems.length; i < j; i++) {
			if (!_elems[i]) continue;
			if (_isVisible(range, _elems[i])) {
				var _elem = _elems[i],
					_src = _elem.getAttribute(_options.srcname),
					_w = parseInt(_elem.getAttribute("maxW")),
					_h = parseInt(_elem.getAttribute("maxH")),
					_func = _elem.getAttribute(_options.funcname);
				if (!!_src) {
					$E.on(_elem, "error", function(ele, img) {
						return function() {
							ele.src = img
						}
					}(_elem, _options.errImg));
					_elem.removeAttribute(_options.srcname);
					if (_w > 0 && _h > 0) MUSIC.media.adjustImageSize(_elem,
						_src, _w, _h);
					else _elem.src = _src;
					delete _elems[i];
					_count--;
					continue
				}
				if (!!_func) {
					eval(_func);
					_elem.removeAttribute(_options.funcname);
					delete _elems[i];
					_count--
				}
			}
		}
		if (_timer != null) {
			clearTimeout(_timer);
			_timer = null
		}
	}

	function init(options) {
		_setOptions(options);
		_addItems(_options.container)
	}

	function _addItems(container) {
		var _elems_tmp = [];
		$.object.each(_options.tagNames, function(tagName) {
			var _list_tmp = container.getElementsByTagName(tagName);
			$.object.each(_list_tmp, function(_e) {
				if (!!_e && ($.lang.isNode(_e) &&
						(_e.getAttribute(_options.srcname) && !_e.getAttribute("src")))) {
					_elems.push(_e);
					_elems_tmp.push(_e);
					_count++
				}
			})
		});
		var _list_tmp = document.getElementsByName(_options.name);
		$.object.each(_list_tmp, function(_e) {
			if (!!_e && ($.lang.isNode(_e) && _e.getAttribute(_options.funcname))) {
				_elems.push(_e);
				_count++
			}
		});
		var defaultImg = new Image;
		$E.on(defaultImg, "load", function(els, img) {
			return function() {
				$.object.each(els, function(e) {
					if (e && (e.tagName.toUpperCase() == "IMG" && e.getAttribute(_options.srcname))) e.src = img
				})
			}
		}(_elems_tmp,
			_options.defaultImg));
		defaultImg.src = _options.defaultImg;
		$E.on(_options.binder, "scroll", _onChange);
		_load()
	}

	function _dispose() {
		if (_timer != null) {
			clearTimeout(_timer);
			_timer = null
		}
		_elems = [];
		$E.removeEvent(_options.binder, "scroll", _onChange)
	}
	return {
		init: init,
		addItems: _addItems
	}
}();
MUSIC.UserData = function(doc, times) {
	doc = doc || document;
	try {
		this.normalDB = "qqmusicuserdata";
		this.error = false;
		if (ua.ie) {
			var id = "udLink";
			this.UD = doc.getElementById(id);
			if (!this.UD) {
				this.UD = doc.createElement("script");
				this.UD.id = id;
				doc.getElementsByTagName("head")[0].appendChild(this.UD);
				try {
					UDiID = this.UD.addBehavior("#default#userdata")
				} catch (e) {
					this.error = true;
					return
				}
			}
			var expiresDate = new Date;
			if (!times) {
				var hour = 24 - expiresDate.getHours();
				times = hour * 3600 * 1E3
			}
			expiresDate.setTime(expiresDate.getTime() + times);
			this.UD.expires = expiresDate.toUTCString();
			try {
				this.UD.load(this.normalDB)
			} catch (e) {
				this.UD.save(this.normalDB)
			}
		}
	} catch (e) {
		this.error = true
	}
};
MUSIC.UserData.prototype.clear = function(sStoreName) {
	try {
		if (this.error) return false;
		if (ua.ie) {
			sStoreName = !sStoreName ? this.normalDB : sStoreName;
			this.UD.load(sStoreName);
			this.UD.expires = (new Date(315532799E3)).toUTCString();
			this.UD.save(sStoreName)
		}
	} catch (e) {
		this.error = true
	}
};
MUSIC.UserData.prototype.remove = function(key, sStoreName) {
	try {
		if (ua.ie) {
			sStoreName = !sStoreName ? this.normalDB : sStoreName;
			this.UD.setAttribute(key, null);
			this.UD.save(sStoreName)
		} else if (window.sessionStorage) sessionStorage.removeItem(key)
	} catch (e) {
		this.error = true
	}
};
MUSIC.UserData.prototype.save = function(key, value, sStoreName) {
	try {
		if (this.error) return false;
		if (ua.ie) {
			sStoreName = !sStoreName ? this.normalDB : sStoreName;
			this.UD.load(sStoreName);
			this.UD.setAttribute(key, value);
			this.UD.save(sStoreName)
		} else if (window.sessionStorage) sessionStorage.setItem(key, value)
	} catch (e) {
		this.error = true
	}
};
MUSIC.UserData.prototype.load = function(key, sStoreName) {
	try {
		if (this.error) return "";
		if (ua.ie) {
			sStoreName = !sStoreName ? this.normalDB : sStoreName;
			this.UD.load(sStoreName);
			return this.UD.getAttribute(key)
		} else if (window.sessionStorage) return sessionStorage.getItem(key)
	} catch (e) {
		this.error = true;
		return ""
	}
};
MUSIC.widget.other = {
	jumpWithKey: function(url) {
		window.open(url)
	},
	jumpMiniblogWithLogin: function(url) {
		window.open(url)
	},
	jumpPiaoWithLogin: function(url) {
		jumpWithKey(url)
	},
	jumpQzoneMusic: function(channel, hostuin) {
		var url = "http://ptlogin2.qq.com/musicbox?keyindex=14&url=" + channel;
		if (!!hostuin) url += "&hostuin=" + hostuin;
		if (window.open(url) == null) alert("\u5f39\u51fa\u7a97\u53e3\u88ab\u963b\u6b62\uff01\u8bf7\u53d6\u6d88\u62e6\u622a\u7a97\u53e3\u8bbe\u7f6e\uff01")
	},
	jumpILike: function() {
		this.jumpQzoneMusic("music_lovelist")
	},
	jumpSupport: function() {
		window.open("http://support.qq.com/discuss/602_1.shtml")
	}
};
var g_other = MUSIC.widget.other;
var jumpWithKey = g_other.jumpWithKey;
var jumpMiniblogWithLogin = g_other.jumpMiniblogWithLogin;
var jumpPiaoWithLogin = g_other.jumpPiaoWithLogin;
var jumpQzoneMusic = g_other.jumpQzoneMusic;
var jumpSupport = g_other.jumpSupport;

function showPlayActionDialog(song) {
	top.showMsg(song)
}

function isObjectString(str) {
	return /^(\{|\[).*(\}|\])$/.test(str)
}

function makePlayTime(t) {
	if (t != 0) {
		var mins = parseInt(t / 60, 10),
			secs = parseInt(t % 60, 10);
		return (mins > 9 ? "" : "0") + mins + ":" + (secs > 9 ? "" : "0") + secs
	} else return "--:--"
}
MUSIC.widget.trackServ = {
	getSongData: function(elm) {
		var re = new RegExp('<\\w[^>]+class="?data"?[^>]*>(.*?)<\\/\\w[^>]*>', "i");
		var songdata = "";
		if ((songdata = re.exec(elm.innerHTML.replace(/&amp;/g, "&"))) != null) songdata = songdata[1];
		return JSON.parse(songdata.trim())
	},
	formatMusic: function(songdata) {
		if (typeof songdata == "string" && isObjectString(songdata)) try {
			songdata = JSON.parse(songdata)
		} catch (e) {}
		if (typeof songdata == "object") {
			if (songdata.formatted) return songdata;
			if (songdata.nodeType == 1) songdata = this.getSongData(songdata);
			var song_switch = songdata["switch"].toString(2).split("");
			song_switch.pop();
			song_switch.reverse();
			var actions = ["play_lq", "play_hq", "play_sq", "down_lq", "down_hq", "down_sq", "soso", "fav", "share", "bgm", "ring", "sing", "radio", "try", "give"];
			songdata.action = {};
			for (var i = 0; i < actions.length; i++) songdata.action[actions[i]] = parseInt(song_switch[i], 10) || 0;
			songdata.pay = songdata.pay || {};
			songdata.preview = songdata.preview || {};
			songdata.time = makePlayTime(songdata.interval);
			songdata.action.play = 0;
			if (songdata.action.play_lq ||
				(songdata.action.play_hq || (songdata.action.play_sq || songdata.songtype % 10 == 5))) songdata.action.play = 1;
			songdata.tryPlay = 0;
			if (songdata.action["try"] && (songdata.preview && songdata.preview.trysize)) songdata.tryPlay = 1;
			songdata.anyPlay = 0;
			if (songdata.action.play || songdata.tryPlay) songdata.anyPlay = 1;
			songdata.tryIcon = 0;
			songdata.disabled = 0;
			if (!songdata.action.play && (!songdata.pay || !songdata.pay.payplay))
				if (songdata.tryPlay) songdata.tryIcon = 1;
				else songdata.disabled = 1;
			songdata.sosoFlag = 0;
			if (songdata.action.soso ||
				songdata.type != 0) songdata.sosoFlag = 1;
			songdata.formatted = 1;
			songdata.mtype = songdata.type != 0 ? "net" : "qqmusic";
			if (songdata.type == 0 && songdata.action.soso == 1) {
				songdata.type = 3;
				songdata.mtype = "net";
				songdata.songurl = ""
			}
			if (songdata.mtype == "qqmusic") songdata.songurl = "";
			songdata.songtype == 35 && (songdata.songurl += "&fx=.m4a")
		}
		return songdata
	},
	formatMusic_Soso: function(songdata) {},
	showSingleSong: function(obj, subtype) {
		MUSIC.event.cancelBubble();
		pageHotClick();
		var _music = null;
		try {
			_music = this.formatMusic(obj.parentNode.parentNode)
		} catch (e) {
			_music =
				this.formatMusic(obj.parentNode.parentNode.parentNode)
		}
		if (_music.mtype == "qqmusic" && (parseInt(_music.size128) <= 0 || parseInt(_music.interval) <= 0)) {
			this.play(obj, subtype);
			return
		}
		if (_music.mtype == "net") {
			this.play(obj, subtype);
			return
		}
		if (parseInt(_music.songid) <= 0) {
			this.play(obj, subtype);
			return
		}
		if (!subtype) subtype = obj.getAttribute("stat");
		pgvClickStat("showSingleSong", subtype);
		setTimeout(function() {
				window.location.href = "http://i.y.qq.com/s.plcloud/fcgi-bin/fcg_yqq_song_detail_info_cp.fcg?songmid=" + _music.songmid
			},
			0)
	},
	play: function(obj, subtype) {
		MUSIC.event.cancelBubble();
		pageHotClick();
		var _music = null;
		try {
			_music = g_trackServ.formatMusic(obj.parentNode.parentNode)
		} catch (e) {
			_music = g_trackServ.formatMusic(obj.parentNode.parentNode.parentNode)
		}
		if (_music.mtype == "qqmusic" && !_music.anyPlay) {
			showPlayActionDialog(_music);
			return
		}
		if (!!_music.songurl && (_music.songtype % 10 != 5 && (!/(\.m4a)|(\.mp3)/i.test(_music.songurl) && !/share\.weiyun\.qq\.com/i.test(_music.songurl)))) {
			g_popup.show(1, "\u6b4c\u66f2\u64ad\u653e\u5931\u8d25\uff01",
				"\u5f88\u62b1\u6b49\uff0cQQ\u97f3\u4e50\u6682\u4e0d\u63d0\u4f9b\u6b64\u683c\u5f0f\u7684\u6b4c\u66f2\u670d\u52a1\u3002", "", 5E3, 360);
			return
		}
		if (!subtype) subtype = obj.getAttribute("stat");
		top.g_topPlayer.add([_music], true);
		pgvClickStat("playone", subtype)
	},
	add: function(obj, subtype) {
		MUSIC.event.cancelBubble();
		pageHotClick();
		var _music = null;
		try {
			_music = this.formatMusic(obj.parentNode.parentNode)
		} catch (e) {
			_music = this.formatMusic(obj.parentNode.parentNode.parentNode)
		}
		if (_music.mtype == "qqmusic" && !_music.anyPlay) {
			showPlayActionDialog(_music);
			return
		}
		if (!!_music.songurl && (_music.songtype % 10 != 5 && (!/(\.m4a)|(\.mp3)/i.test(_music.songurl) && !/share\.weiyun\.qq\.com/i.test(_music.songurl)))) {
			g_popup.show(1, "\u6b4c\u66f2\u64ad\u653e\u5931\u8d25\uff01", "\u5f88\u62b1\u6b49\uff0cQQ\u97f3\u4e50\u6682\u4e0d\u63d0\u4f9b\u6b64\u683c\u5f0f\u7684\u6b4c\u66f2\u670d\u52a1\u3002", "", 5E3, 360);
			return
		}
		if (!subtype) subtype = obj.getAttribute("stat");
		top.g_topPlayer.add([_music], false);
		pgvClickStat("addone", subtype || "")
	},
	shareMusic: function(obj, subtype) {
		MUSIC.event.cancelBubble();
		pageHotClick();
		var _music = null;
		if (typeof obj.songname != "undefined") _music = obj;
		else {
			try {
				_music = this.formatMusic(obj.parentNode.parentNode)
			} catch (e) {
				_music = this.formatMusic(obj.parentNode.parentNode.parentNode)
			}
			if (!subtype) subtype = obj.getAttribute("stat")
		}
		top.g_dialog.show({
			mode: "iframe",
			title: "",
			url: MUSIC.config.tipsPath + "y_share_music.html",
			objArg: _music
		});
		pgvClickStat("share", subtype || "")
	},
	like: function(obj, subtype) {
		MUSIC.event.cancelBubble();
		var _music = null;
		if (typeof obj.songmid != "undefined") _music =
			obj;
		else try {
			_music = this.formatMusic(obj.parentNode.parentNode)
		} catch (e) {
			_music = this.formatMusic(obj.parentNode.parentNode.parentNode)
		}
		var uin = g_user.getUin();
		if (uin < 10001) {
			g_user.openLogin();
			return
		}
		if (obj.className == "btn_like") {
			top.g_mymusicAlbumMod.Song.like(_music.songmid, 3, function() {
				obj.className = "btn_liked";
				obj.title = "\u53d6\u6d88\u559c\u6b22";
				try {
					top.g_topPlayer.updateSongLike(_music.songmid, 1)
				} catch (e) {}
			});
			if (!subtype) subtype = obj.getAttribute("stat");
			pgvClickStat("like", subtype || "")
		} else {
			top.g_mymusicAlbumMod.Song.unlike(_music.songmid,
				3,
				function() {
					obj.className = "btn_like";
					obj.title = "\u559c\u6b22";
					try {
						top.g_topPlayer.updateSongLike(_music.songmid, 0)
					} catch (e) {}
				});
			if (!subtype) subtype = obj.getAttribute("stat");
			pgvClickStat("unlike", subtype || "")
		}
	},
	fav: function(obj, dirinfo, subtype) {
		MUSIC.event.cancelBubble();
		pageHotClick();
		var _music = null;
		if (typeof obj.songmid != "undefined") _music = obj;
		else {
			try {
				_music = this.formatMusic(obj.parentNode.parentNode)
			} catch (e) {
				_music = this.formatMusic(obj.parentNode.parentNode.parentNode)
			}
			if (!subtype) subtype = obj.getAttribute("stat")
		}
		var uin =
			g_user.getUin();
		if (uin < 10001) {
			g_user.openLogin();
			return
		}
		top.g_mymusicAlbumMod.addSongs2Dir({
			uin: uin,
			midlist: _music.songmid,
			typelist: "13",
			dirid: dirinfo.dirid
		}, function() {});
		pgvClickStat("fav", subtype || "")
	},
	initSongList: function(elem, tag) {
		elem = MUSIC.dom.get(elem);
		var classHover = "play_hover";
		if (typeof tag == "undefined") {
			tag = "li";
			classHover = "play_hover"
		} else classHover = "row_hover";
		var _list = [];
		if (elem) _list = [elem];
		else _list = MUSIC.dom.getElementsByClassName("class_songlist", "div", document);
		MUSIC.object.each(_list,
			function(_elem) {
				var _es = _elem.getElementsByTagName(tag);
				MUSIC.object.each(_es, function(e) {
					var _count = MUSIC.dom.getElementsByClassName("count", "span", e)[0];
					e.onmouseover = function() {
						MUSIC.css.addClassName(e, classHover);
						_count && (_count.style.display = "none")
					};
					e.onmouseout = function() {
						if (!MUSIC.css.hasClassName(e, "class_fav")) {
							MUSIC.css.removeClassName(e, classHover);
							_count && (_count.style.display = "inline-block")
						}
					};
					try {
						e.draggable = "true";
						MUSIC.event.addEvent(e, "dragstart", function(evt) {
							try {
								evt.dataTransfer.dropEffect =
									"move";
								var dragicon = document.createElement("img");
								evt.dataTransfer.setDragImage(dragicon, -10, -10);
								top["drag_songinfo"] = MUSIC.dom.getElementsByClassName("data", null, e)[0].innerHTML || "";
								if (top["drag_songinfo"] != "") top["drag_songinfo"] = top["drag_songinfo"].unescapeHTML();
								top.g_topPlayer.showDragTips()
							} catch (e) {}
						});
						MUSIC.event.addEvent(e, "dragend", function(evt) {
							try {
								top["drag_songinfo"] = "";
								top.g_topPlayer.hideDragTips()
							} catch (e) {}
						})
					} catch (e) {}
				});
				_es = MUSIC.dom.getElementsByClassName("btn_play", "a", _elem);
				var _len = _es.length;
				for (var i = 0; i < _len; i++) _es[i].onclick = function(e) {
					return function() {
						g_trackServ.play(e)
					}
				}(_es[i]);
				_es = _es = MUSIC.dom.getElementsByClassName("btn_add", "a", _elem);
				_len = _es.length;
				for (var i = 0; i < _len; i++) _es[i].onclick = function(e) {
					return function() {
						g_trackServ.add(e)
					}
				}(_es[i]);
				_es = MUSIC.dom.getElementsByClassName("btn_share", "a", _elem);
				_len = _es.length;
				for (var i = 0; i < _len; i++) _es[i].onclick = function(e) {
					return function() {
						g_trackServ.shareMusic(e)
					}
				}(_es[i]);

				function _initLike(_map) {
					var _es =
						MUSIC.dom.getElementsByClassName("btn_like", "a", _elem);
					var _len = _es.length;
					for (var i = 0; i < _len; i++) {
						var _e = _es[i];
						_e.onclick = function(e) {
							return function() {
								pageHotClick();
								g_trackServ.like(e)
							}
						}(_e);
						var mid = _es[i].getAttribute("mid");
						if (!!_map && _map[mid]) {
							_e.className = "btn_liked";
							_e.title = "\u53d6\u6d88\u559c\u6b22"
						}
					}
				}
				var uin = g_user.getUin();
				if (uin > 1E4) try {
					top.g_mymusicAlbumMod.Song.getMyfavMap(uin, _initLike)
				} catch (e) {} else _initLike();
				var _collectFlag = false;
				_es = MUSIC.dom.getElementsByClassName("btn_fav",
					"a", _elem);
				var __len = _es.length;
				for (var i = 0; i < __len; i++) {
					var _e = _es[i];
					MUSIC.event.on(_e, "click", function() {
						if (!_collectFlag) {
							pageHotClick();
							_collectFlag = true
						}
					})
				}
				g_popup.init({
					container: MUSIC.lang.toArray(_es),
					class_mod: "pop_fav_music",
					selectTpl: '<div class="global_tip_content %(class_mod)"><h5>\u6536\u85cf\u5230\u6b4c\u5355\uff1a</h5><div class="pop_fav_music_more">%(content)</div></div>',
					optionTpl: '<li><a href="javascript:;">%(text)</a></li>',
					arrow: "top",
					eventType: "click",
					curIndex: -1,
					isToggle: 0,
					contents: function(callback) {
						var uin = g_user.getUin();
						if (uin < 10001) {
							pageHotClick();
							g_user.openLogin();
							return
						}
						top.g_mymusicAlbumMod.getList(uin, function(list) {
							var arr = [];
							for (var i = 0, len = list.length; i < len; i++) {
								var dirinfo = list[i];
								if (uin != dirinfo.owner.uin || dirinfo.dirid >= 201 && dirinfo.dirid <= 210) continue;
								arr.push({
									text: dirinfo.dirname,
									func: function(info) {
										return function(index, _elem, eTarget) {
											g_trackServ.fav(eTarget, info)
										}
									}(dirinfo)
								})
							}
							callback(arr)
						})
					},
					showCall: function(obj) {
						var obj = MUSIC.dom.searchChain(obj,
							null,
							function(elem) {
								if (elem.tagName && elem.tagName.toUpperCase() == tag.toUpperCase()) return true;
								else return false
							});
						if (obj) MUSIC.css.addClassName(obj, classHover + " class_fav")
					},
					hideCall: function(obj) {
						_collectFlag = false;
						var obj = MUSIC.dom.searchChain(obj, null, function(elem) {
							if (elem.tagName && elem.tagName.toUpperCase() == tag.toUpperCase()) return true;
							else return false
						});
						if (obj) MUSIC.css.removeClassName(obj, classHover + " class_fav")
					},
					setPosition: function(oElem, oTarget, width) {
						var $D = MUSIC.dom,
							_tPos = $D.getPosition(oTarget),
							_pos = {};
						_pos.width = width;
						if (_tPos.bottom + 188 > $D.getClientHeight()) {
							_pos.top = _tPos.bottom - 188;
							oElem.className = "global_tip_2";
							try {
								$D.getElementsByClassName("global_tip_arrow", "div", oElem)[0].style.left = "auto"
							} catch (e) {}
						} else {
							_pos.top = _tPos.bottom;
							oElem.className = "global_tip"
						}
						_pos.left = _tPos.right - _pos.width + 4;
						$D.setXY(oElem, _pos.left, _pos.top)
					}
				})
			})
	},
	getSongDataList: function(elem) {
		var _list = [],
			taylor = false;
		var ulList = elem.getElementsByTagName("li");
		try {
			for (var j = 0; j < ulList.length; j++) {
				var input = ulList[j].getElementsByTagName("input");
				var _music = this.formatMusic(ulList[j]);
				if (input.length > 0 && input[0].checked == false) continue;
				if (_music.mtype == "qqmusic" && _music.anyPlay) _music.songmid != "" && _list.push(_music);
				else if (_music.mtype == "qqmusic") !taylor && (taylor = _music);
				else _music.anyPlay && _list.push(_music)
			}
		} catch (ex) {
			if (_list.length <= 0) {
				ulList = elem.getElementsByTagName("ul");
				for (var j = 0; j < ulList.length; j++) {
					var input = ulList[j].getElementsByTagName("input");
					if (input.length > 0 && input[0].checked == false) continue;
					var _music = this.formatMusic(ulList[j]);
					if (_music.songmid != "") _list.push(_music)
				}
			}
		}
		return {
			list: _list,
			taylor: taylor
		}
	},
	select: function(e, bStatus) {
		e = MUSIC.dom.get(e);
		if (!e) return;
		try {
			var lstMusic = e.getElementsByTagName("input");
			for (var j = 0, length = lstMusic.length; j < length; j++)
				if (!lstMusic[j].disabled && (lstMusic[j].type && lstMusic[j].type == "checkbox")) lstMusic[j].checked = bStatus
		} catch (e) {}
	},
	playList: function(e, subtype) {
		MUSIC.event.cancelBubble();
		pageHotClick();
		e = MUSIC.dom.get(e);
		if (!e) return;
		var list = this.getSongDataList(e);
		if (list.list.length <=
			0) {
			if (!list.taylor) g_popup.show(1, "\u8bf7\u5148\u9009\u62e9\u6b4c\u66f2\uff01", "", 3E3, 300);
			else g_popup.show(1, "\u6e29\u99a8\u63d0\u793a", "\u62b1\u6b49\uff0c\u6682\u65e0\u53ef\u64ad\u653e\u7684\u6b4c\u66f2\uff01", 3E3, 450);
			return
		}
		if (list.taylor) g_popup.show(1, "\u6e29\u99a8\u63d0\u793a", "\u56e0\u7248\u6743\u539f\u56e0\uff0c\u81ea\u52a8\u8df3\u8fc7\u4ed8\u8d39\u6b4c\u66f2\uff01", 3E3, 450);
		top.g_topPlayer.add(list.list, true);
		pgvClickStat("playlist", subtype || "")
	},
	addList: function(e, subtype) {
		MUSIC.event.cancelBubble();
		pageHotClick();
		e = MUSIC.dom.get(e);
		if (!e) return;
		var list = this.getSongDataList(e);
		if (list.list.length <= 0) {
			if (!list.taylor) g_popup.show(1, "\u8bf7\u5148\u9009\u62e9\u6b4c\u66f2\uff01", "", 3E3, 300);
			else g_popup.show(1, "\u6e29\u99a8\u63d0\u793a", "\u62b1\u6b49\uff0c\u6682\u65e0\u53ef\u64ad\u653e\u7684\u6b4c\u66f2\uff01", 3E3, 450);
			return
		}
		if (list.taylor) g_popup.show(1, "\u6e29\u99a8\u63d0\u793a", "\u56e0\u7248\u6743\u539f\u56e0\uff0c\u81ea\u52a8\u8df3\u8fc7\u4ed8\u8d39\u6b4c\u66f2\uff01", 3E3, 450);
		top.g_topPlayer.add(list.list,
			false);
		pgvClickStat("addlist", subtype || "")
	},
	getSongButtonHtml: function(objMusic, stattype, needTry) {
		stattype = stattype || "";
		needTry = needTry || false;
		var obj = {};
		obj.btn_down = "";
		if (objMusic.disabled) {
			obj.btn_check = '<input type="checkbox" disabled />';
			obj.btn_play = '<a href="javascript:;" title="\u6682\u4e0d\u63d0\u4f9b\u6b64\u6b4c\u66f2\u670d\u52a1" class="btn_play_n">\u64ad\u653e</a>';
			obj.btn_add = '<a href="javascript:;" title="\u6682\u4e0d\u63d0\u4f9b\u6b64\u6b4c\u66f2\u670d\u52a1" class="btn_add_n">\u6dfb\u52a0</a>'
		} else {
			obj.btn_check =
				'<input type="checkbox" checked />';
			obj.btn_play = '<a href="javascript:;" title="\u64ad\u653e" class="btn_play" stat="' + stattype + '">\u64ad\u653e</a>';
			obj.btn_add = '<a href="javascript:;" title="\u6dfb\u52a0" class="btn_add" stat="' + stattype + '">\u6dfb\u52a0</a>'
		}
		if (objMusic.action.soso || objMusic.mtype == "net") obj.btn_soso = '<i class="icon_sosomusic" title="\u8be5\u6b4c\u66f2\u6765\u81ea\u7b2c\u4e09\u65b9\u7f51\u7ad9"></i>';
		else obj.btn_soso = "";
		if (objMusic.action.share) obj.btn_share = '<a href="javascript:;" title="\u5206\u4eab" class="btn_share" stat="' +
			stattype + '">\u5206\u4eab</a>';
		else obj.btn_share = '<a href="javascript:;" title="\u6682\u4e0d\u63d0\u4f9b\u6b64\u6b4c\u66f2\u670d\u52a1" class="btn_share_n">\u5206\u4eab</a>';
		if (objMusic.action.fav) {
			obj.btn_like = '<a href="javascript:;" mid="' + objMusic.songmid + '" title="\u559c\u6b22" class="btn_like" stat="' + stattype + '">\u559c\u6b22</a>';
			obj.btn_fav = '<a href="javascript:;" title="\u6536\u85cf\u5230\u6b4c\u5355" class="btn_fav" stat="' + stattype + '">\u6536\u85cf\u5230\u6b4c\u5355</a>'
		} else {
			obj.btn_like =
				'<a href="javascript:;" title="\u6682\u4e0d\u63d0\u4f9b\u6b64\u6b4c\u66f2\u670d\u52a1" class="btn_like_n">\u559c\u6b22</a>';
			obj.btn_fav = '<a href="javascript:;" title="\u6682\u4e0d\u63d0\u4f9b\u6b64\u6b4c\u66f2\u670d\u52a1" class="btn_fav_n">\u6536\u85cf\u5230\u6b4c\u5355</a>'
		}
		if (needTry && objMusic.tryIcon) obj.icon_try = '<a class="icon_try" title="\u8bd5\u542c" stat="' + stattype + '">\u8bd5\u542c</a>';
		else obj.icon_try = "";
		return obj
	},
	getAlbumInfoById: function(albummid, callback) {
		if (typeof albummid === "undefined" ||
			(typeof albummid !== "string" || (albummid == "" || albummid == "0"))) {
			throw "'albummid' has wrong type or value!";
			return
		}
		var s1 = albummid.substr(albummid.length - 2, 1),
			s2 = albummid.substr(albummid.length - 1, 1),
			cname = "albumSonglist" + +new Date,
			url = "http://i.y.qq.com/v8/fcg-bin/fcg_v8_album_info_cp.fcg?albummid=" + albummid,
			j = new MUSIC.JSONGetter(url, "albuminfo", {
				jsonpCallback: cname
			}, "utf-8", false);
		j.onSuccess = function(data) {
			if (callback) callback(data)
		};
		j.onTimeout = j.onError = function() {};
		j.send(cname)
	},
	playAlbum: function(albummid,
		subtype) {
		MUSIC.event.preventDefault();
		MUSIC.event.cancelBubble();
		pageHotClick();
		var _ = this;
		this.getAlbumInfoById(albummid, function(data) {
			var list = [],
				taylor = null;
			MUSIC.object.each(data.data.list, function(info) {
				var _music = _.formatMusic(info);
				if (_music.anyPlay) list.push(_music);
				else !taylor && (taylor = _music)
			});
			if (list.length == 0)
				if (taylor) g_popup.show(1, "\u6e29\u99a8\u63d0\u793a", "\u62b1\u6b49\uff0c\u6682\u65e0\u53ef\u64ad\u653e\u7684\u6b4c\u66f2\uff01", 3E3, 450);
				else showPlayActionDialog(taylor);
			else {
				if (taylor) g_popup.show(1,
					"\u6e29\u99a8\u63d0\u793a", "\u56e0\u7248\u6743\u539f\u56e0\uff0c\u81ea\u52a8\u8df3\u8fc7\u4ed8\u8d39\u6b4c\u66f2\uff01", 3E3, 450);
				top.g_topPlayer.add(list, true)
			}
		});
		pgvClickStat("playalbum", subtype || "")
	},
	showLyricTips: function(songid) {
		function dealXmlSucc(xmlHttp) {
			var xmlDom = xmlHttp.xmlDom,
				data = [],
				html_lyric = "";
			data.push('<div class="songlrc"><p>');
			var lyric_tag = xmlDom.getElementsByTagName("lyric");
			var origin_lyric = "";
			if (!!lyric_tag[0]) origin_lyric = lyric_tag[0].firstChild;
			else {
				dealXmlFail();
				return
			}
			if (origin_lyric) {
				origin_lyric =
					origin_lyric.nodeValue;
				html_lyric = origin_lyric.replace(/\[[^\[\]]*\]/g, "<p>").replace(/\n/g, "</p>").trim()
			}
			data.push(html_lyric);
			data.push("</p></div>");
			g_dialog.show({
				mode: "bigpage",
				title: "\u6b4c\u8bcd",
				desc: data.join("")
			})
		}

		function dealXmlFail() {
			g_popup.show(1, "\u6b4c\u8bcd\u4e0d\u5b58\u5728\uff01", "", 3E3, 200)
		}
		var ajax = new MUSIC.XHR("http://music.qq.com/miniportal/static/lyric/" + songid % 100 + "/" + songid + ".xml", "song_lyric", "get", null);
		ajax.onSuccess = dealXmlSucc;
		ajax.onError = dealXmlFail;
		ajax.send()
	},
	watchMv: function(vid, subtype) {
		window.open("http://y.qq.com/y/static/mv/mv_play.html?vid=" + vid.trim());
		pgvClickStat("mv", subtype || "")
	},
	sevQzoneBack: function(musicObj) {},
	getSongsCount: function(container, tagName, flag, index) {
		var _items = MUSIC.dom.getElementsByClassName("count", tagName, container);
		if (_items.length <= 0) return;
		if (typeof flag == "undefined") flag = false;
		if (typeof index == "undefined") index = 0;
		var thisIndex = 0;
		var idList = "";
		var midList = [];
		var j = index;
		for (j = index; j < _items.length && j - index < 200; j++) {
			var _music =
				this.formatMusic(_items[j].parentNode);
			if (j) idList += "|";
			idList += _music.songid;
			_music.songmid != "" && (_music.songmid != "0" && midList.push(_music.songmid))
		}
		if (j < _items.length) thisIndex = j;
		var cname = "songlisten" + +new Date;
		var url = "http://i.y.qq.com/s.plcloud/fcgi-bin/fcg_getsonglistenstatistic.fcg?utf8=1";
		if (midList.length > 0) url += "&songmidlist=" + midList.join("|") + "&_=" + Math.random();
		else url += "&songlist=" + idList + "&_=" + Math.random();
		var j = new MUSIC.JSONGetter(url, "songsCount", null, "utf-8", false);
		j.onSuccess =
			function(data) {
				if (!!data && data.code == 0) {
					var max_listen = 0;
					for (var i = 0; i < data.songlist.length; i++)
						if (data.songlist[i].count > max_listen) max_listen = data.songlist[i].count;
					for (var i = 0; i < data.songlist.length; i++) {
						if (!_items[i + index] || !_items[i + index].parentNode) continue;
						var _music = g_trackServ.formatMusic(_items[i + index].parentNode);
						var perCount = (isNaN(data.songlist[i].count) ? 0 : data.songlist[i].count) / max_listen * 100;
						var Count = isNaN(data.songlist[i].count) ? "\u6700\u65b0\u4e0a\u67b6" : data.songlist[i].count;
						if (!_music.action.play) {
							perCount = 0;
							Count = ""
						}
						if (tagName == "span" && !flag)
							if (!_music.action.play) _items[i + index].innerHTML = "0";
							else _items[i + index].innerHTML = isNaN(data.songlist[i].count) ? "\u6700\u65b0\u4e0a\u67b6" : data.songlist[i].count + "";
						else _items[i].innerHTML = '<strong style="width:' + perCount + '%;"></strong><span>' + Count + "</span>"
					}
					if (thisIndex) this.getSongsCount(container, tagName, flag, thisIndex)
				}
			};
		j.onError = function() {};
		j.send(cname)
	},
	jumpToMidPage: function(opt) {
		if (!opt) return false;
		opt.mid = opt.mid ||
			"";
		opt.pgv_ref = opt.pgv_ref || undefined;
		opt.play = opt.play || 0;
		var url = "http://i.y.qq.com/s.plcloud/fcgi-bin/fcg_id_jump_mid.fcg?g_tk=" + getACSRFToken(),
			p = typeof opt.singerid !== "undefined" && opt.singerid > 0 ? "singerid" : typeof opt.albumid !== "undefined" && opt.albumid > 0 ? "albumid" : "",
			j;
		if (p == "") return false;
		if (typeof opt.mid === "undefined" || (opt.mid === "" || opt.mid === "0")) {
			url += ["&", p, "=", opt[p]].join("");
			if (!!opt.parsm) url += "&parsm=" + opt.parsm
		} else {
			if (p === "singerid") url = g_mid.init({
				mid_flag: 1
			}).getSingerFile({
				id: opt.singerid,
				mid: opt.mid
			});
			else if (p === "albumid") url = g_mid.init({
				mid_flag: 1
			}).getAlbumFile({
				id: opt.albumid,
				mid: opt.mid
			});
			typeof opt.pgv_ref !== "undefined" && (url += (url.indexOf("?") > 0 ? "&" : "?") + "pgv_ref=" + opt.pgv_ref)
		}
		p === "albumid" && (url += (url.indexOf("?") > 0 ? "&" : "?") + "play=" + opt.play);
		window.location.href = url;
		return false
	},
	getParameter: function(url, name) {
		var r = new RegExp("(\\?|#|&)" + name + "=([^&#\\?]*)(&|#|$|\\?)");
		var m = url.match(r);
		if (!m || m == "") m = top.location.href.match(r);
		return !m ? "" : m[2]
	}
};
window.objectClone = function(obj, preventName, notDeep) {
	if (typeof obj == "object") {
		var res = Object.prototype.toString.call(obj) == "[object Array]" ? [] : {};
		for (var i in obj)
			if (i != preventName) res[i] = notDeep ? obj[i] : objectClone(obj[i], preventName, notDeep);
		return res
	} else if (typeof obj == "function") {
		var strFunc = obj.toString();
		return notDeep ? obj : new Function(strFunc.substring(strFunc.indexOf("{") + 1, strFunc.length - 1))
	}
	return obj
};
var g_trackServ = MUSIC.widget.trackServ;
MUSIC.widget.pager = {
	_currentPage: {},
	_totalPages: {},
	_indexContainer: {},
	_callback: {},
	_pager_tpl: ['<a href="javascript:;" class="%(className)" onclick="MUSIC.widget.pager.goToPage(%(cur),%(per),%(total),%(show),%(pages),\'%(ns)\');return false;">', "<span>%(tips)</span>%(inn)</a>%(other)"].join(""),
	get: function(params) {
		this._indexContainer[params.ns] = params.indexContainer;
		this._callback[params.ns] = params.callback;
		this._currentPage[params.ns] = 1;
		this._totalPages[params.ns] = 1;
		var obj = this;
		var ret = null;
		(function pageLoad() {
			try {
				obj._indexContainer[params.ns].innerHTML =
					obj.pageNo(params.total, params.curPage, params.perPage, params.index, params.ns).join("")
			} catch (e) {
				obj._indexContainer[params.ns].innerHTML = obj.pageNo(params.total, params.curPage, params.perPage, params.index, params.ns)
			}
		})();
		obj = null
	},
	pageNo: function(total, currentPage, perPage, showIndex, ns) {
		var showIndex = showIndex ? showIndex : 7,
			_index = Math.round(showIndex / 2),
			currentPage = parseInt(currentPage, 10) || 1,
			perPage = perPage ? perPage : 7,
			pages = 1;
		if (showIndex == 1) _index = 0;
		if (total / perPage > parseInt(total / perPage)) pages = parseInt(total /
			perPage) + 1;
		else pages = parseInt(total / perPage);
		if (pages == 1) return "";
		this._totalPages[ns] = pages;
		var pageIndex = [];
		this._currentPage[ns] = currentPage;
		pageIndex.push('<div class="mod_page">');
		if (currentPage > 1) pageIndex.push(this._pager_tpl.jstpl_format({
			cur: currentPage - 1,
			per: perPage,
			total: total,
			show: showIndex,
			pages: pages,
			ns: ns,
			tips: "",
			className: "prev",
			inn: "<span>&#60;</span></a>",
			other: ""
		}));
		pageIndex.push("");
		if (pages <= 2 * showIndex)
			for (var i = 1; i <= pages; i++)
				if (i == currentPage) pageIndex.push('<strong class="current">' +
					i + "</strong>");
				else pageIndex.push(this._pager_tpl.jstpl_format({
					cur: i,
					per: perPage,
					total: total,
					show: showIndex,
					pages: pages,
					ns: ns,
					tips: i,
					other: ""
				}));
		else {
			var b_OutputSpan = false;
			var e_OutputSpan = false;
			var startIndex;
			if (currentPage - _index < 1) startIndex = 1;
			else startIndex = currentPage - _index;
			var endIndex;
			if (currentPage + _index > pages) endIndex = pages;
			else endIndex = currentPage + _index;
			if (endIndex - startIndex < showIndex) endIndex = startIndex + showIndex > pages ? pages : startIndex + showIndex;
			if (endIndex - startIndex < showIndex) startIndex =
				endIndex - showIndex < 1 ? 1 : endIndex - showIndex;
			for (var i = startIndex; i <= endIndex; i++) {
				if (startIndex >= 2 && !b_OutputSpan) {
					pageIndex.push(this._pager_tpl.jstpl_format({
						cur: 1,
						per: perPage,
						total: total,
						show: showIndex,
						pages: pages,
						ns: ns,
						tips: 1,
						other: startIndex == 2 ? "" : '<strong class="more">...</strong>'
					}));
					b_OutputSpan = true
				}
				if (i == currentPage) pageIndex.push('<strong class="current">' + i + "</strong>");
				else pageIndex.push(this._pager_tpl.jstpl_format({
					cur: i,
					per: perPage,
					total: total,
					show: showIndex,
					pages: pages,
					ns: ns,
					tips: i,
					other: ""
				}))
			}
			if (pages - endIndex > 1 && !e_OutputSpan) {
				pageIndex.push('<strong class="more">...</strong>');
				e_OutputSpan = true
			}
			if (pages - endIndex >= 1) pageIndex.push(this._pager_tpl.jstpl_format({
				cur: this._totalPages[ns],
				per: perPage,
				total: total,
				show: showIndex,
				pages: pages,
				ns: ns,
				tips: this._totalPages[ns],
				other: ""
			}))
		}
		pageIndex.push("");
		if (pages != currentPage) {
			pageIndex.push("");
			pageIndex.push(this._pager_tpl.jstpl_format({
				cur: currentPage + 1,
				per: perPage,
				total: total,
				show: showIndex,
				pages: pages,
				ns: ns,
				tips: "",
				className: "next",
				inn: "<span>&#62;</span></a>",
				other: ""
			}));
			pageIndex.push("")
		}
		pageIndex.push("</div>");
		return pageIndex
	},
	goToPage: function(index, RecordsPerPage, totalRecords, onceShow, total_page, ns) {
		index < 1 ? index = 1 : index;
		index > total_page ? index = total_page : index;
		var startIndex = (index - 1) * RecordsPerPage;
		var endIndex = index * RecordsPerPage - 1;
		this._currentPage[ns] = index;
		if (endIndex > totalRecords - 1) endIndex = totalRecords - 1;
		try {
			MUSIC.widget.pager._indexContainer[ns].innerHTML = MUSIC.widget.pager.pageNo(totalRecords, index, RecordsPerPage,
				onceShow, ns).join("")
		} catch (e) {
			MUSIC.widget.pager._indexContainer[ns].innerHTML = MUSIC.widget.pager.pageNo(totalRecords, index, RecordsPerPage, onceShow, ns)
		}
		MUSIC.widget.pager._callback[ns](index)
	}
};
MUSIC.widget.user = {
	getUin: function() {
		var _puin = getCookie("uin"),
			_uin = 0;
		if (_puin == "") return _uin;
		if (_puin.indexOf("o") == 0) _uin = parseInt(_puin.substring(1, _puin.length), 10);
		else _uin = parseInt(_puin, 10);
		return _uin
	},
	isLogin: function() {
		return MUSIC.widget.user.getUin() > 1E4 ? true : false
	},
	_loginCallback: null,
	_closeCallback: null,
	openLoginPage: function(target) {
		var sUserAgent = navigator.userAgent.toLowerCase(),
			isIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os",
			isAndroid = sUserAgent.match(/android/i) == "android";
		var _frame = top.window.frames["contentFrame"];
		var _url = "http://y.qq.com/";
		if (!!_frame) _url = _frame.location.href;
		top.document.getElementById("js_frame_top").style.display = "none";
		top.hideIndex && top.hideIndex();
		var loginUrl = "";
		if (isIphoneOs) loginUrl = "http://ui.ptlogin2.qq.com/cgi-bin/login?daid=384&pt_no_auth=1&style=8&appid=1006102&s_url=" + encodeURIComponent(_url) + "&low_login_enable=0&hln_css=&hln_title=&hln_acc=&hln_pwd=&hln_u_tips=&hln_p_tips=&hln_autologin=&hln_login=&hln_otheracc=&hln_qloginacc=&hln_reg=&hln_vctitle=&hln_verifycode=&hln_vclogin=&hln_feedback=";
		else if (isAndroid) loginUrl = "http://ui.ptlogin2.qq.com/cgi-bin/login?daid=384&pt_no_auth=1&style=9&appid=1006102&s_url=" + encodeURIComponent(_url) + "&low_login_enable=0&hln_css=&hln_title=&hln_acc=&hln_pwd=&hln_u_tips=&hln_p_tips=&hln_autologin=&hln_login=&hln_otheracc=&hln_qloginacc=&hln_reg=&hln_vctitle=&hln_verifycode=&hln_vclogin=&hln_feedback=";
		else loginUrl = "http://y.qq.com/y/static/login.html#url=" + encodeURIComponent(_url);
		if (isIphoneOs || isAndroid)
			if (!!target && target == "parent") top.window.location.href =
				loginUrl;
			else window.location.href = loginUrl;
		else if (!!target && target == "parent") _frame.location.href = loginUrl;
		else _frame.location.href = loginUrl
	},
	openLogin: function(url, target, logincallback, closecallback) {
		if (top != window) {
			top.g_user.openLogin(url, target, logincallback, closecallback);
			return
		}
		var sUserAgent = navigator.userAgent.toLowerCase(),
			isIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os",
			isAndroid = sUserAgent.match(/android/i) == "android";
		if (isIphoneOs || isAndroid) {
			var loginUrl = "",
				_url = (top.window.frames["contentFrame"] ||
					window).location.href;
			if (isIphoneOs) loginUrl = "http://ui.ptlogin2.qq.com/cgi-bin/login?daid=384&pt_no_auth=1&style=8&appid=1006102&s_url=" + encodeURIComponent(_url) + "&low_login_enable=0&hln_css=&hln_title=&hln_acc=&hln_pwd=&hln_u_tips=&hln_p_tips=&hln_autologin=&hln_login=&hln_otheracc=&hln_qloginacc=&hln_reg=&hln_vctitle=&hln_verifycode=&hln_vclogin=&hln_feedback=";
			else loginUrl = "http://ui.ptlogin2.qq.com/cgi-bin/login?daid=384&pt_no_auth=1&style=9&appid=1006102&s_url=" + encodeURIComponent(_url) + "&low_login_enable=0&hln_css=&hln_title=&hln_acc=&hln_pwd=&hln_u_tips=&hln_p_tips=&hln_autologin=&hln_login=&hln_otheracc=&hln_qloginacc=&hln_reg=&hln_vctitle=&hln_verifycode=&hln_vclogin=&hln_feedback=";
			if (!!target && target == "parent") top.window.location.href = loginUrl;
			else window.location.href = loginUrl;
			return false
		}
		MUSIC.widget.user.clearAllCookies();
		try {
			top.g_topChn.changeUser()
		} catch (e) {}
		this._closeCallback = closecallback || function() {};
		this._loginCallback = function() {
			if (logincallback) logincallback();
			else {
				var _frame = window.frames["contentFrame"];
				if (!!_frame) _frame.location.reload();
				else window.location.reload()
			}
			try {
				top.g_topChn.changeUser()
			} catch (e) {}
		};
		var frame_url;
		frame_url = "http://y.qq.com/y/static/tips/pop_login.html";
		g_dialog.show({
			mode: "iframe",
			title: "",
			url: frame_url
		})
	},
	onLogin: function() {
		ptlogin2_onClose();
		g_dialog.hide();
		if (this._loginCallback) {
			this._loginCallback();
			this._loginCallback = null
		}
	},
	loginOut: function(callback) {
		MUSIC.widget.user.clearAllCookies();
		if (callback) callback();
		else {
			var _frame = window.frames["contentFrame"];
			if (!!_frame && window.frames["contentFrame"].location.href != "about:blank") _frame.location.reload();
			else window.location.reload()
		}
		try {
			top.g_topChn.changeUser();
			top.IP_limit.loadIPcgi()
		} catch (e) {}
	},
	clearAllCookies: function() {
		delCookie("uin", "qq.com");
		delCookie("skey", "qq.com");
		UserInfoCookie.clear();
		UserExternCookie.clear()
	},
	countVipLevel: function(score) {
		function getLevel(iScore) {
			var iLevel = 0;
			if (iScore >= 0 && iScore < 600) iLevel = 1;
			else if (iScore >= 600 && iScore < 1800) iLevel = 2;
			else if (iScore >= 1800 && iScore < 3600) iLevel = 3;
			else if (iScore >= 3600 && iScore < 6E3) iLevel = 4;
			else if (iScore >= 6E3 && iScore < 10800) iLevel = 5;
			else if (iScore >= 10800 && iScore < 32400) iLevel = 6;
			else if (iScore >= 32400 && iScore < 64800) iLevel = 7;
			else if (iScore >=
				64800) iLevel = 8;
			return iLevel
		}
		var _userinfo = UserInfoCookie.get();
		if (_userinfo != null) return _userinfo.CurrentLevel;
		else return getLevel(score)
	},
	isPrepay: function(payway) {
		return payway == 0 || payway == 5
	},
	getSpeed: function(payway, yearFlag) {
		var default_speed = yearFlag ? 15 : 5;
		var _userinfo = UserInfoCookie.get();
		if (_userinfo != null) return _userinfo.EverydayPoint;
		else return default_speed
	},
	getVipInfo: function(callBack, errCallBack) {
		var _userinfo = UserInfoCookie.get();
		if (_userinfo != null) {
			if (callBack) callBack(_userinfo);
			return
		}
		var url = "http://i.y.qq.com/portalcgi/fcgi-bin/music_mini_portal/fcg_getuser_infoEx.fcg?outCharset=utf-8&rnd=" + (new Date).valueOf(),
			j = new MUSIC.JSONGetter(url, "userinfo", null, "utf-8", false);
		j.onSuccess = function(redata) {
			var data = redata.data || null;
			if (redata.code == 0 && data) {
				if (callBack) callBack(data);
				if (data.vip == 1 || data.vip == 2) UserInfoCookie.set(data)
			} else if (errCallBack) errCallBack()
		};
		j.onError = function() {
			if (errCallBack) errCallBack();
			else g_popup.show(1, "\u8bfb\u53d6\u7528\u6237\u8eab\u4efd\u4fe1\u606f\u5931\u8d25\uff01",
				"\u5f53\u524d\u7f51\u7edc\u7e41\u5fd9\uff0c\u8bf7\u60a8\u7a0d\u540e\u518d\u8bd5\u3002", 3E3, 300)
		};
		j.send("MusicJsonCallback")
	},
	getExternInfo: function(callBack, errCallBack) {
		var _userinfo = UserExternCookie.get();
		if (_userinfo != null) {
			if (callBack) callBack(_userinfo);
			return
		}
		var url = "http://i.y.qq.com/portalcgi/fcgi-bin/music_mini_portal/cgi_getuser_extern.fcg?needisopen=1&rnd=" + (new Date).valueOf(),
			j = new MUSIC.JSONGetter(url, "externinfo", null, "gb2312", false);
		j.onSuccess = function(data) {
			if (!("retcode" in data) ||
				data.retcode == 0) {
				UserExternCookie.set(data);
				if (callBack) callBack(data)
			} else err_dealwith()
		};
		j.onError = function() {
			if (errCallBack) errCallBack()
		};
		j.send("MusicJsonCallback")
	},
	openVip: function(aid, cm, defaultmonth) {
		aid = aid || "";
		cm = cm || "";
		defaultmonth = defaultmonth || "";
		var _sd = new MUSIC.JsLoader;
		_sd.onload = function() {
			var codes = ["xxzxyy", "xxzxsj"];
			/svip/.test(aid) && (codes[1] = "!" + codes[1]);
			var minipayObj = cashier.dialog.buy({
				codes: codes.join(","),
				debug: false,
				aid: aid,
				amount: defaultmonth,
				defaultChannel: cm,
				skin: "minipay9",
				height: 400,
				onSuccess: function() {
					UserInfoCookie.clear()
				}
			})
		};
		_sd.load("http://imgcache.qq.com/bossweb/ipay/js/api/cashier.js", null, {
			charset: "utf-8"
		})
	},
	buyVip: function(buyType, aid, cm, defaultmonth) {
		aid = aid || "";
		buyType = buyType || (/svip/.test(aid) ? "svip_vip" : "vip_svip");
		cm = cm || "";
		defaultmonth = defaultmonth || 3;
		var codesMap = {
			"buygreen": "xxzxyy",
			"buysupergreen": "xxzxsj",
			"buy8yuan": "qqmsey",
			"buy12yuan": "qqmstw",
			"vip_svip": ["xxzxyy", "xxzxsj"].join(","),
			"svip_vip": ["xxzxsj", "xxzxyy"].join(",")
		};
		var _sd = new MUSIC.JsLoader;
		_sd.onload = function() {
			var minipayObj = cashier.dialog.buy({
				codes: codesMap[buyType],
				debug: false,
				aid: aid,
				amount: defaultmonth,
				defaultChannel: cm,
				skin: "minipay9",
				height: 400,
				onSuccess: function() {
					UserInfoCookie.clear()
				}
			})
		};
		_sd.load("http://imgcache.qq.com/bossweb/ipay/js/api/cashier.js", null, {
			charset: "utf-8"
		})
	},
	openYearVip: function(aid) {
		aid = aid || "";
		var _sd = new MUSIC.JsLoader;
		_sd.onload = function() {
			var codes = ["xxzxyy", "xxzxhh"];
			/svip/.test(aid) && (codes[1] = "!" + codes[1]);
			var minipayObj = cashier.dialog.buy({
				codes: codes.join(","),
				debug: false,
				aid: aid,
				amountType: "year",
				amount: 1,
				skin: "minipay9",
				height: 400,
				onSuccess: function() {
					UserInfoCookie.clear()
				}
			})
		};
		_sd.load("http://imgcache.qq.com/bossweb/ipay/js/api/cashier.js", null, {
			charset: "utf-8"
		})
	},
	getQzoneUserImage: function(uin, size) {
		return this.getQQUserImage(uin);
		uin = parseInt(uin, 10);
		if (uin < 10001) return "http://imgcache.gtimg.cn/mediastyle/music_v12/img/default_singer100x100.png";
		else return "http://qlogo" + (uin % 4 + 1) + ".store.qq.com/qzone/" + uin + "/" + uin + "/" + size
	},
	getQQUserImage: function(uin) {
		uin =
			parseInt(uin, 10) || g_user.getUin();
		if (uin < 10001) return "http://imgcache.gtimg.cn/mediastyle/music_v12/img/default_singer100x100.png?max_age=2592000";
		else return "http://t.plcloud.music.qq.com/fcgi-bin/fcg_get_qqhead_image.fcg?jump=1&uin=" + uin + "&g_tk=" + getACSRFToken()
	},
	getBatchedQQUserImage: function(uinlist, callback) {
		if (!uinlist) {
			!!callback && callback(null);
			return
		}
		var uin = g_user.getUin(),
			jsonpCallback = "getuserhead_callback_" + +new Date,
			url = "http://t.plcloud.music.qq.com/fcgi-bin/fcg_get_qqhead_image.fcg?qquin=" +
			uin + "&jump=0&uinlist=" + uinlist + "&jsonpCallback=" + jsonpCallback,
			jg = new MUSIC.JSONGetter(url, "getbatcheduserimage_" + uin, null, "utf-8");
		jg.onSuccess = function(json) {
			!!callback && callback(json)
		};
		jg.onTimeout = jg.onError = function() {
			var json = {
				data: {
					urllist: []
				}
			};
			for (var i = 0, uin; uin = uinlist.split(",")[i++];) json.data.urllist.push("http://imgcache.gtimg.cn/mediastyle/music_v12/img/default_singer100x100.png");
			!!callback && callback(json)
		};
		jg.send(jsonpCallback)
	}
};
var UserInfoCookie = MUSIC.CookieSet("vip", "nickname", "score", "place", "payway", "start", "end", "yearFlag", "yearstart", "yearend", "nowtime", "CurrentLevel", "UpgradeDayLeft", "NextLevelPoint", "UpgradePercentLeft", "EverydayPoint", "PrepaidByBankcard", "svip");
UserInfoCookie.basekey = "detail";
UserInfoCookie.need_attrs = ["vip", "score", "place", "payway", "yearFlag", "svip"];
var UserExternCookie = MUSIC.CookieSet("msgcount", "isopenminiblog");
UserExternCookie.basekey = "extern";
UserExternCookie.need_attrs = ["msgcount", "isopenminiblog"];

function ptlogin2_onResize(width, height) {}

function ptlogin2_onClose() {
	g_dialog.hide();
	if (g_user._closeCallback) g_user._closeCallback()
}
var g_user = MUSIC.widget.user;
MUSIC.namespace.map(MUSIC.widget.user);
var gLocation = "http://y.qq.com/";
document.domain = "qq.com";

function hideElement(e) {
	var obj;
	try {
		obj = MUSIC.dom.get(e);
		obj.style.display = "none"
	} catch (e) {}
}

function showElement(e) {
	try {
		obj = MUSIC.dom.get(e);
		obj.style.display = "block"
	} catch (e) {}
}

function pageHotClick() {
	function getStatSource() {
		var reg_map = {
			"y/static/index.html": 1,
			"static/singer/": 1,
			"static/album/": 1,
			"static/mv/": 0,
			"static/mymusic/mymusic_index.html": 1
		};
		for (var reg in reg_map) {
			var r = new RegExp(reg);
			if (r.test(window.location.href)) return reg_map[reg]
		}
		return 0
	}
	if (getStatSource())
		if (typeof pgvWatchClick != "undefined") pgvWatchClick({
			statIframe: true
		})
}
MUSIC.widget.main = {
	init: function() {
		if (top == window && (/^http:\/\/(y|music)\.qq\.com\/y\/static\/(?!mv\/mv_play\.html)/.test(window.location.href) || (/^http:\/\/i\.y\.qq\.com\/s\.plcloud\/fcgi-bin\/fcg_yqq_song_detail_info_cp\.fcg/.test(window.location.href) || /^http:\/\/i\.y\.qq\.com\/v8\/([^#?$.]*)\.fcg/.test(window.location.href)))) {
			var simpleUrl = g_hashHistory.getSimpleUrl(window.location.href);
			if (simpleUrl == "") window.location.href = "http://y.qq.com/#url=" + encodeURIComponent(window.location.href);
			else window.location.href =
				"http://y.qq.com/#" + simpleUrl;
			return
		}
		try {
			try {
				if (/\/y\/static\/login.html/.test(top.window.frames["contentFrame"].location.href)) top.document.getElementById("js_frame_top").style.display = "none";
				else top.document.getElementById("js_frame_top").style.display = ""
			} catch (e) {}
			if (top != window && top.window.location.href.indexOf("y.qq.com") > -1) {
				g_hashHistory.init(function(hash_obj) {
					var top_url = hash_obj["top_url"] || "";
					var frame_url = window.location.href.replace(/#.+/g, "");
					if (top_url != "" && top_url != frame_url) {
						history.back();
						return
					}
					var simpleUrlObj = g_hashHistory.param2obj(g_hashHistory.getSimpleUrl(window.location.href));
					if (hash_obj["type"] == "index" && top.showIndex) top.showIndex();
					else if (!!simpleUrlObj["type"] && simpleUrlObj["type"] != hash_obj["type"]) history.back();
					else if (!!simpleUrlObj["p"] && simpleUrlObj["p"] != hash_obj["p"]) history.back();
					else if (!!simpleUrlObj["id"] && simpleUrlObj["id"] != hash_obj["id"]) history.back()
				});
				var hparam = g_hashHistory.getHurlObj();
				var top_url = hparam["top_url"] || "";
				var url = hparam["url"] || "";
				var frame_url = window.location.href.replace(/#.+/g, "");
				if (top_url != frame_url && frame_url.indexOf("http://y.qq.com/y/static/mv/mv_play.html") < 0) g_hashHistory.locationHash();
				else if (url != "" && g_hashHistory.getSimpleUrl(window.location.href) != "") g_hashHistory.locationHash()
			}
			top.g_reflushTopMenu();
			g_musicMain.reflushTopHeight();
			g_musicMain.resetScroll();
			setTimeout(function() {
				top.g_topChn.frameOnload()
			}, 50);
			window["gLocation"] = window.location.href
		} catch (e) {}
		MUSIC.event.replaceAllEvent();
		MUSIC.event.on(document,
			"click", pageHotClick);
		setTimeout(function() {
			g_statistics.initPvJs(function() {
				g_statistics.doPvg(window.location.href)
			})
		}, 1E3);
		this.watchPage();
		window.onunload = function() {
			try {
				top["TRANS_TIME_POINT"] = new Date - 0
			} catch (e) {}
		};
		setTimeout(function() {
			var js = new MUSIC.JsLoader;
			js.onload = function() {};
			js.load("http://ctc.qzonestyle.gtimg.cn/utp/dnsgetForMusic.js?max_age=259200&ver=20140513", null, {
				charset: "utf-8"
			})
		}, 2E3)
	},
	reflushTopHeight: function() {
		var _h = MUSIC.dom.getRect(document.body).height;
		if (_h == 0) {
			setTimeout(function() {
					g_musicMain.reflushTopHeight()
				},
				200);
			return
		}
		try {
			top.g_reflushTopHeight(_h)
		} catch (e) {}
	},
	resetScroll: function() {
		try {
			top.g_resetScroll()
		} catch (e) {}
	},
	reloadImg: function(container) {
		try {
			container = container || document;
			var arrImg = container.images;
			if (!!document.all)
				for (var i = 0, length = arrImg.length; i < length; i++) {
					if (arrImg[i].readyState == "uninitialized")
						if (arrImg[i].src.search(/singer|album|topic|music_topic/) > 0) arrImg[i].src = "http://imgcache.qq.com/mediastyle/y/img/cover_mine_130.jpg"
				} else
					for (var i = 0, length = arrImg.length; i < length; i++)
						if (arrImg[i].src.search(/singer|album|topic|music_topic/) >
							0) {
							var imgTmp = new Image;
							imgTmp.src = arrImg[i].src;
							if (imgTmp.width <= 0) arrImg[i].src = "http://imgcache.qq.com/mediastyle/y/img/cover_mine_130.jpg"
						}
		} catch (e) {}
	},
	watchPage: function() {
		var _url = window.location.href.toString();
		var _id = 0;
		var _page = [/\/y\/static\/index\./, /\/singer\/index\//, /\/singer\/\d+\//, /\/singer\/([^#?$.]*)\/([^#?$.]*)\/([^#?$.]*)/, /\/album\/(album_list|shoufa)\//, /\/album\/\d+\//, /\/album\/([^#?$.]*)\/([^#?$.]*)\/([^#?$.]*)/, /top_index\.html/, /\/toplist\/index\//, /\/toplist\/albumtop\//,
			/top_mv\.html/, /i\.y\.qq\.com\/v8\/fcg-bin\/fcg_v8_mvout4web\.fcg/, /\/mv\/lib\//, /mymusic_index\.html/, /mymusic_albumlist\.html/, /mymusic_mvlist\.html/, /mymusic_friend\.html/, /fcg_yqq_song_detail_info_cp\.fcg/, /\/mv\/mv_play\.html/, /soso\.music\.qq\.com/, /(v5|y\.qq\.com)\/(index|\?|\#|$)/
		];
		for (var i = 0, _length = _page.length; i < _length; i++)
			if (_url.search(_page[i]) > 0) {
				_id = i + 1;
				break
			}
		if (_id > 0) MUSIC.widget.watch.commit(_id);
		if (_url.search(/\/fm.qq.com\//) > 0) {
			MUSIC.widget.watch.set(170, 109);
			MUSIC.widget.watch.commit(1)
		}
	},
	IP_limit: function() {
		var _cacheFlag = -1;
		var _urlTips = "http://y.qq.com/y/static/tips/iplimit.html";

		function loadIPcgi(callback) {
			if (_cacheFlag == 1) {
				callback(1);
				return
			}
			var url = "http://i.y.qq.com/s.plcloud/fcgi-bin/p.fcg";
			var j = new MUSIC.JSONGetter(url, "ip_limit", null, "gb2312", false);
			j.onSuccess = function(data) {
				if (!!data && (data.ret == 0 || data.ret == 1)) {
					if (data.ret == 1) _cacheFlag = 1;
					var country = data.rec_app && data.rec_app.country ? data.rec_app.country : "";
					callback(data.ret, country)
				} else callback(1)
			};
			j.onError = function() {
				callback(1)
			};
			j.send("MusicJsonCallback")
		}
		return {
			isLimit: function(limitcallback) {
				setTimeout(function() {
					loadIPcgi(function(flag, country) {
						if (flag == 0) {
							var $dialog = document.getElementById("divdialog"),
								$frame = document.getElementById("frame_tips");
							if (!!$dialog && ($dialog.style.display != "none" && (!!$frame && $frame.src == _urlTips)));
							else g_dialog.show({
								mode: "iframe",
								title: "",
								url: _urlTips + "?country=" + (country || "")
							});
							limitcallback && limitcallback(0)
						} else limitcallback && limitcallback(1)
					})
				}, 0)
			}
		}
	}()
};
var g_musicMain = MUSIC.widget.main;
MUSIC.widget.tips = {
	class_icon_list: ["icon_succeed", "icon_warning", "icon_help"],
	fix_elem: function(elem, needmask) {
		var $D = MUSIC.dom,
			_e_rect = $D.getRect(elem),
			_ch = $D.getClientHeight(),
			_cw = $D.getClientWidth(),
			_st = $D.getScrollTop(),
			_sl = $D.getScrollLeft();
		var x = parseInt((_cw - _e_rect.width) / 2 + _sl),
			y = parseInt((_ch - _e_rect.height) / 2 + _st);
		if (x < 0) x = 0;
		if (y < 0) y = 0;
		$D.setXY(elem, x, y);
		if (needmask) this.showMask()
	},
	showMask: function() {
		var _elem = MUSIC.dom.get("divMaskPage");
		if (!_elem) _elem = MUSIC.dom.createElementIn("div",
			null, false, {
				id: "divMaskPage",
				style: "position:absolute;top:0;left:0;background:#000;filter:alpha(opacity=50);opacity:0.5;z-index:100"
			});
		_elem.style.width = MUSIC.dom.getScrollWidth() + "px";
		_elem.style.height = MUSIC.dom.getScrollHeight() + "px";
		showElement(_elem)
	},
	hideMask: function() {
		hideElement("divMaskPage")
	}
};
MUSIC.widget.tips.popup = function() {
	var $ = MUSIC,
		$C = $.css,
		$D = $.dom,
		$E = $.event,
		_this = $.widget.tips,
		_popup_tpl = ['<div class="global_tip_arrow" style="%(style_arrow)"></div>', "%(content)"].join(""),
		_popup_2_tpl = ['<div class="global_tip_arrow" style="%(style_arrow)"></div>', '<div class="global_tip_content">', "%(content)", "</div>"].join(""),
		_timerScroll = null,
		_timerTips = null;
	var _isLoadCss = true;

	function _insertCss(callback) {
		if (!$D.get("cssdialog") && _isLoadCss) $C.insertCSSLink("http://imgcache.qq.com/mediastyle/musicprotal/dialog.css", {
			linkID: "cssdialog"
		}, callback);
		else callback()
	}

	function show(type, title, desc, timeout, width, isHideTitle, isLoadCss) {
		if (top != window && window.location.href.indexOf("fm.qq.com") < 0) {
			top.g_popup.show(type, title, desc, timeout, width);
			return
		}
		if (typeof isLoadCss != "undefined") _isLoadCss = isLoadCss;
		var _tpl = ['<div class="popup_dialog popup_system">', '<div class="popup_dialog_hd" style="display:%(title_display);" id="tipsTitle">', "<h3>%(title)</h3>", '<a href="javascript:;" class="popup_dialog_close" title="\u5173\u95ed" onclick="g_popup.hide();">\u5173\u95ed</a>',
			"</div>", '<div class="popup_dialog_cont">', '<div class="popup_system_type">', '<i class="%(class_icon)"></i>', '<p class="%(class_title)" id="tipsDetail">%(title)</p>', '<p class="dialog_info" style="display:%(desc_display);">%(desc)</p>', "</div>", "</div>", "</div>"
		].join("");
		width = 380;
		_insertCss(function() {
			var _e = $D.get("divPopup");
			if (!_e) _e = $D.createElementIn("div", null, false, {
				id: "divPopup",
				style: "position:absolute;z-index:1010;",
				"class": ""
			});
			else _e.style.width = width + "px";
			var _data = {},
				_content = "";
			if (type >= 0 && type <= 2) _data.class_icon = _this.class_icon_list[type];
			_data.title = title || "";
			_data.desc = desc || "";
			if (_data.desc == "") _data.desc_display = "none";
			else _data.desc_display = "";
			_data.class_title = _data.desc ? "other_tip" : "warning_tip";
			_data.title_display = !!isHideTitle ? "none" : "";
			_e.innerHTML = _tpl.jstpl_format(_data);
			showElement(_e);
			_e.style.width = "";
			var _width = parseInt(MUSIC.dom.getPosition(MUSIC.dom.get("tipsDetail").parentNode).width, 10) + 4 + "px";
			_e.style.width = _width;
			MUSIC.dom.get("tipsTitle").style.width =
				_width;
			_this.fix_elem(_e);
			if (_timerTips != null) {
				clearTimeout(_timerTips);
				_timerTips = null
			}
			_timerTips = setTimeout(hide, timeout || 1E3)
		})
	}

	function show2(options) {
		var _opt = {
			container: null,
			arrow: "",
			arrow_pos: 0,
			width: 0,
			contents: "",
			tipsClass: "global_tip_1"
		};
		$.object.extend(_opt, options || {});
		var _container = $D.get(_opt.container);
		if (!_container) return;
		_insertCss(function() {
			var _e = $D.get("divPopup");
			if (!_e) _e = $D.createElementIn("div", null, false, {
				id: "divPopup",
				style: "position:absolute;z-index:10001;width:" + _opt.width +
					"px;",
				"class": _opt.tipsClass
			});
			else _e.style.width = _opt.width + "px";
			var _data = {};
			_data.content = _opt.contents;
			var _arrow_map = {
				top: "right",
				left: "bottom",
				bottom: "left",
				right: "top"
			};
			if (_opt.arrow_pos > 0 && _opt.arrow in _arrow_map) _data.style_arrow = _arrow_map[_opt.arrow] + ":" + _opt.arrow_pos + "px";
			_e.innerHTML = _popup_2_tpl.jstpl_format(_data);
			showElement(_e);
			var _tPos = $D.getPosition(_container),
				_fPos = $D.getPosition(_e),
				_pos = {};
			_pos.width = _opt.width;
			switch (_opt.arrow) {
				case "top":
					_pos.top = _tPos.bottom + 5;
					_pos.left =
						parseInt(_tPos.left + _tPos.width / 2 + (_opt.arrow_pos > 0 ? _opt.arrow_pos : 16) - _pos.width) + 7;
					break;
				case "bottom":
					_pos.top = _tPos.top - _fPos.height - 5;
					_pos.left = parseInt(_tPos.left + _tPos.width / 2 - (_opt.arrow_pos > 0 ? _opt.arrow_pos : 16)) - 7;
					break;
				default:
					_pos.top = _tPos.top;
					_pos.left = _tPos.left;
					break
			}
			$D.setPosition(_e, _pos)
		})
	}

	function hide() {
		hideElement("divPopup");
		if (_timerScroll != null) {
			clearTimeout(_timerScroll);
			_timerScroll = null
		}
		if (_timerTips != null) {
			clearTimeout(_timerTips);
			_timerTips = null
		}
	}

	function init(options) {
		var _opt = {
			container: null,
			id: "",
			mode: "list",
			selectTpl: '<div class="global_tip_content %(class_mod)">%(content)</div>',
			optionTpl: '<li class="%(class_on)"><a href="javascript:;">%(text)</a></li>',
			eventType: "hover",
			arrow: "",
			arrow_pos: 6,
			width: 0,
			offset: {
				left: 0,
				top: 0
			},
			zIndex: 999,
			class_mod: "",
			showDelay: 200,
			hideDelay: 200,
			curIndex: -1,
			contents: null,
			isToggle: 1,
			showCall: $.emptyFn,
			hideCall: $.emptyFn,
			setPosition: null
		};
		$.object.extend(_opt, options || {});
		if (!MUSIC.lang.isArray(_opt.container)) {
			var _container = $D.get(_opt.container);
			if (!_container) return;
			_opt.container = [_container]
		}
		var _elemPopup = null;
		var _curTarget = null;

		function _init() {
			if (MUSIC.lang.isFunction(_opt.contents)) {
				_opt.contents(function(contents) {
					_opt.contents = contents;
					_init()
				});
				return
			}
			_elemPopup = $D.createElementIn("div", null, false, {
				"class": "global_tip"
			});
			if (_opt.id != "") _elemPopup.id = _opt.id;
			var _data = {},
				_content = "";
			if (_opt.mode == "list") {
				var _html = [];
				_html.push("<ul>");
				$.object.each(_opt.contents, function(content, idx) {
					if (idx == _opt.curIndex) content.class_on = "current";
					content.index = idx;
					_html.push(_opt.optionTpl.jstpl_format(content))
				});
				_html.push("</ul>");
				_content = _html.join("")
			} else _content = _opt.contents;
			_data.class_mod = _opt.class_mod || "";
			_data.content = _content;
			_content = _opt.selectTpl.jstpl_format(_data);
			_data = {};
			_data.content = _content;
			var _arrow_map = {
				top: "right",
				left: "bottom",
				bottom: "left",
				right: "top"
			};
			if (_opt.arrow_pos > 0 && _opt.arrow in _arrow_map) _data.style_arrow = _arrow_map[_opt.arrow] + ":" + _opt.arrow_pos + "px";
			_elemPopup.innerHTML = _popup_tpl.jstpl_format(_data);
			_opt.width = $D.getSize(_elemPopup)[0];
			if (_opt.eventType == "hover") {
				$E.on(_elemPopup, "mouseover", function() {
					if (_hoverTimer) clearTimeout(_hoverTimer);
					_hoverTimer = setTimeout(_show, _opt.showDelay)
				});
				$E.on(_elemPopup, "mouseout", function() {
					if (_hoverTimer) clearTimeout(_hoverTimer);
					_hoverTimer = setTimeout(_hide, _opt.hideDelay)
				})
			}
			if (_opt.mode == "list") {
				var _elems = _elemPopup.getElementsByTagName("li"),
					_len = _elems.length;
				if (_len != _opt.contents.length) return;

				function _click(event, idx) {
					idx = parseInt(idx);
					if (!_opt.isToggle) {
						if (_opt.contents[idx].func) _opt.contents[idx].func.apply(null, [idx, _elems[idx], _curTarget])
					} else if (_opt.curIndex != idx) {
						for (var i = 0; i < _len; i++)
							if (i == idx) {
								_elems[i].className = "current";
								_container.innerHTML = _opt.contents[i].text;
								_opt.curIndex = idx;
								if (_opt.contents[i].func) _opt.contents[i].func.apply(null, [i, _elems[i], _curTarget])
							} else _elems[i].className = "";
						_opt.curIndex = idx
					}
					_hide()
				}
				$.object.each(_elems, function(elem, idx) {
					$E.on(elem, "click", _click, "" + idx)
				});
				_show()
			}
		}

		function _setPos() {
			var _tPos = $D.getPosition(_curTarget),
				_mode = 0,
				_pos = {},
				_elems = _curTarget.getElementsByTagName("i");
			if (_elems.length > 0) {
				_tPos = $D.getPosition(_elems[0]);
				_mode = 1
			}
			_pos.width = _opt.width;
			if (_opt.offset.top > 0 && _opt.offset.left > 0) {
				_pos.top = _opt.offset.top;
				_pos.left = _opt.offset.left
			} else switch (_opt.arrow) {
				case "top":
					if (_mode == 1) {
						_pos.top = _tPos.bottom + 10;
						_pos.left = _tPos.left - _pos.width + _opt.arrow_pos + 5
					} else {
						_pos.top = _tPos.bottom;
						_pos.left = _tPos.right - _pos.width + 4
					}
					break;
				default:
					_pos.top = _tPos.top;
					_pos.left = _tPos.left;
					break
			}
			$D.setXY(_elemPopup, _pos.left, _pos.top)
		}

		function _show() {
			if (!_elemPopup) _insertCss(function() {
				_init()
			});
			else {
				if (_opt.setPosition) _opt.setPosition(_elemPopup, _curTarget, _opt.width);
				else _setPos();
				showElement(_elemPopup);
				if (_opt.showCall) _opt.showCall(_curTarget)
			}
		}

		function _hide() {
			hideElement(_elemPopup);
			if (_opt.hideCall) _opt.hideCall(_curTarget)
		}
		$.object.each(_opt.container, function(_e) {
			switch (_opt.eventType) {
				case "hover":
					var _hoverTimer = null;
					$E.on(_e, "mouseover", function() {
						if (_hoverTimer) clearTimeout(_hoverTimer);
						_hoverTimer = setTimeout(_show, _opt.showDelay)
					});
					$E.on(_e, "mouseout", function() {
						if (_hoverTimer) clearTimeout(_hoverTimer);
						_hoverTimer = setTimeout(_hide, _opt.hideDelay)
					});
					break;
				case "focus":
					var _hoverTimer = null;
					$E.on(_e, "focus", function() {
						_show(_e)
					});
					$E.on(_e, "blur", function() {
						_hide()
					});
					break;
				case "click":
					$E.on(_e, "click", function() {
						$E.cancelBubble();
						if (!_elemPopup) _insertCss(function() {
							_curTarget = _e;
							_init();
							_show()
						});
						else if (_opt.isToggle)
							if (_elemPopup.style.display == "none") {
								_curTarget = _e;
								_show()
							} else _hide();
						else {
							if (_elemPopup.style.display != "none") {
								if (_curTarget == _e) return;
								_hide()
							}
							_curTarget = _e;
							_show()
						}
					});
					$E.on(document,
						"click",
						function() {
							var _target = $E.getTarget();
							if ($D.isAncestor(_elemPopup, _target)) return;
							if (_elemPopup && _elemPopup.style.display != "none") _hide()
						});
					if (top != window && window.location.href.indexOf("fm.qq.com") < 0) $E.on(top.document, "click", function() {
						if (_elemPopup && _elemPopup.style.display != "none") _hide()
					});
					break;
				default:
					break
			}
		})
	}
	return {
		show: show,
		show2: show2,
		hide: hide,
		init: init
	}
}();
MUSIC.widget.tips.dialog = function() {
	var $ = MUSIC,
		$C = $.css,
		$D = $.dom,
		$E = $.event,
		_this = $.widget.tips,
		_dialog_tpl = ['<div class="popup_dialog">', '<div class="popup_dialog_hd">', "<h3>%(title)</h3>", '<a href="javascript:;" class="popup_dialog_close" onclick="g_dialog.hide();" title="\u5173\u95ed">\u5173\u95ed</a>', "</div>", '<div class="popup_dialog_cont">', "%(content)", "</div>", "</div>"].join(""),
		_timerScroll = null,
		objArg = null;

	function _insertCss(callback, isLoadCss) {
		if (!$D.get("cssdialog") && isLoadCss) $C.insertCSSLink("http://imgcache.qq.com/mediastyle/musicprotal/dialog.css", {
			linkID: "cssdialog"
		}, callback);
		else callback()
	}

	function _fadeIn(e) {
		function u(a, b) {
			if (b >= 100) {
				a.style.filter = "none";
				a.style.opacity = 1;
				return
			}
			a.style.filter = "alpha(opacity=" + b + ")";
			a.style.opacity = b / 100
		}
		var speed = 25;
		var c1 = 0;
		var b = setInterval(function() {
			c1 += speed;
			if (c1 >= 100) c1 = 100;
			u(e, c1);
			if (c1 >= 100) clearInterval(b)
		}, 10)
	}

	function _on_scroll(event, elem) {
		if (_timerScroll != null) return;
		_timerScroll = setTimeout(function() {
			_this.fix_elem(elem, true);
			clearTimeout(_timerScroll);
			_timerScroll = null
		}, 200)
	}

	function show(options) {
		if (top !=
			window && window.location.href.indexOf("fm.qq.com") < 0) {
			top.g_dialog.show(options);
			return
		}
		g_tips.showMask();
		var _opt = {
			mode: "common",
			title: "",
			icon_type: -1,
			width: 350,
			button_info1: null,
			button_info2: null,
			url: "",
			objArg: null,
			isLoadCss: true
		};
		$.object.extend(_opt, options || {});
		if (_opt.mode == "iframe")
			if (window.location.href.indexOf("y.qq.com") < 0) _opt.isLoadCss = false;
		_insertCss(function() {
			var _e = $D.get("divdialog");
			var _style = "position:absolute;z-index:1000;";
			if (_opt.mode == "iframe") _style = "position:absolute;z-index:1000;filter:alpha(opacity=0);opacity:.0;";
			if (!_e) _e = $D.createElementIn("div", null, false, {
				id: "divdialog",
				style: _style
			});
			else {
				_e.innerHTML = "";
				_e.style.cssText = _style
			}
			var _data = {},
				_content = "",
				_tpl = "";
			if (_opt.mode == "iframe") {
				_content = '<iframe id="frame_tips" name="frame_tips" frameborder="0" width="1px;" height="1px;" scrolling="no" src="about:blank;"></iframe>';
				objArg = _opt.objArg;
				_e.className = ""
			} else if (_opt.mode == "bigpage") {
				_content = _opt.desc;
				_e.className = ""
			} else {
				_tpl = ['<div class="popup_system_type">', '<i class="%(class_icon)"></i>', '<p class="%(class_title)">%(title)</p>',
					'<p class="dialog_info">%(desc)</p>', '<p class="dialog_btn" style="display:%(button_display);">', '<a href="javascript:;" onclick="%(button_onclick1)" title="%(button_title1)" class="%(button_class1)" style="display:%(button_display1);">%(button_title1)</a>', '<a href="javascript:;" onclick="%(button_onclick2)" title="%(button_title2)" class="%(button_class2)" style="display:%(button_display2);">%(button_title2)</a>', "</p>"
				].join("");
				if (_opt.icon_type >= 0 && _opt.icon_type <= 2) _data.class_icon = _this.class_icon_list[_opt.icon_type];
				_data.desc = _opt.desc || "";
				_data.title = _opt.title;
				if (!_opt.button_info1 && (!_opt.button_info2 && _data.desc == "")) {
					_data.button_display = "none";
					_data.class_title = "warning_tip"
				} else _data.class_title = "other_tip";
				if (_opt.button_info1) {
					_data.button_class1 = _opt.button_info1.highlight ? "btn_highlight" : "btn_normal";
					_data.button_onclick1 = _opt.button_info1.onclick || "";
					_data.button_title1 = _opt.button_info1.title || ""
				} else _data.button_display1 = "none";
				if (_opt.button_info2) {
					_data.button_class2 = _opt.button_info2.highlight ?
						"btn_highlight" : "btn_normal";
					_data.button_onclick2 = _opt.button_info2.onclick || "";
					_data.button_title2 = _opt.button_info2.title || ""
				} else _data.button_display2 = "none";
				_e.className = "";
				_content = _tpl.jstpl_format(_data)
			}
			_data = {};
			_data.title = _opt.title;
			_data.content = _content;
			_e.innerHTML = _dialog_tpl.jstpl_format(_data);
			if (_opt.mode == "iframe") document.getElementById("frame_tips").src = _opt.url;
			else {
				_e.style.width = _opt.width + "px";
				_this.fix_elem(_e, true);
				showElement(_e)
			}
		}, _opt.isLoadCss)
	}

	function onReady(width,
		height) {
		var _e = $D.get("divdialog"),
			_titleRect = $D.getRect("divdialogtitle"),
			elm = $D.get("frame_tips"),
			_w = 0,
			_h = 0;
		if (!_e) return;
		if (elm) {
			elm.width = width + "px";
			elm.height = height + "px"
		}
		_e.style.visibility = "hidden";
		_e.style.visibility = "visible";
		if (!_titleRect) {
			_e.style.width = width + "px";
			_e.style.height = height + "px"
		} else {
			_e.style.width = width + "px";
			_e.style.height = height + _titleRect.height + "px"
		}
		_e.style.filter = "none";
		_e.style.opacity = 1;
		_this.fix_elem(_e);
		showElement(_e);
		try {
			top.g_topChn.keyboard.init(document.getElementById("frame_tips").contentDocument ||
				window.frames["frame_tips"].document)
		} catch (e) {}
	}

	function hide() {
		hideElement("divdialog");
		if (_timerScroll != null) {
			clearTimeout(_timerScroll);
			_timerScroll = null
		}
		$E.removeEvent(window, "scroll", _on_scroll);
		$E.removeEvent(window, "resize", _on_scroll);
		g_tips.hideMask()
	}

	function getArg() {
		return objArg
	}
	return {
		show: show,
		hide: hide,
		onReady: onReady,
		getArg: getArg
	}
}();
var isfirst = 1;

function test(obj) {
	if (isfirst) {
		g_popup.init({
			container: obj,
			eventType: "hover",
			arrow: "top",
			width: "100px",
			class_mod: "global_tip_content rank_rule",
			curIndex: 1,
			showDelay: 500,
			hideDelay: 500,
			contents: [{
				text: "test1",
				click: "alert"
			}, {
				text: "test2",
				click: "alert"
			}, {
				text: "test3",
				click: "alert"
			}]
		});
		g_popup.init({
			container: "divsonglist1",
			eventType: "click",
			arrow: "top",
			width: "100px",
			class_mod: "filter_pop",
			contents: [{
				text: "test4",
				click: "alert"
			}, {
				text: "test5",
				click: "alert"
			}, {
				text: "test6",
				click: "alert"
			}]
		});
		isfirst = 0
	}
}
var g_tips = MUSIC.widget.tips;
var g_popup = g_tips.popup;
var g_dialog = g_tips.dialog;

function g_showBusyTips() {
	g_popup.show(1, "\u670d\u52a1\u5668\u7e41\u5fd9\uff0c\u8bf7\u7a0d\u5019\u91cd\u8bd5\uff01", "", 3E3, 290)
}
MUSIC.widget.watch = {
	set: function(_busineseid, _webid) {
		this._webid = !_webid ? this._webid : _webid;
		this._busineseid = !_busineseid ? this._busineseid : _busineseid
	},
	_busineseid: 170,
	_webid: 111,
	_rnd: 1,
	getWaitTime: function() {
		try {
			var t = top["TRANS_TIME_POINT"];
			if (!!t) t = parseInt(t);
			else t = 0;
			top["TRANS_TIME_POINT"] = 0;
			return t
		} catch (e) {
			return 0
		}
	},
	_sended: false,
	timers: [],
	setTime: function() {
		this.timers = [];
		if (typeof g_watchCssBegin == "undefined") return false;
		var _begin = this.getWaitTime(),
			_end = new Date - 0;
		if (_begin == 0) _begin =
			g_watchCssBegin;
		this.timers[0] = _end - _begin;
		if (this.timers[0] > 1E4) return false;
		this.timers[1] = g_watchCssBegin - _begin;
		if (typeof g_watchPageBegin == "undefined") return false;
		this.timers[2] = g_watchPageBegin - g_watchCssBegin;
		if (typeof g_watchJsBegin == "undefined") return false;
		if (typeof g_watchRenderBegin == "undefined") return false;
		this.timers[3] = g_watchRenderBegin - g_watchJsBegin;
		this.timers[4] = _end - g_watchRenderBegin;
		return true
	},
	send: function(_id, _rnd) {
		if (typeof _rnd == "number" && _rnd > 0) this._rnd = _rnd;
		if ((new Date).valueOf() %
			this._rnd == 0) {
			var url = "http://isdspeed.qq.com/cgi-bin/r.cgi?flag1=" + this._busineseid + "&flag2=" + this._webid;
			url += "&flag3=" + _id;
			url += "&flag4=" + this._rnd;
			for (var i = 0; i < this.timers.length; i++) url += "&" + (i + 1) + "=" + this.timers[i];
			(new Image).src = url
		}
	},
	commit: function(id) {
		if (this._sended) return;
		if (this.setTime()) {
			this._sended = true;
			setTimeout(this.send.bind(this), 2E3, id)
		}
	}
};
MUSIC.widget.statistics = {
	initPvJs: function(callback) {
		var _sd = new MUSIC.JsLoader;
		_sd.onload = function() {
			if (callback) callback()
		};
		_sd.load("http://pingjs.qq.com/ping.js")
	},
	getVirtualUrl: function(url) {
		if (/http:\/\/i\.y\.qq\.com\/v8\/fcg-bin\/v8_4web.fcg/.test(url || window.location.href)) return "http://y.qq.com/y/static/index.html";
		else if (top.showIndex && /\/y\/static\/index\.html/.test(url || window.location.href)) return "http://y.qq.com/y/static/index.html";
		else if (/http:\/\/i\.y\.qq\.com\/v8\/fcg-bin\/fcg_v8_toplist_cp\.fcg\?([^#?$.]*)page=index/.test(window.location.href)) return "/y/static/toplist/index.html";
		else if (/http:\/\/i\.y\.qq\.com\/v8\/fcg-bin\/fcg_v8_toplist_cp\.fcg\?([^#?$.]*)page=detail/.test(window.location.href)) return "/y/static/toplist/detail.html";
		else if (/http:\/\/i\.y\.qq\.com\/v8\/fcg-bin\/fcg_v8_singer_detail_cp\.fcg/.test(window.location.href)) return "/y/static/singer/detail.html";
		else if (/http:\/\/i\.y\.qq\.com\/s\.plcloud\/fcgi-bin\/fcg_yqq_song_detail_info_cp\.fcg/.test(window.location.href)) return "/y/static/song/detail.html";
		else if (/http:\/\/i\.y\.qq\.com\/s\.plcloud\/fcgi-bin\/fcg_yqq_song_detail_info_cp\.fcg/.test(window.location.href)) return "/y/static/song/detail.html";
		else if (/http:\/\/i\.y\.qq\.com\/v8\/fcg-bin\/fcg_v8_mvout4web\.fcg/.test(window.location.href)) return "/y/static/mv/index.html";
		else return window.location.href
	},
	doPvg: function(url) {
		if (typeof pgvMain == "function") {
			pvRepeatCount = 1;
			url = g_statistics.getVirtualUrl(url);
			url = url.replace(/^http:\/\/.*\.qq\.com/i, "");
			url = url.replace(new RegExp("pgv_ref"), "ADTAG");
			if (url.indexOf("/#") == 0) return false;
			var params = {
				"virtualDomain": "y.qq.com",
				"statIframe": true,
				"virtualURL": url,
				"useRefUrl": true,
				"careSameDomainRef": true,
				"tagParamName": "ADTAG",
				"ADTAG": top.getParameterNew(url, "ADTAG")
			};
			pgvMain("", params)
		}
	},
	getStatSource: function() {
		if (window == top) {
			if ((new RegExp("mv_play.html")).test(window.location.href)) return 8;
			return 0
		}
		var reg_map = {
			"y/static/index.html": 1,
			"static/singer/": 2,
			"static/album/": 3,
			"static/toplist/": 4,
			"static/mv/": 5,
			"static/mymusic/": 6,
			"soso.music.qq.com": 7,
			"mv_play.html": 8,
			"static/topic/": 9,
			"static/taoge/": 11,
			"static/qplay/": 10
		};
		for (var reg in reg_map) {
			var r = new RegExp(reg);
			if (r.test(window.location.href)) return reg_map[reg]
		}
		return 99
	},
	pgvClickStat: function(type, subtype) {
		if (!type || type == "") return;
		var _map = {
			0: "TOP",
			1: "INDEX",
			2: "SINGER",
			3: "ALBUM",
			4: "TOPLIST",
			5: "MV",
			6: "MYMUSIC",
			7: "SEARCH",
			8: "MVDETAIL",
			9: "TOPIC",
			10: "QPLAY",
			11: "RADIO",
			99: "OTHER"
		};
		var _src = "OTHER",
			tmp = g_statistics.getStatSource();
		if (tmp in _map) _src = _map[tmp];
		var hottag = ["Y", type.toUpperCase(), _src.toUpperCase()].join(".");
		if (!!subtype) hottag += "." + subtype.toUpperCase();
		if (typeof pgvSendClick != "undefined") pgvSendClick({
			hottag: hottag
		})
	},
	stat: function(optcode, dim1, dim2,
		song_id, source, buff_time, rule_id) {
		var index = 0;
		var uin = g_user.getUin();
		var base_url = "http://i.y.qq.com/portalcgi/fcgi-bin/statistic/cgi_musicportal_stat3.fcg?";

		function _stat() {
			var arg_list = [];
			arg_list.push("msg0=2080000072");
			arg_list.push("num0=15");
			if (!dim1 || dim1 < 0) dim1 = 0;
			if (!dim2 || dim2 < 0) dim2 = 0;
			if (!song_id || song_id < 0) song_id = 0;
			var item = [uin, dim1, dim2, song_id, optcode, source, buff_time, rule_id, 0, 0, 0, getCookie("pgv_pvid"), "", "", ""];
			for (var i = 0, len = item.length; i < len; i++) arg_list.push("a0-" + i + "=" + item[i]);
			if (optcode > 0) {
				var url = base_url + arg_list.join("&");
				try {
					(new Image).src = url
				} catch (e) {}
			}
		}
		_stat()
	},
	stat2: function(stat_arr) {
		if (stat_arr.constructor != window.Array) return;
		var stat_arr_len = stat_arr.length;
		if (stat_arr_len < 6 || stat_arr_len > 10) return;
		var uin = g_user.getUin();
		var base_url = "http://i.y.qq.com/portalcgi/fcgi-bin/statistic/cgi_musicportal_stat3.fcg?";
		var num = 10;
		for (var i = 0; i < stat_arr_len; i++) {
			stat_arr[i] = stat_arr[i].split(",");
			if (stat_arr[i].length < num) num = stat_arr[i].length
		}
		var arg_list = [];
		for (var i =
				0; i < num; i++) {
			arg_list.push("msg" + i + "=2080000072");
			arg_list.push("num" + i + "=15");
			arg_list.push("a" + i + "-0" + "=" + uin);
			for (var j = 0; j < stat_arr_len; j++) {
				if (stat_arr[j][i] == "") stat_arr[j][i] = 0;
				arg_list.push("a" + i + "-" + (j + 1) + "=" + stat_arr[j][i])
			}
			for (var j = stat_arr_len; j < 10; j++) arg_list.push("a" + i + "-" + (j + 1) + "=0");
			arg_list.push("a" + i + "-11=" + getCookie("pgv_pvid"));
			for (var j = 11; j < 14; j++) arg_list.push("a" + i + "-" + (j + 1) + "=")
		}
		var url = base_url + arg_list.join("&");
		try {
			(new Image).src = url
		} catch (e) {}
	},
	stat3: function(optcode,
		remark) {
		var source = g_statistics.getStatSource();
		remark = remark || 0;
		g_user.getVipInfo(function(detail) {
			var base_url = "http://i.y.qq.com/portalcgi/fcgi-bin/statistic/cgi_useropt_stat2.fcg";
			var user_type = detail.vip == 1 ? "1" : "2";
			var user_level = detail.vip == 1 ? g_user.countVipLevel(detail.score) : 0;
			if (optcode > 0) {
				var url = base_url + "?click_time=" + (new Date).valueOf() + "&source=focus&oper_cmd=" + optcode + "&vip_type=" + user_type + "&user_level=" + user_level + "&remark=" + remark;
				try {
					(new Image).src = url
				} catch (e) {}
			}
		}, function(detail) {
			var base_url =
				"http://i.y.qq.com/portalcgi/fcgi-bin/statistic/cgi_useropt_stat2.fcg";
			var user_type = "4";
			var user_level = 0;
			if (optcode > 0) {
				var url = base_url + "?click_time=" + (new Date).valueOf() + "&source=focus&oper_cmd=" + optcode + "&vip_type=" + user_type + "&user_level=" + user_level + "&remark=" + remark;
				try {
					(new Image).src = url
				} catch (e) {}
			}
		})
	}
};
var g_statistics = MUSIC.widget.statistics;
var g_stat = g_statistics.stat;
var g_stat2 = g_statistics.stat2;
var g_stat3 = g_statistics.stat3;
var pgvClickStat = g_statistics.pgvClickStat;

function stat_miniblog(singerid) {}
(function(q) {
	var commurl = "http://c.isdspeed.qq.com/code.cgi",
		urlParse = /^http:\/\/([\s\S]*?)(\/[\s\S]*?)(?:\?|$)/,
		pingSender = q.pingSender,
		collector = [],
		timer, isreportG = Math.random() * 1E3 < 1,
		isreportP = Math.random() * 10 < 1,
		uin = typeof g_user.getUin == "undefined" ? 0 : g_user.getUin(),
		duration = 1E3,
		each = q.object.each;

	function valueStat(domain, cgi, type, code, time, rate, uin, exts) {
		if (Math.random() > 1 / rate) return;
		var param = [];
		param.push("uin=" + uin, "key=" + "domain,cgi,type,code,time,rate", "r=" + Math.random());
		if (typeof exts.unshift ==
			"function") {
			var i = 0;
			while (exts.length) {
				if (param.join("&").length > 1E3) break;
				var c = exts.shift();
				param.push([i + 1, 1].join("_") + "=" + c[0]);
				param.push([i + 1, 2].join("_") + "=" + c[1] + "?" + platform);
				param.push([i + 1, 3].join("_") + "=" + c[2]);
				param.push([i + 1, 4].join("_") + "=" + c[3]);
				param.push([i + 1, 5].join("_") + "=" + c[4]);
				param.push([i + 1, 6].join("_") + "=" + c[5]);
				i++
			}
		}
		if (domain != "" || i > 0) try {
			var url = commurl + "?" + param.join("&");
			(new Image).src = url
		} catch (e) {}
	}

	function _r() {
		if (collector.length) valueStat("", "", "", "", "", "", uin,
			collector);
		timer = setTimeout(_r, duration);
		duration *= 1.1
	}

	function toabs(id) {
		if (!id) return "";
		var ret = id;
		if (id.indexOf("://") == 4 || id.indexOf("://") == 5) ret = id;
		else if (id.indexOf("../") === 0) ret = location.protocol + "//" + location.host + "/" + id.replace(/(?:\.\.\/)*/, location.pathname.split("/").slice(1, -1 * id.split("../").length).join("/") + "/");
		else if (/^[^\/]+\//.test(id) || id.indexOf("./") === 0) {
			if (id.indexOf("./") === 0) id = id.substring(2);
			ret = location.protocol + "//" + location.host + location.pathname.split("/").slice(0, -1).join("/") + "/" + id
		} else if (id.charAt(0) === "/") ret = location.protocol + "//" + location.host + id;
		return ret
	}
	each(["JSONGetter", "FormSender"], function(n) {
		q[n].prototype.setReportRate = function(rate) {
			this.reportRate = rate
		};
		if (q[n] && q[n].pluginsPool) {
			if (typeof q[n].pluginsPool.onRequestComplete == "undefined") q[n].pluginsPool.onRequestComplete = [];
			q[n].pluginsPool.onRequestComplete.push(function(th) {
				var u = toabs(th._uri || th.uri),
					mtch = u.match(urlParse),
					url = mtch[2],
					domain = mtch[1];
				platform = (th.data || th._data).platform ||
					"";
				if (th.msg && th.msg.indexOf("Connection") > -1) {
					collector.push([domain, url, 2, 502, +th.endTime - th.startTime, 1]);
					return
				}
				var d = th.resultArgs;
				if (d && (d = d[0])) {
					d.code = typeof d.reportcode == "undefined" ? d.code : d.reportcode;
					if (typeof d.code == "undefined") return;
					else if (d.code < 0) collector.push([domain, url, 2, d.subcode || d.code, +th.endTime - th.startTime, 1]);
					else if (d.code > 0) collector.push([domain, url, 3, d.subcode || d.code, +th.endTime - th.startTime, 1]);
					else {
						if (th instanceof q.JSONGetter)
							if (th.reportRate)(th.reportRate ==
								1 || Math.random() < 1 / th.reportRate) && collector.push([domain, url, 1, d.subcode || 1, +th.endTime - th.startTime, th.reportRate || 1E3]);
							else isreportG && collector.push([domain, url, 1, d.subcode || 1, +th.endTime - th.startTime, th.reportRate || 1E3]);
						if (th instanceof q.FormSender)
							if (th.reportRate)(th.reportRate == 1 || Math.random() < 1 / th.reportRate) && collector.push([domain, url, 1, d.subcode || 1, +th.endTime - th.startTime, th.reportRate || 10]);
							else isreportP && collector.push([domain, url, 1, d.subcode || 1, +th.endTime - th.startTime, th.reportRate ||
								10
							])
					}
				}
			})
		}
	});
	_r()
})(MUSIC);
MUSIC.widget.Timer = function() {
	this.freq = 100;
	this.totaltimes = 0;
	this.callback = MUSIC.emptyFn;
	this.endcallback = MUSIC.emptyFn
};
MUSIC.widget.Timer.prototype = {
	timer: null,
	isExecuting: false,
	isOver: true,
	times: 0,
	start: function() {
		this.stop();
		this.isExecuting = false;
		this.isOver = false;
		this.times = 0;
		this.timer = setInterval(this.onTimerEvent.bind(this), this.freq)
	},
	stop: function() {
		if (!this.timer) return;
		clearInterval(this.timer);
		this.timer = null;
		this.isOver = true;
		if (typeof this.endcallback == "function") this.endcallback(this.times)
	},
	onTimerEvent: function() {
		if (!this.isExecuting) try {
			this.isExecuting = true;
			this.times++;
			if (typeof this.callback ==
				"function") this.callback(this.times);
			if (this.totaltimes >= 0 && this.times >= this.totaltimes) this.stop()
		} catch (e) {} finally {
			this.isExecuting = false
		}
	}
};
MUSIC.effect = {
	run: function(elem, prop, opts) {
		var o = MUSIC.effect,
			tid = ++o._uniqueID;
		if (MUSIC.userAgent.webkit) o.mode = "css3";
		opts = o._opt(opts);
		opts.start();
		elem = MUSIC.dom.get(elem);
		var fprop = o._prop(prop, elem);
		if (!elem) return;
		elem._tid = tid;
		if (MUSIC.userAgent.webkit) o.mode = "css3";
		var t = new MUSIC.tweenMaker(0, 100, opts.duration, opts.interval, {
			functor: opts.functor
		});
		t.onStart = function() {
			o._tweenArray[tid] = t;
			if (o.mode == "css3") {
				var csstrans = new MUSIC.cssTransfrom(elem, fprop, opts);
				csstrans.firecss()
			}
		};
		t.onChange =
			function(p) {
				if (o.mode != "css3") o.drawStyle(fprop, p, elem);
				opts.change(p)
			};
		t.onEnd = function() {
			if (o.mode != "css3") opts.complete();
			delete o._tweenArray[elem._tid]
		};
		t.start()
	},
	show: function(elem, duration, cb) {
		var d = MUSIC.dom;
		elem = d.get(elem);
		cb = cb || MUSIC.emptyFn;
		MUSIC.effect.run(elem, {
			opacity: 1
		}, {
			duration: duration || 1E3,
			complete: cb,
			start: function() {
				d.setStyle(elem, "opacity", 0);
				d.setStyle(elem, "display", "block")
			}
		})
	},
	hide: function(elem, duration, cb) {
		var d = MUSIC.dom;
		elem = d.get(elem);
		cb = cb || MUSIC.emptyFn;
		MUSIC.effect.run(elem, {
			opacity: 0
		}, {
			duration: duration || 1E3,
			complete: function() {
				d.setStyle(elem, "display", "none");
				d.setStyle(elem, "opacity", 1);
				cb()
			}
		})
	},
	getPercent: function(elem) {
		var elem = MUSIC.dom.get(elem),
			tid = elem._tid,
			t = MUSIC.effect._tweenArray[tid];
		return t.getPercent()
	},
	stop: function(elem) {
		var ua = MUSIC.userAgent,
			elem = MUSIC.dom.get(elem);
		if (ua.webkit) {
			var uid = elem._transition._uid;
			elem.style.cssText = MUSIC.cssTransfrom._cssText[uid]
		} else {
			var tid = elem._tid,
				t = MUSIC.effect._tweenArray[tid];
			t.stop()
		}
	},
	drawStyle: function(prop,
		p, elem) {
		p *= 0.01;
		MUSIC.object.each(prop, function(f, pname) {
			var s = f.start,
				e = f.end,
				u = f.unit;
			v = e >= s ? (e - s) * p + s : s - (s - e) * p;
			MUSIC.dom.setStyle(elem, pname, v + u)
		})
	},
	_tweenArray: {},
	mode: "timer",
	_uniqueID: 0,
	_opt: function(opts) {
		var opt = opts,
			ua = MUSIC.userAgent,
			o = MUSIC.effect;
		opt.duration = opts.duration || 500;
		opt.easing = o.mode == "css3" ? opts.easing || false : false;
		opt.complete = opts.complete || MUSIC.emptyFn;
		opt.interval = opts.interval || 25;
		opt.start = opts.start || MUSIC.emptyFn;
		opt.change = opts.change || MUSIC.emptyFn;
		return opt
	},
	_prop: function(prop, elem) {
		var fprop = {},
			es = MUSIC.effect,
			ua = MUSIC.userAgent,
			webkit = ua.webkit;
		MUSIC.object.each(prop, function(val, pname) {
			pname = MUSIC.string.camelCase(pname);
			if (MUSIC.object.getType(val) == "object") {
				var f = es._cssValue(elem, val.value, pname);
				if (webkit) {
					val.value = f.end + (f.unit ? f.unit : 0);
					fprop[pname] = val
				} else fprop[pname] = f
			} else {
				var d = es._cssValue(elem, val, pname);
				if (webkit) d = d.end + (d.unit ? d.unit : 0);
				fprop[pname] = d
			}
		});
		return fprop
	},
	_cssValue: function(elem, val, name) {
		var fnum = /^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,
			fprop = {},
			parts = fnum.exec(val + ""),
			o = MUSIC.effect,
			start = o._cur(elem, name);
		if (parts) {
			var end = parseFloat(parts[2]),
				unit = parts[3] || (o._cssNumber[name] ? "" : "px");
			if (unit !== "px") {
				MUSIC.dom.setStyle(elem, name, (end || 1) + unit);
				start = (end || 1) / o._cur(elem, name) * start;
				MUSIC.dom.setStyle(elem, name, start + unit)
			}
			if (parts[1]) end = (parts[1] === "-=" ? -1 : 1) * end + start;
			fprop = {
				start: start,
				end: end,
				unit: unit
			}
		} else fprop = {
			start: start,
			end: val,
			unit: ""
		};
		return fprop
	},
	_cssNumber: {
		"zIndex": true,
		"fontWeight": true,
		"opacity": true,
		"zoom": true,
		"lineHeight": true
	},
	_cur: function(elem, p) {
		var parsed, r = MUSIC.dom.getStyle(elem, p);
		if (elem != null && (elem[p] != null && (!elem.style || elem.style[p] == null))) return elem[p];
		return isNaN(parsed = parseFloat(r)) ? !r || r === "auto" ? 0 : r : parsed
	}
};
MUSIC.tweenMaker = function(startvalue, endvalue, duration, interval, opt) {
	var o = this;
	o.duration = duration || 500;
	o.interval = interval || 25;
	o.startValue = startvalue;
	o.endValue = endvalue;
	o.count = Math.ceil(o.duration / o.interval);
	o.elapse = 0;
	o.opt = opt || {};
	o.functor = o.opt.functor || MUSIC.transitions.swing;
	o.onStart = MUSIC.emptyFn;
	o.onChange = MUSIC.emptyFn;
	o.onEnd = MUSIC.emptyFn;
	o.playing = false;
	o.changeValue = o.endValue - o.startValue;
	o.currentValue = 0
};
MUSIC.tweenMaker.prototype = {
	start: function() {
		var o = this;
		o.playing = true;
		o._startTime = (new Date).getTime();
		o.onStart.apply(o);
		o._runTimer()
	},
	_runTimer: function() {
		var o = this;
		if (o.playing) {
			o._playTimer((new Date).getTime() - o._startTime);
			setTimeout(function() {
				o._runTimer.apply(o, [])
			}, o.interval)
		}
	},
	_playTimer: function(time) {
		var _end = false,
			o = this;
		if (time > o.duration) {
			time = o.duration;
			_end = true
		}
		o.currentValue = o.functor(time, o.startValue, o.changeValue, o.duration);
		o.onChange.apply(o, [o.getPercent()]);
		if (_end) {
			o.playing =
				false;
			o.onEnd.apply(this);
			if (window.CollectGarbage) CollectGarbage()
		}
	},
	stop: function() {
		this.isPlayed = false;
		this.currentValue = this.endValue
	},
	getPercent: function() {
		return (this.currentValue - this.startValue) / this.changeValue * 100
	}
};
MUSIC.cssTransfrom = function(elem, prop, opts) {
	var o = this;
	o._elem = elem;
	o._uid = "uid_" + MUSIC.now();
	if (!o._running && prop) {
		o._conf = prop;
		o._duration = "duration" in opts ? opts.duration / 1E3 : 0.5;
		o._delay = "delay" in opts ? opts.delay : 0;
		o._easing = opts.easing || "ease";
		o._count = 0;
		o._running = false;
		o._callback = MUSIC.lang.isFunction(opts.complete) ? opts.complete : MUSIC.emptyFn;
		o._change = opts.change;
		elem._transition = o
	}
	return o
};
MUSIC.cssTransfrom._cssText = {};
MUSIC.cssTransfrom._attrs = {};
MUSIC.cssTransfrom._hasEnd = {};
MUSIC.cssTransfrom.prototype = {
	firecss: function() {
		var o = this,
			elem = o._elem,
			uid = o._uid,
			conf = this._conf,
			style = elem.style,
			getStyle = MUSIC.dom.getStyle,
			ct = MUSIC.cssTransfrom,
			attrs = ct._attrs[uid],
			cssText = "",
			DELAY = "-webkit-transition-delay",
			TRANSFORM = "WebkitTransform",
			cssTransition = getStyle(elem, "-webkit-transition-property"),
			transitionText = "-webkit-transition-property: ",
			duration = "-webkit-transition-duration: ",
			easing = "-webkit-transition-timing-function: ",
			delay = DELAY + ": ",
			quote = /,$/,
			_cprop = "";
		if (conf.transform &&
			!conf[TRANSFORM]) {
			conf[TRANSFORM] = conf.transform;
			delete conf.transform
		}
		for (attr in conf) {
			if (conf.hasOwnProperty(attr)) {
				o._addProperty(attr, conf[attr]);
				if (elem.style[attr] === "") MUSIC.dom.setStyle(elem, attr, getStyle(elem, attr))
			}
			_cprop = attr
		}
		if (cssTransition !== "all") {
			transitionText += cssTransition + ",";
			duration += getStyle(elem, "-webkit-transition-duration") + ",";
			easing += getStyle(elem, "-webkit-transition-timing-function") + ",";
			delay += getStyle(elem, DELAY) + ","
		}
		attrs = ct._attrs[uid];
		for (name in attrs) {
			hyphy = o._toHyphen(name);
			attr = attrs[name];
			if (attrs.hasOwnProperty(name) && attr.transition === o)
				if (name in elem.style) {
					duration += parseFloat(attr.duration) + "s,";
					delay += parseFloat(attr.delay) + "s,";
					easing += attr.easing + ",";
					transitionText += hyphy + ",";
					cssText += hyphy + ": " + attr.value + "; "
				} else o._removeProperty(name)
		}
		transitionText = transitionText.replace(quote, ";");
		duration = duration.replace(quote, ";");
		easing = easing.replace(quote, ";");
		delay = delay.replace(quote, ";");
		if (!ct._hasEnd[uid]) {
			elem.addEventListener("webkitTransitionEnd", function(e) {
				o._onTransfromEnd(e,
					uid)
			}, false);
			ct._hasEnd[uid] = true
		}
		ct._cssText[uid] = cssText;
		style.cssText += transitionText + duration + easing + delay + cssText
	},
	_toHyphen: function(prop) {
		prop = prop.replace(/([A-Z]?)([a-z]+)([A-Z]?)/g, function(m0, m1, m2, m3) {
			var str = "";
			m1 && (str += "-" + m1.toLowerCase());
			str += m2;
			m3 && (str += "-" + m3.toLowerCase());
			return str
		});
		return prop
	},
	_endTransfrom: function(sname) {
		var elem = this._elem,
			value = MUSIC.dom.getStyle(elem, "-webkit-transition-property");
		if (typeof value === "string") {
			value = value.replace(new RegExp("(?:^|,\\s)" +
				sname + ",?"), ",");
			value = value.replace(/^,|,$/, "");
			elem.style["WebkitTransition"] = value
		}
	},
	_onTransfromEnd: function(e, uid) {
		var event = e,
			elem = this._elem,
			pname = MUSIC.string.camelCase(event.propertyName),
			elapsed = event.elapsedTime,
			attrs = MUSIC.cssTransfrom._attrs[uid],
			attr = attrs && attrs[pname],
			tran = attr ? attr.transition : null,
			_cprop = "";
		if (tran) {
			for (attr in this._conf) _cprop = attr;
			tran._removeProperty(pname);
			tran._endTransfrom(pname);
			if (tran._count <= 0) tran._end(elapsed)
		}
	},
	_addProperty: function(prop, conf) {
		var o =
			this,
			node = this._elem,
			uid = o._uid,
			attrs = MUSIC.cssTransfrom._attrs[uid],
			computed, compareVal, dur, attr, val;
		if (!attrs) attrs = MUSIC.cssTransfrom._attrs[uid] = {};
		attr = attrs[prop];
		if (conf && conf.value !== undefined) val = conf.value;
		else if (conf !== undefined) {
			val = conf;
			conf = {}
		}
		if (attr && attr.transition)
			if (attr.transition !== o) attr.transition._count--;
		o._count++;
		dur = (typeof conf.duration != "undefined" ? conf.duration : o._duration) || 1E-4;
		attrs[prop] = {
			value: val,
			duration: dur,
			delay: typeof conf.delay != "undefined" ? conf.delay : o._delay,
			easing: conf.easing || o._easing,
			transition: o
		};
		computed = MUSIC.dom.getStyle(node, prop);
		compareVal = typeof val === "string" ? computed : parseFloat(computed);
		if (compareVal === val) setTimeout(function() {
			o._onTransfromEnd.call(o, {
				propertyName: prop,
				elapsedTime: dur
			}, uid)
		}, dur * 1E3)
	},
	_removeProperty: function(prop) {
		var o = this,
			attrs = MUSIC.cssTransfrom._attrs[o._uid];
		if (attrs && attrs[prop]) {
			delete attrs[prop];
			o._count--
		}
	},
	_end: function() {
		var o = this,
			elem = o._elem,
			callback = o._callback;
		o._running = false;
		o._callback = null;
		if (elem &&
			callback) setTimeout(function() {
			callback()
		}, 1)
	}
};
MUSIC.now = function() {
	return (new Date).getTime()
};
MUSIC.string = MUSIC.string || {};
MUSIC.string.camelCase = function(s) {
	var r = /-([a-z])/ig;
	return s.replace(r, function(all, letter) {
		return letter.toUpperCase()
	})
};
MUSIC.Tween = function(elem, prop, func, startValue, finishValue, duration) {
	var o = this;
	o.elem = MUSIC.dom.get(elem);
	o.prop = {};
	o.sv = startValue;
	o.fv = finishValue;
	o.pname = prop;
	o.prop[prop] = parseInt(finishValue);
	o.opts = {
		duration: duration * 1E3
	};
	o.onMotionStart = MUSIC.emptyFn;
	o.onMotionChange = null;
	o.onMotionStop = MUSIC.emptyFn;
	o.css = true
};
MUSIC.Tween.prototype.start = function() {
	var o = this,
		s = parseInt(o.sv),
		e = parseInt(o.fv);
	var set = MUSIC.dom.setStyle(o.elem, o.pname, o.sv);
	if (set) {
		o.opts.complete = o.onMotionStop;
		o.opts.change = function(p) {
			p *= 0.01;
			var v = e >= s ? (e - s) * p + s : s - (s - e) * p;
			o.onMotionChange && o.onMotionChange.apply(o, [o.elem, o.pname, v])
		};
		o.onMotionStart.apply(o);
		MUSIC.effect.run(o.elem, o.prop, o.opts)
	} else {
		o.css = false;
		var t = new MUSIC.tweenMaker(s, e, o.opts.duration, o.opts.interval || 15);
		t.onStart = function() {
			o.t = t;
			o.onMotionStart.apply(o)
		};
		t.onChange = function(p) {
			p *= 0.01;
			var v = e >= s ? (e - s) * p + s : s - (s - e) * p;
			o.onMotionChange && o.onMotionChange.apply(o, [o.elem, o.pname, v])
		};
		t.onEnd = function() {
			o.onMotionStop.apply(o)
		};
		t.start()
	}
};
MUSIC.Tween.prototype.getPercent = function() {
	return this.css ? MUSIC.effect.getPercent(this.elem) : this.t.getPercent()
};
MUSIC.Tween.prototype.stop = function() {
	MUSIC.effect.stop(this.elem)
};
MUSIC.transitions = {
	linear: function(t, b, c, d) {
		return c * t / d + b
	},
	swing: function(t, b, c, d) {
		return (-Math.cos(t * Math.PI / d) / 2 + 0.5) * c + b
	},
	backEaseIn: function(t, b, c, d) {
		var s = 1.70158;
		return c * (t /= d) * t * ((s + 1) * t - s) + b
	},
	backEaseOut: function(t, b, c, d, a, p) {
		var s = 1.70158;
		return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b
	},
	backEaseInOut: function(t, b, c, d, a, p) {
		var s = 1.70158;
		if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= 1.525) + 1) * t - s)) + b;
		return c / 2 * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + b
	},
	bounceEaseOut: function(t, b, c, d) {
		if ((t /= d) < 1 / 2.75) return c * (7.5625 *
			t * t) + b;
		else if (t < 2 / 2.75) return c * (7.5625 * (t -= 1.5 / 2.75) * t + 0.75) + b;
		else if (t < 2.5 / 2.75) return c * (7.5625 * (t -= 2.25 / 2.75) * t + 0.9375) + b;
		else return c * (7.5625 * (t -= 2.625 / 2.75) * t + 0.984375) + b
	},
	bounceEaseIn: function(t, b, c, d) {
		return c - MUSIC.transitions.bounceEaseOut(d - t, 0, c, d) + b
	},
	bounceEaseInOut: function(t, b, c, d) {
		if (t < d / 2) return MUSIC.transitions.bounceEaseIn(t * 2, 0, c, d) * 0.5 + b;
		else return MUSIC.transitions.bounceEaseOut(t * 2 - d, 0, c, d) * 0.5 + c * 0.5 + b
	},
	strongEaseIn: function(t, b, c, d) {
		return c * (t /= d) * t * t * t * t + b
	},
	strongEaseOut: function(t,
		b, c, d) {
		return c * ((t = t / d - 1) * t * t * t * t + 1) + b
	},
	strongEaseInOut: function(t, b, c, d) {
		if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
		return c / 2 * ((t -= 2) * t * t * t * t + 2) + b
	},
	elasticEaseIn: function(t, b, c, d, a, p) {
		if (t == 0) return b;
		if ((t /= d) == 1) return b + c;
		if (!p) p = d * 0.3;
		if (!a || a < Math.abs(c)) {
			a = c;
			var s = p / 4
		} else var s = p / (2 * Math.PI) * Math.asin(c / a);
		return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b
	},
	elasticEaseOut: function(t, b, c, d, a, p) {
		if (t == 0) return b;
		if ((t /= d) == 1) return b + c;
		if (!p) p = d * 0.3;
		if (!a || a < Math.abs(c)) {
			a = c;
			var s =
				p / 4
		} else var s = p / (2 * Math.PI) * Math.asin(c / a);
		return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b
	},
	elasticEaseInOut: function(t, b, c, d, a, p) {
		if (t == 0) return b;
		if ((t /= d / 2) == 2) return b + c;
		if (!p) var p = d * (0.3 * 1.5);
		if (!a || a < Math.abs(c)) {
			var a = c;
			var s = p / 4
		} else var s = p / (2 * Math.PI) * Math.asin(c / a);
		if (t < 1) return -0.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
		return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * 0.5 + c + b
	}
};
MUSIC.widget.Storage = {
	helperUrl: MUSIC.config.StorageHelperPage,
	ifrCallback: null,
	instance: null,
	getInstance: function() {
		var _ins = this["instance"];
		if (_ins) return _ins;
		return null
	}
};
MUSIC.widget.Storage.create = function(cb, opt) {
	if (typeof cb != "function") return;
	opt = opt || {};
	var db = null,
		dbname = opt.dbname || "music_database",
		defaultDomain = opt.domain || document.domain,
		helperUrl = opt.helper || MUSIC.widget.Storage.helperUrl,
		share = opt.share || false,
		_clientStore = ["globalStorage", "localStorage", "userData"];
	var _cs = MUSIC.widget.Storage;
	var createHelper = function(th, type) {
		var i = document.createElement("iframe");
		i.id = "userData_iframe_" + dbname;
		i.style.display = "none";
		i.src = helperUrl;
		MUSIC.widget.Storage.ifrCallback =
			function() {
				db = i.contentWindow.create(dbname, type);
				if (db) cb(th);
				else cb(false)
			};
		document.body.appendChild(i)
	};
	var getExpireDate = function(days) {
		var d = new Date;
		days = days || 365 * 3;
		d.setDate(d.getDate() + days);
		return d.toUTCString()
	};
	var _backend = {};
	_backend.userData = {
		isSupport: !!window.ActiveXObject,
		type: 1,
		get: function(key, cb) {
			db.load(dbname);
			var val = db.getAttribute(key);
			typeof cb == "function" && cb(val);
			return val
		},
		set: function(key, value) {
			try {
				db.load(dbname);
				db.setAttribute(key, value);
				db.save(dbname);
				return true
			} catch (ex) {
				return false
			}
		},
		remove: function(key) {
			db.load(dbname);
			db.removeAttribute(key);
			db.save(dbname)
		},
		init: function() {
			if (share) {
				createHelper(this, "userData");
				return
			}
			var el = document.documentElement || document.body;
			el.addBehavior("#default#userdata");
			el.load(dbname);
			db = el;
			cb(this)
		},
		clear: function() {
			try {
				db.load(dbname);
				db.expires = (new Date(123456789E4)).toUTCString();
				db.save(dbname);
				db.load(dbname);
				db.expires = getExpireDate();
				db.save(dbname);
				return true
			} catch (ex) {
				return false
			}
		}
	};
	_backend.globalStorage = {
		isSupport: !!window.globalStorage,
		type: 2,
		get: function(key, cb) {
			var v = (v = db.getItem(key)) && v.value ? v.value : v;
			typeof cb == "function" && cb(v);
			return v
		},
		set: function(key, value) {
			try {
				db.setItem(key, value);
				return true
			} catch (ex) {
				return false
			}
		},
		remove: function(key) {
			db.removeItem(key)
		},
		init: function() {
			if (db = window.globalStorage[share ? defaultDomain : document.domain]) cb(this);
			else cb(false)
		},
		clear_flag: false,
		clear_arr: [],
		clear: function(cb) {
			var ar = this.clear_arr;
			if (this.clear_flag) return;
			this.clear_flag = true;
			for (var k in db) ar.push(k);
			var clearXItems =
				function(x) {
					x = x > ar.length ? ar.length : x;
					for (var i = 0; i < x; i++) {
						var k = ar.shift();
						db.removeItem(k)
					}
					if (ar.length > 0) setTimeout(function() {
						clearXItems(x)
					}, 50);
					else typeof cb == "function" && cb()
				};
			clearXItems(5)
		}
	};
	_backend.localStorage = {
		isSupport: !!window.localStorage,
		type: 3,
		get: _backend.globalStorage.get,
		set: _backend.globalStorage.set,
		remove: _backend.globalStorage.remove,
		init: function() {
			if (share) {
				createHelper(this, "localStorage");
				return
			}
			if (db = window.localStorage) cb(this);
			else cb(false)
		},
		clear: function() {
			db.clear()
		}
	};
	(function() {
		for (var i = 0, len = _clientStore.length; i < len; i++)
			if (_backend[_clientStore[i]].isSupport) {
				(_cs["instance"] = _backend[_clientStore[i]]).init();
				return
			}
		cb(false)
	})()
};
(function(qs) {
	var isDoing = false,
		queue = [],
		opt;
	qs.setOptions = function(opts) {
		opt = opts
	};
	qs.init = function() {
		var args = arguments;
		if (isDoing) {
			queue.push([args[0], args[1]]);
			return
		}
		queue.push([args[0], args[1]]);
		isDoing = true;
		qs.create(function(ins) {
			var t;
			if (ins) {
				qs.get = ins.get;
				qs.set = ins.set;
				qs.remove = ins.remove;
				qs.clear = ins.clear;
				while (t = queue.pop()) ins[t[0]].apply(null, t[1])
			} else if (args[0] == "get") args[1][2](null)
		}, opt)
	};
	qs.get = function() {
		qs.init("get", arguments)
	};
	qs.set = function() {
		qs.init("set", arguments)
	};
	qs.remove = function() {
		qs.init("remove", arguments)
	};
	qs.clear = function() {
		qs.init("clear", arguments)
	}
})(MUSIC.widget.Storage);
var g_storage = MUSIC.widget.Storage;
MUSIC.widget.hashHistory = function() {
	var curHash = "";
	var iframe = null;
	var hashchange_cb = null;
	var init_cb = null;
	var isInit = false;
	var hasIframe = false;
	var isIgnore = false;
	var intv = null;

	function updateIEFrame(hash) {
		var idoc = iframe.contentDocument || iframe.contentWindow.document;
		idoc.open();
		idoc.close();
		idoc.location.hash = hash
	}

	function checkHash() {
		if (decodeURIComponent(parent.window.location.hash) != decodeURIComponent(curHash)) hashchange()
	}

	function param2obj(str) {
		var obj = {};
		var arr = str.split("&");
		for (var i = 0,
				len = arr.length; i < len; i++)
			if (arr[i].indexOf("=") > -1) {
				var kv = arr[i].split("=");
				obj[kv[0]] = kv[1]
			}
		return obj
	}

	function getHurlObj() {
		var hash_obj = param2obj(parent.window.location.hash.substring(1));
		var url = decodeURIComponent(hash_obj["url"] || "");
		var top_url = url.replace(/#.+/g, "");
		var hash = url.replace(url, "");
		var obj = param2obj(hash.substring(1));
		obj.top_url = top_url;
		obj.url = url;
		obj.type = hash_obj["type"] || "";
		obj.p = hash_obj["p"] || "";
		obj.id = hash_obj["id"] || "";
		return obj
	}
	window.getParameterNew = function(url, name) {
		var r =
			new RegExp("(\\?|#|&)" + name + "=([^&#\\?]*)(&|#|$|\\?)");
		var m = url.match(r);
		if (!m || m == "") m = top.location.href.match(r);
		return decodeURIComponent(!m ? "" : m[2])
	};

	function getSimpleUrl(url) {
		var hash = "";
		url = url.replace(/pgv_ref=[^#&$]*/g, "").replace(/ADTAG=[^#&$]*/g, "").replace(/\?$/g, "");
		if (/\/y\/static\/down\/([^#?$.]*)/.test(url)) {
			hash = "type=down&p=" + encodeURIComponent(RegExp.$1);
			if (/\?ADTAG=([^#?$]*)/.test(url)) hash = [hash, "&ADTAG=", RegExp.$1].join("");
			else if (/\?m=(\d+)/.test(url)) hash = [hash, "&m=", RegExp.$1].join("")
		} else if (/i\.y\.qq\.com\/v8\/fcg-bin\/fcg_v8_mvout4web\.fcg/.test(url)) hash =
			"type=mv&p=index";
		else if (/\/y\/static\/mv\/([^#?$.]*)/.test(url)) hash = "type=mv&p=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/singer\/(\d+)\/singer_(\d+)\.html/.test(url)) hash = "type=singer&id=" + RegExp.$2;
		else if (/\/y\/static\/singer\/([^#?$.]*)\/([^#?$.]*)\/([^#?$.]*)\.html\?tab=([^#?$.]*)/.test(url) || /\/y\/static\/singer\/([^#?$.]*)\/([^#?$.]*)\/([^#?$.]*)\.html#tab=([^#?$.]*)/.test(url)) hash = "type=singer&mid=" + RegExp.$3 + "&tab=" + RegExp.$4;
		else if (/\/y\/static\/singer\/([^#?$.]*)\/([^#?$.]*)\/([^#?$.]*)\.html/.test(url) ||
			/fcg_v8_singer_detail_cp\.fcg/.test(url))
			if (/fcg_v8_singer_detail_cp\.fcg/.test(url)) hash = "type=singer&mid=" + getParameterNew(url, "singermid");
			else hash = "type=singer&mid=" + RegExp.$3;
		else if (/\/y\/static\/singer\/index\/([^#?$.]*)/.test(url)) hash = "type=singer&p=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/album\/(\d+)\/album_(\d+)_1\.html/.test(url)) {
			hash = "type=album&id=" + RegExp.$2;
			var adtag = getParameterNew(top.location.href, "ADTAG") || ""
		} else if (/\/y\/static\/album\/([^#?$.]*)\/([^#?$.]*)\/([^#?$.]*)\.html\?play=([^#?$.]*)/.test(url) ||
			(/\/y\/static\/album\/([^#?$.]*)\/([^#?$.]*)\/([^#?$.]*)\.html/.test(url) || /fcg_v8_album_detail_cp\.fcg/.test(url))) {
			if (/fcg_v8_album_detail_cp\.fcg/.test(url)) hash = "type=album&mid=" + getParameterNew(url, "albummid") + (getParameterNew(url, "play") ? "&play=" + getParameterNew(url, "play") : "");
			else hash = "type=album&mid=" + RegExp.$3 + (RegExp.$4 ? "&play=" + RegExp.$4 : "");
			var adtag = getParameterNew(top.location.href, "ADTAG") || ""
		} else if (/\/y\/static\/album\/shoufa\/([^#?$.]*)/.test(url)) hash = "type=album&p=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/album\/index/.test(url)) hash = "type=album&index=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/toplist\/index\/([^#?$.]*)|i\.y\.qq\.com\/v8\/fcg-bin\/fcg_v8_toplist_cp\.fcg/.test(url))
			if (RegExp.$1) hash = "type=toplist&p=" + encodeURIComponent(RegExp.$1);
			else if (/page=index/.test(url)) hash = "type=toplist&p=top_index";
		else {
			if (/page=detail/.test(url)) {
				var topalbum = getParameterNew(url, "topalbum"),
					type = getParameterNew(url, "type"),
					topid = getParameterNew(url, "topid"),
					yearlist = getParameterNew(url,
						"yearlist"),
					otherid = getParameterNew(url, "otherid"),
					otheridx = getParameterNew(url, "otheridx") || 0;
				if (topalbum) {
					hash = "type=albumtop&p=" + encodeURIComponent([type, otherid || topid].join("_"));
					if (yearlist) hash += "&yearlist=" + yearlist;
					if (otherid) hash += "&otherid=" + otherid + "&otheridx=" + (otheridx || 0)
				} else hash = "type=toplist&p=" + encodeURIComponent([type, topid].join("_"))
			}
		} else if (/\/y\/static\/toplist\/albumtop\/([^#?$.]*)/.test(url)) hash = "type=albumtop&p=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/index\.html|i\.y\.qq\.com\/v8\/fcg-bin\/v8_4web\.fcg/.test(url)) {
			var _h =
				"",
				mids = getParameterNew(top.location.href, "mids") || "",
				play = getParameterNew(top.location.href, "play") || 0,
				adtag = getParameterNew(top.location.href, "ADTAG") || "";
			if (mids) _h = "&mids=" + mids + "&play=" + play;
			hash = "type=index" + _h
		} else if (/\/y\/static\/mymusic\/([^#$]*)/.test(url)) {
			if (RegExp.$1.indexOf("mymusic_index") || (RegExp.$1.indexOf("mymusic_albumlist") || (RegExp.$1.indexOf("mymusic_mvlist") || (RegExp.$1.indexOf("mymusic_follow_listen") || RegExp.$1.indexOf("mymusic_follow_listen"))))) hash = "type=mymusic&p=" +
				encodeURIComponent(RegExp.$1)
		} else if (/\/y\/static\/album\/song_detail.html#songid=(\d+)/.test(url) || /i\.y\.qq\.com\/s\.plcloud\/fcgi-bin\/fcg_yqq_song_detail_info_cp\.fcg\?songid=(\d+)/.test(url)) hash = "type=song&id=" + RegExp.$1;
		else if (/\/y\/static\/album\/song_detail.html#songmid=([^#?$.]*)/.test(url) || (/i\.y\.qq\.com\/s\.plcloud\/fcgi-bin\/fcg_yqq_song_detail_info_cp\.fcg\?songmid=([^#?$.]*)/.test(url) || /i\.y\.qq\.com\/s\.plcloud\/fcgi-bin\/fcg_yqq_song_detail_info_cp\.fcg\?songmid=([^#?$.]*)/.test(url))) hash =
			"type=song&mid=" + RegExp.$1;
		else if (/\/soso.music.qq.com\/fcgi-bin\/multiple_music_search.fcg([^#$]*)/.test(url) || /fcgi-bin\/yqq_search_v8_cp([^#$]*)/.test(url)) hash = "type=soso&p=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/login.html/.test(url)) hash = "type=login";
		else if (/\/y\/static\/topic\/review\/review_(\d+)\.html/.test(url)) hash = "type=topic&p=" + RegExp.$1;
		else if (/\/y\/static\/topic\/topic_detail\/topic_detail_(\d+)\.html/.test(url)) hash = "type=topic&id=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/taoge\/taoge_detail.html\?disstid=(\d+)/.test(url)) hash = "type=taoge&id=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/taoge\/taoge_list.html/.test(url)) hash = "type=taogelist";
		else if (/\/y\/static\/qplay\/([^#$]*)/.test(url)) hash = "type=qplay&p=" + encodeURIComponent(RegExp.$1);
		else if (/\/y\/static\/radio\/([^#$]*)/.test(url)) hash = "type=radio&p=" + encodeURIComponent(RegExp.$1);
		return hash
	}

	function locationHash(hash_obj) {
		hash_obj = hash_obj || {};
		var url = window.location.href;
		var hash_arr = [];
		for (var name in hash_obj) hash_arr.push([name, "=", hash_obj[name]].join(""));
		if (hash_arr.length != 0) {
			var tmp = window.location.hash;
			if (tmp.trim() == "") tmp = "#";
			else tmp += "&";
			url = [url.replace(/#.+/g, ""), tmp, hash_arr.join("&")].join("")
		}
		url = encodeURIComponent(url);
		var simpleUrl = getSimpleUrl(window.location.href);
		var phash = parent.window.location.hash.substring(1);
		if (simpleUrl != "") phash = simpleUrl;
		var obj = param2obj(phash);
		isIgnore = false;
		if (simpleUrl == "") {
			if (obj["url"] != url) isIgnore = true
		} else {
			var topUrlObj =
				param2obj(parent.window.location.hash.substring(1));
			for (var name in obj)
				if (obj[name] != topUrlObj[name]) {
					isIgnore = true;
					break
				}
			for (var name in topUrlObj)
				if (obj[name] != topUrlObj[name]) {
					isIgnore = true;
					break
				}
		}
		if (simpleUrl == "") MUSIC.object.extend(obj, {
			url: url
		});
		var arr = [];
		for (var name in obj) arr.push([name, "=", obj[name]].join(""));
		var hash_str = "#" + arr.join("&");
		if (parent.window.location.hash != hash_str) {
			parent.window.location.hash = hash_str;
			curHash = hash_str
		}
	}

	function onhashchange(callback) {
		hashchange_cb = callback
	}

	function hashchange() {
		if (isIgnore) {
			isIgnore = false;
			return
		}
		if (!!init_cb) init_cb(getHurlObj());
		if (!!hashchange_cb) hashchange_cb(getHurlObj())
	}

	function init(callback) {
		init_cb = callback;
		if (!isInit) {
			curHash = parent.window.location.hash;
			if ("onhashchange" in parent.window && (typeof document.documentMode == "undefined" || document.documentMode >= 8)) parent.window.onhashchange = function() {
				hashchange()
			};
			else {
				clearInterval(intv);
				intv = setInterval(g_hashHistory.checkHash, 150)
			}
			isInit = true
		}
	}
	return {
		onhashchange: onhashchange,
		locationHash: locationHash,
		checkHash: checkHash,
		param2obj: param2obj,
		getHurlObj: getHurlObj,
		init: init,
		getSimpleUrl: getSimpleUrl
	}
}();
var g_hashHistory = MUSIC.widget.hashHistory;
MUSIC.widget.mid = function() {
	var $ = MUSIC,
		$C = $.css,
		$E = $.event,
		$D = $.dom;
	var _opt = {
		mid_flag: 0
	};

	function init(opt) {
		MUSIC.object.extend(_opt, opt || {});
		return this
	}

	function checkMid() {
		return _opt.mid_flag
	}

	function getSingerPic(op) {
		op = op || {};
		var picNomal = "http://i.gtimg.cn/music/photo/singer/%(singerIdMod100)/%(picsize)_singerpic_%(singerId)_0.jpg",
			pic300 = "http://i.gtimg.cn/music/photo/singer_300/%(singerIdMod100)/300_singerpic_%(singerId)_0.jpg",
			picMid = "http://i.gtimg.cn/music/photo/mid_singer_%(picsize)/%(s1)/%(s2)/%(mid).jpg",
			picRtn = "http://i.gtimg.cn/mediastyle/y/img/cover_mine_130.jpg",
			mid = op.mid || "",
			s1, s2;
		if (typeof mid !== "undefined" && (mid !== "" && mid !== "0")) {
			s1 = mid.substr(mid.length - 2, 1);
			s2 = mid.substr(mid.length - 1, 1);
			picRtn = picMid.jstpl_format({
				s1: s1,
				s2: s2,
				mid: mid,
				picsize: op.type || 300
			})
		} else if (_opt.mid_flag == 0 && (typeof op.id !== "undefined" && op.id != 0))
			if (op.type == 150 || (op.type == 90 || op.type == 68)) picRtn = picNomal.jstpl_format({
				singerId: op.id,
				singerIdMod100: op.id % 100,
				picsize: op.type
			});
			else picRtn = pic300.jstpl_format({
				singerId: op.id,
				singerIdMod100: op.id % 100
			});
		return picRtn
	}

	function getAlbumPic(op) {
		op = op || {};
		var picNomal = "http://i.gtimg.cn/music/photo/album/%(albumIdMod100)/%(picsize)_albumpic_%(albumId)_0.jpg",
			pic300 = "http://i.gtimg.cn/music/photo/album_300/%(albumIdMod100)/300_albumpic_%(albumId)_0.jpg",
			picMid = "http://i.gtimg.cn/music/photo/mid_album_%(picsize)/%(s1)/%(s2)/%(mid).jpg",
			picRtn = "http://i.gtimg.cn/mediastyle/y/img/cover_mine_130.jpg",
			mid = op.mid || "",
			s1, s2;
		if (typeof mid !== "undefined" && (mid !== "" && mid !== "0")) {
			s1 = mid.substr(mid.length -
				2, 1);
			s2 = mid.substr(mid.length - 1, 1);
			picRtn = picMid.jstpl_format({
				s1: s1,
				s2: s2,
				mid: mid,
				picsize: op.type || 300
			})
		} else if (_opt.mid_flag == 0 && (typeof op.id !== "undefined" && op.id != 0))
			if (op.type == 150 || (op.type == 90 || op.type == 68)) picRtn = picNomal.jstpl_format({
				albumId: op.id,
				albumIdMod100: op.id % 100,
				picsize: op.type
			});
			else picRtn = pic300.jstpl_format({
				albumId: op.id,
				albumIdMod100: op.id % 100
			});
		return picRtn
	}

	function getSingerFile(op) {
		op = op || {};
		var urlId = "/%(singerIdMod100)/singer_%(singerId).html",
			urlMid = "http://i.y.qq.com/v8/fcg-bin/fcg_v8_singer_detail_cp.fcg?tpl=20&singermid=%(mid)",
			urlRtn = urlId.jstpl_format({}),
			mid = op.mid || "",
			s1, s2;
		if (typeof mid !== "undefined" && (mid !== "" && mid !== "0")) {
			s1 = mid.substr(mid.length - 2, 1);
			s2 = mid.substr(mid.length - 1, 1);
			urlRtn = urlMid.jstpl_format({
				s1: s1,
				s2: s2,
				mid: mid
			})
		} else if (_opt.mid_flag == 0 && (typeof op.id !== "undefined" && op.id != 0)) urlRtn = urlId.jstpl_format({
			singerId: op.id,
			singerIdMod100: op.id % 100
		});
		return urlRtn
	}

	function getAlbumFile(op) {
		op = op || {};
		var urlId = "/%(albumIdMod100)/album_%(albumId)_1.html",
			urlMid = "http://i.y.qq.com/v8/fcg-bin/fcg_v8_album_detail_cp.fcg?tpl=20&albummid=%(mid)",
			urlRtn = urlId.jstpl_format({}),
			mid = op.mid || "",
			s1, s2;
		if (typeof mid !== "undefined" && (mid !== "" && mid !== "0")) {
			s1 = mid.substr(mid.length - 2, 1);
			s2 = mid.substr(mid.length - 1, 1);
			urlRtn = urlMid.jstpl_format({
				s1: s1,
				s2: s2,
				mid: mid
			})
		} else if (_opt.mid_flag == 0 && (typeof op.id !== "undefined" && op.id != 0)) urlRtn = urlId.jstpl_format({
			albumId: op.id,
			albumIdMod100: op.id % 100
		});
		return urlRtn
	}

	function getMidPath(op) {
		return "";
		op = op || {};
		var pathId = "/%(albumIdMod100)/",
			pathMid = "/%(s1)/%(s2)/",
			urlRtn = pathId.jstpl_format({}),
			mid = op.mid ||
			"",
			s1, s2;
		if (typeof mid !== "undefined" && (mid !== "" && mid !== "0")) {
			s1 = mid.substr(mid.length - 2, 1);
			s2 = mid.substr(mid.length - 1, 1);
			urlRtn = pathMid.jstpl_format({
				s1: s1,
				s2: s2
			})
		} else if (_opt.mid_flag == 0 && (typeof op.id !== "undefined" && op.id != 0)) urlRtn = pathId.jstpl_format({
			albumIdMod100: op.id % 100
		});
		return urlRtn
	}

	function getID(op) {
		op = op || {};
		var idRtn = op.id || 0,
			mid = op.mid || "";
		if (typeof mid !== "undefined" && (mid !== "" && mid !== "0")) idRtn = mid;
		return idRtn
	}
	return {
		init: init,
		getSingerPic: getSingerPic,
		getSingerFile: getSingerFile,
		getAlbumPic: getAlbumPic,
		getAlbumFile: getAlbumFile,
		getMidPath: getMidPath,
		getID: getID,
		checkMid: checkMid
	}
}();
var g_mid = MUSIC.widget.mid;
(function() {
	top.msgData = null;

	function getMsgData(callback) {
		if (top.msgData) {
			!!callback && callback(top.msgData);
			return
		}
		var url = "http://i.y.qq.com/musichall/fcgi-bin/fcg_alert_info?ids=all&cid=486&rnd=" + Math.random();
		var jg = new MUSIC.JSONGetter(url, "get_alert_info", null, "utf-8", false);
		jg.onSuccess = function(data) {
			if (data && data.code == 0) {
				top.msgData = data.data;
				!!callback && callback(top.msgData)
			}
		};
		jg.onError = function() {};
		jg.send("alert_info_callback" + (new Date).getTime())
	}

	function getmsg(song, type, callback) {
		callback =
			callback || function() {};
		var typemap = {
			"play": "pc_p",
			"down": "pc_d",
			"noplay": "pc_p_u"
		};
		getMsgData(function(data) {
			var id = song.alertid || song.msgid;
			var msg = "";
			type = type || (song.tryPlay ? "play" : "noplay");
			if (song.alertid && song.pay.payplay) {
				if (!data["alertinfo"] || !data["alertinfo"][id]) return;
				msg = MUSIC.object.extend({}, data["alertinfo"][id][typemap[type]]);
				msg.desc = msg.desc.replace(/\{%singername\}/g, song.singer[0].name).replace(/\{%albumname\}/g, song.albumname).replace(/\{%songname\}/g, song.songname).replace(/\{%songprice\}/g,
					song.pay.paytrackprice).replace(/\{%albumprice\}/g, song.pay.payalbumprice);
				msg.btn = msg.btn.replace(/\{%singername\}/g, song.singer[0].name).replace(/\{%albumname\}/g, song.albumname).replace(/\{%songname\}/g, song.songname);
				msg.url = msg.url.replace(/\{%songid\}/g, song.songid).replace(/\{%albumid\}/g, song.albumid)
			} else if (song.msgid && !song.pay.payplay) msg = data["msginfo"][id];
			callback(msg)
		})
	}

	function getStatSource() {
		if (window == top) {
			if ((new RegExp("mv_play.html")).test(window.location.href)) return 8;
			return 0
		}
		var reg_map = {
			"y/static/index.html": 1,
			"static/singer/": 2,
			"v8_singer": 2,
			"v8_album": 3,
			"static/album/": 3,
			"v8_toplist": 4,
			"static/mv/": 5,
			"static/mymusic/": 6,
			"s.music.qq.com": 7,
			"mv_play.html": 8,
			"static/topic/": 9,
			"static/taoge/": 11,
			"static/qplay/": 10
		};
		for (var reg in reg_map) {
			var r = new RegExp(reg);
			if (r.test(window.location.href)) return reg_map[reg]
		}
		return 99
	}

	function do_stat(optcode, tryplay, alertid, songid) {
		var uin = g_user.getUin();
		var base_url = "http://stat.pc.music.qq.com/fcgi-bin/fcg_val_report.fcg";
		tryplay = tryplay ||
			0;
		alertid = alertid || "";
		songid = songid || "";
		optcode > 0 && ((new Image).src = [base_url, "?data_type=252", "&data=", optcode, "&data2=", tryplay, "&reserve7=", alertid, "&reserve8=", songid].join(""))
	}

	function showMsg(song, type) {
		if (song.alertid <= 0 && song.msgid <= 0 || song.action.play) return;
		getmsg(song, type, function(msg) {
			if (!msg) return;
			if (song.alertid > 0 && song.pay.payplay) {
				do_stat("263", song.tryPlay ? 1 : 2, song.alertid, song.songid);
				top.g_dialog.show({
					mode: "common",
					title: "QQ\u97f3\u4e50",
					icon_type: 1,
					width: 500,
					sub_title: msg.note,
					desc: msg.desc,
					button_info1: {
						highlight: 1,
						title: msg.btn || "\u5173\u95ed",
						onclick: "top._doMsgBtnClick(" + JSON.stringify(msg).replace(/"/ig, "'") + ", " + JSON.stringify(song).replace(/"/ig, "'") + ")"
					},
					button_info2: {
						highlight: 0,
						title: "\u53d6\u6d88",
						onclick: "top._doMsgBtnCancel()"
					}
				})
			} else if (song.msgid && !song.pay.payplay) g_popup.show(1, "\u6e29\u99a8\u63d0\u793a", msg, 3E3, 450)
		})
	}
	top._doMsgBtnClick = function(msg, song) {
		if (msg && (msg.btn && msg.url)) {
			do_stat("264", song.tryPlay ? 1 : 2, song.alertid, song.songid);
			if (/^http:\/\//.test(msg.url)) {
				var win =
					window.open(msg.url);
				if (!win) alert("\u5f39\u51fa\u7a97\u53e3\u88ab\u6d4f\u89c8\u5668\u62e6\u622a\uff0c\u8bf7\u68c0\u67e5\u4f60\u7684\u6d4f\u89c8\u5668\u8bbe\u7f6e\u3002")
			} else if (/^pcqqmusic:\/\//.test(msg.url)) {
				var cmd = msg.url.match(/^pcqqmusic:\/\/(\w+)/);
				if (cmd && cmd[1]) switch (cmd[1]) {
					case "buygreen":
						g_user.buyVip("buygreen", msg.aid + "$songid" + song.songid);
						break;
					case "buysupergreen":
						g_user.buyVip("buysupergreen", msg.aid + "$songid" + song.songid);
						break;
					case "buy8yuan":
						g_user.buyVip("buy8yuan", msg.aid +
							"$songid" + song.songid);
						break;
					case "buy12yuan":
						g_user.buyVip("buy12yuan", msg.aid + "$songid" + song.songid);
						break
				}
			}
		}
		top.g_dialog.hide()
	};
	top._doMsgBtnCancel = function() {
		top.g_dialog.hide()
	};
	getMsgData();
	top.showMsg = showMsg;
	top.getMsg = getmsg
})();
/*  |xGv00|beff2d662da82f30cc210e3f3e9b4e08 */