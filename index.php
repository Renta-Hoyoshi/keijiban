<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link rel="stylesheet"  href="style.css">
<title>4each掲示板</title>
</head>
<body>
  <?php
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
  $stmt = $pdo->query("select * from 4each_keijiban");

  
  ?>
<header>
      <div class="logo">
        <img src="./4eachblog_logo.jpg">
      </div>
      <div class="header_member">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
      </div>
  </header>

  <main>
      <div class="left">
          <h1>プログラミングに役立つ掲示板</h1>
          
          <div class="input_form">
              <h2>入力フォーム</h2>
              <form action="insert.php" method="post">
                  <div>
                      <ul>
                          <li>ハンドルネーム</li>
                          <li><input type="text" class="text" name="handlename" ></li>
                      </ul>
                      
                  </div>
                  <div>
                      <ul>
                          <li>タイトル</li>
                          <li><input type="text" class="text" name="title" ></li>
                      </ul>
                      
                  </div>
                  <div>
                      <ul>
                          <li>コメント</li>
                          <li><textarea name="comments"  cols="30%" rows="5%"></textarea></li>
                      </ul>
                      
                  </div>
                  <div>
                      <input type="submit" class="button" value="送信する">
                  </div>  
                </form>  
                  

                
          </div>
          
          
          <?php
                    foreach($stmt as $row) {
                      echo "<div class='news'>";
                      echo  "<h3>".$row['title']."</h3>";
                      echo  "<div class='news_contents'>";
                      echo  $row['comments'];
                      echo  "</div>";
                      echo  "<div class='handlename'>投稿者:".$row['handlename']."</div>";
                      echo "</div>";
                    }
          ?>　　　
      </div>
      
      <div class="right">
        <div class="right_container">  
            <div class="article">
                <h1>人気の記事</h1>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタTOP5</li>
                    <li>HTMLの基礎</li>
                </ul>
            </div>
            <div class="link">
              <h1>オススメリンク</h1>
              <ul>
                  <li>インターノウス株式会社</li>
                  <li>XAMPPのダウンロード</li>
                  <li>Eclipseのダウンロード</li>
                  <li>Bracketsのダウンロード</li>
              </ul>
            </div>
            <div class="category">
              <h1>カテゴリ</h1>
              <ul>
                  <li>HTML</li>
                  <li>PHP</li>
                  <li>MySQL</li>
                  <li>JavaScript</li>
              </ul>
      </div>
  </main>
  
  <footer>
      <p>copyright © internous | $each blog the which provides A to Z about programming</p>
  </footer>
</body>
</html>