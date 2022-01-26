$(function () {
    const modalArea = $('#modalArea');
    $('#openModal').on('click',function(){
      modalArea.fadeIn();
      bodyScrollPrevent(true);
    });
    $('#closeModal , #modalBg').on('click',function(){
      modalArea.fadeOut(function(){
        bodyScrollPrevent(false);
      });
    });
    function bodyScrollPrevent(flag){
      let scrollPosition;
      const body = document.getElementsByTagName('body')[0];
      const ua = window.navigator.userAgent.toLowerCase();
      const isiOS = ua.indexOf('iphone') > -1 || ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document;
      const scrollBarWidth = window.innerWidth - document.body.clientWidth;
      if(flag){
        body.style.paddingRight = scrollBarWidth + 'px';
        if(isiOS){
          scrollPosition = -window.pageYOffset;
          body.style.position = 'fixed';
          body.style.width = '100%';
          body.style.top = scrollPosition + 'px';
        } else {
          body.style.overflow = 'hidden';
        }
      } else if(!flag) {
        body.style.paddingRight = '';
        if(isiOS){
          scrollPosition = parseInt(body.style.top.replace(/[^0-9]/g,''));
          body.style.position = '';
          body.style.width = '';
          body.style.top = '';
          window.scrollTo(0, scrollPosition);
        }else {
          body.style.overflow = '';
        }
      }
    }
  });