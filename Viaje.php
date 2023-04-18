<?php

/**
 * Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero 
 * de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. 
 * También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase 
 * ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer 
 * referencia al responsable de realizar el viaje.
 * 
 * Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar
 * la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar
 * que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
 */


class Viaje{
    //Atributos
    private $codigoViaje;
    private $destino;
    private $cantMaxPasajeros;
    private $arrayPasajeros;
    private $objResponsableV;

    //Metodo constructor
    public function __construct($codigoViaje, $destino, $cantMaxPasajeros, $arrayPasajeros, $objResponsableV){
        $this->codigoViaje = $codigoViaje;
        $this->destino = $destino;
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->arrayPasajeros = $arrayPasajeros ;
        $this->objResponsableV = $objResponsableV;
    }

    //Metodos Get
    public function getCodigoViaje(){
        return $this->codigoViaje;
    } 

    public function getDestino(){
        return $this->destino;
    }

    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }

    public function getArrayPasajeros(){
        return $this->arrayPasajeros;
    }

    public function getResponsableV(){
        return $this->objResponsableV;
    }

    //Metodos Set
    public function setCodigoViaje($codigoViaje){
        $this->codigoViaje = $codigoViaje;
    }

    public function setDestino($destino){
        $this->destino = $destino;
    }

    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }

    public function setArrayPasajeros($arrayPasajeros){
        $this->arrayPasajeros = $arrayPasajeros;
    }

    public function setResponsableV($objResponsableV){
        $this->objResponsableV = $objResponsableV;
    }

    //***************** FUNCIONES *****************

    /**
     * Funcion para agregar pasajeros
     * @param Array $nuevoPasajero
     * @return Array 
     */
    public function agregarPasajero($nuevoPasajero){
        $arrayPasajeros = [];
        $arrayPasajeros = $this->getArrayPasajeros();
        //arra_push inserta uno o mas elementos al final de un array
        array_push($arrayPasajeros, $nuevoPasajero);
        $this->setArrayPasajeros($arrayPasajeros);
    }

    /**
     * Busca la posicion del dni del pasajero
     * @param Int $dni
     * @return Int
     */
    public function buscarIndicePasajero($dni){
        $i=0;
        $indice = -1;
        $bandera = true;
        while ($i < count($this->arrayPasajeros) && $bandera) {
            if ($this->arrayPasajeros[$i]['dni'] == $dni) {
                $indice = $i;
                $bandera = false;
            }
            $i++;
        }
        return $indice;
    }

    /**
     * Modifica los datos de los pasajeros
     * @param Int $indice
     * @param Array $arrayPasajeros
     * @return Array 
     */
    public function modificarDatosPasajeros($indice, $nombreNuevo, $apellidoNuevo ){
        $unPasajero = $this->getArrayPasajeros();
        $unPasajero = $this->arrayPasajeros[$indice]['nombre'] = $nombreNuevo;
        $unPasajero = $this->arrayPasajeros[$indice]['apellido'] = $apellidoNuevo;
        $this->setArrayPasajeros($unPasajero);
    }


    /**
     * Metodo que muestra la cantidad de lugares disponibles
     * @return Int
     */
    public function cantLugaresDisponibles(){
        $lugarDisponible = $this->getCantMaxPasajeros() - count($this->arrayPasajeros);
        return $lugarDisponible;
    }


    //Metodo toString
    public function __toString()
    {
        $viaje = $this->getDestino();
        $codigo = $this->getCodigoViaje();
        $capacidadViaje = $this->getCantMaxPasajeros();
        $totalPasajeros = $this->getArrayPasajeros();
        $cadena = "El codigo de viaje es: " . $codigo . "\n".
        "El destino es del viaje es: " . $viaje . "\n" . 
        "La capacidad maxima de pasajeros es: " . $capacidadViaje . "\n" .
        "La cantidad de pasajeros a bordo es: " . count($totalPasajeros) . "\n" ;
        
        return $cadena;
    }


}

?>