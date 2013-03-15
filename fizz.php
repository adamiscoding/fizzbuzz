<?php
for ($i = 1; $i <= 100; $i++) {
	if ($i%15 == 0) printf('fizbuzz ');
	elseif ($i%3 == 0) printf('fizz ');
	elseif ($i%5 == 0) printf('buzz ');
}