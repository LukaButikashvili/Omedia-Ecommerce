$("#safetyCode").hide()
let token = $("#safetyCode").val()

$("#couponButton").click(function() {
    let coupon = $("#coupon").val()
    $.ajax({
        type: "POST",
        url: "editData/editCoupon.php",
        data: {
            newCoupon: coupon,
            safetyCode:token
        }
    })
    window.location.replace("http://localhost/Omedia-Ecommerce")
})
