# Kang Hyerim Portfolio

강혜림의 포트폴리오 웹사이트 프로젝트입니다.  
메인 포트폴리오 랜딩 페이지와 개별 작업 페이지들을 함께 포함하고 있습니다.

## Structure

- `index.html`
  메인 포트폴리오 페이지
- `styles.css`
  메인 스타일시트
- `script.js`
  인터랙션 및 동작 스크립트
- `portfolio/`
  개별 프로젝트 페이지 및 리소스
- `pdf/resume.pdf`
  이력서 다운로드 파일

## Included Sections

- Hero
- 소개
- 케이스 스터디
- 스킬 & 툴
- 디자인 철학
- 프로젝트 로그
- 실무 경험
- 푸터

## Run Locally

Herd 또는 로컬 정적 서버 환경에서 실행할 수 있습니다.

예시:

- Herd: `https://2026.test`

## GitHub Upload

원격 저장소 연결 후 아래 순서로 업로드할 수 있습니다.

```bash
git add .
git commit -m "Initial portfolio site"
git remote add origin <YOUR_GITHUB_REPOSITORY_URL>
git push -u origin main
```

이미 `origin` 이 등록되어 있다면 `git remote add origin ...` 대신 아래를 사용하세요.

```bash
git remote set-url origin <YOUR_GITHUB_REPOSITORY_URL>
git push -u origin main
```
