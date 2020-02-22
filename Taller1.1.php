<?php
echo("Taller 1 Merilian Mejia Palacio <br>");
echo("Punto 1<br>");

$numero1=40;
$numero2=50;


$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo("<br>La suma de:".$numero1."+".$numero2."=".$suma);

echo("<br>La resta de:".$numero1."-".$numero2."=".$resta);

echo("<br>La Multiplicación de:".$numero1."*".$numero2."=".$multiplicacion); 

echo("<br>La división de:".$numero1."/".$numero2."=".$division);


echo("pregunta 2 <br>");

$peso=85;
$altura=1.75;
$imc=$peso/($altura*$altura);

if(imc<=18,4)
{
    echo("insuficiente peso:");
}
else
{
    if(imc <=18,5 && imc<=24,9)
    {
        escho("peso normal <br>");
    }
    else
    {
        if(imc <=25 &&  imc <=29,9 )
        {
            echo("usted tiene sobrepeso <br>");
        }
        else
        {
            if(imc <=30 && imc<=34,9 )
            {
                escho("usted padece de obesidad 1<br>");
            }
            else
            {
                if(imc <= 35 && imc<=39,9)
                {
                    echo("usted padece de obesidad nivel 2 <br>");
                }
                else
                {
                    if(imc>=40 )
                    {
                        echo("usted tiene obesidad nivel 3 <br>");
                    }
                }
            }
        
        }
    } 
}




?>