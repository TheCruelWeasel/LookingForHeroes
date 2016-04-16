$(document).ready(function(){

  $('.team-gameplay-type').find('ul').find('li').click(function(){
    if($(this).hasClass('clicked')){
      $(this).css('background', '#909090');
      $(this).removeClass('clicked');
    }

    else{
      if($(this).hasClass('first-elem')){
        $(this).addClass('clicked');
        $(this).css('background', '#00c3ff');
      }
      if($(this).hasClass('middle-elem')){
        $(this).addClass('clicked');
        $(this).css('background', '#ffc70e');
      }
      if($(this).hasClass('last-elem')){
        $(this).addClass('clicked');
        $(this).css('background', '#ff003c');
      }
    }
  });

  $('.game-region').find('ul').find('li').click(function(){
    if($(this).hasClass('clicked')){
      $(this).css('background', '#909090');
      $(this).removeClass('clicked');
    }

    else{
      if($(this).hasClass('first-elem')){
        $(this).addClass('clicked');
        $(this).css('background', '#00c3ff');
      }
      if($(this).hasClass('last-elem')){
        $(this).addClass('clicked');
        $(this).css('background', '#ff003c');
      }
    }
  });
});
