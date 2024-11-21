console.log('loaded');

// get current page
const currentPage = window.location.href;

// get all side bar menu items
const items = document.querySelectorAll('.side-bar .items a');

items.forEach(item => {
    if (item.href === currentPage) {
        item.classList.add('active');
    } else {
        item.classList.add('non-active');
    }
});

