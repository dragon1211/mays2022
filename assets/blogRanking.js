(function() {
	var label = document.createElement('span')
	var posts = document.querySelectorAll('.blog-index-item')

	label.classList.add('rank')

	posts.forEach((post, index) => {
		var text = document.createTextNode(index + 1)
		var rank = label.cloneNode()

		rank.appendChild(text)
		post.appendChild(rank)
	});
})()
