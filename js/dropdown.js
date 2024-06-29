jQuery(document).ready(function($) {
    // Your code using $ goes here
    console.log('jQuery is working!');
    $('.excerpt-badge').click(function(e){
         
        $(this.parentElement.querySelector('.excerpt-card')).toggleClass('hidden'); 
     
        let ele = this.parentElement.querySelector('.fa-angle-double-right');
        if(ele){
            ele.classList.remove("fa-angle-double-right");
            ele.classList.add("fa-angle-double-down");
        }else{
            ele = this.parentElement.querySelector('.fa-angle-double-down');
            ele.classList.add("fa-angle-double-right"); 
            ele.classList.remove("fa-angle-double-down");
        } 
        console.log(" element ", ele);
        //.classList.add("fa-angle-double-down"); 
    });

    const hamburger = $('#hamburger')[0]; 
    const close_nav = $('#close')[0]; 
    const nav = $('nav.main-menu ul')[0]; 
    console.log("nav: ",nav);
    console.log("hamberger: ",hamburger);
    $('#hamburger').click(function(e){
        console.log("nav: ",nav);
        $(nav).toggleClass('show');
        $(this).toggleClass("hide");
        $(close_nav).toggleClass("show");
       
    });
    $(close_nav).click(function(e){
        $(hamburger).toggleClass("hide");
        $(nav).toggleClass('show');
        $(this).toggleClass("show");
    });
});