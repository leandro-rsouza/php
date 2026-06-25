<?php
interface Controlador {
	public function ligar();
	public function desligar();
	public function play();
	public function pause();
	public function aumentarVol();
	public function menosVol();
	public function ligarMudo();
	public function desligarMudo();
	public function abrirMenu();
	public function fecharMenu();
}
?>