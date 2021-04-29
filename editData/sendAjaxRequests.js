
$('.delete-button').click(function() {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: 'http://localhost/Omedia-Ecommerce/editData/deleteData/deleteData.php',
        data: {'id': id},
        success: function(data) {
            console.log(data);
        }
    });

    window.location.replace('http://localhost/Omedia-Ecommerce/index.php');
})

