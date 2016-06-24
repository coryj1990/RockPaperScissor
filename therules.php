<?php

function whowillwin($p1choice, $p2choice) {

	if ($p1choice == R) {
		if($p2choice == R){
			echo "YOU BOTH CHOSE ROCK!";}
		elseif($p2choice == S) {
			echo "PLAYER 1 WINS! ROCK BEATS SCISSORS!";}	
		elseif($p2choice == P) {
			echo "PLAYER 2 WINS! PAPER BEATS ROCK!";}
		
		;}

	if ($p1choice == S) {
		if($p2choice == S){
			echo "YOU BOTH CHOSE SCISSORS!";}
		elseif($p2choice == R) {
			echo "PLAYER 2 WINS! ROCK BEATS SCISSORS!";}	
		elseif($p2choice == P) {
			echo "PLAYER 1 WINS! SCISSORS BEATS PAPER!";}
		
		;}

	if ($p1choice == P) {
		if($p2choice == P){
			echo "YOU BOTH CHOSE PAPER!";}
		elseif($p2choice == S) {
			echo "PLAYER 2 WINS! SCISSORS BEATS PAPER!";}	
		elseif($p2choice == R) {
			echo "PLAYER 1 WINS! PAPER BEATS ROCK!";}
		
		;}

	}
 ?>





