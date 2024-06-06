 <?php
$current_page=current_url(true);
if ($current_page==base_url('zulutrade')){
?> 

<script>
    $('#scrollDown').click(function() {
        $('html, body').animate({
            scrollTop: $('.step-section').offset().top - 50
        }, 100)
    })


    const progressBtn = document.querySelectorAll('.step-info button');
    const progressBar = document.querySelector('.progress-bar');
    const stepCount = progressBtn.length;
    let currentStep = 1;

    // Function to update the active step and progress bar
    function updateSteps(step) {
        for (let i = 1; i <= stepCount; i++) {
            const stepButton = document.getElementById(`step${i}`);
            const stepContent = document.getElementById(`content${i}`);
            if (i === step) {
                stepButton.classList.add('active');
                stepContent.classList.remove('d-none');
            } else {
                stepButton.classList.remove('active');
                stepContent.classList.add('d-none');
            }
        }
        progressBar.style.width = `${(step - 1) * (100 / (stepCount - 1))}%`;
    }

    // Add click event listeners to step buttons
    for (let i = 1; i <= stepCount; i++) {
        const stepButton = document.getElementById(`step${i}`);
        stepButton.addEventListener('click', () => {
            updateSteps(i);
        });
    }

    // Initialize the progress bar and active step mahip
    updateSteps(currentStep);
</script>
<?php }

elseif($current_page==base_url('webinars')){
    ?>

<script>
    $('.register-btn').click(function() {
        $('html, body').animate({
            scrollTop: $('.trading-webinars').offset().top - 50
        }, 100)
    })

    const webinar = document.querySelector("#webinar-phone");
    window.intlTelInput(webinar, {
        autoPlaceholder: "off",
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "js/utils.js",
    });
    
    	  $(".reg").click(function(){ 
    	    
    	      var butval = $(this).val(); 
    	     
    	      $("#ctext").val(butval);
    	      $("#exampleModal").modal('show');
    	 
    	   
    	  });


    
</script>
<?php 
}

elseif($current_page==base_url('session-details')){
    ?>

<script>
    
    	  $(".reg").click(function(){ 
    	      var butval = $(this).val();
              alert(butval);
    	      $("#ctext").val(butval);
    	      $("#exampleModal").modal('show');
    	  });

          
    
</script>
<?php 
}
?>