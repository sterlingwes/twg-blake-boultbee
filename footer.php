<section class="green-bg contact">
  <div class="section-container">
    <h2>Contact Us</h2>
    
    <form action="">
	    <label for="name">Name <span class="red"></span></label>
	    <input type="text" placeholder="Your Full Name">

	    <label for="email">Email <span class="red"></span></label>
	    <input type="email" placeholder="you@email.com">

	    <label for="phone">Phone <span class="red"></span></label>
	    <input type="phone" placeholder="(416) 234-4567">

	    <label for="message">Your Message <span class="red"></span></label>
	    <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
    </form>
    
    <div class="send">
    	<button>
    		Send Mail
    	</button>
    </div>

  </div>
</section>

</div>

<footer class="section-container">
  <p>&copy; Blake Boultbee Youth Outreach Service <?php echo date('Y'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>