# Laravel 10 懶惰且嚴格的方法進行設定

引入 tomasvotruba 的 punchcard 套件來擴增懶惰且嚴格的方法進行設定，可以在你的應用程式任何地方輕易地存取你的設定值。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/config` 來進行應用程式名稱設定取得。

## 畫面截圖
![](https://i.imgur.com/cjy3Rg8.png)
> 根據應用程式所執行的環境給予適合的設定是有助於開發的
