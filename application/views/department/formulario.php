

    <?= form_open('/department/recibirdatos') ?>
    <?php
    $DEPT_ID = array(
        'name' => ''
    );
    $DEPT_NAME = array(
        'name' => 'DEPT_NAME',
        'placeholder' => 'Escriba el nombre del departamento'
    );
    $DEPT_NO = array(
        'name' => 'DEPT_NO',
        'placeholder' => 'Escriba el numero del departamento'
    );
    $LOCATION = array(
        'name' => 'LOCATION',
        'placeholder' => 'Escriba la locacion del departamento'
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
    <?= form_submit('', 'Subir departamento') ?>
    <?= form_close() ?>
</body>
</html>
