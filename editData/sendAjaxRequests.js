
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




//sending edit POST request
$('.edit-button').click(function() {
    
    let buttonText = $('.edit-button').text();

    if(buttonText === "Edit Product" ) {
        //disable other buttons
        $('.delete-button').prop('disabled', true);
        $('#addToCart').prop('disabled', true);


        $(this).text('Save');
    
        //changes element from p to input with proper name values
        $('#name').replaceWith("<input type='text' id="+ $('#name').attr('id') +" class='form-control mb-2' value='" + $('#name').text() +"'>");
        $('#Price').replaceWith("<input type='text' id="+ $('#Price').attr('id') + " class='form-control' value='" + $('#Price').text() +"'>");
        $('.col-sm-9').map(function () { 
            return  $(this).replaceWith( "<input type='text' id="+  $(this).attr('id') + " class='form-control mb-2' value='" + $(this).text() +"'>" );
        });

        //change styles
        $('dl').addClass('ml-0');
    } else  {
        let id = $(this).attr('id');

        //create object for new data
        let updatedProduct = {
            'id': id,
        };

        //after click Save button take all input values and write it in the object
        $('input').map(function () { 
            let elementId = $(this).attr('id');
            let elementValue =  $(this).val();
            updatedProduct[elementId] = elementValue;
            
        });

        //sending ajax request to update data
        $.ajax({
            type: "POST",
            url: 'http://localhost/Omedia-Ecommerce/editData/editData/editData.php',
            data: {'data': updatedProduct},
            success: function(data) {
                console.log(data);
            }
        });

        //enable buttons
        $('.delete-button').prop('disabled', false);
        $('#addToCart').prop('disabled', false);

        //restart page
        window.location.replace(window.location.href);
    }


})