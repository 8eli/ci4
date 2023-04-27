
    <div class="container display-flex align-items-center justify-content-center position-relative py-5">
    <div class="form bg-custom">
      <div class="contact-info">
        <h2 class="title fw-bold">Let's get in touch</h2>       
            <p class="fw-bold mt-3">Phone:</p>
            <p>+639565286096</p>
            <p class="fw-bold">Email:</p>
            <p>macosta@usa.edu.ph</p>
            <p class="fw-bold">Address:</p>
            <p>Brgy. Buray, Oton, Iloilo</p>
        <div class="social-media">
          <p class="fst-italic fw-bold">Connect with me :</p>
          <div class="social-icons">
            <a href="https://web.facebook.com/Mhymyyy/">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/mctvcst/">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
   
      <div class="contact-form">

        <form action="insert.php" method="POST">
          <h3 class="title fw-bold text-light text-center">Contact me</h3>

          <div class="input-container">
            <input type="text" id="username" name="username" class="input">
            <label for="">Username</label>
            <span>Username</span>
          </div>
          <div class="input-container">
            <input type="email" id="email" name="email" class="input">
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="number" id="phone" name="phone" class="input">
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="messages" id="messages" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          
          <div class="text-center">
          <button type="submit" name="submit" class="btn btn-primary fw-bold"  data-bs-toggle="modal" data-bs-target="#feedback">
           Send
         </button>
      </div>
        </form>
      </div>
    </div>
  </div>
   <!--<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h1 class="modal-title fs-5" id="feedbackLabel">Message Submitted</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>-->

  <script src="../scripts/script.js"></script>
