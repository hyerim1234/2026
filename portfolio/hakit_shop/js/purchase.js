/*
탭메뉴를 클릭하면 관련 내용이 나타나고
하이라이트 배경이 활성화된 메뉴위치로 이동합니다.
*/

//변수 지정
const tabMenu = document.querySelectorAll('.tab-menu li');
const tabContent = document.querySelectorAll('#tab-content > div');
const highLight = document.querySelector('.highlight');

//showContent 함수
function showContent(num) {
    tabContent.forEach(function (item) {
        item.style.display = 'none';
    });
    tabContent[num].style.display = 'block';
}
//첫번째 내용 활성화
showContent(0);

//메뉴 클릭 이벤트
tabMenu.forEach(function (item, idx) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        showContent(idx);
        moveHightlight(idx); //추가	
    });
});

//moveHightlight 함수
function moveHightlight(num) {
    const newLeft = tabMenu[num].offsetLeft;
    const newWidth = tabMenu[num].offsetWidth;
    console.log(newLeft, newWidth);
    highLight.style.left = newLeft + 'px';
    highLight.style.width = newWidth + 'px';
}




// 옵션 색상 클릭했을때 선택사항 보여주기
let selectbox=document.querySelector('#selectbox');
let option=document.querySelector('#selectbox').options;
console.log(option)
let prdTotal=document.querySelectorAll('.prd-total');
console.log(prdTotal)
let xBtn=document.querySelectorAll('.fa-xmark');
console.log(xBtn)

for(i=0; i<prdTotal.length; i++){
    prdTotal[i].style.opacity=0;
}
selectbox.addEventListener('change',function(e){
    let choose=e.currentTarget.selectedIndex;
    prdTotal[choose-2].style.opacity=1
})
xBtn.forEach(function(item,idx){
    xBtn[idx].addEventListener('click',function(){
        prdTotal[idx].style.opacity=0;
    })
})


//x버튼 클릭했을때 선택한 옵션 삭제하기
