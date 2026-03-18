//nav 메뉴에 mouseover 시 navbar 배경 흰색으로 변경, 텍스트 검정색으로 변경
const header = document.getElementById('mainHeader');
const navBar = document.getElementById('navBar');
const nav = document.getElementById('mainNav');
const links = document.querySelectorAll('.header-link');
const logoWhite = document.getElementById('logoWhite');
const logoBlack = document.getElementById('logoBlack');

function setHeaderActive(active) {

  // 마우스 올렸을때 활성화
  if (active) {
    header.classList.remove('backdrop-blur-lg', 'bg-white/0');
    header.classList.add('bg-white/100', 'cursor-pointer');
    nav.classList.remove('text-white');
    nav.classList.add('text-black');

    // 마우스가 벗어났을때 (비활성화)  
  } else {
    header.classList.remove('bg-white/100');
    header.classList.add('bg-white/0', 'backdrop-blur-lg');
    nav.classList.remove('text-black');
    nav.classList.add('text-white');
  }
}


navBar.addEventListener('mouseenter', () => setHeaderActive(true));
navBar.addEventListener('mouseleave', () => setHeaderActive(false));

setHeaderActive(false);

// 햄버거 메뉴 버튼 클릭시 사이드 메뉴 열기 / 닫기 
const menuhamBtn = document.getElementById('menuBtn');         // 햄버거 버튼(열기)
const sideHamMenu = document.getElementById('sideMenu');       // 전체 오버레이(메뉴+배경)
const closeMenu = document.getElementById('closeMenu');     // 닫기(X버튼)
const overlay = document.getElementById('overlay');         // 뒷배경(클릭시 닫힘)
const sidePanel = document.getElementById('sidePanel');     // 실제 오른쪽 슬라이드 패널(메뉴)

//사이드 메뉴 열기
menuhamBtn.addEventListener('click', () => {
  sideHamMenu.classList.remove('hidden');    // 전체 메뉴+배경 표시
  setTimeout(() => {
    sidePanel.classList.remove('translate-x-full');   // 실제 패널이 오른쪽→왼쪽으로 슬라이드
  }, 10);
});

//사이드 메뉴 닫기
function closeSideMenu() {
  sidePanel.classList.add('translate-x-full');
  setTimeout(() => {
    sideHamMenu.classList.add('hidden');
  }, 300);
}

closeMenu.addEventListener('click', closeSideMenu);
overlay.addEventListener('click', closeSideMenu);

window.addEventListener('keydown', (e) => {
  if (!sideHamMenu.classList.contains('hidden') && e.key === 'Escape') closeSideMenu();
});




 // 마우스 오버시 블러 효과
document.addEventListener('DOMContentLoaded', () => {
  const blur = document.getElementById('navBlur');
  document.querySelectorAll('#navBar .group').forEach(group => {
    group.addEventListener('mouseenter', () => blur.classList.add('show'));
    group.addEventListener('mouseleave', () => blur.classList.remove('show'));
  });
}); 

