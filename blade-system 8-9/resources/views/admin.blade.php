<?php  //   واكتب الكود بتاعى هنا  <?php   >? لازم افتح تاج  view جوه صفحة ال  php عشان اكتب كود 
 

 
if ($test=='admin') {
    echo 'you ara admin';
   }
else {
        echo 'you are user';
}

?>
<br>
{{-- ___________________________________________________________________________________ --}}
{{-- (بيعرفك اذاى تعمل معادلات كتير اووى هنا ) مهم جدا جدا جدا جدا  --}}
{{-- https://laravel.com/docs/11.x/blade --}}
{{-- ___________________________________________________________________________________ --}}

@if ($test == 1)
    I have one record=1
@elseif ($test > 1)
    I have multiple records>1
@else
    error
@endif