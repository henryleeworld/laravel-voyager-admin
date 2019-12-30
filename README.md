# Laravel 6 領航者管理

引入 tcg 的 voyager 套件來擴增很輕易的為你的應用程式建構 CRUD （建立、讀取、更新、刪除）功能，建構不同的選單，以及管理多媒體檔案。在管理介面的資料庫裏面可以直接用來管理資料庫及資料表，BREAD （瀏覽、讀取、編輯、建立、刪除）功能則是可以很用非常便利的方式，直接設定資料表欄位可以出現在在瀏覽、編輯、添加、刪除或者全部都看到的，全部都可以設定，尤其他的功能屬性是什麼，可以是文字欄位、選單、圖片、檔案、等，除了這些，還有可選細項可以處理。

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
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以登入經由 `/admin/login` 來進行登入，預社的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/pFVrgf1.png)
> 登入帳戶後，你可以查看相關設定

![](https://i.imgur.com/f8BM7Ys.png)
> 在先天設計上，就是用來專注於撰寫文章，建議安裝 Google Analytics 作分析

![](https://i.imgur.com/vXbVC3H.png)
> 一般來說，使用者會依據資訊的主要內容決定要點閱的搜尋結果，所以請盡量在網頁上提供高品質的標題
