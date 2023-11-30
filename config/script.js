// РЕДАКТОР ПЕРСОНАЖЕЙ

const characterForm = document.getElementById("character-form");
const createCharacterButton = document.getElementById("create-character");
const deleteCharacterButton = document.getElementById("delete-character");
const updateCharacterButton = document.getElementById("update-character");

createCharacterButton.addEventListener("click", function() {
    characterForm.action = "vendor/character/create_character.php";
    characterForm.submit();
});

deleteCharacterButton.addEventListener("click", function() {
    characterForm.action = "vendor/character/delete_character.php";
    characterForm.submit();
});


updateCharacterButton.addEventListener("click", function() {
    characterForm.action = "vendor/character/update_character.php";
    characterForm.submit();
});

// РЕДАКТОР ДОМОВ

const housesForm = document.getElementById("Houses-form");
const createHouseButton = document.getElementById("create-house");
const deleteHouseButton = document.getElementById("delete-house");
const updateHouseButton = document.getElementById("update-house");

createHouseButton.addEventListener("click", function() {
    housesForm.action = "vendor/houses/create_house.php";
    housesForm.submit();
});

deleteHouseButton.addEventListener("click", function() {
    housesForm.action = "vendor/houses/delete_house.php";
    housesForm.submit();
});


updateHouseButton.addEventListener("click", function() {
    housesForm.action = "vendor/houses/update_house.php";
    housesForm.submit();
});


// РЕДАКТОР ДЕЙСТВИЙ   
const actionForm = document.getElementById("actions-form");
const createActionButton = document.getElementById("create-actions");
const updateActionButton = document.getElementById("update-actions");
const deleteActionButton = document.getElementById("delete-actions");

createActionButton.addEventListener("click", function() {
   actionForm.action = "vendor/actions/create_actions.php";
   actionForm.submit();
});

updateActionButton.addEventListener("click", function() {
   actionForm.action = "vendor/actions/update_actions.php";
   actionForm.submit();
});

deleteActionButton.addEventListener("click", function() {
   actionForm.action = "vendor/actions/delete_actions.php";
   actionForm.submit();
});


// РЕДАКТОР ХАРАКТЕРИСТИК   
const characteristicForm = document.getElementById("characteristic-form");
const createCharacteristicButton = document.getElementById("create-characteristic");
const updateCharacteristicButton = document.getElementById("update-characteristic");
const deleteCharacteristicButton = document.getElementById("delete-characteristic");

createCharacteristicButton.addEventListener("click", function() {
    characteristicForm.action = "vendor/characteristic/create_characteristic.php";
    characteristicForm.submit();
});

updateCharacteristicButton.addEventListener("click", function() {
    characteristicForm.action = "vendor/characteristic/update_characteristic.php";
    characteristicForm.submit();
});

deleteCharacteristicButton.addEventListener("click", function() {
    characteristicForm.action = "vendor/characteristic/delete_characteristic.php";
    characteristicForm.submit();
});


// РЕДАКТОР ОПИСАНИЯ ДОМОВ   
const abouthouseForm = document.getElementById("abouthouse-form");
const createAbouthouseButton = document.getElementById("create-abouthouse");
const updateAbouthouseButton = document.getElementById("update-abouthouse");
const deleteAbouthouseButton = document.getElementById("delete-abouthouse");

createAbouthouseButton.addEventListener("click", function() {
    abouthouseForm.action = "vendor/abouthouse/create_abouthouse.php";
    abouthouseForm.submit();
});

updateAbouthouseButton.addEventListener("click", function() {
    abouthouseForm.action = "vendor/abouthouse/update_abouthouse.php";
    abouthouseForm.submit();
});

deleteAbouthouseButton.addEventListener("click", function() {
    abouthouseForm.action = "vendor/abouthouse/delete_abouthouse.php";
    abouthouseForm.submit();
});