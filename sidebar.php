<!-- Боковая колонка -->
<div class="sidebar">

    <div id="title-widget">
        <!-- Боковая колонка -->
        <div class="sidebar">
            <?php if (!dynamic_sidebar('right-sidebar')): ?>
                <?php echo '<div class="textwidget"><p>Нет активных виджетов..</p></div>'; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="widget_nav_menu">
        <ul>
            <li><a href="">Wordpress</a>
                <ul class="sub-menu">
                    <li><a href="">Настройки</a></li>
                    <li><a href="">Функции</a></li>
                    <li class="current-menu-item"><a href="">Плагины</a></li>
                    <li><a href="">Хаки</a></li>
                    <li><a href="">Создание темы</a></li>
                </ul>
            </li>
            <li><a href="">Программы</a>
                <ul class="sub-menu">
                    <li><a href="">Google Chrome</a></li>
                    <li><a href="">Balsamiq Mockups</a></li>
                    <li><a href="">Sublime Text</a></li>
                    <li><a href="">Adobe Photoshop</a></li>
                </ul>
            </li>
        </ul>
    </div>
 
    <div id="title-widget">
        <h6>Текстовый блок</h6>
    </div>
    
    <div class="textwidget">
        <p>Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название, не имеет никакого отношения к обитателям водоемов. Используется он <a href="">веб-дизайнерами</a> для вставки на интернет-страницы и демонстрации внешнего вида контента, просмотра шрифтов, абзацев, отступов и т.д. </p>
    </div>
 
    <div id="title-widget">
        <h6>Изображение</h6>
    </div>

    <div class="textwidget">
        <img src="//artemsannikov.ru/mc/40collage-instagram/images/box.png" width="200">
    </div>
 
</div>