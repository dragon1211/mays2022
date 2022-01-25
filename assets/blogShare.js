(function() {
	const platformURLs = {
		fb: 'https://www.facebook.com/sharer/sharer.php?u=',
		tw: 'https://twitter.com/intent/tweet?url=',
		hb: 'https://b.hatena.ne.jp/entry/panel/?url=',
		pk: 'http://getpocket.com/edit?url='
	}

	function getShareWindowOptions() {
		let width = 600,
				height = 450

		let left = (screen.width / 2) - (width / 2),
				top = (screen.height / 2) - (height / 2)

		return [
			'resizable,scrollbars,status',
			'width=' + width,
			'height=' + height,
			'left=' + left,
			'top=' + top
		].join()
	}

	function share(e) {
		e.preventDefault()

		let anchor = e.target
		let href = anchor.href
		let url = href ? encodeURI(href) : location.href
		let platform = anchor.dataset.platform
		let options = getShareWindowOptions()

		window.open(platformURLs[platform] + url, platform + '-share', options)

		return
	}

	const shareButtons = document.querySelectorAll('.sns-btns > a')
	shareButtons.forEach(el => {
		el.addEventListener('click', share, false)
	})
})()
