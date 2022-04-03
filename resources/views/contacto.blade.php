<h1>Hello world</h1>
<h2>Nombre {{$nombre}}</h2>
<h2>edad {{$edad}}</h2>




{{-- variables ternarias sirve para condicionar ejemplo --}} 
<?php /* {{isset($edad) && !is_null($edad)?$edad:''}} */?>

<?php /* para hacer los if en html es :
@if(!is_null($edad))
    no existe la variable edad
@else
    si existe edad y es {{$edad}}
@endif */?>

<?php /* PARA HACER EL CICLO FOR ES:
@for($i=1; $i <= 10; $i++)
    {{ $i }}
@endfor */?>

<?php /* para hacer el ciclo while es:
<?php a=1; ?>
@while($a<=7)
    <?php $a++; ?>
@endwhile */?>





<?php /*para crear un controlador se realiza por el git bash
php artisan make:controller --aqui va el nombre que desea */?>


<h1>listado de verduras</h1>
    
    @foreach($verduras as $verdura)
        <p>{{ $verdura }}</p>
    @endforeach