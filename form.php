<?php include("header.php");?>

<?php
$este = array(
array("svg/01_Man.svg","svg/02_Woman.svg","svg/03_Assembly_couple.svg","svg/05_Assembly_group.svg","svg/06_Assembly_family.svg","svg/07_Girl.svg","svg/08_Boy.svg","svg/09_Authority_instruction.svg","svg/10_Help_others.svg","svg/11_Keep_safe.svg","svg/12_Evacuate_vertical.svg"),
array("svg/13_Evacuate_downstairs.svg","svg/14_Evacuate_male_pedestrian.svg","svg/15_Evacuate_female_pedestrian.svg","svg/16_Evacuate.svg","svg/17_Evacuate_fast.svg","svg/19_Move_to_shelter.svg","svg/20_Warning_tsunami_risk.svg","svg/21_Warning_evacuation_way.svg","svg/22_Warning_volcano_risk.svg","svg/23_Warning_sign.svg","svg/24_Authorities.svg"),
array("svg/26_Water.svg","svg/27_Geo_point.svg","svg/28_Map_point.svg","svg/29_School.svg","svg/30_Hospital.svg","svg/31_Local_authority_bldg.svg","svg/32_Orientation.svg","svg/33_Network.svg","svg/34_Radio.svg","svg/35_Mobile_info.svg","svg/37_Mobile_call.svg"),
array("svg/39_Shelter.svg","svg/39_Shelter.svg","svg/40_Temperature.svg","svg/41_Time.svg","svg/42_Volcano_fumarole.svg","svg/43_Volcano_eruption.svg","svg/44_Volcano_ashes.svg","svg/45_Tsunami.svg","svg/46_Earthquake.svg","svg/47_Rainfall.svg","svg/48_Alluvium.svg"),
array("svg/49_Avalanche.svg","svg/51_Flood.svg","svg/52_Fire.svg","svg/53_Info_point.svg","svg/54_Not_allowed.svg","svg/57_Information.svg","svg/58_North_sign.svg","svg/60_Flagged_point.svg","svg/61_Wifi.svg","svg/62_@_internet.svg","svg/65_Radio_transmission.svg"),
array("svg/55_Messaging_oneway.svg","svg/56_Messaging_twoways.svg","svg/67_Contain_message.svg","svg/68_Warning_strip_1.svg","svg/69_Warning_strip_2.svg","svg/71_Arrow_ahead.svg","svg/72_Arrow_turn.svg","svg/73_Arrow_backward.svg","svg/91_Two_way_horizontal.svg","svg/92_Two_way_vertical.svg","svg/97_Contain_hexagon.svg")
);
?>
<div class="col-sm-12">
  <aside class="row">
    <div class="col-sm-12">
    </div>
  </aside>
</div><!--/col-sm-10-->
<div class="col-sm-12">
<section>
  <form method="post" action="post-form.php">
    <?php for ($n = 0; $n < $all = count ($este); $n++){?>
    <?php $x = rand(0,10);?>
    <div class="col-sm-6 col-md-4">
      <article>
      <div class="row">
      <div class="col-xs-12"><figure><img class="picto" src="<?php echo $este[$n][$x];?>"/></figure></div>
      <div class="col-xs-12">
        <div style="padding:1em .5em; font-size:100%;">
          <label for="Picto<?php print($n+1);?>" style="margin-right:1em;">Meaning | <span lang="es">Significado</span></label><br>
          <input type="hidden" name="ImagenPicto<?php print($n+1);?>" id="ImagenPicto<?php print($n+1);?>" value="<?php echo $este[$n][$x];?>">
          <input type="text" name="Picto<?php print($n+1);?>" id="Picto<?php print($n+1);?>" style="width:100%; height:2.25em; font-size:1.5em; line-height:1.5; color:gray;"/>
        </div>
      </div>
      </div>
      </article>
    </div><!--/col-sm-4-->
    <?php };?>

  <div class="col-sm-12">
    <div class="alert alert-success" role="alert" style="margin:.5em;">
      <div class="row">
      <div class="col-sm-12">
        <h4>Before you submit your answers, please complete the fields below<br>
          <span lang="es">Antes de enviar tus respuestas, por favor rellena los siguientes campos</span></h4>
      </div>
      <div class="col-sm-4">
        <label for="year">Year of birth <span lang="es"> Año de nacimiento</span></label><br>
        <input type="text" name="Year" id="Year" style="width:100%; height:2.25em; font-size:1.5em; line-height:1.5; color:gray;""/>
      </div>
      <div class="col-sm-4">
        <label for="Country">Residence country <span lang="es">País de residencia</span></label><br>
        <input type="text" name="Country" id="Country"  style="width:100%; height:2.25em; font-size:1.5em; line-height:1.5; color:gray;"/>
      </div>
      <div class="col-sm-4">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg" style="margin-top:1.3em; margin-left:1em;"/>
      </div>
      </div>
    </div>
  </div>
  </form>
  
</section>

</div><!--/col-->
</div><!--/row-->
</div><!--/container-->


<div class="container-flow">
  <div class="row">
    <div class="col-sm-12">
    <footer><p>Guemil Project by <a href="mailto:rramireo@uc.cl">Rodrigo Ramírez</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.</p></footer>
    </div><!--/col-sm-12-->
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
