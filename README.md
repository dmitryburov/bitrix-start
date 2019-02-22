# Blank-template для старта разработки 1С-Битрикс проекта

<br>

> **ВНИМАНИЕ! Данный Git-проект предназначен для меня самого, т.к. структура проекта и его архитектурная идеология - это моё видение**

Этот проект у меня очень и ждали, поэтому я целенаправленно его выкладываю, чтобы знающие меня или все желающие и разделяющие мой подход к разработке проекта 1С-Битрикс, имели доступ к самой актуальной и свежей заготовке.

<br>

## Описание структуры


`bitrix` &mdash; Это ядро 1С-Битрикс, его не следует учитывать в Git. Но, порой (особенно при многосайтовости и некоторых нюансах работы ядра) нам требуется размещение в стандартных каталогах Ядра. Важно правильно настроить `.gitignore` который будет ограничиваться в Ядре только вашими разделами и файлами

`bitrix\components\burov\` &ndash; 

`bitrix\gadgets\burov\` &ndash; 

`bitrix\modules\burov.*\` &ndash; 

`bitrix\tools\burov\` &ndash; 

<br>

`bitrix\tools\php_interface\` &ndash; 

`bitrix\tools\php_interface\classes\` &ndash; 

`bitrix\tools\php_interface\constant.php` &ndash; 

`bitrix\tools\php_interface\cron_events.php` &ndash; 

`bitrix\tools\php_interface\handlers.php` &ndash; 

`bitrix\tools\php_interface\site_closed.php` &ndash; 

`bitrix\tools\php_interface\this_site_support.php` &ndash; 


---

`local` &mdash; Основная папака для всей разработки в рамках сайта 1С-Битрикс (не всего проекта!). В ней находится большинство файлов относящихся к шаблону, модулям и компонентам (если они строго относятся к текущему сайту (при многосайтовости), а так же подключение вспомогательных классов и прочих наработок)

`local\components\` &ndash; 


`local\modules\` &ndash; 

<br>

`local\php_interface\` &ndash; 


`local\php_interface\classes\` &ndash; 


`local\php_interface\init.php` &ndash; 


`local\php_interface\site_constant.php` &ndash; 


`local\php_interface\site_handlers.php` &ndash; 

<br>

`local\templates\` &ndash; Аналогичная папка шаблонов в Ядре (`bitrix/templates/`). Важно знать, что используюя папку шаблонов в `local/templates`, вы можете использовать их в рамках текущего сайта (s1 например)

`local\templates\*\components\` &ndash; 

`local\templates\*\css\` &ndash; 

`local\templates\*\fonts\` &ndash; 

`local\templates\*\images\` &ndash; 

`local\templates\*\js\` &ndash; 

`local\templates\*\lang\` &ndash; 

`local\templates\*\lib\` &ndash; 

`local\templates\*\scss\` &ndash; 

`local\templates\*\descriptions.php` &ndash; 

`local\templates\*\footer.php` &ndash; 

`local\templates\*\header.php` &ndash; 

---

`.ginignore` &ndash; Игнор-файл на проект. Обратите внимание на условия обхода Ядра 1С-Битрикс

`.htaccess` &ndash; Внутри файла есть немного полезных правил. Это самый обычный htaccess, ничего сверхъестественного =)

`404.php` &ndash; Обработка 404 страницы - важная вещь для удержания пользователя, пришедшего на эту страницу. 

`robots.txt` &ndash; Как правило сайт, который в разработке нужно закрыть от посиковых машин. Этот файл запрещает к индексу весь сайт.



<br>

## Структура списком

- :file_folder: **bitrix**
    - :file_folder: components \ burov
    - :file_folder: gadgets \ burov
    - :file_folder: modules \ burov.*
    - :file_folder: php_interface
        - :file_folder: classess
        - constants.php
        - cron_events.php
        - handlers.php
        - site_closed.php
        - this_site_support.php
    - :file_folder: tools \ burov 
- :file_folder: **local**
    - :file_folder: components
    - :file_folder: modules
    - :file_folder: php_interface
        - :file_folder: classess
            - init.php
            - site_constants.php
            - site_handlers.php
    - :file_folder: templates
        - :file_folder: default
            - :file_folder: components
            - :file_folder: css
            - :file_folder: fonts
            - :file_folder: images
            - :file_folder: js
            - :file_folder: lang
            - :file_folder: lib
            - :file_folder: scss
            - description.php
            - footer.php
            - header.php
- .gintignore
- .htaccess
- 404.php
- robots.txt