<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- inter font -->
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">

    <title>Link Tree</title>
  </head>
  <body>
    

  <!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="shareModalLabel">Share this Bio Link</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="qr_code_container">
                <img src="assets/QR.svg" alt="QR_code">
              </div>
              
            </div>
            <div class="col-md-7">
              <div class="share-container-wrapper">
                <a href="#" class="share-container">
                  <div class="share-new" >
                    <div class="share-container-inner">
                    <img src="assets/x_logo.svg" alt="x-logo" class="share-images">
                    </div>
                    <p>Share on Twitter</p>
                  </div>
                  
                  <img src="assets/right.svg" alt="">
                </a>
                <a href="#" class="share-container">
                  <div class="share-new" >
                    <div class="share-container-inner">
                    <img src="assets/x_logo.svg" alt="x-logo" class="share-images">
                    </div>
                    <p>Share on Facebook</p>
                  </div>
                  
                  <img src="assets/right.svg" alt="">
                </a>
                <a href="#" class="share-container">
                  <div class="share-new" >
                    <div class="share-container-inner">
                    <img src="assets/x_logo.svg" alt="x-logo" class="share-images">
                    </div>
                    <p>Share via Mail</p>
                  </div>
                  
                  <img src="assets/right.svg" alt="">
                </a>
              </div>
            </div>
            <div class="copy-link">
              <input type="text" id="copy_input"  readonly>
              <div id="copy_button">Copy</div>
            </div>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
    

    <div class="wrapper">
      <div class="full-content">
      <div class="button-wrapper">
      <div class="share-button" data-bs-toggle="modal" data-bs-target="#shareModal" data-link="www.selena_gomez_link_tree.com" onclick="openShareModal(event,'www.selena_gomez_link_tree.com')">
        <img src="assets/three_2.svg" alt="expand">
      </div>
      </div>

      

      <img src="assets/dp.jpeg" alt="profile_picture" id="profile_picture">
      <div class="name_container">
        <p id="name">@selenagomez</p>
        <img src="assets/verified.svg" alt="" id="verified">

      </div>
      


      <?php
      
      $links = [
          "Shop Love On" => ["https://www.shop_love_on.com/","assets/s1.jpeg"],
          "Listen To Love On" => ["https://www.love_on.com/","assets/s2.jpeg"],
          "Listen To Single Soon" =>["https://www.single_soon.com/","assets/s3.webp"],
          "Shop The Kind Words Collection" =>["https://www.kind_words.com/","assets/s4.webp"],
          "My Mind And Me" =>["https://www.my_mind_and_me.com/","assets/s5.webp"],
          "Rare Beauty" =>["https://www.rare_beauty.com/","assets/s6.webp"],
          "Wonder Mind" =>["https://www.wonder_mind.com/","assets/s7.jpeg"],
          "Learn More About Rare Impact Fund" =>["https://www.rare_impact_fund.com/","assets/s8.jpeg"],
          "Donate To The Rare Impact Fund" =>["https://www.donate_rare_impact.com/","assets/s9.webp"],
          "Watch Selena + Chef" =>["https://www.selena_chef.com/","assets/s10.webp"],
          "Only Murders In The Building" =>["https://www.murder_in_the_building.com/","assets/s11.webp"],
          "Serendipity 3" => ["https://www.serendipity.com/","assets/s12.jpeg"],
      ];
      ?>
      
      <div class="link_container">
          <?php foreach ($links as $link => $href) : ?>
              <a href="<?php echo $href[0]; ?>" class="link_each" target="_blank">
                <img class="link_img" src="<?php echo $href[1]; ?>" alt="<?php echo $link; ?>">
                <p>
                <?php echo $link; ?>
                </p>
                
                <img class="three_img" src="assets/three.svg" alt="share" data-bs-toggle="modal" data-bs-target="#shareModal" data-link="<?php echo $href[0]; ?>" onclick="openShareModal(event, '<?php echo $href[0]; ?>')">
                 
              </a>
          <?php endforeach; ?>
      </div>

      

      <?php
          $social_links = [
              "https://www.instagram.com" => "fa-brands fa-instagram",
              "https://www.twitter.com" => "fa-brands fa-x-twitter",
              "https://www.tiktok.com" => "fa-brands fa-tiktok",
              "https://www.youtube.com" => "fa-brands fa-youtube",
              "https://www.spotify.com" => "fa-brands fa-spotify"
          ];
          ?>

      <div class="social_container">
          <?php foreach ($social_links as $href => $icon_class) : ?>
              <a href="<?php echo $href; ?>" target="_blank">
                  <i class="<?php echo $icon_class; ?>"></i>
              </a>
          <?php endforeach; ?>
      </div>

      <a class="last_button"><img src="assets/logo.svg" alt=""> <p>Join selenagomez on Linktree</p> </a>
      </div>

      
        <div class="background" ></div>
      
      

    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

   <script>
function openShareModal(event, link) {
    event.preventDefault();
    event.stopPropagation();
    
    var shareModal = document.getElementById('shareModal');
    var copyInput = document.getElementById('copy_input');
    
    copyInput.value = link;
    
    var modal = new bootstrap.Modal(shareModal);
    modal.show();
}

document.addEventListener('DOMContentLoaded', function() {
    var shareModal = document.getElementById('shareModal');

    
    
    shareModal.addEventListener('hidden.bs.modal', function() {
        document.body.classList.remove('modal-open');
        var backdrop = document.querySelector('.modal-backdrop');
        if (backdrop) {
            backdrop.remove();
        }
    });
});
</script>

    <script>
      document.getElementById("copy_button").addEventListener("click", function() {
        var copyText = document.getElementById("copy_input");

        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices


        document.execCommand("copy");

        this.textContent = "Copied";
        setTimeout(() => {
          this.textContent = "Copy";
        }, 3000); 

        
      });


    </script>


  </body>
</html>
