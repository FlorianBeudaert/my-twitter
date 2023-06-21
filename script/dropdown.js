// 
const dropdownBtn = document.querySelector('.dropdownBtn');
const menu = document.querySelector('#menu');
// console.log(dropdownBtn);

dropdownBtn.addEventListener('click', function () {
// alert('bonjour');
console.log(menu);
menu.classList.remove('hidden')
  menu.classList.add('block');
// console.log(menu);
});

