!function(t){function a(a,n,o){if("touch"!==n.substr(0,5))return t(a).unbind(n,o);var d;for(d=0;d<e._binds.length;d++)e._binds[d].elem===a&&e._binds[d].type===n&&e._binds[d].func===o&&(document.addEventListener?a.removeEventListener(n,e._binds[d].fnc,!1):a.detachEvent("on"+n,e._binds[d].fnc),e._binds.splice(d--,1))}function e(a,n,o,d){if("touch"!==n.substr(0,5))return t(a).bind(n,d,o);var s;return e[n]?e[n].bind(a,n,o,d):(s=function(t){t||(t=window.event),t.stopPropagation||(t.stopPropagation=function(){this.cancelBubble=!0}),t.data=d,o.call(a,t)},document.addEventListener?a.addEventListener(n,s,!1):a.attachEvent("on"+n,s),void e._binds.push({elem:a,type:n,func:o,fnc:s}))}function n(t,a){var n={move:{x:0,y:0},offset:{x:0,y:0},position:{x:0,y:0},start:{x:0,y:0},affects:document.documentElement,stopPropagation:!1,preventDefault:!0,touch:!0};u(n,a),n.element=t,e(t,c,d,n),n.touch&&e(t,g,i,n)}function o(t){a(t,c,c)}function d(t){t.data.position.x=t.pageX,t.data.position.y=t.pageY,t.data.start.x=t.pageX,t.data.start.y=t.pageY,t.data.event=t,t.data.onstart&&t.data.onstart.call(t.data.element,t.data)||(t.preventDefault&&t.data.preventDefault&&t.preventDefault(),t.stopPropagation&&t.data.stopPropagation&&t.stopPropagation(),e(t.data.affects,v,s,t.data),e(t.data.affects,l,p,t.data))}function s(t){t.preventDefault&&t.data.preventDefault&&t.preventDefault(),t.stopPropagation&&t.data.preventDefault&&t.stopPropagation(),t.data.move.x=t.pageX-t.data.position.x,t.data.move.y=t.pageY-t.data.position.y,t.data.position.x=t.pageX,t.data.position.y=t.pageY,t.data.offset.x=t.pageX-t.data.start.x,t.data.offset.y=t.pageY-t.data.start.y,t.data.event=t,t.data.onmove&&t.data.onmove.call(t.data.element,t.data)}function p(t){t.preventDefault&&t.data.preventDefault&&t.preventDefault(),t.stopPropagation&&t.data.stopPropagation&&t.stopPropagation(),a(t.data.affects,v,s),a(t.data.affects,l,p),t.data.event=t,t.data.onfinish&&t.data.onfinish.call(t.data.element,t.data)}function i(t){t.data.position.x=t.touches[0].pageX,t.data.position.y=t.touches[0].pageY,t.data.start.x=t.touches[0].pageX,t.data.start.y=t.touches[0].pageY,t.data.event=t,t.data.onstart&&t.data.onstart.call(t.data.element,t.data)||(t.preventDefault&&t.data.preventDefault&&t.preventDefault(),t.stopPropagation&&t.data.stopPropagation&&t.stopPropagation(),e(t.data.affects,h,r,t.data),e(t.data.affects,m,f,t.data))}function r(t){t.preventDefault&&t.data.preventDefault&&t.preventDefault(),t.stopPropagation&&t.data.stopPropagation&&t.stopPropagation(),t.data.move.x=t.touches[0].pageX-t.data.position.x,t.data.move.y=t.touches[0].pageY-t.data.position.y,t.data.position.x=t.touches[0].pageX,t.data.position.y=t.touches[0].pageY,t.data.offset.x=t.touches[0].pageX-t.data.start.x,t.data.offset.y=t.touches[0].pageY-t.data.start.y,t.data.event=t,t.data.onmove&&t.data.onmove.call(t.data.elem,t.data)}function f(t){t.preventDefault&&t.data.preventDefault&&t.preventDefault(),t.stopPropagation&&t.data.stopPropagation&&t.stopPropagation(),a(t.data.affects,h,r),a(t.data.affects,m,f),t.data.event=t,t.data.onfinish&&t.data.onfinish.call(t.data.element,t.data)}var u=t.extend,c="mousedown",v="mousemove",l="mouseup",g="touchstart",h="touchmove",m="touchend";e._binds=[],t.fn.grab=function(t,a){return this.each(function(){return n(this,t,a)})},t.fn.ungrab=function(t){return this.each(function(){return o(this,t)})}}(jQuery);