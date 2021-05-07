
$('.delete-button').click(function() {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: 'http://localhost/Omedia-Ecommerce/editData/deleteData/deleteData.php',
        data: {'id': id},
        success: function(data) {
            //restart page
            window.location.replace('http://localhost/Omedia-Ecommerce/index.php');
        }
    });

})


//sending edit POST request
$('.edit-button').click(function() {
    
    let buttonText = $('.edit-button').text();

    if(buttonText === "Edit Product" ) {
        //hide other buttons
        $('.delete-button').hide();
        $('#addToCart').hide();

        //create "Reset Changes" Edit button to reset changes
        $("#change-buttons-main-div").append('<button type="cancel-changes" id="resetChanges" class="btn bg-secondary text-light ml-5">Reset Changes</button>');


        //change button text "Reset Changes" to "Save Changes"
        $(this).text('Save Changes');
    
        //changes elements from p, h1 to input with proper name values
        $('#name').replaceWith("<input type='text' id="+ $('#name').attr('id') +" class='form-control mb-2' value='" + $('#name').text() +"'>");
        $("#name").before( "<dt class='col-sm-3'>Name</dt>" );

        $('#Price').replaceWith("<input type='text' id="+ $('#Price').attr('id') + " class='form-control' value=" + $('#Price').text() +">");
        $("#Price").before( "<dt class='col-sm-3'>Price</dt>" );
        
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
                //restart page
                window.location.replace(window.location.href);
            }
        });


    }
})


$(document).on('click', '#resetChanges', function(){
    window.location.replace(window.location.href);
});