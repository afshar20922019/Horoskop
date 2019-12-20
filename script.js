$(document).ready(function() {
    skrivHoroskop();


    function skrivHoroskop() {
        $.ajax({
                type: 'GET',
                url: "./server/viewHoroscope.php",

            })
            .done(function(data) {

                $('#minhoroskop').html(data);
                $('#minhoroskop').hide();
                $('#minhoroskop').fadeIn();


            })

    }


    sparaMittHoroskop = function() {
        var personnummer = $('#personnummer').val();
        if (personnummer !== "") {

            $.ajax({
                    type: "POST",
                    url: "./server/addHoroscope.php",
                    data: {
                        personnummer: personnummer
                    }

                })
                .done(function(data) {
                    skrivHoroskop();

                })
        }

    }

    uppdateramitthoroskop = function() {
        var personnummer = $('#personnummer').val();
        if (personnummer !== "") {
            $.ajax({
                    type: 'PUT',
                    url: "./server/updateHoroscope.php",
                    data: {
                        personnummer: personnummer
                    }
                })
                .done(function(data) {
                    skrivHoroskop();
                })
        } else {}

    }



    raderaMittHoroskop = function() {
        var personnummer = $('#personnummer').val();

        $.ajax({
                type: 'DELETE',
                url: "./server/deleteHoroscope.php",
                data: {
                    personnummer: personnummer
                }
            })
            .done(function(data) {


            })
        $("#minhoroskop").hide();

    }



});