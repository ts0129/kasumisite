<?php
    error_reporting(0);
    $k=$_POST["kakaku"];
    $db=mysqli_connect("localhost","root","","kimonodb");
    $sql="select * from kimonolist order by price ".$k;
    $kekka=mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&family=Shippori+Mincho:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
    <title>霞 -KASUMI- / 商品</title>
</head>
<body>
    <header class="shop-header-wrapper">
        <div class="h-wrapper">
            <div class="h-logo-wrapper"><a href="index.html"><img src="image/logo.jpeg" alt="" class="h-logo"></a></div>
            <div class="top-menu-wrapper">
                <ul>
                    <li><a href="">アイテム</a></li>
                    <li><a href="">コンテンツ</a></li>
                    <li><a href="">コーデ</a></li>
                    <li><a href="">お手入れ</a></li>
                    <li><a href="">ご利用案内</a></li>
                    <li><a href="">About us</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="shoplist-wrapper">
        <aside class="side-menu-wrapper">
            <div class="side-menu">
                <h2>商品一覧</h2>
                <ul>
                    <a href=""><li>フォーマル着物</li></a>
                    <a href=""><li>カジュアル着物</li></a>
                    <a href=""><li>アウター</li></a>
                    <a href=""><li>浴衣</li></a>
                    <a href=""><li>浴衣の帯</li></a>
                    <a href=""><li>浴衣コーディネート小物</li></a>
                    <a href=""><li>帯</li></a>
                    <a href=""><li>草履・バッグ</li></a>
                    <a href=""><li>着物コーディネート小物</li></a>
                    <a href=""><li>足袋</li></a>
                    <a href=""><li>着付け小物</li></a>
                    <a href=""><li>夏着物</li></a>
                    <a href=""><li>振袖</li></a>
                </ul>
            </div>
        </aside>
        <div class="goods-wrapper">
            <div class="goods-top-wrapper">
                <h2>フォーマル着物</h2>
                <form action="kimonodb.php" method="post">
                    <select name="kakaku" id="kakaku">
                        <option value="desc">価格が高い</option>
                        <option value="asc">価格が安い</option>
                    </select>
                    <input type="submit" value="並び替え" id="submit">
                </form>
            </div>
            <section class="shop-wrapper">
              <div class="kimono-list-wrapper">
                <?php while($row=mysqli_fetch_assoc($kekka)){ ?>
                  <div class="kimono-item-wrapper">
                    <div class="kimono-item">
                      <a href="kimonodb.php"><p class="kimono-image"><img src="image/<?php print($row["imgname"]); ?>"></p></a>
                    </div>
                    <h3><?php print($row["name"]); ?>　　<?php print($row["price"]); ?>円（税込）</h3>
                  </div>
                <?php } ?>
              </div>
            </section>
        </div>
    </section>
    <footer id="footer" class="outer-block footer">
    <div class="inner-block">
      <div class="cont">
        <div class="cont-item">
          <div class="nav">
            <div class="ttl"><a href="index.html"><span>トップ</span></a></div>
            <div class="ttl"><a href="">よくある質問</a></div>
            <div class="ttl"><a href="">お問い合わせ</a></div>
          </div>
        </div>
        <div class="cont-item">
          <div class="nav">
            <div class="ttl">
              コンテンツ
            </div>
            <ul>
              <li><a href="">取り組み</a></li>
            </ul>
            <div class="ttl">
              <span>着物情報</span>
            </div>
            <ul>
              <li>
                <a href="">着付け</a>
              </li>
              <li>
                <a href="">ケア・洗い</a>
              </li>
              <li><a href="">お直し・保管</a></li>
            </ul>
          </div>
        </div>
        <div class="cont-item">
          <div class="nav">
            <div class="ttl">会社情報</div>
            <ul>
              <li><a href="">霞-KASUMI-とは</a></li>
              <li><a href="">会社理念</a></li>
              <li><a href="">会社概要</a></li>
              <li><a href="">アクセス</a></li>
              <li><a href="">サステナビリティ</a></li>
            </ul>
            <div class="ttl"><span>ブログ</span></div>
            <ul>
              <li>
                <a href="">ブログ一覧</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="logo-wrapper">
          <img src="image/logo.jpeg" alt="" class="logo">
        </div>
      </div>
    </div>
    <div class="copyright">
      &copy;TSURUOKA. 2022
    </div>
  </footer>
</body>
</html>
