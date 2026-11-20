$(document).ready(function () {
     $("#title").text("Hello world!!!!");
});

// $(document).ready(function () {
//     $('button').mousedown(function() { 
//         $('p').fadeToggle();
        
//     });
//     jqre
// });

$(document).ready(function () {
    $('p').on({
        
        mouseenter: function () {
        $(this).css({"color" : "lightblue"});
        },
        mouseleave: function() {
        $(this).css({"color" : "black"})
        },
        click: function() {
            $(this).fadeOut()
        } 
        
    });
    $('button').click(function () { 
        $('p').fadeIn();   
    });
});


        $(document).ready(function () {
            $('button').click(function () { 
                $('h1').hide();
                
            });
        });
