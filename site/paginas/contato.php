    <h2 class="h1 mb-3 bg-secondary text-white text-center">Contato</h2>

    <main class="row container-fluid m-0">
        <form class="row col-md form-group m-0 mb-3 border border-dark p-3" action="">
            <div class="col-md-6">
                <label class="d-block font-weight-bolder" for="nombre">Nome:</label>
                <input class="w-100 bg-light" type="text" name="nombre" id="nombre" placeholder="Nombre" />
            </div>
           


            <div class="col-md-6">
                <p class="font-weight-bolder">Genero:</p>
                <div class="form-check form-check-inline">
                    <label class="m-0 mr-2" for="hombre">Homem</label>
                    <input type="radio" name="genero" id="hombre" />

                    <label class="m-0 mr-2 ml-2" for="mujer">Mulher</label>
                    <input type="radio" name="genero" id="mujer" />

                    <label class="m-0 mr-2 ml-2" for="otro">Outro</label>
                    <input type="radio" name="genero" id="otro" />
                </div>
            </div>

            <div class="col-md">
                <label class="d-block font-weight-bolder" for="opciones">Tipo de consulta</label>
                <select class="w-100 bg-light" name="opciones" id="opciones">
              <option value="" disabled selected>-- Selecione -- </option>
              <option value="Duvidas">Duvida</option>
              <option value="reclamação">Reclamação</option>
              <option value="ajuda">Ajuda</option>
            </select>
            </div>
            </div>

            <div class="col-12">
                <label class="d-block font-weight-bolder" for="solicitud">Messangem:</label>
                <textarea class="w-100 bg-light" name="solicitud " id="solicitud"></textarea>
            </div>
            <input class="btn btn-dark font-weight-bolder m-auto" type="submit" value="Enviar" class="boton" />
        </form>

        <div class="col-md m-0 mb-3 p-0 pl-md-2">
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4700.674996438752!2d-72.25707312531969!3d7.813018085746683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1596996700500!5m2!1ses!2sve"></iframe>
        </div>
    </main>