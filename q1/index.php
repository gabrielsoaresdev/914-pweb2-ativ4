<h5>STRCMP</h5>

<p>
    A função strcmp(string1, string2) recebe duas strings como parâmetro, e retorna um inteiro que pode ser:
</p>

<ul>
    <li>0 - string1 e string2 são iguais</li>
    <li>Valor maior que 0 - string1 é maior que a string2</li>
    <li>Valor menor que 0 - string2 é maior que a string1</li>
</ul>

<div>
Ex: </br>

    <code>echo strcmp("Gabriel", "Gabriel"); #RETORNA 0, pois sao iguais</code><br>
    <code>echo strcmp("Gabriel", "Casa"); #RETORNA número maior que 0, pois a string1 (Gabriel) é maior;</code><br>
    <code>echo strcmp("Gabriel", "Gabriela"); #RETORNA númerro menor que 0;</code><br>

    <div style="background-color: #CDCDCD;">
        Saída:<br>
        <?php echo strcmp("Gabriel", "Gabriel"); ?><br>
        <?php echo strcmp("Gabriel", "Casa"); ?><br>
        <?php echo strcmp("Gabriel", "Gabriela");?><br>
    </div>
</div>


<h5>OPERADOR ==</h5>
<p>
    O operador compara dois valores, "retornando" um valor 'true' para igual ou 'false' para diferentes.
    <br>Ex:
    <br><code>echo (5 == "5" ? "São iguais! (TRUE)" : "São diferentes! (FALSE)");</code>
    <div style="background-color: #CDCDCD;">
        Saída:<br>
        <?php echo (5 == "5" ? "São iguais! (TRUE)" : "São diferentes! (FALSE)");?>
    </div>
</p>


<h5>OPERADOR ===</h5>
<p>O operador compara o valor e tipo de dois "termos", "retornando" um valor 'true' para igual ou 'false' para diferentes.
    <br>Ex:
    <br><code>echo (5 === "5" ? "São idênticos! (TRUE)" : "São diferentes! (FALSE)");</code>
    <div style="background-color: #CDCDCD;">
        Saída:<br>
        <?php echo (5 === "5" ? "São idênticos! (TRUE)" : "São diferentes! (FALSE)");?>
    </div>
</p>
