<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>HW4 MIS4013</h1>
<img id="tbimage" src="TBdecades.jpg" style="height:200px;"/>

<button id="plusbtn"class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i></button>
    <button  id="minusbtn"class="btn btn-danger">
    <i class="bi bi-dash-circle-fill"></i>
    </button>
    <script>
        "use strict";
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
    </script>
<?php
include "view-footer.php";
?>
