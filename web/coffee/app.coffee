class App

  enable: ->
    @removing()
    @dragging()
    @creating()
    @resizing()
      
  init: (data) ->
    data = JSON.parse(data)
    
    for idea in data
      elem = new Element(idea.idea, idea.x, idea.y, idea.size).spawn()
      
  removing: ->
    $('.content').live 'blur', ->
      if $(this).text().trim() is ''
        $(this).parents('.bubble').fadeOut 500, -> $(this).remove()
      
  dragging: ->
    $('.bubble:not(.ui-draggable)').live 'mouseover', ->
      $(this).draggable({ handle: '.handle', cursor: 'move' })

  creating: ->
    $(document).dblclick event, ->
      if not event.altKey then return
      new Element('idea', event.clientX - 64, event.clientY, 18).spawn()
        
  resizing: ->
    $('.bubble .resize').live 'change', ->
      $('.content', $(this).parents('.bubble')).css 'font-size', $(this).val() + 'px'


class Element
  @$elem = null
  
  constructor: (content, x, y, size) ->  
    @$elem = $('#template').clone()
      .removeAttr('id')
      .hide()
      .css('top',  y + 'px')
      .css('left', x + 'px')
        
    $('.content', @$elem).text(content).css('font-size', size + 'px')
    $('.resize', @$elem).val(size)
    
  spawn: ->
    @$elem.appendTo('.container').fadeIn('slow')


$(document).ready ->
  window.app = new App
  window.app.enable()

###     
  jsPlumb.ready(function() {
      var plumb = jsPlumb.getInstance();

      plumb.draggable($('.bubble'), { handle: '.handle', cursor: 'move' });

      //plumb.addEndpoint($('.bubble'), { anchor: ['LeftMiddle'] }, { isSource: true, isTarget: true, maxConnections: 100, tolerance: 'touch', reattach: true });
      //plumb.addEndpoint($('.bubble'), { anchor: ['RightMiddle'] }, { isSource: true, isTarget: true, maxConnections: 100, tolerance: 'touch', reattach: true });

      //plumb.makeTarget($('.bubble')).makeSource($('.bubble'));
      //plumb.Defaults.Anchors = [ "LeftMiddle", "RightMiddle" ];
  });
###