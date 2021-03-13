<?php
if($result !== NULL){
  $stageNum = ($result)["stage"];
}else{
  $stageNum = 0;
}
 ?>


<section class = "stage-container">
<div class="stages-positioner">

</div>
</section>

<script type="text/javascript">
const EVENT = "decrypted"
  function createStageButton(num, href = ""){
      let a = document.createElement("a");
      a.innerHTML = "Stage " + num;
      a.href = href;
      a.setAttribute("class","stage");
      a.setAttribute("style","animation: fadeIn 0.5s " + (.08 * num) + "s forwards");
    return a;
  }
document.addEventListener("DOMContentLoaded", function(){
    const num = "<?php echo $stageNum ?>",
    doc = document.querySelector(".stages-positioner"),
    header = document.querySelector("header"),
    img = header.querySelector("img");
    doc.style = "margin-top:" + (document.querySelector("header").clientHeight) + "px";
    for (let i =0; i < num; i++){
      doc.appendChild(createStageButton(i+1, "/" + EVENT + "/stage_" + (i+1) + "/" ));
    }
  });
</script>
