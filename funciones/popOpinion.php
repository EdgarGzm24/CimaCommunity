<form method="POST" action="funciones/editarOpinion.php">
    <input type="hidden" name="id" value="<?php echo $row['idopiniones']?>">
    <div class="modal fade" id="exampleModal<?php echo $row['idopiniones']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">            
                <div class="modal-body">
                    <div class="publish_textarea">                        
                        <textarea type="text" name="titulo" placeholder="Titulo"  maxlength="30" style="resize: none;"> <?php echo $row['titulo']?></textarea>                            
                    </div>
                    <div class="publish_textarea">
                        <textarea type="text" name="des" placeholder="Opinión" maxlength="200" style="resize: none;"><?php echo $row['descripcion_opinion']?></textarea>
                    </div>                   
                </div>

                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">salvar cambios</button>
                </div>
            </div>
        </div>
    </div>
</form>