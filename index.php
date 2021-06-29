<!-- Теги PHP -->

<?php echo 'если вы хотите хранить код PHP в документах XHTML или XML, то используйте эти теги'; ?>

<!-- Вы можете использовать короткий 'echo'-тег чтобы  -->
<?= 'напечатать эту строку' ?>.
<!-- Этот тег эквивалентен такому коду -->
<?php echo 'напечатать эту строку' ?>.

<? echo 'этот код с короткими тегами, но он будет работать только если '.'включена опция "short_open_tag"'; ?>


<!-- Важно -->
<!-- Поскольку короткие теги можно отключить, рекомендуется использовать только обычные теги (<?php ?> и <?='hello'?>) для максимальной совместимости. -->

<!-- Если файл содержит только код PHP, предпочтительно опустить закрывающий тег в конце файла.
Это помогает избежать добавления случайных символов пробела или перевода строки после закрывающего тега PHP,
которые могут послужить причиной нежелательных эффектов, так как PHP начинает выводить данные в буфер при
отсутствии намерения у программиста выводить какие-либо данные в этой точке скрипта. -->



<!-- Изолирование от HTML  -->
<p>Это будет проигнорировано PHP и отображено браузером.</p>
<?php echo 'А это будет обработано.'; ?>
<p>Это тоже будет проигнорировано PHP и отображено браузером.</p>