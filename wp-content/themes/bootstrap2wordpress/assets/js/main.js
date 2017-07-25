$(function(){
    // Cache the window object
    var $window = $(window);

    // Parallax effect
    $('section[data-type="background"]').each(function(){
        var $bgObj = $(this);

        $window.scroll(function(){
            // Scroll background at var speed
            var yPosition = -($window.scrollTop() / $bgObj.data('speed'));
            var coords = '50% ' + yPosition + 'px';
            $bgObj.css({ backgroundPosition: coords })
        });
    });
});