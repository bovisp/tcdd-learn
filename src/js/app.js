window._ = require('lodash');
window.$ = window.jQuery = require('jquery')

require('./components/slick')
require('./shims/class-list')
require('./shims/html-element-remove')

const { CourseListing } = require('./classes/CourseListing')
const { CategoryMenu } = require('./classes/CategoryMenu')
const { EnrolPage } = require('./classes/EnrolPage')

// Course listing page.
const courses = document.querySelectorAll('#page-course-index-category .coursebox')

if (courses.length !== 0) {
    const courseUI = new CourseListing(courses) 

    courseUI.create()  
}

// Training categories menu
const categoryMenu = new CategoryMenu 
categoryMenu.create()

// Course enrol page
let enrolPage = document.getElementById("page-enrol-index")

if (enrolPage !== null) {
	const enrolePage = new EnrolPage(enrolPage)
	enrolePage.create()
}

// Course enrol tabs javascript
window.addEventListener("load", function() {
	// store tabs variable
	const myTabs = document.querySelectorAll("ul.nav-tabs > li") 

	function myTabClicks(tabClickEvent) {
		for (var i = 0; i < myTabs.length; i++) {
			myTabs[i].classList.remove("active") 
		}

		let clickedTab = tabClickEvent.currentTarget
		clickedTab.classList.add("active")

		tabClickEvent.preventDefault()

		let myContentPanes = document.querySelectorAll(".tab-pane")

		for (i = 0; i < myContentPanes.length; i++) {
			myContentPanes[i].classList.remove("active")
		}

		let anchorReference = tabClickEvent.target
		let activePaneId = anchorReference.getAttribute("href")
		let activePane = document.querySelector(activePaneId)

		activePane.classList.add("active")
	}

	for (i = 0; i < myTabs.length; i++) {
		myTabs[i].addEventListener("click", myTabClicks)
	}
})

// Delete Manager Tools block
const blocks = document.querySelectorAll('.block')

_.forEach(blocks, block => {
  let header = block.querySelector('h5')

  if (header.textContent === 'Manager Tools') {
    header.parentNode.parentNode.remove()
  } 
})

// Make video player full width
let playerWrappers = document.querySelectorAll('.mediaplugin_videojs')

_.forEach(playerWrappers, player => {
	player.childNodes[0].style.maxWidth = '1280px'
})

// Reduce the length of course decription in slick slider
let frontpage = document.getElementById("page-site-index");

const currentLang = document.documentElement.getAttribute("lang")

if (frontpage) {
    let descriptions = document.querySelectorAll(".slick-meta2 .text_to_html");

    _.forEach(descriptions, description => {
        if (description.innerText.length > 250) {
            descriptionText = description.innerText;
            description.innerHTML = "";
            description.innerHTML = `${descriptionText.substring(0, 251)} <a href="#" style="text-decoration: underline;">...</a>`;
        }
    })

    let links = document.querySelectorAll("#links a")

    _.forEach(links, link => {
		if (currentLang === 'en') {
			if (link.textContent.indexOf('{mlang en}') >= 0) {
			  let textLeft = '{mlang en}'
			  let textRight = '{mlang}{mlang fr}'

			  let text = link.textContent

			  let textArray = text.match(new RegExp(textLeft + "(.*)" + textRight))

			  link.textContent = textArray[1]
			}
		} else {
			if (link.textContent.indexOf('{mlang fr}') >= 0) {
			  let textLeft = '{mlang fr}'
			  let textRight = '{mlang}'

			  let text = link.textContent

			  let textArray = text.match(new RegExp(textLeft + "(.*)" + textRight))

			  link.textContent = textArray[1]
			}
		}  
	})
}