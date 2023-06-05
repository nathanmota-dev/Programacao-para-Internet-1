function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "assets/img/menu_white_36dp.svg";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "assets/img/close_white_36dp.svg";
    }
}

//formulario
const form = document.getElementById('formulario');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const phoneRegex = /^(\+?55\s?)?(\()?([1-9]{2})\)?\s?9?\d{4}-?\d{4}$/;

function validarFormulario() {
    nameValidate();
    emailValidate();
    phoneValidade();
    subjectValidate();
    messageValidate();
    genderValidate();
    interestsValidate();
}

function setError(index) {
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function removeError(index) {
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function nameValidate() {
    if (campos[0].value.length < 3) {
        setError(0);
    }
    else {
        removeError(0);
    }
}

function emailValidate() {
    if (!emailRegex.test(campos[1].value)) {
        setError(1);
    }
    else {
        removeError(1);
    }
}

function phoneValidade() {
    if (!phoneRegex.test(campos[2].value)) {
        setError(2);
    }
    else {
        removeError(2);
    }
}

function subjectValidate() {
    if (campos[3].value.length < 1) {
        setError(3);
    }
    else {
        removeError(3);
    }
}

function messageValidate() {
    if (campos[4].value.length < 1) {
        setError(4);
    }
    else {
        removeError(4);
    }
}

function genderValidate() {
    const genderSelected = document.querySelector('input[type="radio"][name="gender"]:checked');
    const genderError = document.getElementById('gender-error');
    if (!genderSelected) {
        genderError.style.display = 'block';
    } else {
        genderError.style.display = 'none';
    }
}

function interestsValidate() {
    const interestsSelected = document.querySelector('input[type="checkbox"][name="interests"]:checked');
    const interestsError = document.getElementById('interests-error');
    if (!interestsSelected) {
        interestsError.style.display = 'block';
    } else {
        interestsError.style.display = 'none';
    }
}

function clearForm() {
    form.reset();
    for (let i = 0; i < campos.length; i++) {
        removeError(i);
    }
}

function editForm() {
    $('#myModal').modal('hide');
}

function executeModal() {
    if (submitForm()) {
        alert("teste");
        showModal();
    }
}

function submitForm() {
    validarFormulario();
    const errorMessage = document.querySelector('.modal-body .span-required');
    if (document.querySelectorAll('.span-required[style*="block"]').length === 0) {
        errorMessage.style.display = 'none';
        return true;
    } else {
        errorMessage.style.display = 'block';
        return false;
    }
}

function showModal() {
    $('#myModal').modal('show');
    displayFormData();
}

function executeModal() {
    if (submitForm()) {
        showModal();
    }
}

function displayFormData() {
    const modalBody = document.querySelector('.modal-body');
    const formData = {
        Nome: campos[0].value,
        Email: campos[1].value,
        Celular: campos[2].value,
        Assunto: campos[3].value,
        Menssagem: campos[4].value,
        Genero: document.querySelector('input[type="radio"][name="gender"]:checked').value,
        Interesses: getSelectedInterests()
    };

    let formInfo = '<ul>';
    for (const [key, value] of Object.entries(formData)) {
        formInfo += `<li><strong>${key}:</strong> ${value}</li>`;
    }
    formInfo += '</ul>';

    modalBody.innerHTML = formInfo;
}

function getSelectedInterests() {
    const interestsSelected = document.querySelectorAll('input[type="checkbox"][name="interests"]:checked');
    const selectedInterests = Array.from(interestsSelected).map(interest => interest.value);
    return selectedInterests.join(', ');
}

/*function passwordValidate() {
    if (campos[3].value.length < 8) {
        setError(3);
    }
    else {
        removeError(3);
        comparePassword();
    }
}

function comparePassword() {
    if (campos[3].value == campos[4].value && campos[3].value.length >= 8) {
        removeError(4);
    }
    else {
        setError(3);
    }
}*/


