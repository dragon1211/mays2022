(function() {
	var element = document.querySelector('.sticky-link')

	function appendSpace() {
		var space = document.createElement('div')
		space.classList.add('sticky-link-space')
		document.body.appendChild(space)
	}

	function toggle() {
		console.log()
		var threshold = window.innerHeight
		var y = window.scrollY | window.pageYOffset

		if (y > threshold) {
			element.classList.add('show')
		} else {
			element.classList.remove('show')
		}
	}

	window.addEventListener('load', appendSpace)
	window.addEventListener('scroll', toggle)
})()
