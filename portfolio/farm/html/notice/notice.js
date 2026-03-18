//tab 동작
const btn1 = document.getElementById('tabBtn1');
const btn2 = document.getElementById('tabBtn2');
const btn3 = document.getElementById('tabBtn3')

const tab1 = document.getElementById('tab1');
const tab2 = document.getElementById('tab2');
const tab3 = document.getElementById('tab3');


btn1.addEventListener('click', (e) => {
    e.preventDefault();
    btn1.classList.add('active');
    btn2.classList.remove('active');

    tab1.classList.remove('hidden');
    tab2.classList.add('hidden');
    tab3.classList.add('hidden')
});

btn2.addEventListener('click', (e) => {
    e.preventDefault();
    btn2.classList.add('active');
    btn1.classList.remove('active');
    btn3.classList.remove('active');
    tab2.classList.remove('hidden');
    tab1.classList.add('hidden');
    tab3.classList.add('hidden')
});


btn3.addEventListener('click', (e) => {
    e.preventDefault();
    
    btn3.classList.add('active')
    btn2.classList.remove('active');
    btn1.classList.remove('active');

    tab2.classList.add('hidden');
    tab1.classList.add('hidden');
    tab3.classList.remove('hidden');
});