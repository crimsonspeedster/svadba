const form = document.getElementById('application-form');
const popup = document.getElementById('popup');
const closeBtn = document.querySelector('.close');

// Валідація під час введення
document.getElementById('name').addEventListener('input', function () {
  if (this.value.trim().length >= 2) {
    clearError(this);
  }
});

document.getElementById('phone').addEventListener('input', function () {
  if (validatePhone(this.value)) {
    clearError(this);
  }
});

document.getElementById('email').addEventListener('input', function () {
  if (this.value.trim() === '' || validateEmail(this.value)) {
    clearError(this);
  }
});

document.getElementById('data-agreement').addEventListener('change', function () {
  if (this.checked) {
    clearError(this);
  }
});

// Закриття попапу

// Функція для перевірки телефону (міжнародний формат)
function validatePhone(input) {
  const phoneRegex = /^\+?[0-9]{6,15}$/; // Дозволяє `+` і від 6 до 15 цифр
  return phoneRegex.test(input);
}

// Функція для перевірки e-mail
function validateEmail(input) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(input);
}

// Функція для очищення помилки
function clearError(element) {
  const errorText = element.nextElementSibling;
  if (errorText && errorText.classList.contains('error')) {
    errorText.remove();
    element.style.borderBottom = '2px solid black';
  }
}

// Функція для очищення всіх помилок
function clearErrors() {
  document.querySelectorAll('.error').forEach(el => el.remove());
  document.querySelectorAll('input').forEach(el => el.style.borderBottom = '2px solid black');
}

// Функція для показу помилки
function showError(element, message) {
  let errorText = element.nextElementSibling;
  if (!errorText || !errorText.classList.contains('error')) {
    errorText = document.createElement('small');
    errorText.className = 'error';
    errorText.style.color = 'red';
    errorText.innerText = message;
    element.parentNode.insertBefore(errorText, element.nextSibling);
    element.style.borderBottom = '2px solid red';
  }
}

