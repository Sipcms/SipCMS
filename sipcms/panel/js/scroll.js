// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// 
// Coded by Travis Beckham
// http://www.squidfingers.com | http://www.podlob.com
// If want to use this code, feel free to do so, but please leave this message intact.
//
// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// --- version date: 01/24/03 ---------------------------------------------------------

// Modified and revorked by Vitaliy Igonin
// http://persei.miranda.im
// http://chaoslab.ru

// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// Cross-Browser Functions

var dom = document.getElementById;
var iex = document.all;
var ns4 = document.layers;

function addEvent(event,method){
	this[event] = method;
	if(ns4) this.captureEvents(Event[event.substr(2,event.length).toUpperCase()]);
}
function removeEvent(event){
	this[event] = null;
	if(ns4) this.releaseEvents(Event[event.substr(2,event.length).toUpperCase()]);
}
function getElement(name,nest){
	nest = nest ? "document."+nest+"." : "";
	var el = dom ? document.getElementById(name) : iex ? document.all[name] : ns4 ? eval(nest+"document."+name) : false;
	el.css = ns4 ? el : el.style;
	el.getTop = function(){return parseInt(el.css.top) || 0};
	el.setTop = function(y){el.css.top = ns4 ? y: y+"px"};
	el.getHeight = function(){return ns4 ? el.document.height : el.offsetHeight};
	el.setHeight = function(y){el.css.height = ns4 ? y: y+"px"};
	el.getClipHeight = function(){return ns4 ? el.clip.height : el.offsetHeight};
	el.hideVis = function(){el.css.visibility="hidden"};
	el.restoreVis = function(){el.css.visibility="visible"};
	el.addEvent = addEvent;
	el.removeEvent = removeEvent;
	return el;
}
function getYMouse(e){
	return iex ? event.clientY : e.pageY;
}

function getAbsoluteY(el)
{
	var r = el.offsetTop;
	if (el.offsetParent)
	{
		var tmp = getAbsoluteY(el.offsetParent);		
		r += tmp;
	}
	return r;
}


document.addEvent = addEvent;
document.removeEvent = removeEvent;

// ||||||||||||||||||||||||||||||||||||||||||||||||||
// Scroller Class

ScrollObj = function(speed, trackObj, upObj, downObj, dragObj, contentMaskObj, contentObj, scrollObj){
	this.speed = speed;
		
	this.trackObj = getElement(trackObj);	
	this.upObj = getElement(upObj);
	this.downObj = getElement(downObj);
	this.dragObj = getElement(dragObj);
	this.contentMaskObj = getElement(contentMaskObj);
	this.contentObj = getElement(contentObj,contentMaskObj);
	this.scrollObj = getElement(scrollObj);
	this.obj = contentObj+"Object";
	eval(this.obj+"=this");
	
	this.dragHeight = this.dragObj.getHeight() + 1;
	this.trackHeight = this.trackObj.getHeight();
	this.trackTop = this.trackObj.getTop();
	this.contentMaskHeight = this.contentMaskObj.getHeight();
	this.contentHeight = this.contentObj.getHeight();
	this.contentLength = this.contentHeight-this.contentMaskHeight;
	this.contentTop = this.contentObj.getTop();
	this.scrollTimer = null;

	//this.dragHeight = Math.round(this.trackHeight * (this.contentMaskHeight / this.contentHeight));
	//this.dragObj.setHeight(this.dragHeight - 1);
	
	this.trackLength = this.trackHeight-this.dragHeight;
	this.trackBottom = this.trackTop+this.trackLength;
	this.scrollLength = this.trackLength/this.contentLength;
	
	if(this.contentHeight <= this.contentMaskHeight){
		this.scrollObj.hideVis();
	}else{

	}

	var _this = this;
	//this.trackObj.addEvent("onmousedown", function(e){_this.scrollJump(e);return false});
	this.upObj.addEvent("onmousedown", function(){_this.scroll(_this.speed);return false});
	this.upObj.addEvent("onmouseup", function(){_this.stopScroll()});
	this.upObj.addEvent("onmouseout", function(){_this.stopScroll()});
	this.downObj.addEvent("onmousedown", function(){_this.scroll(-_this.speed);return false});
	this.downObj.addEvent("onmouseup", function(){_this.stopScroll()});
	this.downObj.addEvent("onmouseout", function(){_this.stopScroll()});
	this.dragObj.addEvent("onmousedown", function(e){_this.startDrag(e);return false});
	
	this.dragObj.addEvent("onclick", function(e){return false});
	this.downObj.addEvent("onclick", function(e){return false});
	this.upObj.addEvent("onclick", function(e){return false});
	
	if(this.contentMaskObj.addEventListener)
		this.contentMaskObj.addEventListener("DOMMouseScroll", function(e) {_this.wheel(e);return false;}, false);
	
	this.contentMaskObj.addEvent("onmousewheel", function(e) {_this.wheel(e);return false;});
	
	if(iex) this.dragObj.addEvent("ondragstart", function(){return false});
	
		
	var root = window.addEventListener || window.attachEvent ? window : document.addEventListener ? document : null;
	if (root){
		if (root.addEventListener) root.addEventListener("load", function(){_this.recalc();}, false);
		else if (root.attachEvent) root.attachEvent("onload", function(){_this.recalc();});
	}	
}
ScrollObj.prototype.startDrag = function(e){
	this.dragStartMouse = getYMouse(e);
	this.dragStartOffset = this.dragObj.getTop();
	var _this = this;
	
	document.addEvent("onmousemove", function(e){_this.drag(e)});
	document.addEvent("onmouseup", function(){_this.stopDrag()});
}
ScrollObj.prototype.stopDrag = function(){
	document.removeEvent("onmousemove");
	document.removeEvent("onmouseup");
}
ScrollObj.prototype.drag = function(e){
	var currentMouse = getYMouse(e);
	var mouseDifference = currentMouse-this.dragStartMouse;
	var dragDistance = this.dragStartOffset+mouseDifference;
	var dragMovement = (dragDistance<this.trackTop) ? this.trackTop : (dragDistance>this.trackBottom) ? this.trackBottom : dragDistance;
	this.dragObj.setTop(dragMovement);
	var contentMovement = -(dragMovement-this.trackTop)*(1/this.scrollLength);
	this.contentObj.setTop(contentMovement);
}
ScrollObj.prototype.scroll = function(speed){
	if(this.contentHeight <= this.contentMaskHeight) return;
	var contentMovement = this.contentObj.getTop()+speed;
	var dragMovement = this.trackTop-Math.round(this.contentObj.getTop()*(this.trackLength/this.contentLength));
	if(contentMovement > 0){
		contentMovement = 0;
	}else if(contentMovement < -this.contentLength){
		contentMovement = -this.contentLength;
	}
	if(dragMovement < this.trackTop){
		dragMovement = this.trackTop;
	}else if(dragMovement > this.trackBottom){
		dragMovement = this.trackBottom;
	}
	this.contentObj.setTop(contentMovement);
	this.dragObj.setTop(dragMovement);
	this.scrollTimer = window.setTimeout(this.obj+".scroll("+speed+")",25);
}
ScrollObj.prototype.stopScroll = function(){
	if(this.scrollTimer){
		window.clearTimeout(this.scrollTimer);
		this.scrollTimer = null;
	}
}
ScrollObj.prototype.scrollJump = function(e){
	var currentMouse = getYMouse(e) - getAbsoluteY(this.trackObj) - 4;
	var dragDistance = currentMouse-(this.dragHeight/2);
	var dragMovement = (dragDistance<this.trackTop) ? this.trackTop : (dragDistance>this.trackBottom) ? this.trackBottom : dragDistance;
	this.dragObj.setTop(dragMovement);
	var contentMovement = -(dragMovement-this.trackTop)*(1/this.scrollLength);
	this.contentObj.setTop(contentMovement);
}
ScrollObj.prototype.wheel = function(e){
	var dir = 1;
	if(!e) e = window.event;
	if(this.contentHeight <= this.contentMaskHeight) return;
	if (typeof e.wheelDelta == 'undefined') {
		if (e.detail > 0) dir = -1;
		if (e.detail < 0) dir = 1;
	} else {
		if (e.wheelDelta >= 120) dir = 1;
		if (e.wheelDelta <= -120) dir = -1;
	}

	var speed = this.speed * dir * 2;

	var contentMovement = this.contentObj.getTop()+speed;
	var dragMovement = this.trackTop-Math.round(this.contentObj.getTop()*(this.trackLength/this.contentLength));
	if(contentMovement > 0){
		contentMovement = 0;
	}else if(contentMovement < -this.contentLength){
		contentMovement = -this.contentLength;
	}
	if(dragMovement < this.trackTop){
		dragMovement = this.trackTop;
	}else if(dragMovement > this.trackBottom){
		dragMovement = this.trackBottom;
	}
	this.contentObj.setTop(contentMovement);
	this.dragObj.setTop(dragMovement);
		
	if(e.stopPropagation) e.stopPropagation();
	if(e.preventDefault) e.preventDefault();
	
	e.cancelBubble = true;
	e.cancel = true;
	e.returnValue = false;		
}
ScrollObj.prototype.recalc = function(){
	this.dragHeight = this.dragObj.getHeight() + 1;
	this.trackHeight = this.trackObj.getHeight();
	this.trackTop = this.trackObj.getTop();
	this.contentMaskHeight = this.contentMaskObj.getHeight();
	this.contentHeight = this.contentObj.getHeight();
	this.contentLength = this.contentHeight-this.contentMaskHeight;

	//this.dragHeight = Math.round(this.trackHeight * (this.contentMaskHeight / this.contentHeight));
	//this.dragObj.setHeight(this.dragHeight - 1);
	
	this.trackLength = this.trackHeight-this.dragHeight;
	this.trackBottom = this.trackTop+this.trackLength;
	this.scrollLength = this.trackLength/this.contentLength;

	var dragMovement = this.trackTop-Math.round(this.contentObj.getTop()*(this.trackLength/this.contentLength));
	if(dragMovement < this.trackTop){
		dragMovement = this.trackTop;
	}else if(dragMovement > this.trackBottom){
		dragMovement = this.trackBottom;
	}
	this.dragObj.setTop(dragMovement);
		
	if(this.contentHeight <= this.contentMaskHeight){
		this.scrollObj.hideVis();
		this.contentObj.setTop(this.contentTop);
	}else{
		this.scrollObj.restoreVis();
	}	
}
// ||||||||||||||||||||||||||||||||||||||||||||||||||
// Misc Functions

function hideScrollbars(){
	if(document.getElementsByTagName){
		document.getElementsByTagName("body")[0].style.overflow = "hidden";
	}
}
function fixNetscape4(){
	if(ns4origWidth != window.innerWidth || ns4origHeight != window.innerHeight){
		window.location.reload();
	}	
}
if(document.layers){
	ns4origWidth = window.innerWidth;
	ns4origHeight = window.innerHeight;
	window.onresize = fixNetscape4;
}

// ||||||||||||||||||||||||||||||||||||||||||||||||||
