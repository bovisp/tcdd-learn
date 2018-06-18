/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

var frontpage = document.getElementById("page-site-index");

if (frontpage) {
    var descriptions = document.querySelectorAll(".slick-meta2 .text_to_html");

    descriptions.forEach(function (description) {
        if (description.innerText.length > 250) {
            descriptionText = description.innerText;
            description.innerHTML = "";
            description.innerHTML = descriptionText.substring(0, 251) + " <a href=\"#\" style=\"text-decoration: underline;\">...</a>";
        }
    });
}

function getMetadata(selector) {
    return selector ? selector.textContent : "";
}

function courseResize(courses, outer) {
    var wasClicked = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
    var expanded = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;

    var width = outer.offsetWidth;

    if (wasClicked && window.innerWidth >= 768) {
        if (expanded) {
            width = width - 285;
            console.log(wasClicked, width, "expanded");
        } else {
            width = width + 285;
            console.log(wasClicked, width, "not expanded");
        }
    }

    var courseImages = document.querySelectorAll(".course-image");

    if (width <= 960) {
        courseImages.forEach(function (image) {
            image.classList.remove("block");
            image.classList.add("hidden");
        });
    } else {
        courseImages.forEach(function (image) {
            image.classList.add("block");
            image.classList.remove("hidden");
        });
    }

    var courseMetas = document.querySelectorAll(".course-meta");

    if (width <= 700) {
        courseMetas.forEach(function (course) {
            course.classList.remove("flex");

            var metaDivs = course.querySelectorAll("div");

            metaDivs.forEach(function (meta) {
                meta.classList.remove("w-1/2");
            });
        });
    } else {
        courseMetas.forEach(function (course) {
            course.classList.add("flex");

            var metaDivs = course.querySelectorAll("div");

            metaDivs.forEach(function (meta) {
                meta.classList.add("w-1/2");
            });
        });
    }

    var courseWrappers = document.querySelectorAll(".course-wrapper");

    if (width <= 700) {
        courseWrappers.forEach(function (course) {
            course.classList.remove("h-64");
        });
    } else {
        courseWrappers.forEach(function (course) {
            course.classList.add("h-64");
        });
    }

    if (width > 1600) {
        courses.forEach(function (course) {
            course.classList.remove("w-full");
            course.classList.add("w-1/2");
        });
    } else {
        courses.forEach(function (course) {
            course.classList.add("w-full");
            course.classList.remove("w-1/2");
        });
    }
}

var courseListing = document.getElementById("page-course-index-category");

if (courseListing) {

    var coursesArr = [];

    var count = 0;

    var courses = document.querySelectorAll("#page-course-index-category .coursebox");

    var outer = document.querySelector("#page-course-index-category .courses");

    var drawerToggle = document.querySelector("[data-preference='drawer-open-nav']");

    var drawerExpanded = drawerToggle.getAttribute("aria-expanded") === "true" ? true : false;

    console.log(drawerExpanded);

    outer.classList.add("flex", "flex-wrap");

    window.addEventListener("resize", function () {
        courseResize(courses, outer);
    });

    drawerToggle.addEventListener("click", function () {
        drawerExpanded = !drawerExpanded;

        courseResize(courses, outer, true, drawerExpanded);
    });

    courses.forEach(function (course) {

        var teacherNames = [],
            courseHTML = "",
            metadata = {};

        var courseId = course.dataset.courseid;

        course.classList.remove("clearfix", "odd", "first", "even", "last");
        course.classList.add("p-0", "my-4");

        var link = course.querySelector(".coursename a");
        var title = link.textContent;
        var url = link.href;
        var image = course.querySelector(".courseimage img");
        var teachers = course.querySelectorAll(".teachers li a");

        var languageName = getMetadata(course.querySelector(".summary #language .name"));
        var languageValue = getMetadata(course.querySelector(".summary #language .value"));

        var keywordsName = getMetadata(course.querySelector(".summary #keywords .name"));
        var keywordsValue = getMetadata(course.querySelector(".summary #keywords .value"));

        var presenterName = getMetadata(course.querySelector(".summary #presenters .name"));
        var presenterValue = getMetadata(course.querySelector(".summary #presenters .value"));

        var estimatedTimeName = getMetadata(course.querySelector(".summary #estimatedtime .name"));
        var estimatedTimeValue = getMetadata(course.querySelector(".summary #estimatedtime .value"));

        var dateCreatedName = getMetadata(course.querySelector(".summary #datecreated .name"));
        var dateCreatedValue = getMetadata(course.querySelector(".summary #datecreated .value"));

        var dateUpdatedName = getMetadata(course.querySelector(".summary #dateupdated .name"));
        var dateUpdatedValue = getMetadata(course.querySelector(".summary #dateupdated .value"));

        var descriptionName = getMetadata(course.querySelector("#description"));
        var descriptionContent = getMetadata(course.querySelector("#description-content"));

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
            imageUrl = image.src;
        } else {
            imageUrl = "https://picsum.photos/300/300/?image=543";
        }

        if (teachers.length > 0) {
            teachers.forEach(function (teacher) {
                teacherNames.push(teacher.textContent);
            });
        }

        coursesArr.push({
            title: title,
            url: url,
            imageUrl: imageUrl,
            teacherNames: teacherNames,
            metadata: metadata
        });

        course.innerHTML = "";

        courseHTML = "\n            <div class=\"course-wrapper shadow flex mr-4 border border-solid border-b-0 border-r-0 border-l-0 border-grey-lighter\">\n        ";

        courseHTML += "\n          <img class=\"course-image w-64 h-64\" src=\"" + imageUrl + "\">\n        ";

        courseHTML += "\n          <div class=\"course-meta w-full\">\n            <div class=\"border border-solid border-b-0 border-t-0 border-l-0 border-grey-lighter p-4\">\n              <a href=\"" + url + "\">\n                <h3 class=\"mb-4\">" + title + "</h3>   \n              </a>     \n        ";

        if (Object.keys(metadata).length > 0) {
            Object.keys(metadata).forEach(function (key) {
                if (metadata[key].name !== "") {
                    courseHTML += "\n                      <p class=\"mb-0\">\n                        <strong>" + metadata[key].name + ": </strong> " + metadata[key].value + "\n                      </p>\n                    ";
                }
            });
        }

        courseHTML += "\n            </div>\n            <div class=\"p-4\">\n        ";

        if (descriptionName !== "") {
            courseHTML += "\n              <h4 class=\"mb-4\">" + descriptionName + "</h4>\n            ";

            if (descriptionContent.length > 250) {
                descriptionContent = "\n                  " + descriptionContent.substring(0, 251) + "<a href=\"" + url + "\" style=\"text-decoration: underline;\">...</a>\n                ";
            }

            courseHTML += "\n              <p class=\"mb-0\">" + descriptionContent + "</p>\n            ";
        }

        courseHTML += "\n                </div>\n              </div>\n            </div>\n        ";

        course.innerHTML = courseHTML;

        courseResize(courses, outer);
    });
}

var enrolPage = document.getElementById("page-enrol-index");

if (enrolPage) {
    var teacherNames = [],
        courseHTML = "",
        metadata = {};

    var courseBox = document.querySelector(".coursebox");

    var link = document.querySelector(".coursename a");
    var title = link.textContent;
    var url = link.href;

    var enrolForm = document.querySelector(".mform");
    enrolForm.parentNode.remove();

    var image = document.querySelector(".courseimage img");
    var teachers = document.querySelectorAll(".teachers li a");

    var languageName = getMetadata(document.querySelector(".summary #language .name"));
    var languageValue = getMetadata(document.querySelector(".summary #language .value"));

    var keywordsName = getMetadata(document.querySelector(".summary #keywords .name"));
    var keywordsValue = getMetadata(document.querySelector(".summary #keywords .value"));

    var presenterName = getMetadata(document.querySelector(".summary #presenters .name"));
    var presenterValue = getMetadata(document.querySelector(".summary #presenters .value"));

    var estimatedTimeName = getMetadata(document.querySelector(".summary #estimatedtime .name"));
    var estimatedTimeValue = getMetadata(document.querySelector(".summary #estimatedtime .value"));

    var dateCreatedName = getMetadata(document.querySelector(".summary #datecreated .name"));
    var dateCreatedValue = getMetadata(document.querySelector(".summary #datecreated .value"));

    var dateUpdatedName = getMetadata(document.querySelector(".summary #dateupdated .name"));
    var dateUpdatedValue = getMetadata(document.querySelector(".summary #dateupdated .value"));

    var descriptionName = getMetadata(document.querySelector("#description"));
    var descriptionContent = getMetadata(document.querySelector("#description-content"));

    var objectivesName = getMetadata(document.querySelector("#objectives"));
    var objectivesContent = getMetadata(document.querySelector("#objectives-content"));

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
        imageUrl = image.src;
    } else {
        imageUrl = "https://picsum.photos/300/300/?image=543";
    }

    if (teachers.length > 0) {
        teachers.forEach(function (teacher) {
            teacherNames.push(teacher.textContent);
        });
    }

    courseBox.innerHTML = "";

    courseHTML = "\n        <h2>\n            <a href=\"" + url + "\">" + title + "</a>\n        </h2>  \n    ";

    courseHTML += "\n        <div class=\"flex\">\n    ";

    courseHTML += "\n      <img class=\"w-64 h-64\" src=\"" + imageUrl + "\">\n    ";

    courseHTML += "\n      <div class=\"ml-4\">\n    ";

    if (Object.keys(metadata).length > 0) {
        Object.keys(metadata).forEach(function (key) {
            if (metadata[key].name !== "") {
                courseHTML += "\n                  <p class=\"mb-0\">\n                    <strong>" + metadata[key].name + ": </strong> " + metadata[key].value + "\n                  </p>\n                ";
            }
        });
    }

    courseHTML += "\n      </div>\n    ";

    courseHTML += "\n      <div class=\"ml-4\">\n    ";

    courseHTML += enrolForm.parentNode.innerHTML;

    enrolForm.querySelector("fieldset").remove();

    var submitBtn = enrolForm.querySelector("input[type='submit']");

    submitBtn.classList.add("btn-lg");

    courseHTML += "\n      </div>\n    ";

    courseHTML += "\n        </div>\n    ";

    courseHTML += "\n        <ul class=\"nav nav-tabs mt-8\" id=\"myTab\" role=\"tablist\">\n    ";

    if (descriptionContent !== "") {
        courseHTML += "\n            <li class=\"nav-item\">\n                <a class=\"nav-link\" id=\"description-tab\" data-toggle=\"tab\" href=\"#description\" role=\"tab\" aria-controls=\"description\" aria-selected=\"true\">" + descriptionName + "</a>\n              </li>\n        ";
    }

    courseHTML += "\n          <li class=\"nav-item\">\n            <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Profile</a>\n          </li>\n    ";

    courseHTML += "\n          <li class=\"nav-item\">\n            <a class=\"nav-link\" id=\"messages-tab\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\" aria-controls=\"messages\" aria-selected=\"false\">Messages</a>\n          </li>\n    ";

    courseHTML += "\n          <li class=\"nav-item\">\n            <a class=\"nav-link\" id=\"settings-tab\" data-toggle=\"tab\" href=\"#settings\" role=\"tab\" aria-controls=\"settings\" aria-selected=\"false\">Settings</a>\n          </li>\n    ";

    courseHTML += "\n        </ul>\n    ";

    if (descriptionContent !== "") {
        courseHTML += "\n            <div class=\"tab-content\">\n        ";

        if (descriptionContent !== "") {
            courseHTML += "\n                  <div class=\"tab-pane\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">" + descriptionContent + "</div>\n            ";
        }

        courseHTML += "\n              <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">...</div>\n        ";

        courseHTML += "\n              <div class=\"tab-pane\" id=\"messages\" role=\"tabpanel\" aria-labelledby=\"messages-tab\">...</div>\n        ";

        courseHTML += "\n              <div class=\"tab-pane\" id=\"settings\" role=\"tabpanel\" aria-labelledby=\"settings-tab\">...</div>\n        ";

        courseHTML += "\n            </div>\n        ";
    }

    courseBox.innerHTML = courseHTML;

    $('#myTab li:first-child a').tab('show');
}

/***/ })
/******/ ]);