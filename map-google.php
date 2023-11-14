<?php
// Create the iframe URL
$iframeUrl = "https://maps.google.com/maps?q=${latit},${longi}&z=4&output=embed";

<!--  map model start -->	
		
<div class="modal fade" id="MapModal" tabindex="-1" aria-labelledby="MapModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="MapModalLabel">Property Location</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- <iframe src="https://maps.google.com/maps?q=${latit},${longi}&z=15&output=embed" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
		  
		  <?php
	// Display the iframe in the modal
     echo "<iframe src='$iframeUrl' width='100%' height='400' frameborder='0' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
	?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<!--  map model end -->
<script>
  // qortechno map modal	
const mapModal = document.getElementById("MapModal");

// Show the modal when the user clicks on the link
document.querySelector("a[data-bs-target='#MapModal']").addEventListener("click", function() {
  mapModal.showModal();
});
	  // qortechno map modal eol
	
</script>
?>
  
