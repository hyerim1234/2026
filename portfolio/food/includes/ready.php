<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>준비중입니다.</title>
</head>
<style>
  body {
    font-family: sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .maintenance-page {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
  }

  .loading-image {
    width: 50px;
    height: 50px;
  }
</style>

<body>
  <div class="maintenance-page">
    <div class="content">
      <h1>준비 중입니다</h1>
      <p>잠시만 기다려 주시면 곧 서비스가 재개될 예정입니다.</p>
      <img src="./../../../img/Ai loading model.gif" alt="로딩 중" class="loading-image">
      <div id="countdown"></div>
      <a href="./../pages/main.php"></a>
    </div>
  </div>
</body>

<script>
  const countdownElement = document.getElementById('countdown');
  let timeLeft = 5; // 예시: 10초 후 서비스 재개

  function updateCountdown() {
    countdownElement.textContent = `재개까지 ${timeLeft}초 남았습니다.`;
    if (timeLeft === 0) {
      clearInterval(countdownInterval);
      // 서비스 재개 로직 추가
      // 메인 페이지로 이동
      window.location.href='./../pages/main.php'
    }
    timeLeft--;
  }

  const countdownInterval = setInterval(updateCountdown, 1000);
</script>

</html>