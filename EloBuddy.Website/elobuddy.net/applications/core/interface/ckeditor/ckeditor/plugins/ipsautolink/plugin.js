﻿CKEDITOR.plugins.add("ipsautolink",{init:function(c){c.widgets.add("ipsembedded",{inline:!1,upcast:function(a){if("div"==a.name&&a.hasClass("ipsEmbeddedVideo"))return!0}});new CKEDITOR.plugins.ipsautolink(c)}});
CKEDITOR.plugins.ipsautolink=function(c){this.urlRegex=/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:localhost)|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,}))\.?)(?::\d{2,5})?(?:[\/?#]\S*)?$/i;this.handleKey=
function(a){13==a.data.keyCode?CKEDITOR.tools.setTimeout(function(){this._handleKey(a)},0,this):32==a.data.keyCode&&this._handleKey(a)};this._handleKey=function(a){for(var b=c.getSelection().getRanges(!0),f=0;f<b.length;f++)if(b[f].collapsed){var e=32==a.data.keyCode?b[f].getCommonAncestor(!0,!0):b[f].getCommonAncestor(!0,!0).getPrevious();e&&e instanceof CKEDITOR.dom.element&&this.replaceInElement(e)}};c.on("key",this.handleKey,this);this.handlePaste=function(a){if(a.data.dataTransfer.getTransferType(c)!=
CKEDITOR.DATA_TRANSFER_INTERNAL){var b=a.data.dataValue;if(-1<b.indexOf("\x3c")){if(b=b.match(/<a href="(.+?)">(\1)<\/a>/)){var f=new CKEDITOR.dom.element("a");f.setAttribute("ipsNoEmbed","false");f.setAttribute("href",b[1]);f.appendHtml(decodeURI(b[1]));a.data.dataValue=f.getOuterHtml()}}else{for(var f=c.getSelection().getRanges(!0),e=0;e<f.length;e++)if(f[e].startOffset){var d=f[e].getPreviousEditableNode();if(d&&(d=d.getText(),"[url\x3d"==d.substr(-5)||"[img]"==d.substr(-5)||"[img\x3d"==d.substr(-5)||
"[code]"==d.substr(-6)))return}if(b=this.replaceTextWithLink(b))a.data.dataValue=b.getOuterHtml()}}};c.on("paste",this.handlePaste,this,{},11);this.handleAfterPaste=function(a){a=c.editable().find('a[ipsNoEmbed\x3d"false"]');for(var b=0;b<a.count();b++)this.replaceLinkWithEmbed(a.getItem(b))};c.on("afterPaste",this.handleAfterPaste,this);c.on("contentDom",function(){var a=this,b=c.editable();$("."+c.id).closest("form").on("submit",function(){for(var f=b.getChildren(),e=0;e<f.count();e++)f.getItem(e)&&
f.getItem(e)instanceof CKEDITOR.dom.element&&a.replaceInElement(f.getItem(e));c.updateElement()})},this);this.replaceInElement=function(a){if("a"!=a.getName()&&"pre"!=a.getName()&&!a.getAttribute("ipsnoautolink")){a=a.getChildren();for(var b=0;b<a.count();b++){var c=a.getItem(b);if(c instanceof CKEDITOR.dom.text){var e=[],d="",k=!1,g=c.getText().split(" ");for(word in g){if("[url\x3d"==g[word]||"[img]"==g[word]||"[code]"==g[word])return;var h=this.replaceWord(g[word].trim());h?("a"==h.getName()&&
this.replaceLinkWithEmbed(h),d.length&&(e.push(new CKEDITOR.dom.text(d)),d=""),e.push(h),k=!0):d+=g[word];word<g.length-1&&(d+=" ")}d.length&&e.push(new CKEDITOR.dom.text(d));if(1<e.length||k){for(d=0;d<e.length;d++)e[d].insertBefore(c);c.remove()}}else c&&c instanceof CKEDITOR.dom.element&&this.replaceInElement(c)}}};this.replaceWord=function(a){var b=this.replaceTextWithLink(a);return b?b:(a=this.replaceTextWithEmoticon(a))?a:null};this.replaceTextWithLink=function(a){if(XRegExp.exec(a,this.urlRegex)){var b=
new CKEDITOR.dom.element("a");b.setAttribute("ipsNoEmbed","false");b.setAttribute("href",$("\x3ctextarea /\x3e").html(a).text());b.appendHtml(decodeURI(a));return b}return null};this.replaceTextWithEmoticon=function(a){for(key in c.config.ipsEmoticons){var b=new RegExp("^"+key.replace(/([.?*+^$[\]\\(){}|-])/g,"\\$1")+"$","i");if(a.match(b))return a=new CKEDITOR.dom.element("img"),a.setAttribute("src",c.config.ipsEmoticons[key].image),c.config.ipsEmoticons[key].image_2x&&a.setAttribute("srcset",c.config.ipsEmoticons[key].image_2x),
c.config.ipsEmoticons[key].width&&c.config.ipsEmoticons[key].height&&(a.setAttribute("width",c.config.ipsEmoticons[key].width),a.setAttribute("height",c.config.ipsEmoticons[key].height)),a.setAttribute("data-emoticon","true"),a.setAttribute("alt",key),a.setAttribute("title",key),a}return null};this.replaceLinkWithEmbed=function(a){c.config.ipsAutoEmbed&&"true"!=a.getAttribute("ipsNoEmbed")&&ips.getAjax()(c.config.controller+"\x26do\x3dvalidateLink",{data:{url:a.getAttribute("href").replace(/&amp;/g,
"\x26")},type:"post"}).done(function(b){if(b.embed){var f,e,d,k=CKEDITOR.dom.element.createFromHtml(b.preview);if("img"==k.getName())k.replace(a);else{b=a.getParents();for(i in b.reverse())if("p"==b[i].getName()){a.breakParent(b[i]);(b=a.getPrevious())&&0==b.getChildCount()?b.remove():e=b;if((b=a.getNext())&&(b.getChildCount(0)||b.getChildCount(1)&&b.getChild(0).is("br"))){var g=b.getNext();g&&(b.getChildCount(0)||b.getChildCount(1)&&b.getChild(0).is("br"))&&(b.remove(),b=g)}d=b;g=c.createRange();
g.moveToElementEditEnd(b);c.getSelection().selectRanges([g]);break}k.replace(a);f=c.widgets.initOn(k,"ipsembedded");$(document).trigger("contentChange",[$("body")])}var h=$("."+c.id).closest("[data-ipsEditor]").find('[data-role\x3d"embedMessage"]');h.slideDown();var l=function(){h.slideUp();h.find('[data-action\x3d"keepEmbeddedMedia"]').off("click.ipsEmbed");h.find('[data-action\x3d"removeEmbeddedMedia"]').off("click.ipsEmbed")};setTimeout(function(){c.once("key",function(){l()});c.once("setData",
function(){l()})},2500);h.find('[data-action\x3d"keepEmbeddedMedia"]').on("click.ipsEmbed",function(){c.focus();l()});h.find('[data-action\x3d"removeEmbeddedMedia"]').on("click.ipsEmbed",function(){f&&f.destroy();a.replace(k);a.setAttribute("ipsNoEmbed","true");if(d&&e)a.move(d,!0),d.moveChildren(e);else if(d){var b=new CKEDITOR.dom.element("p");b.insertBefore(a);a.move(b)}c.focus();l()})}else a.setAttribute("ipsNoEmbed","true")})}};