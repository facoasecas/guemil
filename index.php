<?php include("header.php");?>

<div class="col-sm-12">
  <aside class="row">
    <div class="col-sm-6">
      <h3>About Meaning Performance test<br><small>Methodological notes</small></h3>
      <p>The understanding of each icon has been tested through the question: What represent each icon? Being open answers, each one was then weighed according to an assessment table.</p>
      <p>According to international practices, an accepted icon for emergency context requires at least 83% of meaning performance.</p>
      <p>Icons below 83% of performance should be rethought, redesigned or discarded. Additionally, more than 5% in opposite meanings determines to discard and rethink the icon.</p>
    </div>
    <div class="col-sm-6">
      <span lang="es">
      <h3>Sobre el test de desempeño de significados<br><small>Notas metodológicas</small></h3>
      <p>La comprensión de cada icono ha sido testeado desde la pregunta: ¿Qué representa cada icono? Siendo respuestas abiertas, cada una ha sido ponderada según una tabla de evaluación.</p>
      <p>De acuerdo a prácticas internacionales, un icono aceptado para contextos de emergencia requiere un mínimo de 83% de desempeño en su significado.</p>
      <p>Se considera que los iconos bajo el 83% de desempeño debieran ser re–pensados, re–diseñados o descartados. Adicionalmente, más del 5% en significados opuestos determina descartar y repensar el icono.</p>
      </span>
    </div>

    <div class="col-sm-12">
<!--
      <dl class="dl-inline"><dt>Accepted</dt><dd>Meaning performance is accepted, icon could be used<br ><span lang="es">Desempeño de significado es aceptado, el icono podría ser aplicado</span></dd></dl>
      <dl><dt>Not accepted</dt><dd>Meaning performance is not accepted, icon should be redesigned<br><span lang="es">Desempeño de significado es no aceptado, el icono debe ser rediseñado</span></dd></dl>
      <dl><dt>Opposite</dt><dd>Opposite meaning performance, icon must to be discarded and rethought<br><span lang="es">Desempeño de significado opuesto, el icono debe ser descartado y replanteado</span></dd></dl>
-->
    <hr>
      <button type="button" class="btn btn-sm btn-default" id="all">All results</button>
      <button type="button" class="btn btn-sm btn-success" id="accepted">Accepted</button>
      <button type="button" class="btn btn-sm btn-danger" id="not-accepted">Not accepted</button>
      <hr>
    </div>
  </aside>
</div><!--/col-sm-10-->

<div class="col-sm-12">
  <section>
    <?php
    $json = file_get_contents('http://test.guemil.info/data.json');
    $json_data = json_decode($json,true);
    ?>
    <?php for ($a = 0; $a < $all = count($json_data['test']['pictogramas']); $a++) {?>
    <?php $q1=0; $q2=0; $q3=0; $q4=0; $q5=0; $q6=0; ?>
    <?php for ($c = 0; $c < $all = count($json_data['test']['pictogramas'][$a]['respuestas']); $c++) {?>
    <?php
    if (($json_data['test']['pictogramas'][$a]['respuestas'][$c]['puntaje']) == "1"){ $q1++; }
    if (($json_data['test']['pictogramas'][$a]['respuestas'][$c]['puntaje']) == "2"){ $q2++; }
    if (($json_data['test']['pictogramas'][$a]['respuestas'][$c]['puntaje']) == "3"){ $q3++; }
    if (($json_data['test']['pictogramas'][$a]['respuestas'][$c]['puntaje']) == "4"){ $q4++; }
    if (($json_data['test']['pictogramas'][$a]['respuestas'][$c]['puntaje']) == "5"){ $q5++; }
    if (($json_data['test']['pictogramas'][$a]['respuestas'][$c]['puntaje']) == "6"){ $q6++; }
    $desempeno= ($q1+$q2*0.75+$q3*0.5)*100/($q1+$q2+$q3+$q4+$q5+$q6);
    $opuesto = ($q5*100/count($json_data['test']['pictogramas'][$a]['respuestas']));
    };?>
<div class="col-sm-6 col-md-4 col-lg-3 <?php if ($desempeno >= "83"){ echo ('accepted'); } else{ echo ('not-accepted'); };?>">
  <article>
  <!--primer fila-->
  <div class="row">
  <div class="col-xs-6"><figure><img class="picto" src="<?php echo($json_data['test']['pictogramas'][$a]['imagen']);?>"/></figure></div>
  <div class="col-xs-6"><?php if ($opuesto >= "5"){ ;?><div class="circle"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div><?php };?><h3 class="<?php if ($desempeno >= "83"){ echo ('aceptable'); } else { echo ('inaceptable'); };?>"><?php echo (round($desempeno));?>%</h3><small>Performance <span lang="es">Desempeño</span></small></div>
  <div class="col-xs-12"><h2><?php echo($json_data['test']['pictogramas'][$a]['nombre']);?></h2><hr></div>
  <div class="col-xs-8"><p>Answers <span lang="es">Respuestas</span></p></div>
  <div class="col-xs-4"><p class="qrespuestas text-center"><a data-toggle="collapse" href="#collapse<?php echo $a?>" aria-expanded="false" aria-controls="collapseExample" class="cuenta-respuestas"><?echo (count($json_data['test']['pictogramas'][$a]['respuestas']))?></a></p></div>
  </div>
  <div class="row collapse" id="collapse<?php echo $a?>">
  <div class="col-xs-4 contador"><h5><?php echo ($q1);?></h5><p>Correct<br><span lang="es">Correcta</span></p></div>
  <div class="col-xs-4 contador"><h5><?php echo ($q2);?></h5><p>Almost correct<br><span lang="es">Casi correcta</span></p></div>
  <div class="col-xs-4 contador"><h5><?php echo ($q3);?></h5><p>Doubtful <br><span lang="es">Dudosa</span></p></div>
  <div class="col-xs-4 contador"><h5><?php echo ($q4);?></h5><p>Incorrect<br><span lang="es">Incorrecta</span></p></div>
  <div class="col-xs-4 contador"><h5><?php echo ($q5);?></h5><p>Opposite<br><span lang="es">Opuesto</span></p></div>
  <div class="col-xs-4 contador"><h5><?php echo ($q6);?></h5><p>No answer<br><span lang="es">Sin respuesta</span></p></div>
  </div>
  </article>
</div><!--/col-sm-4-->
<?php };?><!--cierre el for con $a-->

<div class="clearfix"></div>
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
<script>
$(document).ready(function(){
    $("#accepted").click(function(){
        $(".accepted").show(500);
        $(".not-accepted").hide(500);
        $(".opposite").hide(500);
    });
    $("#not-accepted").click(function(){
      $(".accepted").hide(500);
      $(".not-accepted").show(500);
      $(".opposite").hide(500);
    });
    $("#all").click(function(){
      $(".accepted").show(500);
      $(".not-accepted").show(500);
      $(".opposite").show(500);
    });
});
</script>
</body>
</html>
