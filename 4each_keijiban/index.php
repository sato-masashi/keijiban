<!DOCTYPE html>
<html lang="ja">
  
  <head>
    <meta charset="UTF-8">
    <title>4eachblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
  </head>
  
  <body>
    <img src="4eachblog_logo.jpg">
    
    <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
    
    <main>
      <div class="main-container">
        
        <div class="left">
          <h1>プログラミングに役立つ書籍</h1>
            <div class="lft_form">
              
                
                <form method="post" action="insert.php">
                    
                  <h3>入力フォーム</h3>
                  
                  <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                  </div>
                  
                  <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                  </div>
                  
                  <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="35" rows="7" name="comments"></textarea>
                  </div>
                  
                  <div>
                    <input type="submit" class="submit" value="投稿する">
                  </div>
              </form>
         
          </div>
          
            <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
            $stmt = $pdo->query("select * from 4each_keijiban");
            ?>
               
        <?php
            
        while($row = $stmt->fetch()){
                
            echo"<div class='kiji'>";
            echo"<h3>".$row['title']."</h3>";
            echo"<div class='contents'>";
            echo $row['comments'];
            echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
            echo"</div>";
            echo"</div>";
          }
          
        ?>
          
          
          
        </div>
      
      <div class="right">
        <ul>
          <h2 class="top">人気の記事</h2>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの基礎</li>
          
          <h2 class="middle">オススメリンク</h2>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        
          <h2 class="bottom">カテゴリ</h2>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
       
        </ul>
        
      </div> 
    </div>  
    </main>
    
    <footer>
      copyright internous | 4each blog is the one which provides A to Z about programming.
    
    </footer>
    
  </body>
</html>