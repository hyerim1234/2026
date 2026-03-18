const containerBox = document.querySelector('.container');
let imgBox = document.querySelector('.imgs');
let items = document.querySelectorAll('.imgbox');

const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

let currentIdx = 0;


//무한 루프 슬라이드를 위하여 1번 슬라이드와 3번 슬라이드 복사본 생성하여 변수에 할당

// cloneNode(true) : 선택한 요소의 복제본을 생성. true를 지정하여 요소의 자식, 후손까지 복제한다.

let firstClone = items[0].cloneNode(true);
let lastClone = items[items.length - 1].cloneNode(true);

// imgbox에 복제본 두 개 추가
// appendChild : 부모의 마지막 자식 뒤에 추가
// insertBefore(추가요소명, 위치) : 지정한 위치 앞에 요소 추가

imgBox.appendChild(firstClone);
imgBox.insertBefore(lastClone, items[0]);

let itemsClone = document.querySelectorAll('.imgbox');

// console.log(itemsClone); -> 5

// imgbox 이미지의 개수 만큼 가로로 배치
for (i = 0; i < itemsClone.length; i++) {
    itemsClone[i].style.left = i * 100 + '%';
}

//pager 생성
let pagerBox = document.querySelector('.pager-Box');

for (i = 0; i < itemsClone.length; i++) {
    let newBtn = document.createElement('div');
    newBtn.classList.add('pager');
    pagerBox.appendChild(newBtn);
}

let pagerBtn = document.querySelectorAll('.pager');
pagerBtn[0].classList.add('active');

// 다음 버튼을 클릭했을 때 슬라이드가 오른쪽으로 이동되는 이벤트
nextBtn.addEventListener('click', function () {
    if (currentIdx < itemsClone.length - 1) {
        gotoSlide(currentIdx + 1);
    }

    if (currentIdx === itemsClone.length - 1) {
        setTimeout(function () {
            gotoSlide(1);
            imgBox.style.transition = 'none';
        }, 500);
    }

       updateBtn();
});


// 이전 버튼을 클릭했을 때 슬라이드가 왼쪽으로 이동되는 이벤트
prevBtn.addEventListener('click', function () {
    if (currentIdx > 0) {
        gotoSlide(currentIdx - 1);
    }

    if (currentIdx === 0) {
        setTimeout(function () {
            gotoSlide(itemsClone.length - 2);
            imgBox.style.transition = 'none';
        }, 500);
    }

       updateBtn();

})

//슬라이드 이동 함수
function gotoSlide(idx) {
    imgBox.style.left = -100 * idx + '%';
    imgBox.style.transition = '0.5s'
    currentIdx = idx;

    for (i = 0; i < itemsClone.length; i++) {
        pagerBtn[i].classList.remove('active');
    }
        pagerBtn[idx].classList.add('active');

    if(currentIdx === itemsClone.length - 1){
        pagerBtn[1].classList.add('active');
        pagerBtn[idx].classList.remove('active');
    } 

    //  if(마지막 슬라이드 일떄){
    //      두번째 슬라이드의 페이저에 스타일을 적용
    //      현재 슬라이드의 페이저는 스타일 제거
    // }
}

//슬라이드 버튼이 마지막 또는 처음 슬라이드일 때 투명도 적용
function updateBtn(idx){
    if(currentIdx === itemsClone.length-2){
        nextBtn.style.opacity = '0.1';
    } else {
        nextBtn.style.opacity = '1';
    }

    if(currentIdx === 1){
        prevBtn.style.opacity = '0.1';
    } else {
        prevBtn.style.opacity = '1';
    }
}

// auto slide 시작
// setInterval(할일, 시간) >> 지정한 시간마다 할일을 반복시켜주는 함수
// setInterval을 특정 이벤트에 멈추게 할려면 변수에 할당한다.
// let 변수명 = setInterval(할일, 시간);
// clearInterval(변수명);
// 변수명 = setInterval(할일, 시간); >> 오토슬라이드 재실행
// 오토슬라이드 함수 생성 > 변수 선언 > setInterval 함수를 할당 > mouseover 이벤트에서 setInterval 함수 실행 > mouseout 이벤트에서 setInterval 함수 멈춤

// 오토슬라이드 함수 생성
let a = 0;
function autoSlide(){
    if(a < itemsClone.length - 1){
    gotoSlide(a+1);
    a++;
    } else{
        a = 1;
        gotoSlide(a);
        imgBox.style.transition = 'none';
    }
}

let auto = setInterval(autoSlide, 2000);

imgBox.addEventListener('mouseover', function(){
    clearInterval(auto);
})

nextBtn.addEventListener('mouseover',function(){
    clearInterval(auto);
})

prevBtn.addEventListener('mouseover', function(){
    clearInterval(auto);
})

imgBox.addEventListener('mouseout', function(){
    auto = setInterval(autoSlide, 2000);
})

nextBtn.addEventListener('mouseout', function(){
    auto = setInterval(autoSlide, 2000);
})

prevBtn.addEventListener('mouseout', function(){
    auto = setInterval(autoSlide, 2000);
})

// 배열 변수, forEach(function(item, index){반복할 일}) >> forEach 문법
// forEach문의 특징 : 순서대로가 아니라 선택한 item과 index의 값을 리턴함.
// pager를 클릭했을 때 해당 슬라이드로 이동

pagerBtn.forEach(function(item, index){
    item.addEventListener('click', function(){
        gotoSlide(index);
    })
})