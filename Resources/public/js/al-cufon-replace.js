(function($){
    $.fn.doCufon =function()
    {
        this.each(function() 
        {
            Cufon.replace($(this), { fontFamily: 'Swis721 Cn BT', hover:true });
        });
    }
})($);