class CourseListing {
    constructor (courses) {
        this.courses = courses
    }

    create () {
        var self = this
        l_forEach(self.courses, function(course) {
            course.classList.remove('clearfix', 'odd', 'first', 'even', 'last')
            course.classList.add('p-0', 'my-4')

            const metadata = self.metadata(course)
            const description = self.description(course)
            const image = self.image(course)
            const teachers = self.teachers(course)
            
            const link = course.querySelector('.coursename a')
            const title = link.textContent
            const url = link.href

            const courseData = {
                title, url, image, teachers, metadata, description
            }

            self.makeUI(course, courseData)
        })
    }

    metadata (course) {
        let languageName = this.getMetadata(course.querySelector('.summary #language .name'))
        let languageValue = this.getMetadata(course.querySelector('.summary #language .value'))

        let keywordsName = this.getMetadata(course.querySelector('.summary #keywords .name'))
        let keywordsValue = this.getMetadata(course.querySelector('.summary #keywords .value'))

        let presenterName = this.getMetadata(course.querySelector('.summary #presenters .name'))
        let presenterValue = this.getMetadata(course.querySelector('.summary #presenters .value'))

        let estimatedTimeName = this.getMetadata(course.querySelector('.summary #estimatedtime .name'))
        let estimatedTimeValue = this.getMetadata(course.querySelector('.summary #estimatedtime .value'))

        let dateCreatedName = this.getMetadata(course.querySelector('.summary #datecreated .name'))
        let dateCreatedValue = this.getMetadata(course.querySelector('.summary #datecreated .value'))

        let dateUpdatedName = this.getMetadata(course.querySelector('.summary #dateupdated .name'))
        let dateUpdatedValue = this.getMetadata(course.querySelector('.summary #dateupdated .value'))

        const metadata = {
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

    description (course) {
        const name = this.getMetadata(course.querySelector('#description'))
        const content = this.getMetadata(course.querySelector('#description-content'))

        return { name, content }
    }

    image (course) {
        const courseImage = course.querySelector('.courseimage img')

        return courseImage !== null ? courseImage.src : 'https://picsum.photos/300/300/?image=1056'
    }

    teachers (course) {
        const courseTeachers = course.querySelectorAll('.teachers li a')

        let teacherNames = []

        if (courseTeachers.length > 0) {
            l_forEach(courseTeachers, teacher => {
                teacherNames.push(teacher.textContent)
            })
        }

        return teacherNames
    }

    getMetadata(selector) {
        return selector ? selector.textContent : ''
    }

    makeUI (course, data) {
        let courseHTML = ''
        course.innerHTML = ''

        courseHTML = `
            <div class="shadow flex mr-4 border border-solid border-b-0 border-r-0 border-l-0 border-grey-lighter"> 
        `

        courseHTML += `<img class="w-64 h-64 hidden xxl:block" src="${data.image}">`

        courseHTML += `
            <div class="w-full lg:flex lg:h-64">
                <div class="border-grey-lighter p-4 lg:w-1/2" style="border-right-width: 1px; border-right-style: solid">
                    <a href="${data.url}">
                        <h3 class="mb-4">${data.title}</h3>   
                    </a>     
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

        courseHTML += `
            </div>
            <div class="p-4 lg:w-1/2">
        `;

        if (data.description.name !== "") {
            courseHTML += `
                <h4 class="mb-4">${data.description.name}</h4>
            `;

            if (data.description.content.length > 250) {
                data.description.content = `
                    ${data.description.content.substring(0, 251)}<a href="${data.url}" style="text-decoration: underline;">...</a>
                `
            }

            courseHTML += `
                <p class="mb-0">${data.description.content}</p>
            `
        }

        courseHTML += `
                </div>
              </div>
            </div>
        `
        
        course.innerHTML = courseHTML
    }
}

module.exports = { CourseListing }