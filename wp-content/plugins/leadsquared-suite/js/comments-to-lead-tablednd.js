jQuery('document').ready(function($){
var hasTouch='ontouchstart'in document.documentElement,startEvent=hasTouch?'touchstart':'mousedown',moveEvent=hasTouch?'touchmove':'mousemove',endEvent=hasTouch?'touchend':'mouseup';if(hasTouch){$.each("touchstart touchmove touchend".split(" "),function(i,name){$.event.fixHooks[name]=$.event.mouseHooks});alert("has Touch")}$.tableDnD={currentTable:null,dragObject:null,mouseOffset:null,oldY:0,build:function(options){this.each(function(){this.tableDnDConfig=$.extend({onDragStyle:null,onDropStyle:null,onDragClass:"tDnD_whileDrag",onDrop:null,onDragStart:null,scrollAmount:5,serializeRegexp:/[^\-]*$/,serializeParamName:null,dragHandle:null},options||{});$.tableDnD.makeDraggable(this)});return this},makeDraggable:function(table){var config=table.tableDnDConfig;if(config.dragHandle){var cells=$(table.tableDnDConfig.dragHandle,table);cells.each(function(){$(this).bind(startEvent,function(ev){$.tableDnD.initialiseDrag($(this).parents('tr')[0],table,this,ev,config);return false})})}else{var rows=$("tr",table);rows.each(function(){var row=$(this);if(!row.hasClass("nodrag")){row.bind(startEvent,function(ev){if(ev.target.tagName=="TD"){$.tableDnD.initialiseDrag(this,table,this,ev,config);return false}}).css("cursor","move")}})}},initialiseDrag:function(dragObject,table,target,evnt,config){$.tableDnD.dragObject=dragObject;$.tableDnD.currentTable=table;$.tableDnD.mouseOffset=$.tableDnD.getMouseOffset(target,evnt);$.tableDnD.originalOrder=$.tableDnD.serialize();$(document).bind(moveEvent,$.tableDnD.mousemove).bind(endEvent,$.tableDnD.mouseup);if(config.onDragStart){config.onDragStart(table,target)}},updateTables:function(){this.each(function(){if(this.tableDnDConfig){$.tableDnD.makeDraggable(this)}})},mouseCoords:function(ev){if(ev.pageX||ev.pageY){return{x:ev.pageX,y:ev.pageY}}return{x:ev.clientX+document.body.scrollLeft-document.body.clientLeft,y:ev.clientY+document.body.scrollTop-document.body.clientTop}},getMouseOffset:function(target,ev){ev=ev||window.event;var docPos=this.getPosition(target);var mousePos=this.mouseCoords(ev);return{x:mousePos.x-docPos.x,y:mousePos.y-docPos.y}},getPosition:function(e){var left=0;var top=0;if(e.offsetHeight==0){e=e.firstChild}while(e.offsetParent){left+=e.offsetLeft;top+=e.offsetTop;e=e.offsetParent}left+=e.offsetLeft;top+=e.offsetTop;return{x:left,y:top}},mousemove:function(ev){if($.tableDnD.dragObject==null){return}if(ev.type=='touchmove'){event.preventDefault()}var dragObj=$($.tableDnD.dragObject);var config=$.tableDnD.currentTable.tableDnDConfig;var mousePos=$.tableDnD.mouseCoords(ev);var y=mousePos.y-$.tableDnD.mouseOffset.y;var yOffset=window.pageYOffset;if(document.all){if(typeof document.compatMode!='undefined'&&document.compatMode!='BackCompat'){yOffset=document.documentElement.scrollTop}else if(typeof document.body!='undefined'){yOffset=document.body.scrollTop}}if(mousePos.y-yOffset<config.scrollAmount){window.scrollBy(0,-config.scrollAmount)}else{var windowHeight=window.innerHeight?window.innerHeight:document.documentElement.clientHeight?document.documentElement.clientHeight:document.body.clientHeight;if(windowHeight-(mousePos.y-yOffset)<config.scrollAmount){window.scrollBy(0,config.scrollAmount)}}if(y!=$.tableDnD.oldY){var movingDown=y>$.tableDnD.oldY;$.tableDnD.oldY=y;if(config.onDragClass){dragObj.addClass(config.onDragClass)}else{dragObj.css(config.onDragStyle)}var currentRow=$.tableDnD.findDropTargetRow(dragObj,y);if(currentRow){if(movingDown&&$.tableDnD.dragObject!=currentRow){$.tableDnD.dragObject.parentNode.insertBefore($.tableDnD.dragObject,currentRow.nextSibling)}else if(!movingDown&&$.tableDnD.dragObject!=currentRow){$.tableDnD.dragObject.parentNode.insertBefore($.tableDnD.dragObject,currentRow)}}}return false},findDropTargetRow:function(draggedRow,y){var rows=$.tableDnD.currentTable.rows;for(var i=0;i<rows.length;i++){var row=rows[i];var rowY=this.getPosition(row).y;var rowHeight=parseInt(row.offsetHeight)/2;if(row.offsetHeight==0){rowY=this.getPosition(row.firstChild).y;rowHeight=parseInt(row.firstChild.offsetHeight)/2}if((y>rowY-rowHeight)&&(y<(rowY+rowHeight))){if(row==draggedRow){return null}var config=$.tableDnD.currentTable.tableDnDConfig;if(config.onAllowDrop){if(config.onAllowDrop(draggedRow,row)){return row}else{return null}}else{var nodrop=$(row).hasClass("nodrop");if(!nodrop){return row}else{return null}}return row}}return null},mouseup:function(e){if($.tableDnD.currentTable&&$.tableDnD.dragObject){$(document).unbind(moveEvent,$.tableDnD.mousemove).unbind(endEvent,$.tableDnD.mouseup);var droppedRow=$.tableDnD.dragObject;var config=$.tableDnD.currentTable.tableDnDConfig;if(config.onDragClass){$(droppedRow).removeClass(config.onDragClass)}else{$(droppedRow).css(config.onDropStyle)}$.tableDnD.dragObject=null;var newOrder=$.tableDnD.serialize();if(config.onDrop&&($.tableDnD.originalOrder!=newOrder)){config.onDrop($.tableDnD.currentTable,droppedRow)}$.tableDnD.currentTable=null}},serialize:function(){if($.tableDnD.currentTable){return $.tableDnD.serializeTable($.tableDnD.currentTable)}else{return"Error: No Table id set, you need to set an id on your table and every row"}},serializeTable:function(table){var result="";var tableId=table.id;var rows=table.rows;for(var i=0;i<rows.length;i++){if(result.length>0)result+="&";var rowId=rows[i].id;if(rowId&&rowId&&table.tableDnDConfig&&table.tableDnDConfig.serializeRegexp){rowId=rowId.match(table.tableDnDConfig.serializeRegexp)[0]}result+=tableId+'[]='+rowId}return result},serializeTables:function(){var result="";this.each(function(){result+=$.tableDnD.serializeTable(this)});return result}};$.fn.extend({tableDnD:$.tableDnD.build,tableDnDUpdate:$.tableDnD.updateTables,tableDnDSerialize:$.tableDnD.serializeTables});
});