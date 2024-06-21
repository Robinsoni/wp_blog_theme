jQuery(document).ready(function($) {
    // Your code using $ goes here
    console.log('jQuery is working!');
    $('.excerpt-badge').click(function(e){
         
        $(this.parentElement.querySelector('.excerpt-card')).toggleClass('hidden'); 
      /*   $(this.parentElement.querySelector('.excerpt-card')).slideToggle(500);  */
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
});