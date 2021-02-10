    <h2 class="h1 mb-3 alert-secondary  d-block  text-center m-2">Contato</h2>

    <main class="row container-fluid m-0">
        <form class="row col-md form-group m-0 mb-3 border border-dark p-3" action="?pg=contato-site" method="POST">
            <div class="col-md-6">
                <label class="d-block font-weight-bolder" for="nombre">Nome:</label>
                <input class="w-100 bg-light" type="text" name="nome" id="nombre" placeholder="Nombre" />
            </div>
           


            <div class="col-md-6">
                <p class="font-weight-bolder">Genero:</p>
                <div class="form-check form-check-inline">
                    <label class="m-0 mr-2" for="hombre">Homem</label>
                    <input type="radio" name="id" id="hombre" />

                    <label class="m-0 mr-2 ml-2" for="mujer">Mulher</label>
                    <input type="radio" name="id" id="mujer" />

                    <label class="m-0 mr-2 ml-2" for="otro">Outro</label>
                    <input type="radio" name="id" id="otro" />
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
                <textarea class="w-100 bg-light" name="msg" id="solicitud"></textarea>
            </div>
            <input class="btn btn-dark font-weight-bolder m-auto" type="submit" value="Enviar" class="boton" />
        </form>

        <div class="col-md m-0 mb-3 p-0 pl-md-2">
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d987.8738529251527!2d-34.89042294068167!3d-7.947646439775531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssenac!5e0!3m2!1spt-BR!2sbr!4v1612879495815!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </main>