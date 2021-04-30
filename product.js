$("#submitReview").click(function() {
    let text = $("#review").val()
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