<div class="forma">
  <h2 id="link3">Форма:</h2>
  <form method="POST">
    <label>
        Имя:<br>
        <input name="field-1" placeholder="Введите Ваше имя">
    </label><br>
    <label>
        Email:<br>
        <input name="field-email" type="email" placeholder="Введите вашу почту">
    </label><br>
    <label>
        Дата рождения:<br>
        <input name="field-date" type="date">
    </label><br>
    Пол:<br>
      <label><input type="radio" checked="checked" name="radio-1"> Женщина </label>
      <label><input type="radio" name="radio-1"> Мужчина </label><br />
    Количество конечностей:<br />
      <label><input type="radio" checked="checked" name="radio-2"> 2 </label>
      <label><input type="radio" name="radio-2"> 3 </label>
      <label><input type="radio" name="radio-2"> 4 </label><br>
    <label>
        Сверхспособности:<br>
        <select name="field-2" multiple="multiple">
          <option value="Значение1">Бессмертие</option>
          <option value="Значение2">Прохождение сквозь стены</option>
          <option value="Значение3">Левитация</option>
        </select>
    </label><br>
    <label>
        Биография:<br />
        <textarea name="field-3" placeholder="Введите текст"></textarea>
    </label><br>
    <label><input type="checkbox" checked="checked" name="check">С контрактом ознакомлен(а)</label><br>
    <input type="submit" value="Отправить">
  </form>
  </div>
