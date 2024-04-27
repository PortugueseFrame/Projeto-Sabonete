function toggleNavbar() {
    
    var miniNavbar = document.getElementById('miniNavbar');
    var navbarExpanded = document.getElementById('navbarExpanded');

    miniNavbar.style.display === 'none' ? miniNavbar.style.display = 'block' : miniNavbar.style.display = 'none';
    navbarExpanded.style.display === 'block' ? navbarExpanded.style.display = 'none' : navbarExpanded.style.display = 'block';

}

function scrollToBottom(timedelay=0) {
    var scrollId;
    var height = 0;
    var minScrollHeight = 100;
    scrollId = setInterval(function () {
        if (height <= document.body.scrollHeight) {
            window.scrollBy(0, minScrollHeight);
        }
        else {
            clearInterval(scrollId);
        }
        height += minScrollHeight;
    }, timedelay);           
}

function toggleContent() {
    var content = document.querySelector('.content');
    var button = document.querySelector('.button');

    content.classList.toggle("active");
    content.style.display = content.classList.contains("active") ? "block" : "none";
    button.textContent = content.classList.contains("active") ? "-" : "+";
}

function toggleContentFaq(contentClass, buttonClass) {
    var content = document.querySelector('.' + contentClass);
    var button = document.querySelector('.' + buttonClass);

    content.classList.toggle("active");
    content.style.display = content.classList.contains("active") ? "block" : "none";
    button.textContent = content.classList.contains("active") ? "-" : "+";
}

function toggleForm() {
    var form = document.getElementsByTagName('form')[0];

    if (form.style.display === 'none') {
        form.style.display = 'flex';
    } else {
        form.style.display = 'none';
    }
}

document.addEventListener('click', function(event) {
    var form = document.getElementsByTagName('form')[0];
    var target = event.target;
    if (target !== form && !form.contains(target) && target.tagName.toLowerCase() !== 'a') {
        form.style.display = 'none';
    }
});