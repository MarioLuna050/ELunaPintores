@extends('layouts.master')

@section('header')
@stop
@section('navbar')
    @parent
@stop
@section('content')

    <body class="miguel" background="images\bedge.png">
    <a id="volver" href="{{action('EstructurasDeControl@inicio')}}"><img src="images\atras.png" alt=""width="60px"></a>
    <header>
        <h1>MIGUEL ANGEL</h1>
    </header>
    <main>
        <img id="perfil" src="images\miguelangel.jpg" alt="">
        <h4>Biografía</h4>
        <p>Miguel Ángel Bounarroti fue un escultor, pintor y arquitecto italiano de los siglos XV y XVI (nació el 6 de marzo de 1475 y murió el 18 de febrero de 1564) conocido principalmente por la escultura del «David» y la obra pictórica que recubre la bóveda de la Capilla Sixtina.
            Nació en Caprese, municipio italiano de la provincia de Arezzo, denominado actualmente Caprese Michelangelo en su honor.
            Comenzó su formación como pintor a los 12 años en el taller de la familia Ghirlandaio y un año más tarde se adentraría en el mundo de la escultura a través de Bertoldo di Giovanni, el cuál le introduciría en el influyente círculo de los Médici. Desde entonces desarrolló una fructífera vida artística entre Florencia y Roma, de cuyo amplio legado destacan dos grandes obras: El David y la bóveda de la Capilla Sixtina .
            Sus últimos años los dedicó a la arquitectura hasta que falleciera en Roma a los 88 años de edad.
        </p>
    </main>
    <br>
    <br>
    <br>
    <br>
    <img src="images\miguel1.jpg" alt="" align="left" width="450px">
    <h5>EL JUICIO FINAL (CAPILLA SIXTINA)</h5>
    <p>En 1535, el Papa Pablo III encargó al artista Miguel Ángel que pintara el fresco más grande jamás creado. El Pontífice le indicó el tema que debía tratar: El Juicio Final , inspirado en el Apocalipsis de San Juan. El tema estaba relacionado con lo que había sucedido en la Iglesia en los años precedentes: la Reforma Protestante y el saqueo de Roma
        Para lograr la tarea Miguel Ángel tuvo que pintar encima de otros frescos pintados por Peregrino y eso fue objeto de numerosas críticas. El resultado final se convertiría en una de las pinturas de la Capilla Sixtina más famosas de la historia
    </p>
    <br>
    <br>
    <img src="images\miguel2.jpg" alt="" align="right">
    <h5>LA CREACIÓN DE ADAN</h5>
    <p> Fue pintado en 1511, que corresponde al período del renacimiento italiano llamado Cinquecento.
        El tema central d la escena se inspira en el episodio de la creación del primer hombre descrito en el libro de Génesis del Antiguo Testamento, en la Biblia. Allí se relata el momento en que Yaveh llega a la Tierra para crear un ser a su imagen y semejanza.
    </p>
    <img id="normales" src="images\miguel3.jpg" alt="">
    <h5>SANTO ENTIERRO</h5>
    <p>Es un cuadro inacabado atribuido al pintor renacentista italiano Miguel Ángel. La datación es alrededor de 1500-1501.
        El centro del cuadro representa a Jesucristo llevado al sepulcro. El hombre con barba que está tras él es José de Arimatea, el hombre que dio su tumba para la sepultura de Cristo. La figura de la izquierda es probablemente san Juan, con una larga túnica roja, mientras que arrodillada a sus pies estaría María Magdalena.
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img id="normales1" src="images\miguel4.jpg" alt="">
    <h5>TONDO DONI</h5>
    <p>El Tondo Doni o Sagrada Familia resale al periodo en el cual Miguel Ángel regresó a Florencia después de su primera estancia en Roma
        Las figuras de María, José y el Niño se agrupan en un único volumen central en el que la rotación de la Virgen da a la composición un movimiento en espiral que posteriormente será usado por muchos artistas. En el fondo un grupo de jóvenes desnudos traen a la mente un tema clásico, que simboliza la humanidad pagana que aún desconoce la doctrina cristiana.
    </p>
    <br>
    <br>
    <br>
    <br>
    <img id="normales" src="images\miguel5.jpg" alt="">
    <h5>CAIDA DE FAETON</h5>
    <p>Miguel Ángel interpreta en este dibujo el mito de Faetón colocando en la parte superior de la composición a Júpiter lanzando el rayo, los caballos cayendo junto a Faetón en el centro mientras en la parte baja de la escena contemplamos a Erídamo tumbado junto a una vasija de la que brota agua y a las hermanas de Faetón, las Heliadas, que acudieron a llorar a su tumba y fueron convertidas en álamos en la orilla del río. La violencia y el movimiento se adueñan del episodio, manifestando Buonarroti su maestría en la interpretación del cuerpo humano desnudo y en la consecución del movimiento violento, consiguiendo con la caída de los caballos y del joven uno de los escorzos más sugerentes de la historia.</p>
@stop
@section('footer')
    @parent
@stop
