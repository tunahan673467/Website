<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kullanıcıdan mail ve şifre post edildiğinde çalışacak kod

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Girilen mailin "@" içerdiğini kontrol et
    if (strpos($email, '@') !== false) {
        // Koşul sağlanıyorsa, giriş başarılı mesajı verin ve işlemlerinizi burada gerçekleştirin
        echo "Giriş başarılı!";
		echo '<meta http-equiv="refresh" content="4; url=anasayfa.html"/>';
        
        // Örneğin, yönlendirme yapabilirsiniz:
        // header("Location: dashboard.php");
        // exit;
    } else {
        // Koşul sağlanmıyorsa, yanlış giriş mesajı verin ve kullanıcıyı tekrar denemesi için login sayfasına yönlendirin
        echo "Yanlış giriş yaptınız! Lütfen tekrar deneyin.";
        // header("Location: login.php");
        // exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>

<body>
    <h2>Giriş Yap</h2>
    <form method="POST" action="login.php">
       <div> <label for="email">E-posta:</label>
        <input type="email" name="email" id="email" required>
</div>
        <label for="password">Şifre:</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>