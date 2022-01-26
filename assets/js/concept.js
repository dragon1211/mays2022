(function() {

	function Tab(selector) {
		this.state = 1
		this.root = document.querySelector(selector)
		this.controlGroups = this.root.querySelectorAll('.concept-coordinate-tab-ctrl')
		this.contents = this.root.querySelectorAll('.tab-content')

		this.init()
	}

	Tab.prototype.init = function() {
		this.checkHash()

		for (var i=0; i < this.controlGroups.length; i++) {
			var group = this.controlGroups[i]
			for (var j=0; j < group.children.length; j++) {
				group.children[j].addEventListener('click', this.onControlClick.bind(this))
			}
		}
	}

	Tab.prototype.checkHash = function() {
		var hash = window.location.hash.substring(1)

		if (!hash) { return }

		var arr = Array.prototype.slice.call(this.contents)
		var index = arr.findIndex(function(element) {
			return hash == element.id
		})
		if (index > -1) {
			this.setState(index).switchTab().updateControl().scrollToTabTop()
		}
	}

	Tab.prototype.onControlClick = function(e) {
		e.preventDefault()
		e.stopPropagation()

		var index = parseInt(e.currentTarget.getAttribute('data-index'))

		if (index == this.state) { return }
		else { this.setState(index).switchTab().updateControl() }

		if ( window.scrollY > this.root.offsetTop) { this.scrollToTabTop() }
	}

	Tab.prototype.setState = function(index) {
		this.state = index
		return this
	}

	Tab.prototype.updateControl = function () {
		for (var i=0; i < this.controlGroups.length; i++) {
			for (var j=0; j < this.controlGroups[i].children.length; j++) {
				if (j == this.state) {
					this.controlGroups[i].children[j].classList.add('active')
				} else {
					this.controlGroups[i].children[j].classList.remove('active')
				}
			}
		}

		return this
	}

	Tab.prototype.switchTab = function() {
		for (var i = 0; i < this.contents.length; i++) {
	    this.contents[i].classList.remove('active')
	  }
	  this.contents[this.state].classList.add('active')

	  return this
	}

	Tab.prototype.scrollToTabTop = function() {
		window.scrollTo({
			top: this.root.offsetTop - 100,
			behavior: 'smooth'
		})
	}

	function Gallery(rootElement) {
		this.root = rootElement
		this.main = this.root.querySelector('img.main')
		this.thumbnails = this.root.querySelectorAll('img.thumbnail')

		this.init()
	}

	Gallery.prototype.init = function() {
		for (var i=0; i < this.thumbnails.length; i++) {
			this.thumbnails[i].addEventListener('click', this.onclick.bind(this))
		}
	}

	Gallery.prototype.onclick = function(e) {
		e.preventDefault()
		e.stopPropagation()

		var target = e.currentTarget

		this.updateImage(target.src)
		this.updateActiveThumbnail(target)
	}

	Gallery.prototype.updateImage = function(src) {
		this.main.src = src
	}

	Gallery.prototype.updateActiveThumbnail = function(target) {
		for (var i=0; i < this.thumbnails.length; i++) {
			this.thumbnails[i].classList.remove('active')
		}
		target.classList.add('active')
	}

	
	new Tab('.concept-coordinate-tab')

	var galleries = document.querySelectorAll('.coordinate-gallery');
	for (var i=0; i < galleries.length; i++) {
		new Gallery(galleries[i])
	}
})()

$(function () {
  $('.concept-coordinate-tab-ctrl button').on('click', function () {
    $('.p-concept__tab-box.luxury video')[0].pause();
    $('.p-concept__tab-box.premium video')[0].pause();
    $('.p-concept__tab-box.neutral video')[0].pause();
  });
  
  $('.p-concept__tab-box.luxury').hide();
  $('.p-concept__tab-box.luxury').eq(0).show();
  $('.p-concept__tab-list.luxury .p-concept__tab-thumbnail').eq(0).addClass('is-active');
  $('.p-concept__tab-list.luxury .p-concept__tab-thumbnail').each(function () {
    $(this).on('click', function () {
      $('.p-concept__tab-box.luxury video')[0].pause();
      var index = $('.p-concept__tab-list.luxury .p-concept__tab-thumbnail').index(this);
      $('.p-concept__tab-list.luxury .p-concept__tab-thumbnail').removeClass('is-active');
      $(this).addClass('is-active');
      $('.p-concept__tab-box.luxury').hide();
      $('.p-concept__tab-box.luxury').eq(index).show();
    });
  });
  
  $('.p-concept__tab-box.premium').hide();
  $('.p-concept__tab-box.premium').eq(0).show();
  $('.p-concept__tab-list.premium .p-concept__tab-thumbnail').eq(0).addClass('is-active');
  $('.p-concept__tab-list.premium .p-concept__tab-thumbnail').each(function () {
    $(this).on('click', function () {
      $('.p-concept__tab-box.premium video')[0].pause();
      var index = $('.p-concept__tab-list.premium .p-concept__tab-thumbnail').index(this);
      $('.p-concept__tab-list.premium .p-concept__tab-thumbnail').removeClass('is-active');
      $(this).addClass('is-active');
      $('.p-concept__tab-box.premium').hide();
      $('.p-concept__tab-box.premium').eq(index).show();
    });
  });
  
  $('.p-concept__tab-box.neutral').hide();
  $('.p-concept__tab-box.neutral').eq(0).show();
  $('.p-concept__tab-list.neutral .p-concept__tab-thumbnail').eq(0).addClass('is-active');
  $('.p-concept__tab-list.neutral .p-concept__tab-thumbnail').each(function () {
    $(this).on('click', function () {
      $('.p-concept__tab-box.neutral video')[0].pause();
      var index = $('.p-concept__tab-list.neutral .p-concept__tab-thumbnail').index(this);
      $('.p-concept__tab-list.neutral .p-concept__tab-thumbnail').removeClass('is-active');
      $(this).addClass('is-active');
      $('.p-concept__tab-box.neutral').hide();
      $('.p-concept__tab-box.neutral').eq(index).show();
    });
  });
});