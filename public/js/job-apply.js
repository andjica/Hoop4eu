$(document).ready(function(){
    
    
    $('#apply').on('click',disableButton);
    
    $('#firstName').on('keyup',function(){

        let firstName = $('#firstName').val();

        if(firstName=="")
        {
            
            $('#firstName').css('border-color','red');
            checkErrors();
            disableButton();
        }
        else
        {
            $('#firstName').css('border-color','blue');
            checkErrors();
        }

        

    });

    $('#lastName').on('keyup',function(){

        let lastName = $('#lastName').val();

        if(lastName=="")
        {
            
            $('#lastName').css('border-color','red');
            checkErrors();
            disableButton();
            
        }
        else
        {
            $('#lastName').css('border-color','blue');
            checkErrors();
        }

    });

    $('#email-add').on('keyup',function(){

        let email = $('#email-add').val();

        let emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

        if(!emailReg.test(email))
        {
            
            $('#email-add').css('border-color','red');
            checkErrors();
            disableButton();
        }
        else
        {
            $('#email-add').css('border-color','blue');
            checkErrors();
            
        }


    });
    
    

    
    

    function checkErrors(){
        
        let greske = [];
        let firstName = $('#firstName').val();

        if(firstName=="")
        {
            greske.push("bad");
            
        }

        let lastName = $('#lastName').val();

        if(lastName=="")
        {
            greske.push("bad");
          
        }

        let email = $('#email-add').val();

        if(email=="")
        {
            greske.push("bad");
        }    


    if(greske.length==0)
    {
        
        enableButton();
    }
        
    
} 
})

function enableButton(){

    $('#job-apply-popup').prop('disabled',false);  

}

function disableButton()
{
    $('#job-apply-popup').prop('disabled',true);
}


