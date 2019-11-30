// Signin and Sign Out
$('#signUpBtn').on('click', function () {
    var logindata = $('#signUpForm').serialize();
    $.ajax({
        url: "ayarlar/islem.php?islem=registration",
        type: "POST",
        data: logindata,
        success: function (cevab) {
            $('#loginAlert').html(cevab).hide().fadeIn(700);
        }
    });
})
$('#signInBtn').on('click', function () {
    var data = $('#signInForm').serialize();
    $.ajax({
        url: "ayarlar/islem.php?islem=signIn",
        type: "POST",
        data: data,
        success: function (c) {
            $('#loginAlert').html(c).hide().fadeIn(700);
        }
    })
})

// Cart Section
$(document).ready(function () {
    $('.add-to-cart').on('click', function () {
        var cartData = {
            p: 'addToCart',
            product_id: $(this).attr('product-id'),
        }
        $.ajax({
            url: "ayarlar/islem.php",
            type: "POST",
            data: cartData,
            success: function (response) {
                $('.cart-count').text(response);
            }
        });
    })

    $('.cart_quantity_delete').on('click', function () {
        var cartData = {
            p: 'removeFromCart',
            product_id: $(this).attr('product-id'),
        }
        $.ajax({
            url: "ayarlar/islem.php",
            type: "POST",
            data: cartData,
            success: function (response) {
                window.location.reload();
            }
        });
    })
})


