1. Создать mysql БД с таблицами:

Таблица магазинов: id, имя, url, время работы.
Таблица товаров: id, id магазина, название, описание (в виде html), цена.

Набить их случайными данными.

2. Написать приложение на php, выгружающее товары магазинов в xml-файл приведенной ниже структуры.

Надо выгрузить товары магазинов, которые открыты в текущий момент времени, удалить из описания html-теги, сохранить в xml-файл.
Обрабатывать товары в многопоточном режимел. Можно использовать сторонние бибиотеки.


Структура XML:

<shop id="1">
    <name>Мой магазин</name>
    <url>ololo.shop.by</url>
    <working_time>
      <open>10:00</open>
      <close>23:00</close>
    </working_time>
    <offers>
      <item id="111">
        <name>имя товара</name>
        <description>описание без html тегов</description>
        <price>5.80</price>
      </item>
      <item id="222">
      ...
      </item>
      ...
    </offers>
</shop>
<shop id="2">
...
</shop>
...

3. От вас дамп БД.

Файл(ы) с кодом.
