$("#id-character").on("click", function (e) {
    // Get value
    let idCharacter = $(this).val();

    // Adding image
    $("#img-character").html('<img src="assets/img/cards/characters/character-' + idCharacter + '.png" alt="">');
})

