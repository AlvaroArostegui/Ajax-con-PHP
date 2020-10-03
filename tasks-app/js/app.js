$(document).ready(function() {

    console.log('Jquery is working');

    $('#search').keyup(function(e) {
        let search = $('#search').val();
        $.ajax({
            url: 'task-search.php',
            type: 'POST',
            data: { search : search },
            success: function(response) {
                console.log(response);
            }
        })
    })

});