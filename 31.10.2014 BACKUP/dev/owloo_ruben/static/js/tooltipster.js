//Tooltipster 1.2 | 9/15/12 | by Caleb Jacob
(function(a){a.fn.tooltipster=function(b){function d(b){if(c.animation=="slide"){a(b).slideUp(c.speed,function(){a(b).remove();/*a("body").css("overflow-x","auto")*/})}else{a(b).fadeOut(c.speed,function(){a(b).remove();/*a("body").css("overflow-x","auto")*/})}}var c=a.extend({animation:"fade",arrow:true,arrowColor:"",delay:200,fixedWidth:0,followMouse:false,offsetX:0,offsetY:0,overrideText:"",position:"top",speed:100,timer:0,tooltipTheme:".tooltip-message"},b);return this.hover(function(){if(a(c.tooltipTheme).not(".tooltip-kill").length==1){d(a(c.tooltipTheme).not(".tooltip-kill"));a(c.tooltipTheme).not(".tooltip-kill").addClass("tooltip-kill")}/*a("body").css("overflow-x","hidden");*/var b=a(this).attr("title");a(this).attr("title","");a(this).data("title",b);if(a.trim(c.overrideText).length>0){var b=c.overrideText}if(c.fixedWidth>0){var e=' style="width:'+c.fixedWidth+'px;"'}else{var e=""}a('<div class="'+c.tooltipTheme.replace(".","")+'"'+e+'><div class="tooltip-message-content">'+b+"</div></div>").appendTo("body").hide();if(c.followMouse==false){var f=a(window).width();var g=a(this).outerWidth(false);var h=a(this).outerHeight(false);var i=a(c.tooltipTheme).not(".tooltip-kill").outerWidth(false);var j=a(c.tooltipTheme).not(".tooltip-kill").outerHeight(false);var k=a(this).offset();if(c.fixedWidth==0){a(c.tooltipTheme).not(".tooltip-kill").css({width:i+"px","padding-left":"0px","padding-right":"0px"})}function l(){var b=a(window).scrollLeft();if(n-b<0){var d=n-b;n=b;a(c.tooltipTheme).not(".tooltip-kill").data("arrow-reposition",d)}if(n+i-b>f){var d=n-(f+b-i);n=f+b-i;a(c.tooltipTheme).not(".tooltip-kill").data("arrow-reposition",d)}}if(c.position=="top"){var m=k.left+i-(k.left+a(this).outerWidth(false));var n=k.left+c.offsetX-m/2;var o=k.top-j-c.offsetY-10;l();if(k.top-j-c.offsetY-11<0){var o=0}}if(c.position=="top-left"){var n=k.left+c.offsetX;var o=k.top-j-c.offsetY-10;l()}if(c.position=="top-right"){var n=k.left+g+c.offsetX-i;var o=k.top-j-c.offsetY-10;l()}if(c.position=="bottom"){var m=k.left+i+c.offsetX-(k.left+a(this).outerWidth(false));var n=k.left-m/2;var o=k.top+h+c.offsetY+10;l()}if(c.position=="bottom-left"){var n=k.left+c.offsetX;var o=k.top+h+c.offsetY+10;l()}if(c.position=="bottom-right"){var n=k.left+g+c.offsetX-i;var o=k.top+h+c.offsetY+10;l()}if(c.position=="left"){var n=k.left-c.offsetX-i-10;var p=k.left+c.offsetX+g+10;var q=k.top+j+c.offsetY-(k.top+a(this).outerHeight(false));var o=k.top-q/2;if(n<0&&p+i>f){n=n+i}if(n<0){var n=k.left+c.offsetX+g+10;a(c.tooltipTheme).not(".tooltip-kill").data("arrow-reposition","left")}}if(c.position=="right"){var n=k.left+c.offsetX+g+10;var p=k.left-c.offsetX-i-10;var q=k.top+j+c.offsetY-(k.top+a(this).outerHeight(false));var o=k.top-q/2;if(n+i>f&&p<0){n=f-i}if(n+i>f){n=k.left-c.offsetX-i-10;a(c.tooltipTheme).not(".tooltip-kill").data("arrow-reposition","right")}}}if(c.followMouse==true){var i=a(c.tooltipTheme).not(".tooltip-kill").outerWidth(false);var j=a(c.tooltipTheme).not(".tooltip-kill").outerHeight(false);var r=a(c.tooltipTheme).not(".tooltip-kill").find(".tooltip-message-content").html();a(this).mousemove(function(b){a(c.tooltipTheme).not(".tooltip-kill").find(".tooltip-message-content").html("").html(r);var d=a(c.tooltipTheme).not(".tooltip-kill").outerHeight(false);if(c.position=="top"){a(c.tooltipTheme).not(".tooltip-kill").css({left:b.pageX-1-i/2+c.offsetX+"px",top:b.pageY-d-2-c.offsetY-10+"px"})}if(c.position=="top-right"){a(c.tooltipTheme).not(".tooltip-kill").css({left:b.pageX-8+c.offsetX+"px",top:b.pageY-d-2-c.offsetY-10+"px"})}if(c.position=="top-left"){a(c.tooltipTheme).not(".tooltip-kill").css({left:b.pageX-i+c.offsetX+7+"px",top:b.pageY-d-2-c.offsetY-10+"px"})}if(c.position=="bottom"){a(c.tooltipTheme).not(".tooltip-kill").css({left:b.pageX-i/2+c.offsetX-1+"px",top:b.pageY+15+c.offsetY+10+"px"})}if(c.position=="bottom-right"){a(c.tooltipTheme).not(".tooltip-kill").css({left:b.pageX-2+c.offsetX+"px",top:b.pageY+15+c.offsetY+10+"px"})}if(c.position=="bottom-left"){a(c.tooltipTheme).not(".tooltip-kill").css({left:b.pageX-i+c.offsetX+12+"px",top:b.pageY+15+c.offsetY+10+"px"})}})}if(c.arrow==true){var s="tooltip-arrow-"+c.position;if(c.followMouse==true){if(s.search("right")>0){var t=s;s=t.replace("right","left")}else{var t=s;s=t.replace("left","right")}}if(s=="tooltip-arrow-right"){var u="◀";var v="top:"+(j/2-5)+"px"}if(s=="tooltip-arrow-left"){var u="▶";var v="top:"+(j/2-4)+"px"}if(s.search("top")>0){var u="▼"}if(s.search("bottom")>0){var u="▲"}if(c.arrowColor.length<1){var w=a(c.tooltipTheme).not(".tooltip-kill").css("background-color")}else{var w=c.arrowColor}var x=a(c.tooltipTheme).not(".tooltip-kill").data("arrow-reposition");if(!x){x=""}else if(x=="left"){s="tooltip-arrow-right";u="◀";x=""}else if(x=="right"){s="tooltip-arrow-left";u="▶";x=""}else{x="left:"+x+"px;"}var y='<div class="'+s+' tooltip-arrow" style="color:'+w+"; width:"+i+"px; display:none; "+x+" "+v+'">'+u+"</div>"}else{var y=""}a(c.tooltipTheme).not(".tooltip-kill").css({top:o+"px",left:n+"px"}).append(y);if(c.animation=="slide"){a(c.tooltipTheme).not(".tooltip-kill").delay(c.delay).slideDown(c.speed,function(){a(".tooltip-arrow").fadeIn(c.speed)});if(c.timer>0){a(c.tooltipTheme).not(".tooltip-kill").delay(c.timer).slideUp(c.speed)}}else{a(".tooltip-arrow").show();a(c.tooltipTheme).not(".tooltip-kill").delay(c.delay).fadeIn(c.speed);if(c.timer>0){a(c.tooltipTheme).not(".tooltip-kill").delay(c.timer).fadeOut(c.speed)}}},function(){a(c.tooltipTheme).not(".tooltip-kill").clearQueue();tooltip_text=a(this).data("title");a(this).attr("title",tooltip_text);a(c.tooltipTheme).addClass("tooltip-kill");d(".tooltip-kill")})}})(jQuery);