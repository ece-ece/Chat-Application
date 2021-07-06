# epic_chat_application

Sadece websocketi çalıştırmak için :
Linuxta :

- php -q php-socket.php
- php -S 0.0.0.0:8000 index2.php

İlk komuttaki parameter quite anlamına gelir ve php socketi sessiz şekilde çalıştırır. İlk komuttan sonra terminaliniz donmuş gibi olacak o yüzden ya 2. bir 
terminal kullanın ya da php -q php-socket.php& yazın. & işareti arka planda çalışmasını sağlar.

İkinci komut 8000 portunda index2.php yi çalıştırmanızı sağlar.

## Yapılacaklar

- is typing karşı taraf için de gözükmeli. (YUNUS)
- Websocket ve login sayfası birleştirilecekti onu yaptım ama kullanıcının ilk başta verdiğim komutları elle girmesi gerekiyor. Ama elle girmesini istemiyoruz o
yüzden arka planda o komutları çalıştıracak bir şey yazılmalı (HAKAN)
- Database'e yeni columns eklemek (cookie, time, kim, kimden, mesaj uzunluğu vb.). (ANYONE)

## Yapılsa iyi olur

- Login tuşuna basınca da direkt giriş yapıyor. Login olmadan giriş yapmasın. (ANYONE)
- Logine basmadan direkt chate linkten de geçebiliyor. (ANYONE)
- Anlık kaç kullanıcı aktif (ANYONE)
- Şifre ve kullanıcı adı uzunluğuna sınır (ANYONE)
- Databasede şifreyi hash ile tutmak (ANYONE)
- Emoji (ANYONE)
- Mesajları şifrele (ANYONE)
- File Upload


## Yapılanlar

- Login & Register pages.
- Register sayfasında logine yönlendirme butonu da olsun
- Websocket
- Daha insancıl css
- Chat ekranında tekrar name girme kısmı kaldırılacak
- Database bağlantısı
- dosya isimleri karmaşık oldu el atmak lazım
- is typing yazısında $name de olacak.

