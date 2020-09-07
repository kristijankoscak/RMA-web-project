$( document ).ready(function() {
    $('#messageBlock').fadeIn(1000,function () {
        setTimeout(function() {
            $('#messageBlock').remove()
        }, 5000);  
    })
})



