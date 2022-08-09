document.addEventListener('DOMContentLoaded', function(){

    
    let img_slider = document.getElementsByClassName('img_slider');
    console.log(img_slider)
    
    let etape = 0;

    let nbr_img = img_slider.length;


    let precedent = document.getElementById('precedent');
    let suivant = document.getElementById('suivant');

    function enleverActiveImages(){
        for(let i = 0; i< nbr_img; i++)
        {
            img_slider[i].classList.remove('active');
        }
    }


    suivant.addEventListener('click', function() {
        etape++;

        if (etape >= nbr_img ) 
        {
            etape = 0;
        }
        enleverActiveImages();
        img_slider[etape].classList.add('active');
    });


    precedent.addEventListener('click', function() {
        etape-- ;

        if(etape < O){
            etape = 4;
        }

        enleverActiveImages();
        img_slider[etape].classList.add('active');
    });

    setInterval(function(){
        etape++;

        if (etape >= nbr_img ) {
            etape = 0;
        }
        enleverActiveImages();
        img_slider[etape].classList.add('active');

    },3000);

})