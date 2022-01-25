(function() {
	const widgetSections = [
		document.querySelector('section.widget.popular-posts'),
		document.querySelector('section.widget.widget_tag_cloud')
	]
	const widgetSectionLinkData = [
		{ href: '/column/ranking/', text: 'すべてのランキングを見る' },
		{ href: '/column/tag/', text: 'すべてのタグを見る' }
	]

	widgetSections.forEach((section, index) => {
		let text = document.createTextNode(widgetSectionLinkData[index].text)
		let a = document.createElement("A")
		let p = document.createElement("P")
		
		a.setAttribute('href', widgetSectionLinkData[index].href)
		a.appendChild(text)
		p.appendChild(a)
		section.appendChild(p)
	})
})()
