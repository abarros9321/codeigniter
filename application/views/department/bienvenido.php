
    <table class="table table-condensed table-hover">
        <thead>
            <tr> 
                <th>#</th>
                <th>Nombre</th> 
                <th>Numero</th> 
                <th>Locacion</th>
                <th>Acciones</th>
            </tr> 
        </thead>
        <tbody>
        <?php 
        if($cursos){
        foreach ($cursos->result() as $curso) { ?>
        
            <tr >
                <td><?= $curso->DEPT_ID ?></td>
                <td><?= $curso->DEPT_NAME ?></td>
                <td><?= $curso->DEPT_NO ?></td>
                <td><?= $curso->LOCATION ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a type="button" class="btn btn-success" aria-label="Left Align" href="<?php echo site_url('department/index/'.$curso->DEPT_ID) ?>">
                            <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        </a>
                        <a type="button" class="btn btn-warning" aria-label="Left Align">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </a>
                        <a type="button" class="btn btn-danger" aria-label="Left Align">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </div>
                </td>
            </tr>
        <?php }
         ?>
            </tbody>
            <?php 
        }else{
            echo'<div class="alert alert-danger" role="alert"><p>Error el dato que busca no existe</p></div>';
        } ?>
</table>

