<?php

    echo "<strong>Grupo 1</strong><br><br>";
    echo "<strong>Exercicio 1</strong><br><br>";

    class Pessoa {
        private $nome;
        private $idade;
        public function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;}
        public function apresentar() {
            echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.<br>";}
    }
    $p1 = new Pessoa("Pedro Compra Carro", 20);
    $p2 = new Pessoa("Carlota de Oliveira", 19);
    $p1->apresentar();
    $p2->apresentar();

    echo "<br><strong>Exercicio 2</strong><br><br>";

    class Retangulo {
        private $largura;
        private $altura;
        public function __construct($largura,$altura){
            $this->largura = $largura;
            $this->altura = $altura;}
        public function calcularArea(){
            return 2*($this->largura * $this->altura);
        }
        public function calcularPerimetro() {
       return 2*($this->largura + $this->altura);
    }
    }

    $retangulo = new Retangulo(10, 20);
    echo "Área do retângulo: " . $retangulo->calcularArea() . "<br>";
    echo "Perímetro do retângulo: " . $retangulo->calcularPerimetro() . "<br>";

    echo "<br><strong>Exercicio 3</strong><br><br>";

    class Aluno {
        private $nome;
        private $numero;
        private $nota1;
        private $nota2;
        private $nota3;
        function __construct($nome, $numero, $nota1, $nota2, $nota3){
        $this->nome= $nome;
        $this->numero= $numero;
        $this->nota1= $nota1;
        $this->nota2= $nota2;
        $this->nota3= $nota3;
    }
    public function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }
    public function situacao(){
        return $this->calcularMedia() >= 10 ? "Aprovado" : "Reprovado";
    }
    public function apresentar() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Número: " . $this->numero . "<br>";
        echo "Média: " . $this->calcularMedia() . "<br>";
        echo "Situação: " . $this->situacao() . "<br><br>";
    }
}

    $aluno1 = new Aluno("Miguel", 68364, 12, 15, 9);
    $aluno2 = new Aluno("Edgar", 68787, 2, 1, 7);
    $aluno3 = new Aluno("Pedro", 68564, 12, 20, 20);
    $aluno1->apresentar();
    $aluno2->apresentar();
    $aluno3->apresentar();
?>