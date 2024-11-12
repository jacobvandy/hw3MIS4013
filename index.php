<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>HW4 MIS4013</h1>
<img id="tbimage" src="TBdecades.jpg" style="height:200px;"/>


<button id="plusbtn"class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg></button>
    <button  id="minusbtn"class="btn btn-danger">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1z"/>
</svg>
    </button>
    <script>
    
        document.querySelector("#plusbtn").addEventListener("click", () =>
        {
            let w=document.querySelector("#tbimage").width;
            w = w + 10;
            document.querySelector("#tbimage").width = w;
        }
        );
        document.querySelector("#minusbtn").addEventListener("click", () =>
        {
            let w = document.querySelector("#tbimage").width;
            w = w - 10;
            document.querySelector("#tbimage").width=w;
        }
        );

        function DarkMode() {
    document.body.classList.toggle("dark-mode");
        }
        <button onclick="DarkMode()">Dark Mode</button>
    </script>



<?php
include "view-footer.php";
?>
