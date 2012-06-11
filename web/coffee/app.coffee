class App

  run: ->
    @noise()
    @remove()
    @drag()
    @create()
    @rotate()

  noise: ->
    $('body').noiseGen({
      opacity: 0.15,
      width: 100,
      height: 100,
      fromColor: "ffffff",
      toColor: "000000"
    });
    
  remove: ->
    $('.content').live 'blur', ->
      if $(this).text().trim() is ''
        $(this).parents('.bubble').fadeOut 500, -> $(this).remove()
      
  drag: ->
    $('.bubble:not(.ui-draggable)').live 'mouseover', ->
      $(this).draggable({ handle: '.handle', cursor: 'move' })

  create: ->
    $(document).dblclick event, ->
      if not event.altKey then return
      
      $('#template').clone()
        .removeAttr('id')
        .css('top', event.clientY)
        .css('left', event.clientX - 65)
        .hide()
        .appendTo('.container')
        .fadeIn('slow')
        
  rotate: ->
    $('.bubble .rotate').live 'change', ->
      $('.content', $(this).parents('.bubble')).css 'font-size', $(this).val() + 'px'


$(document).ready ->
  app = new App
  app.run()

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