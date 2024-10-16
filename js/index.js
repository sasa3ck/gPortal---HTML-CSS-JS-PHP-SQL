function checkEmail() {
  let email = document.querySelector('#emailField').value;
  if (!email.includes('@')) alert('There is no @ symbol');
  else if (!email.includes('.')) alert('There is no . symbol');
  else  alert('Ок!');
}

/* Burger menu */
document.addEventListener('DOMContentLoaded', function() {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('nav');

  burger.addEventListener('click', function() {
    nav.classList.toggle('active');
    burger.classList.toggle('active');
  });
});
