$("#submitReview").click(function() {
    let text = $("#review").val()
    // This gets the current phone's id from the url
    let id = window.location.href.split('=')[1]
    $.ajax({
        type: "POST",
        url: "editData/editReview.php",
        data: {
            review: JSON.stringify(text),
            id: id
        }
    })
    location.reload()
})