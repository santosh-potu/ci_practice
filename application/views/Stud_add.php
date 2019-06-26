<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Students Example</title>
    </head>
    <body>
        <?php
            echo form_open('Stud_controller/add_student');
            echo form_label('Roll No');
            echo form_input(['id'=>'roll_no','name'=>'roll_no']);
            echo "<br/>";
            echo form_label('Name');
            echo form_input(['id'=>'name','name'=>'name']);
            echo "<br/>";
            echo form_submit(['id'=>'Submit','value'=>'Submit']);
            echo form_close();
        ?>
    </body>
</html>