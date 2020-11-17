const zmien = {


    btnZmiana : document.querySelector(".btnZmiana"),
    c : document.querySelector(".c"),
    
    init: function(){
    this.btnZmiana.addEventListener('click', function(){
        this.c.className='item c2';
    }.bind(this))
    }
    }
    
    zmien.init();

    const zmien1 = {


        btnZmiana1 : document.querySelector(".btnZmiana1"),
        c3 : document.querySelector(".c"),
        
        init: function(){
        this.btnZmiana1.addEventListener('click', function(){
            this.c3.className='item c3';
        }.bind(this))
        }
        }
        
        zmien1.init();

        const zmien2 = {


            btnZmiana2 : document.querySelector(".btnZmiana2"),
            c4 : document.querySelector(".c"),
            
            init: function(){
            this.btnZmiana2.addEventListener('click', function(){
                this.c4.className='item c4';
            }.bind(this))
            }
            }
            
            zmien2.init();

           