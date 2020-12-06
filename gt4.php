<?php
function gt($n) {
    if ($n < 1)
        return 0;
    if ($n < 2)
        return 1;
     return $n * gt($n - 1);
}
//nếu n chẵn thì sẽ bằng gt chẵn trên gt lẽ còn n lẽ thì ngược lại.
function tinh_gt($n) {
    if ($n < 1)
        return 0;
    if ($n < 2)
        return 1;
    return gt($n) / tinh_gt($n - 1);
}
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10); 
?>
