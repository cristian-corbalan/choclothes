<x-layout>
    <x-slot:title>Contacto</x-slot:title>

    <h1>Contáctanos</h1>



    <section class="container" id="contacto">



        <div class="row g-3">
            <div class="col-lg-6">

                <form action="#">
                      <div class="">
                          <label class="col-form-label " for="nombre">Nombre</label>
                          <input class="form-control" type="text" id="nombre" name="nombre">
                      </div>
                      <div class="">
                          <label class="col-form-label " for="email">email</label>
                          <input class="form-control" type="text" id="email" name="email">
                      </div>
                      <div class="">
                          <label class="col-form-label " for="telefono">Telefono</label>
                          <input class="form-control" type="text" id="telefono" name="Telefono">
                      </div>
                      <div class="">
                          <lebel class="col-form-label ">Mensaje</lebel>
                          <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                      </div>
                      <button type="button" class="botones_all py-2 px-4 mt-4">Enviar</button>
                </form>

            </div>

                <div class="col-lg-6">
                    <iframe class="h-75 w-75 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.992149950617!2d-58.4002487841787!3d-34.60436001166923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaea670d4e67%3A0x2198c954311ad6d9!2sDa%20Vinci%20%E2%80%A2%20Primera%20Escuela%20de%20Arte%20Multimedial!5e0!3m2!1ses!2sar!4v1658622545441!5m2!1ses!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>



        </div>

    </section>

</x-layout>
