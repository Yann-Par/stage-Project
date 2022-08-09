


        let time = document.getElementById('time');
        
        
        window.setInterval(function(){
             let times = new Date();
             
             let h = times.getHours();
             if (h<10){
                 h = '0'+h;
             }
             
             let m = times.getMinutes();
             if (m<10){
                 m= '0' + m;
             }
             let s = times.getSeconds();
             if (s<10) {
                 s = '0'+s;
             }
             
             time.innerHTML = h + ':' + m + ':' + s;
        }, 1000);
