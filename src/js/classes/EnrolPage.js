class EnrolPage {
	constructor (course) {
		this.course = course
		this.courseBox = document.querySelector('.coursebox')
		this.enrolForm = document.querySelector('.mform')
	}

	create () {
	    const link = document.querySelector('.coursename a')
	    const title = link.textContent
	    const url = link.href
	    
	    if (this.enrolForm !== null) {
	    	this.enrolForm.parentNode.remove()
		}
		
	    const metadata = this.metadata()
	    const description = this.description()
	    const objectives = this.objectives()
	    const image = this.image()
	    const teachers = this.teachers()
	    const teacherTextElement = document.querySelector('#teacher')
		
		const teacherText = teacherTextElement ? teacherTextElement.textContent : ''

	    const courseData = {
            title, url, image, teachers, teacherText, metadata, description, objectives
        }

        this.makeUI(courseData)
	}

	metadata () {
	    const languageName = this.getMetadata(document.querySelector('.summary #language .name'))
	    const languageValue = this.getMetadata(document.querySelector('.summary #language .value'))

	    const keywordsName = this.getMetadata(document.querySelector('.summary #keywords .name'))
	    const keywordsValue = this.getMetadata(document.querySelector('.summary #keywords .value'))

	    const presenterName = this.getMetadata(document.querySelector('.summary #presenters .name'))
	    const presenterValue = this.getMetadata(document.querySelector('.summary #presenters .value'))

	    const estimatedTimeName = this.getMetadata(document.querySelector('.summary #estimatedtime .name'))
	    const estimatedTimeValue = this.getMetadata(document.querySelector('.summary #estimatedtime .value'))

	    const dateCreatedName = this.getMetadata(document.querySelector('.summary #datecreated .name'))
	    const dateCreatedValue = this.getMetadata(document.querySelector('.summary #datecreated .value'))

	    const dateUpdatedName = this.getMetadata(document.querySelector('.summary #dateupdated .name'))
	    const dateUpdatedValue = this.getMetadata(document.querySelector('.summary #dateupdated .value'))

	    metadata = {
	        language: {
	            name: languageName,
	            value: languageValue
	        },
	        keywords: {
	            name: keywordsName,
	            value: keywordsValue
	        },
	        presenters: {
	            name: presenterName,
	            value: presenterValue
	        },
	        estimatedTime: {
	            name: estimatedTimeName,
	            value: estimatedTimeValue
	        },
	        dateCreated: {
	            name: dateCreatedName,
	            value: dateCreatedValue
	        },
	        dateUpdated: {
	            name: dateUpdatedName,
	            value: dateUpdatedValue
	        }
	    }

	    return metadata
	}

	getMetadata (selector) {
        return selector ? selector.textContent : ''
    }

    description () {
	    let name = this.getMetadata(document.querySelector('#description'))
	    let content = this.getMetadata(document.querySelector('#description-content'))

	    return { name, content }
    }

    objectives () {
	    let name = this.getMetadata(document.querySelector('#objectives'))
	    let content = document.querySelector('#objectives-content').innerHTML

	    return { name, content }
    }

    image () {
    	const courseImage = document.querySelector('.courseimage img')

        return courseImage !== null ? courseImage.src : 'https://picsum.photos/300/300/?image=543'
    }

    teachers () {
    	const courseTeachers = document.querySelectorAll('.teachers li a')

        let teacherNames = []

        if (courseTeachers.length > 0) {
	        l_forEach(courseTeachers, teacher => {
	            teacherNames.push(teacher.textContent)
	        })
	    }

        return teacherNames
    }

    makeUI (data) {
	    this.courseBox.innerHTML = ''
	    let courseHTML = ''

	    courseHTML = `
	        <h2>
	            <a href="${data.url}">${data.title}</a>
	        </h2>  
	    `

	    courseHTML += `
	        <div class="flex">
	    `

	    courseHTML += `
	      <img class="w-64 h-64 hidden lg:block" src="${data.image}">
	    `

	    courseHTML += `
	      <div class="ml-4">
	    `

	    if (Object.keys(data.metadata).length > 0) {
	        l_forEach(Object.keys(data.metadata), key => {
	            if (data.metadata[key].name !== "") {
	                courseHTML += `
	                  <p class="mb-0">
	                    <strong>${data.metadata[key].name}: </strong> ${data.metadata[key].value}
	                  </p>
	                `
	            }
	        })
	    }

	    if (this.enrolForm !== null) {
		    courseHTML += `
		      <div class="mt-4">
		    `

		    courseHTML += this.enrolForm.parentNode.innerHTML

		    this.enrolForm.querySelector("fieldset").remove()

		    let submitBtn = this.enrolForm.querySelector("input[type='submit']")

		    if (submitBtn) {
		    	submitBtn.classList.add("btn-lg")
		    }

		    courseHTML += `
		    			</div>
		    `
	    }

	    courseHTML += `
	    		</div>
	        </div>
	    `

	    if (data.description.content || data.objectives.content || data.teachers.length) {
		    courseHTML += `
				<div class="container--tabs mt-4 w-full lg:w-1/2">
					<section class="row">
						<ul class="nav nav-tabs">
			`

				if (data.description.content) {
					courseHTML += `
						<li class="active"><a href="#tab-1">${data.description.name}</a></li>
					`
				}

				if (data.objectives.content) {
					courseHTML += `
						<li class=""><a href="#tab-2">${data.objectives.name}</a></li>
					`
				}

				if (data.teachers.length) {
					courseHTML += `
						<li class=""><a href="#tab-3">${data.teacherText}</a></li>
					`
				}

							
				courseHTML += `
					</ul>

					<div class="tab-content">
				`

				if (data.description.content) {
					courseHTML += `
						<div id="tab-1" class="tab-pane active"> 
							${data.description.content}
						</div> 
					`
				}

				if (data.objectives.content) {
					courseHTML += `
						<div id="tab-2" class="tab-pane"> 
							${data.objectives.content}
						</div> 
					`
				}		
							
				if (data.teachers.length) {
					courseHTML += `
						<div id="tab-3" class="tab-pane">
							<ul class="list-reset">
					`

					l_forEach(data.teachers, teacher => {
						courseHTML += `
							<li>${teacher}</li>
						`
					})
					
					courseHTML += `
							</ul>
						</div>
					`
				}
							

			courseHTML += `				
						</div>
					</section>
				</div>
		    `
	    }

	    this.courseBox.innerHTML = courseHTML
    }
}

module.exports = { EnrolPage }