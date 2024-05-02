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

document.querySelectorAll('.buttonToggle').forEach(function(button) {
    button.addEventListener('click', function() {
        var contentToggle = this.closest('.itemGroup').querySelector('.contentToggle');
        var allContentToggles = document.querySelectorAll('.contentToggle');

        allContentToggles.forEach(function(toggle) {
            if (toggle !== contentToggle && toggle.classList.contains("active")) {
                toggle.classList.remove("active");
                toggle.style.display = "none";
                var correspondingButton = toggle.closest('.itemGroup').querySelector('.buttonToggle');
                correspondingButton.textContent = "+";
            }
        });
        
        if (contentToggle) {
            contentToggle.classList.toggle("active");
            contentToggle.style.display = contentToggle.classList.contains("active") ? "block" : "none";
            this.textContent = contentToggle.classList.contains("active") ? "-" : "+";
        }
    });
});



function toggleForm() {
    var form = document.getElementsByTagName('form')[0];

    form.style.display === "none" ? form.style.display = 'flex' : form.style.display = 'none';
}

document.addEventListener('click', function(event) {
    var form = document.getElementsByTagName('form')[0];
    var target = event.target;
    if (target !== form && !form.contains(target) && target.tagName.toLowerCase() !== 'a') {
        form.style.display = 'none';
    }
});