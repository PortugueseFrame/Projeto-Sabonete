function toggleNavbarOpen() {

    document.getElementById('miniNavbar').style.display = 'none';
    document.getElementById('navbarExpanded').style.display = 'block';

}

function toggleNavbarClose() {

    document.getElementById('miniNavbar').style.display = 'block';
    document.getElementById('navbarExpanded').style.display = 'none';

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

function toggleContentFaq1() {
    var content = document.querySelector('.contentFaq1');
    var button = document.querySelector('.buttonFaq1');

    content.classList.toggle("active");
    content.style.display = content.classList.contains("active") ? "block" : "none";
    button.textContent = content.classList.contains("active") ? "-" : "+";
}

function toggleContentFaq2() {
    var content = document.querySelector('.contentFaq2');
    var button = document.querySelector('.buttonFaq2');

    content.classList.toggle("active");
    content.style.display = content.classList.contains("active") ? "block" : "none";
    button.textContent = content.classList.contains("active") ? "-" : "+";
}