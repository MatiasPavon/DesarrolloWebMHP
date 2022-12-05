<link rel="stylesheet" href="style.css">
<?php
    class Operaciones{
        private $a;
        private $b;
        private $c;

        function __construct($a, $b, $c){
            $this->a = $a;
            $this->b = $b;            
            $this->c = $c;
        }

        function calcularSuma(){
            $resultado = $this->a + $this->b + $this->c;
            return $resultado;
        }

        function calcularMayor(){
            if($this->a > $this->b && $this->a > $this->c){
                $mayor = $this->a;
            } else if($this->b > $this->a && $this->b > $this->c){
                $mayor = $this->b;
            } else{
                $mayor = $this->c;
            }

            return $mayor;
        }

        function mostrarResultados(){ ?>
        <div align="center">
            <h1>Tabla de Resultados</h1>
            <br>

            <table border="0" cellspacing="0">
                <tr class="bg-orange">
                    <th>Valor A</th>
                    <th>Valor B</th>
                    <th>Valor C</th>
                </tr>

                <tr>
                    <td><?php echo $this->a; ?></td>
                    <td><?php echo $this->b; ?></td>
                    <td><?php echo $this->c; ?></td>
                </tr>
            </table>

            <table border="0" cellspacing="0">
                <tr class="bg-orange">
                    <th>Suma: </th>
                    <td> <?php echo $this->calcularSuma(); ?></td>
                </tr>

                <tr class="bg-orange">
                    <th>Mayor: </th>
                    <td> <?php echo $this->calcularMayor(); ?></td>
                </tr>
            </table>
        </div>
        
        <?php } 
    }
?>