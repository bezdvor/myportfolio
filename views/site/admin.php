<div class="row headRow">
    <div class="col-2">
        <a href="/">
            <ul style="margin-bottom: -3px; margin-top: -5px;">
                <li class="headerMainItem">
                    <a href="/"><i class="fas fa-home" style="font-size: 4rem; color: #F26101"></i></a>
                </li>
            </ul>
        </a>
    </div>
    <div class="col-10 no-gutters">
        <div style="padding-left: 4rem;"><h3>Административная панель</h3></div>
    </div>
</div>
<div class="w-100 headBackLine"></div>
<div style="padding: 3rem;">
    <form action="/admin/addPost" method="post" enctype="multipart/form-data">
        <br>
        <label for="1inp">Название дизайна</label><br>
        <input class="form-control-sm" size="100" type="text" id="1inp" name="postTitle"><br><br>
        <label for="2inp">Описание дизайна</label><br>
        <textarea id="2inp" name="postText" cols="80" rows="20"></textarea><br><br>
        <select name="postCat">
            <option value="1">логотипы</option>
            <option value="2">визитки</option>
            <option value="3">флаеры, буклеты</option>
            <option value="4">широкий формат</option>
            <option value="5">фирменный стиль</option>
            <option value="6">календари</option>
            <option value="7">наклейки, упаковка</option>
        </select><br><br>
        <input  class="form-control-sm" type="file" name="userfile"><br><br>
        <input class="myBtn" type="submit" name="sub"><br><br>
    </form><br><br>
    <a class="smallBtnDanger" href="/exit">Выйти</a>

</div>

