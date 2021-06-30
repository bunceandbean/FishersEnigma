<?php
if($result !== NULL){
  $stageNum = ($result)["stage"];
}else{
  $stageNum = 1;
}


if(isset($_POST['gummy_bear'])){
    $ans = htmlentities($_POST['gummy_bear'], ENT_QUOTES);
    if(check_answer($ans,$stageNum)){
        update_stage_num();
        header("Refresh:0");
    }
}
 ?>


<section class = "stage-container">
<div class="stages-positioner"></div>
<form action = "#" method = "POST" id = "stage_form">
    <div class = "stage_input_container">
        <input type = "text" name = "gummy_bear" placeholder = "" id = "gb"></input>
        <button type = "submit">Check</button>
    </div>
</form>
</section>

<section class = "description">
  <div class = "stages-positioner"></div>
  <p>The next two stages will unlock on midnight of the following day.</p>
</section>

<script type="text/javascript">
const EVENT = "decryptid"
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
    ipt = document.querySelector("#gb");
    for (let i =0; i < num; i++){
      doc.appendChild(createStageButton(i+1, "/" + EVENT + "/stage_" + (i+1) + "/" ));
    }
    ipt.placeholder = "Stage " + num + " Answer?"
  });
</script>
