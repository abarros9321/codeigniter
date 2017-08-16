
    <?= form_open('/department/Actualizar/'.$id) ?>
    <?php
    $DEPT_ID = array(
        'name' => ''
    );
    $DEPT_NAME = array(
        'name' => 'DEPT_NAME',
        'placeholder' => 'Escriba el nombre del departamento',
        'value'=>$departamento->result()[0]->DEPT_NAME
    );
    $DEPT_NO = array(
        'name' => 'DEPT_NO',
        'placeholder' => 'Escriba el numero del departamento',
        'value'=>$departamento->result()[0]->DEPT_NO
    );
    $LOCATION = array(
        'name' => 'LOCATION',
        'placeholder' => 'Escriba la locacion del departamento',
        'value'=>$departamento->result()[0]->LOCATION
    );
    ?>
    <?= form_label('Nombre', 'DEPT_NAME') ?>
    <?= form_input($DEPT_NAME) ?>
    <br><br><br>
    <?= form_label('Numero', 'DEPT_NO') ?>
    <?= form_input($DEPT_NO) ?>
    <br><br><br>
    <?= form_label('Locacion', 'LOCATION') ?>
    <?= form_input($LOCATION) ?>
    <br><br><br>
    <?= form_submit('', 'Actualizar departamento') ?>
    <?= form_close() ?>
