# PHP ile Koeri Boun'dan Türkiye'deki Son Depremler Verilerini Anlık Olarak Çekme

Bu proje, [Kandilli Rasathanesi ve Deprem Araştırma Enstitüsü](http://www.koeri.boun.edu.tr/) tarafından yayınlanan Türkiye'deki son depremler verilerini anlık olarak çekmek için PHP kullanımını göstermektedir. 

Veriler, `file_get_contents()` fonksiyonu kullanılarak Koeri Boun web sitesinden alınmaktadır. Bu veriler daha sonra JSON formatına dönüştürülmekte ve son olarak güncel depremler listesi ile ekrana yazdırılmaktadır.

## Kullanım

- `index.php` dosyası, son depremler verilerinin ekrana yazdırılması için kullanılır.
- `styles.css` dosyası, HTML sayfasının stilini kontrol eder.

## Gereksinimler

- PHP 5.6 veya üzeri

## Kurulum

1. Projeyi klonlayın veya ZIP dosyası olarak indirin.
2. Dosyaları bir web sunucusuna yükleyin.
3. `index.php` dosyasını web tarayıcısı üzerinden açın.

## Katkı

Geliştirmeye katkıda bulunmak isterseniz, lütfen bir "pull request" gönderin.

## Lisans

Bu proje, MIT lisansı altında lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakınız.
