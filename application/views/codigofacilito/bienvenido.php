

<body>
    <table class="table table-condensed table-hover">
        <thead>
            <tr> 
                <th>#</th>
                <th>Nombre</th> 
                <th>Numero</th> 
                <th>Locacion</th> 
            </tr> 
        </thead>
        <tbody>
        <?php foreach ($cursos->result() as $curso) { ?>
        
            <tr>
                <td><?= $curso->DEPT_ID ?></td>
                <td><?= $curso->DEPT_NAME ?></td>
                <td><?= $curso->DEPT_NO ?></td>
                <td><?= $curso->LOCATION ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-warning" aria-label="Left Align">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-danger" aria-label="Left Align">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </div>
                </td>
            </tr>
    <?php } ?>
            </tbody>
</table>

</body>
</html>
