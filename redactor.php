<?php
    require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактор</title>
    
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
    <a href="index.php"><h1 class="return_to_main">Вернуться на главную</h1></a>
    <hr>
    <div class="header">
        <img data-speed=".6" class="hero_redactor" src="img/pigs.png" alt="Alt" >
        <!-- CHARACTERS -->
        <table>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>img</th>
            </tr>

            <?php

                $characters = mysqli_query($connect, "SELECT * FROM `characters`");


                $characters = mysqli_fetch_all($characters);

                foreach ($characters as $character) {
                    ?>
                        <tr>
                            <td><?= $character[0] ?></td>
                            <td><?= $character[1] ?></td>
                            <td><?= $character[2] ?></td>
                        </tr>
                    <?php
                }
            ?>
        </table>

        <table>
            <form id="character-form" method="post">
                <tr>
                    <th colspan="2" class="table_header"><h3 class="table_header_text">Редактор персонажей</h3></th>
                </tr>
                <tbody class="text_and_inputs">
                    <tr>
                        <td><p class="left-align">ID персонажа</p></td>
                        <td><input type="number" name="id_character" placeholder="Для изменения/удаления" class="input-redactor"></td>
                    </tr>
                    <tr>
                        <td><p>Имя персонажа</p></td>
                        <td><input type="text" name="name_character" class="input-redactor"></td>
                    </tr>
                    <tr>
                        <td><p>Изображение</p></td>
                        <td><input type="text" name="img_character" class="input-redactor"></td>
                    </tr>
                </tbody>
                <tr>
                    <td colspan="2" class="button-container">
                        <button type="button" id="create-character" class="button-redactor">Добавить</button>
                        <button type="button" id="update-character" class="button-redactor">Изменить</button>
                        <button type="button" id="delete-character" class="button-redactor">Удалить</button>
                    </td>
                </tr>
            </form>
      </table>

    <hr>


        <!-- HOUSES -->
        <table>
            <tr>
                <th>ID</th>
                <th>ID_characters</th>
                <th>img</th>
            </tr>

            <?php
                $query = "SELECT houses.ID, characters.name, houses.img 
                FROM houses 
                JOIN characters ON houses.ID_characters = characters.ID";

                $houses = mysqli_query($connect, $query);


                $houses = mysqli_fetch_all($houses);

                foreach ($houses as $house) {
                    ?>
                        <tr>
                            <td><?= $house[0] ?></td>
                            <td><?= $house[1] ?></td>
                            <td><?= $house[2] ?></td>
                        </tr>
                    <?php
                }
            ?>
        </table>

        <table>
            <form id="Houses-form" method="post">
                <tr>
                    <th colspan="2" class="table_header"><h3 class="table_header_text">Редактор домов</h3></th>
                </tr>
                <tbody class="text_and_inputs">
                <tr>
                    <td><p>ID дома</p></td>
                    <td><input type="number" name="id_house" placeholder="Для изменения/удаления" class="input-redactor"></td>
                </tr>
                <tr>
                    <td><p>ID персонажа, который в нём живёт</p></td>
                    <td>
                        <input name="id_character_in_house" list="characters_list" class="input-redactor">

                        <?php
                            $result = mysqli_query($connect, "SELECT * FROM `characters`");
                            echo '<datalist id="characters_list">';
                            while ($character = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $character['id'] . '">';
                            }
                            echo '</datalist>';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><p>Изображение</p></td>
                    <td><input type="text" name="img_house" class="input-redactor"></td>
                </tr>
                </tbody>
                <tr>
                <td colspan="2" class="button-container">
                    <button type="button" id="create-house" class="button-redactor">Добавить</button>
                    <button type="button" id="update-house" class="button-redactor">Изменить</button>
                    <button type="button" id="delete-house" class="button-redactor">Удалить</button>
                </td>
                </tr>
            </form>
        </table>

        <hr>

      <!-- ACTIONS -->
      <table>
            <tr>
                <th>ID</th>
                <th>Action</th>
                <th>ID_character1</th>
                <th>ID_character2</th>
                <th>ID_house</th>
            </tr>

            <?php

                $actions = mysqli_query($connect, "SELECT * FROM `actions`");


                $actions = mysqli_fetch_all($actions);

                foreach ($actions as $action) {
                    ?>
                        <tr>
                            <td><?= $action[0] ?></td>
                            <td><?= $action[1] ?></td>
                            <td><?= $action[2] ?></td>
                            <td><?= $action[3] ?></td>
                            <td><?= $action[4] ?></td>

                        </tr>
                    <?php
                }
            ?>
        </table>


      <table>
            <form id="actions-form" method="post">
                <tr>
                <th colspan="2" class="table_header"><h3 class="table_header_text">Редактор действий</h3></th>
                </tr>
                <tbody class="text_and_inputs">
                <tr>
                    <td><p>ID действия</p></td>
                    <td><input type="number" name="id_act" placeholder="Для изменения/удаления" class="input-redactor"></td>
                </tr>
                <tr>
                    <td><p>Персонаж 1</p></td>
                    <td>
                        <input name="id_characters_in_loc" list="characters_list" class="input-redactor">

                        <?php
                            $result = mysqli_query($connect, "SELECT * FROM `Characters`");

                            echo '<datalist id="characters_list">';
                            while ($character = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $character['id'] . '">';
                            }
                            echo '</datalist>';

                        ?>
                    </td>
                </tr>
                <tr>
                    <td><p>Персонаж 2</p></td>
                    <td>
                        <input name="id_characters_in_loc2" list="characters_list" class="input-redactor">

                        <?php
                            $result = mysqli_query($connect, "SELECT * FROM `Characters`");

                            echo '<datalist id="characters_list">';
                            while ($character = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $character['id'] . '">';
                            }
                            echo '</datalist>';

                        ?>
                    </td>
                </tr>
                <tr>
                    <td><p>ID дома, в котором происходит действие</p></td>
                    <td>
                        <input name="id_house_in_act" list="houses_list" class="input-redactor">

                        <?php
                            $result = mysqli_query($connect, "SELECT * FROM `Houses`");

                            echo '<datalist id="houses_list">';
                            while ($house = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $house['id'] . '">';
                            }
                            echo '</datalist>';

                        ?>
                    </td>
                </tr>
                <tr>
                    <td><p>Действие</p></td>
                    <td><input type="text" name="description_act" class="input-redactor"></td>
                </tr>
                </tbody>
                <tr>
                <td colspan="2" class="button-container">
                    <button type="button" id="create-actions" class="button-redactor">Добавить</button>
                    <button type="button" id="update-actions" class="button-redactor">Изменить</button>
                    <button type="button" id="delete-actions" class="button-redactor">Удалить</button>
                </td>
                </tr>
            </form>
        </table>


        <hr>

        <!-- CHARACTERISTIC -->
        <table>
            <tr>
                <th>ID</th>
                <th>ID_characters</th>
                <th>Temperament</th>
                <th>Growth</th>
            </tr>

            <?php
                $query = "SELECT Characteristic.ID, characters.name, Characteristic.temperament, Characteristic.growth
                FROM Characteristic 
                JOIN characters ON Characteristic.ID_characters = characters.ID";

                $characteristics = mysqli_query($connect, $query);


                $characteristics = mysqli_fetch_all($characteristics);

                foreach ($characteristics as $characteristic) {
                    ?>
                        <tr>
                            <td><?= $characteristic[0] ?></td>
                            <td><?= $characteristic[1] ?></td>
                            <td><?= $characteristic[2] ?></td>
                            <td><?= $characteristic[3] ?></td>
                        </tr>
                    <?php
                }
            ?>
        </table>


        <table>
            <form id="characteristic-form" method="post">
                <tr>
                <th colspan="2" class="table_header"><h3 class="table_header_text">Редактор характеристик</h3></th>
                </tr>
                <tbody class="text_and_inputs">
                <tr>
                    <td><p>ID характеристики</p></td>
                    <td><input type="number" name="id_characteristic" placeholder="Для изменения/удаления" class="input-redactor"></td>
                </tr>
                <tr>
                    <td><p>ID персонажа</p></td>
                    <td>
                        <input name="id_characters_in_loc" list="characters_list" class="input-redactor">

                        <?php
                            $result = mysqli_query($connect, "SELECT * FROM `Characters`");

                            echo '<datalist id="characters_list">';
                            while ($character = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $character['id'] . '">';
                            }
                            echo '</datalist>';

                        ?>
                    </td>
                </tr>
                <tr>
                    <td><p>Описание характера</p></td>
                    <td><input type="text" name="text_characteristic" class="input-redactor"></td>
                </tr>
                <tr>
                    <td><p>Рост</p></td>
                    <td><input type="text" name="growth_characteristic" class="input-redactor"></td>
                </tr>
                </tbody>
                <tr>
                <td colspan="2" class="button-container">
                    <button type="button" id="create-characteristic" class="button-redactor">Добавить</button>
                    <button type="button" id="update-characteristic" class="button-redactor">Изменить</button>
                    <button type="button" id="delete-characteristic" class="button-redactor">Удалить</button>
                </td>
                </tr>
            </form>
      </table>
    
      <hr>

      <!-- ABOUT HOUSE -->
      <table>
            <tr>
                <th>ID</th>
                <th>ID_house</th>
                <th>Material</th>
                <th>Quality</th>
                <th>Crushability</th>
            </tr>

            <?php

                $abouthouses = mysqli_query($connect, "SELECT * FROM `About_house`");


                $abouthouses = mysqli_fetch_all($abouthouses);

                foreach ($abouthouses as $abouthouse) {
                    ?>
                        <tr>
                            <td><?= $abouthouse[0] ?></td>
                            <td><?= $abouthouse[1] ?></td>
                            <td><?= $abouthouse[2] ?></td>
                            <td><?= $abouthouse[3] ?></td>
                            <td><?= $abouthouse[4] ?></td>
                        </tr>
                    <?php
                }
            ?>
        </table>


      <table>
            <form id="abouthouse-form" method="post">
                <tr>
                <th colspan="2" class="table_header"><h3 class="table_header_text">Редактор описания дома</h3></th>
                </tr>
                <tbody class="text_and_inputs">
                <tr>
                    <td><p>ID описания дома</p></td>
                    <td><input type="number" name="id_abouthouse" placeholder="Для изменения/удаления" class="input-redactor"></td>
                </tr>
                <tr>
                    <td><p>ID дома</p></td>
                    <td>
                        <input name="id_house_in_act" list="houses_list" class="input-redactor">

                        <?php
                            $result = mysqli_query($connect, "SELECT * FROM `Houses`");

                            echo '<datalist id="houses_list">';
                            while ($house = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $house['id'] . '">';
                            }
                            echo '</datalist>';

                        ?>
                    </td>
                </tr>
                <tr>
                    <td><p>Материал</p></td>
                    <td><input type="text" name="material_abouthouse" class="input-redactor"></td>
                </tr>
                <tr>
                    <td><p>Качество</p></td>
                    <td><input type="text" name="quality_abouthouse" class="input-redactor"></td>
                </tr>
                <tr>
                    <td><p>Разрушаемость</p></td>
                    <td>
                        <input type="text" name="crushability_abouthouse" placeholder="0 - false; 1 - true" list="crush_list" class="input-redactor">
                            <datalist id="crush_list">
                                <option value="0"></option>
                                <option value="1"></option>
                            </datalist>
                    </td>
                </tr>
                </tbody>
                <tr>
                <td colspan="2" class="button-container">
                    <button type="button" id="create-abouthouse" class="button-redactor">Добавить</button>
                    <button type="button" id="update-abouthouse" class="button-redactor">Изменить</button>
                    <button type="button" id="delete-abouthouse" class="button-redactor">Удалить</button>
                </td>
                </tr>
            </form>
        </table>
    </div>

    <script src="config/script.js"></script>
</body>
</html>