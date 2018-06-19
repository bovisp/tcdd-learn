let frontpage = document.getElementById("page-site-index");

if (frontpage) {
    let descriptions = document.querySelectorAll(".slick-meta2 .text_to_html");

    descriptions.forEach(description => {
        if (description.innerText.length > 250) {
            descriptionText = description.innerText;
            description.innerHTML = "";
            description.innerHTML = `${descriptionText.substring(0, 251)} <a href="#" style="text-decoration: underline;">...</a>`;
        }
    });
}

function getMetadata(selector) {
    return selector ? selector.textContent : ""
}

function courseResize(courses, outer, wasClicked = null, expanded = false) {
    let width = outer.offsetWidth;

    if (wasClicked && window.innerWidth >= 768) {
        if (expanded) {
            width = width - 285
            console.log(wasClicked, width, "expanded");
        } else {
            width = width + 285
            console.log(wasClicked, width, "not expanded");
        }
    }

    let courseImages = document.querySelectorAll(".course-image");

    if (width <= 960) {
        courseImages.forEach(image => {
            image.classList.remove("block")
            image.classList.add("hidden")
        });
    } else {
        courseImages.forEach(image => {
            image.classList.add("block")
            image.classList.remove("hidden")
        });
    }

    let courseMetas = document.querySelectorAll(".course-meta");

    if (width <= 700) {
        courseMetas.forEach(course => {
            course.classList.remove("flex")
            
            let metaDivs = course.querySelectorAll("div")

            metaDivs.forEach(meta => {
                meta.classList.remove("w-1/2")
            })
        });
    } else {
        courseMetas.forEach(course => {
            course.classList.add("flex")

            let metaDivs = course.querySelectorAll("div")

            metaDivs.forEach(meta => {
                meta.classList.add("w-1/2")
            })
        });
    }

    let courseWrappers = document.querySelectorAll(".course-wrapper");

    if (width <= 700) {
        courseWrappers.forEach(course => {
            course.classList.remove("h-64")
        });
    } else {
        courseWrappers.forEach(course => {
            course.classList.add("h-64")
        });
    }

    if (width > 1600) {
        courses.forEach(course => {
            course.classList.remove("w-full");
            course.classList.add("w-1/2");
        })
    } else {
        courses.forEach(course => {
            course.classList.add("w-full");
            course.classList.remove("w-1/2");
        })
    }
}

let courseListing = document.getElementById("page-course-index-category");

if (courseListing) {

    let coursesArr = [];

    var count = 0;

    let courses = document.querySelectorAll("#page-course-index-category .coursebox");

    var outer = document.querySelector("#page-course-index-category .courses");

    let drawerToggle = document.querySelector("[data-preference='drawer-open-nav']");

    var drawerExpanded = drawerToggle.getAttribute("aria-expanded") === "true" ? true : false;

    console.log(drawerExpanded);

    outer.classList.add("flex", "flex-wrap");

    window.addEventListener("resize", () => {
        courseResize(courses, outer);
    });

    drawerToggle.addEventListener("click", () => {
        drawerExpanded = !drawerExpanded;

        courseResize(courses, outer, true, drawerExpanded);
    });

    courses.forEach(course => {

        let teacherNames = [],
            courseHTML = "",
            metadata = {};

        let courseId = course.dataset.courseid;

        course.classList.remove("clearfix", "odd", "first", "even", "last");
        course.classList.add("p-0", "my-4");

        let link = course.querySelector(".coursename a");
        let title = link.textContent;
        let url = link.href;
        let image = course.querySelector(".courseimage img");
        let teachers = course.querySelectorAll(".teachers li a");

        let languageName = getMetadata(course.querySelector(".summary #language .name"));
        let languageValue = getMetadata(course.querySelector(".summary #language .value"));

        let keywordsName = getMetadata(course.querySelector(".summary #keywords .name"));
        let keywordsValue = getMetadata(course.querySelector(".summary #keywords .value"));

        let presenterName = getMetadata(course.querySelector(".summary #presenters .name"));
        let presenterValue = getMetadata(course.querySelector(".summary #presenters .value"));

        let estimatedTimeName = getMetadata(course.querySelector(".summary #estimatedtime .name"));
        let estimatedTimeValue = getMetadata(course.querySelector(".summary #estimatedtime .value"));

        let dateCreatedName = getMetadata(course.querySelector(".summary #datecreated .name"));
        let dateCreatedValue = getMetadata(course.querySelector(".summary #datecreated .value"));

        let dateUpdatedName = getMetadata(course.querySelector(".summary #dateupdated .name"));
        let dateUpdatedValue = getMetadata(course.querySelector(".summary #dateupdated .value"));

        let descriptionName = getMetadata(course.querySelector("#description"));
        let descriptionContent = getMetadata(course.querySelector("#description-content"));

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
        };

        if (image) {
            imageUrl = image.src
        } else {
            imageUrl = "https://picsum.photos/300/300/?image=543"
        }

        if (teachers.length > 0) {
            teachers.forEach(teacher => {
                teacherNames.push(teacher.textContent)
            })
        }

        coursesArr.push({
            title,
            url,
            imageUrl,
            teacherNames,
            metadata
        });

        course.innerHTML = "";

        courseHTML = `
            <div class="course-wrapper shadow flex mr-4 border border-solid border-b-0 border-r-0 border-l-0 border-grey-lighter">
        `;

        courseHTML += `
          <img class="course-image w-64 h-64" src="${imageUrl}">
        `;

        courseHTML += `
          <div class="course-meta w-full">
            <div class="border border-solid border-b-0 border-t-0 border-l-0 border-grey-lighter p-4">
              <a href="${url}">
                <h3 class="mb-4">${title}</h3>   
              </a>     
        `;

        if (Object.keys(metadata).length > 0) {
            Object.keys(metadata).forEach(key => {
                if (metadata[key].name !== "") {
                    courseHTML += `
                      <p class="mb-0">
                        <strong>${metadata[key].name}: </strong> ${metadata[key].value}
                      </p>
                    `
                }
            })
        }

        courseHTML += `
            </div>
            <div class="p-4">
        `;

        if (descriptionName !== "") {
            courseHTML += `
              <h4 class="mb-4">${descriptionName}</h4>
            `;

            if (descriptionContent.length > 250) {
                descriptionContent = `
                  ${descriptionContent.substring(0, 251)}<a href="${url}" style="text-decoration: underline;">...</a>
                `
            }

            courseHTML += `
              <p class="mb-0">${descriptionContent}</p>
            `
        }

        courseHTML += `
                </div>
              </div>
            </div>
        `;
        
        course.innerHTML = courseHTML

        courseResize(courses, outer);
    });
}

let enrolPage = document.getElementById("page-enrol-index");

if (enrolPage) {
    let teacherNames = [],
            courseHTML = "",
            metadata = {};

    let courseBox = document.querySelector(".coursebox");

    let link = document.querySelector(".coursename a");
    let title = link.textContent;
    let url = link.href;

    let enrolForm = document.querySelector(".mform");
    enrolForm.parentNode.remove();

    let image = document.querySelector(".courseimage img");
    let teachers = document.querySelectorAll(".teachers li a");

    let languageName = getMetadata(document.querySelector(".summary #language .name"));
    let languageValue = getMetadata(document.querySelector(".summary #language .value"));

    let keywordsName = getMetadata(document.querySelector(".summary #keywords .name"));
    let keywordsValue = getMetadata(document.querySelector(".summary #keywords .value"));

    let presenterName = getMetadata(document.querySelector(".summary #presenters .name"));
    let presenterValue = getMetadata(document.querySelector(".summary #presenters .value"));

    let estimatedTimeName = getMetadata(document.querySelector(".summary #estimatedtime .name"));
    let estimatedTimeValue = getMetadata(document.querySelector(".summary #estimatedtime .value"));

    let dateCreatedName = getMetadata(document.querySelector(".summary #datecreated .name"));
    let dateCreatedValue = getMetadata(document.querySelector(".summary #datecreated .value"));

    let dateUpdatedName = getMetadata(document.querySelector(".summary #dateupdated .name"));
    let dateUpdatedValue = getMetadata(document.querySelector(".summary #dateupdated .value"));

    let descriptionName = getMetadata(document.querySelector("#description"));
    let descriptionContent = getMetadata(document.querySelector("#description-content"));

    let objectivesName = getMetadata(document.querySelector("#objectives"));
    let objectivesContent = getMetadata(document.querySelector("#objectives-content"));

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
    };

    if (image) {
        imageUrl = image.src
    } else {
        imageUrl = "https://picsum.photos/300/300/?image=543"
    }

    if (teachers.length > 0) {
        teachers.forEach(teacher => {
            teacherNames.push(teacher.textContent)
        })
    }

    courseBox.innerHTML = "";

    courseHTML = `
        <h2>
            <a href="${url}">${title}</a>
        </h2>  
    `;

    courseHTML += `
        <div class="flex">
    `;

    courseHTML += `
      <img class="w-64 h-64" src="${imageUrl}">
    `;

    courseHTML += `
      <div class="ml-4">
    `;

    if (Object.keys(metadata).length > 0) {
        Object.keys(metadata).forEach(key => {
            if (metadata[key].name !== "") {
                courseHTML += `
                  <p class="mb-0">
                    <strong>${metadata[key].name}: </strong> ${metadata[key].value}
                  </p>
                `
            }
        })
    }

    courseHTML += `
      </div>
    `;

    courseHTML += `
      <div class="ml-4">
    `;

    courseHTML += enrolForm.parentNode.innerHTML;

    enrolForm.querySelector("fieldset").remove();

    let submitBtn = enrolForm.querySelector("input[type='submit']");

    submitBtn.classList.add("btn-lg");

    courseHTML += `
      </div>
    `;

    courseHTML += `
        </div>
    `;

    courseHTML += `
        <ul class="nav nav-tabs mt-8" id="myTab" role="tablist">
    `;

    if (descriptionContent !== "") {
        courseHTML += `
            <li class="nav-item">
                <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">${descriptionName}</a>
              </li>
        `;
    }

    courseHTML += `
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
    `;

    courseHTML += `
          <li class="nav-item">
            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
          </li>
    `;

    courseHTML += `
          <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
          </li>
    `;

    courseHTML += `
        </ul>
    `;
  
    if (descriptionContent !== "") {
        courseHTML += `
            <div class="tab-content">
        `;

        if (descriptionContent !== "") {
            courseHTML += `
                  <div class="tab-pane" id="description" role="tabpanel" aria-labelledby="description-tab">${descriptionContent}</div>
            `;
        }

        courseHTML += `
              <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        `;

        courseHTML += `
              <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
        `;

        courseHTML += `
              <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
        `

        courseHTML += `
            </div>
        `;
    }

    courseBox.innerHTML = courseHTML;

    $('#myTab li:first-child a').tab('show')
}