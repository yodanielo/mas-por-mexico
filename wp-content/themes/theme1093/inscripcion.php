<?php
function enviarmail($de,$para,$asunto,$mensaje) {
    $eol="\r\n";
    $now = mktime().".".md5(rand(1000,9999));
    $headers = "From:".$de.$eol."To:".$para.$eol;
    $headers .= 'Return-Path: '.$de.'<'.$de.'>'.$eol;
    $headers .= "Message-ID: <".$now." TheSystem@".$_SERVER['SERVER_NAME'].">".$eol;
    $headers .= "X-Mailer: PHP v".phpversion().$eol;
    $headers .= "Content-Type: text/html; charset=iso-8859-1".$eol;
    $resultado=mail($para, $asunto, $mensaje, $headers);
    return $resultado;
}
if ($_POST["field1"]) {
    $x='
    <tr><td colspan="2">Datos Personales</td></tr>
    <tr><th>Apellidos</th>
        <td>'.$_POST["field1"].'</td></tr>
    <tr><th>Nombres</th>
        <td>'.$_POST["field2"].'</td></tr>
    <tr><th>Fecha de Nacimiento</th>
        <td>'.$_POST["field3"].'</td></tr>
    <tr><th>Dirección y Número</th>
        <td>'.$_POST["field4"].'</td></tr>
    <tr><th>Ciudad</th>
        <td>'.$_POST["field5"].'</td></tr>
    <tr><th>País</th>
        <td>'.$_POST["field6"].'</td></tr>
    <tr><th>Código de Población</th>
        <td>'.$_POST["field7"].'</td></tr>
    <tr><th>Teléfono</th>
        <td>'.$_POST["field8"].'</td></tr>
    <tr><th>E-mail</th>
     <td>'.$_POST["field9"].'</td></tr>
    <tr><td colspan="2">Datos Profesionales</td></tr>

    <tr><th>Profesión/ Ocupación</th>
        <td>'.$_POST["field10"].'</td></tr>
    <tr><th>Nombre de Empresa</th>
        <td>'.$_POST["field11"].'</td></tr>
    <tr><th>Dirección y Número</th>
        <td>'.$_POST["field12"].'</td></tr>
    <tr><th>Teléfonos</th>
        <td>'.$_POST["field13"].'</td></tr><tr><td colspan="2">Ciclo Más por Mexico</td></tr>';
    if($_POST['field14']){$x.= '<tr><td colspan="2">El Turismo como Política de Desarrollo sustentable para México</td></tr>';}
    if($_POST['field15']){$x.= '<tr><td colspan="2">Reforma Energética: Una cuenta pendiente para México</td></tr>';}
    if($_POST['field16']){$x.= '<tr><td colspan="2">Reforma Laboral ¿Cómo mejorar la competitividad?</td></tr>';}
    if($_POST['field17']){$x.= '<tr><td colspan="2">México más joven que nunca: el boom demográfico de la juventud</td></tr>';}
    if($_POST['field18']){$x.= '<tr><td colspan="2">Economía Global: los desafíos para México</td></tr>';}
    if($_POST['field19']){$x.= '<tr><td colspan="2">Educación, Ciencia e Innovación: Ejes claves del capital Humano</td></tr>';}
    if($_POST['field20']){$x.= '<tr><td colspan="2">El Imperio de las TIC y la necesidad de su acceso universal</td></tr>';}
    if($_POST['field21']){$x.= '<tr><td colspan="2">Nuevos Modelos sociales: Como combatir la delincuencia y la inseguridad en México</td></tr>';}
    if($_POST['field22']){$x.= '<tr><td colspan="2">El Emponderamiento de la Mujer: Claves del desarrollo</td></tr>';}
    if($_POST['field23']){$x.= '<tr><td colspan="2">Cambio Climático y Desarrollo sostenible: México responsable</td></tr>';}
    $x=utf8_encode($x);
    //enviando respuesta
    enviarmail(get_option("admin_email"), get_option("admin_email"), "Mas por Mexico", $x);
    echo '<div class="subtitleins" style="text-align:center">Su inscripción fue hecha con éxito.</div>';
}
?>
<div id="inscontent" >
    <form action="" method="post" name="frmins" id="frmins">
        <div class="subtitleins">Datos Personales</div>
        <label class="lblins" for="field1">Apellidos</label>
        <input class="txtins required" rel="Apellidos" type="text" name="field1" id="field1"/><span>*</span>

        <label class="lblins" for="field2">Nombres</label>
        <input class="txtins required" rel="Nombres" type="text" name="field2" id="field2"/><span>*</span>

        <label class="lblins" for="field3">Fecha de Nacimiento</label>
        <input class="txtins required" rel="Fecha de Nacimiento" type="text" name="field3" id="field3"/><span>*</span>

        <label class="lblins" for="field4">Dirección y Número</label>
        <input class="txtins required" rel="Dirección y Número" type="text" name="field4" id="field4"/><span>*</span>

        <label class="lblins" for="field5">Ciudad</label>
        <input class="txtins required" rel="Ciudad" type="text" name="field5" id="field5"/><span>*</span>

        <label class="lblins" for="field6">País</label>
        <input class="txtins required" rel="País" type="text" name="field6" id="field6"/><span>*</span>

        <label class="lblins" for="field7">Código de Población</label>
        <input class="txtins required" rel="Código de Población" type="text" name="field7" id="field7"/><span>*</span>

        <label class="lblins" for="field8">Teléfono</label>
        <input class="txtins required" rel="Teléfono" type="text" name="field8" id="field8"/><span>*</span>

        <label class="lblins" for="field9">E-mail</label>
        <input class="txtins required email" rel="E-mail" type="text" name="field9" id="field9"/><span>*</span>

        <div class="subtitleins">Datos Profesionales</div>

        <label class="lblins" for="field10">Profesión/ Ocupación</label>
        <input class="txtins required" rel="Profesión/ Ocupación" type="text" name="field10" id="field10"/><span>*</span>
        <label class="lblins" for="field11">Nombre de Empresa</label>
        <input class="txtins required" rel="Nombre de Empresa" type="text" name="field11" id="field11"/><span>*</span>
        <label class="lblins" for="field12">Dirección y Número</label>
        <input class="txtins required" rel="Dirección y Número" type="text" name="field12" id="field12"/><span>*</span>
        <label class="lblins" for="field13">Teléfonos</label>
        <input class="txtins required" rel="Teléfonos" type="text" name="field13" id="field13"/><span>*</span>

        <div class="subtitleins">Ciclo Más por Mexico</div>

        <label class="lblcheckins" for="field14"><input type="checkbox" name="field14" id="field14" />El Turismo como Política de Desarrollo sustentable para México.</label>
        <label class="lblcheckins" for="field15"><input type="checkbox" name="field15" id="field15" />Reforma Energética: Una cuenta pendiente para México.</label>
        <label class="lblcheckins" for="field16"><input type="checkbox" name="field16" id="field16" />Reforma Laboral ¿Cómo mejorar la competitividad?.</label>
        <label class="lblcheckins" for="field17"><input type="checkbox" name="field17" id="field17" />México más joven que nunca: el boom demográfico de la juventud.</label>
        <label class="lblcheckins" for="field18"><input type="checkbox" name="field18" id="field18" />Economía Global: los desafíos para México.</label>
        <label class="lblcheckins" for="field19"><input type="checkbox" name="field19" id="field19" />Educación, Ciencia e Innovación: Ejes claves del capital Human.o</label>
        <label class="lblcheckins" for="field20"><input type="checkbox" name="field20" id="field20" />El Imperio de las TIC y la necesidad de su acceso universal.</label>
        <label class="lblcheckins" for="field21"><input type="checkbox" name="field21" id="field21" />Nuevos Modelos sociales: Como combatir la delincuencia y la inseguridad en México.</label>
        <label class="lblcheckins" for="field22"><input type="checkbox" name="field22" id="field22" />El Emponderamiento de la Mujer: Claves del desarrollo.</label>
        <label class="lblcheckins" for="field23"><input type="checkbox" name="field23" id="field23" />Cambio Climático y Desarrollo sostenible: México responsable.</label>

        <input type="submit" id="submitins" value="Enviar"/>
    </form>
    <script type="text/javascript" src="<?php bloginfo("template_url") ?>/js/plugins.js"></script>
    <script type="text/javascript">
        $("#frmins").formValidator(function(a){
            if(a!=""){
                alert(a);
            }
        }, {
            "eol":"\n"
        });
    </script>
</div>