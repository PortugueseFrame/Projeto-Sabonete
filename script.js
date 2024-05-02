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
        var msgConfirm = document.getElementById('formMsgConfirm');
        var msgDeny = document.getElementById('formMsgDeny');
        msgConfirm.style.display = 'none';
        msgDeny.style.display = 'none';
    }

});


function sendForm() {
    var nameForm = document.querySelector('input[name="nameForm"]').value;
    var emailForm = document.querySelector('input[name="emailForm"]').value;
    var telForm = document.querySelector('input[name="telForm"]').value;
    var msgForm = document.querySelector('textarea[name="msgForm"]').value;

    if (nameForm === '' || emailForm === '' || telForm === '' || msgForm === '') {
        alert('Por favor, preencha todos os campos.');
        return false;
    }

    fetch('http://localhost/Projeto-Sabonete/formSubmit.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            nameForm: nameForm,
            emailForm: emailForm,
            telForm: telForm,
            msgForm: msgForm,
        }),
    })
    .then(response => {
        if (response.ok) {
            console.log('Success in Data Upload');
            document.getElementById('formMsgConfirm').style.display = 'block';

            document.querySelector('input[name="nameForm"]').value = '';
            document.querySelector('input[name="emailForm"]').value = '';
            document.querySelector('input[name="telForm"]').value = '';
            document.querySelector('textarea[name="msgForm"]').value = '';

        } else {
            console.log('Error in Data Upload');
            document.getElementById('formMsgDeny').style.display = 'block';

            document.querySelector('input[name="nameForm"]').value = '';
            document.querySelector('input[name="emailForm"]').value = '';
            document.querySelector('input[name="telForm"]').value = '';
            document.querySelector('textarea[name="msgForm"]').value = '';

        }
    })
    .catch(error => {
        console.error('Error in Fetch API', error);
    });
}