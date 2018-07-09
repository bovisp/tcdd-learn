class CategoryMenu {
	constructor () {
		this.categories = document.querySelectorAll('.tcdd_tabs')
	}

	create () {
		var self = this
		
		l_forEach(self.categories, function(category) {
		    const categoryMenuItems = document.querySelectorAll('.tabs-menu div');

		    category.addEventListener('mouseover', function(e) {
		        let itemNumber = (e.target.id)[e.target.id.length - 1];

		        l_forEach(categoryMenuItems, function(item) {
		            item.style.display = 'none';
		        });

		        let activeItem = document.querySelector(`#menuItem-${itemNumber}`);

		        activeItem.style.display = 'block';
		    });
		});
	}
}

module.exports = { CategoryMenu }