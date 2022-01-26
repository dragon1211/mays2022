$(document).ready(function(){
  if (issp) {
    am.mh = 440;
  } else {
    am.mh = 400;
  }
  
  // Change Language
  $('.p-agreement__lang__ja').on('click', function(){
    $('.p-agreement__lang p').removeClass('is-active');
    $(this).addClass('is-active');
    $('.is-en').hide();
    $('.is-ja').show();
  });
  $('.p-agreement__lang__en').on('click', function(){
    $('.p-agreement__lang p').removeClass('is-active');
    $(this).addClass('is-active');
    $('.is-ja').hide();
    $('.is-en').show();
  });
  
  // DatePicker
  $('.is-datepicker').datepicker({
    dateFormat: 'd M yy',
  });
  
  // START
  $('.p-agreement__detail__button #is-start').on('click', function(){
    $('.p-agreement__step1').show();
    var position = $('.p-agreement__step1 h2').offset().top - 15;
    $('html,body').animate({
      scrollTop : position
    }, {
      queue : false
    });
  });
  
  // STEP 1
  $('.p-agreement__step1__radio input[type=radio]').change(function(){
    if($('[id=other]').prop('checked')){
      $('.p-agreement__step1__table').show();
      $('.p-agreement__step1__price').show();
    } else{
      $('.p-agreement__step1__table').hide();
      $('.p-agreement__step1__price').hide();
    }
  });
  $('.p-agreement__step1__button #is-next').on('click', function(){
    $('.p-agreement__step2').show();
    var position = $('.p-agreement__step2 h2').offset().top - 15;
    $('html,body').animate({
      scrollTop : position
    }, {
      queue : false
    });
  });
  
  // STEP 2
  $('.p-agreement__step2__button #is-next').on('click', function(){
    $('.p-agreement__step3').show();
    var position = $('.p-agreement__step3 h2').offset().top - 15;
    $('html,body').animate({
      scrollTop : position
    }, {
      queue : false
    });
  });
  
  // STEP 3
  $('.p-agreement__step3__button #is-next').on('click', function(){
    $('.p-agreement__step4').show();
    var position = $('.p-agreement__step4 h2').offset().top - 15;
    $('html,body').animate({
      scrollTop : position
    }, {
      queue : false
    });
  });
  
  // STEP 4
  $('.p-agreement__step4__button #is-next').on('click', function(){
    $('.p-agreement__step5').show();
    var position = $('.p-agreement__step5 h2').offset().top - 15;
    $('html,body').animate({
      scrollTop : position
    }, {
      queue : false
    });
  });
  
  // STEP 5
  $('.p-agreement__step5__button #is-next').on('click', function(){
    $('.p-agreement__step6').show();
    var position = $('.p-agreement__step6 h2').offset().top - 15;
    $('html,body').animate({
      scrollTop : position
    }, {
      queue : false
    });
  });
});